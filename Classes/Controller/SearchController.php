<?php
namespace Eike\Yacy\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Eike\Yacy\Domain\Repository\SearchRepositoryInterface;
use TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use Eike\Yacy\Domain\Model\Demand;
use Eike\Yacy\Factory\SearchRepositoryFactory;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2018 Eike Starkmann <eike.starkmann@posteo.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * SearchController
 */
class SearchController extends ActionController
{

    /**
     * searchResultRepository
     *
     * @var SearchRepositoryInterface
     */
    protected $searchRepository = null;

    /**
     */
    public function initializeSearchAction(): void
    {
        $itemDemandConfiguration = $this->arguments['demand']->getPropertyMappingConfiguration();
        $itemDemandConfiguration->allowAllProperties();
        $itemDemandConfiguration
        ->setTypeConverterOption(
                'TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter',
                PersistentObjectConverter::CONFIGURATION_CREATION_ALLOWED,
                true
        );
    }

    /**
     * action index
     */
    public function indexAction(): ResponseInterface
    {
        /* @var $demand \Eike\Yacy\Domain\Model\Demand */

        $demand = GeneralUtility::makeInstance (Demand::class);

        if ($this->settings['domain']&&$this->settings['port']) {
            $demand->setDomain($this->settings['domain']);
            $demand->setPort($this->settings['port']);
            $demand->setInterface($this->settings['interface']);
            $demand->setProtocol($this->settings['protocol']);
        }
        if ($this->settings['resultPage']) {
            $demand->setResultPage($this->settings['resultPage']);
        }
        $this->view->assign('demand', $demand);
        $this->view->assign('searchConfiguration', json_encode($this->settings));
        return $this->htmlResponse();

    }

    /**
     * Search Action
     * @param Demand $demand
     * @param int $page
     */
    public function searchAction(Demand $demand, $page = 1): ResponseInterface
    {
        if ($this->settings['domain']&&$this->settings['port']) {
            $demand->setDomain($this->settings['domain']);
            $demand->setPort($this->settings['port']);
            $demand->setInterface($this->settings['interface']);
            $demand->setProtocol($this->settings['protocol']);
        }
        /** @var SearchRepositoryFactory $searchRepositoryFactory */
        $searchRepositoryFactory = GeneralUtility::makeInstance(SearchRepositoryFactory::class);
        $this->searchRepository = $searchRepositoryFactory->createSearchRepository($demand->getInterface());

        $demand->setMaximumRecords($this->settings['itemsPerPage']);

        $demand->setStartRecord($demand->getMaximumRecords() * ($page - 1));

        if ($this->settings['collection'] !== '' && strpos($demand->getQuery(), 'collection') === false) {
            $demand->setQuery($demand->getQuery() . '+collection' . ':' . $this->settings['collection']);
        }

        $extensionConfiguration = GeneralUtility::makeInstance(ExtensionConfiguration::class)
            ->get('yacy');
        $result = $this->searchRepository->findDemanded($demand, $page, $extensionConfiguration['debug']);

        $pagination = $this->buildPagination($result['totalResults'], $demand->getMaximumRecords(), $page);

        if ($extensionConfiguration['debug'] === '1') {
            $this->view->assign('query', $demand->getRequestUrl());
            $this->view->assign('debug', 1);
            //DebuggerUtility::var_dump($demand,'Demand');
            //DebuggerUtility::var_dump($result,'Result');
        }
        $this->view->assign('pagination', $pagination);
        $this->view->assign('demand', $demand);
        $this->view->assign('results', $result['items']);
        $this->view->assign('resultsCount', $result['totalResults']);
        $this->view->assign('navigation', $result['navigation']);
        $this->view->assign('searchConfiguration', json_encode($this->settings));
        return $this->htmlResponse();
    }

    /**
     * @param $resultsCount
     * @param int $itemsPerPage
     * @param int $page
     * @return array
     */
    protected function buildPagination($resultsCount, $itemsPerPage = 10, $page = 1)
    {
        $minPagination = 0;
        $maxPagination = 0;
        if (!($resultsCount <= (int)$itemsPerPage)) {
            //build the pagination

            //build paginator
            $pages = ceil($resultsCount / $itemsPerPage);
            //We limit the pagination menu to 11 pages
            //Case I: the calculatet pages are below 10
            if ($pages <= 10) {
                $maxPagination = $pages;
            }
            //Case II: the calculated pages are more than 10
            if ($pages > 10) {
                $maxPagination = $page + 5;
                if ($maxPagination > $pages) {
                    $maxPagination = $pages;
                }
                $minPagination = $maxPagination -11;
                if ($minPagination <1) {
                    $minPagination = 1;
                    $maxPagination = 11;
                }
            }
            //Now we bild the page navigation
            for ($i = $minPagination; $i <= $maxPagination; $i++) {
                $pagination['pages'][$i]['text'] = $i;
            }
            //Build next / prev links
            if ($page >1) {
                $pagination['prev'] = $page -1;
            }
            if ($page < $pages) {
                $pagination['next'] = $page +1;
            }
            //build the firstpage / lastPage links
            if ($minPagination > 1) {
                $pagination['first'] = 1;
            }
            if ($maxPagination < $pages) {
                $pagination['last'] = $pages;
            }
        }
        //write the actual page for css
        $pagination['current'] = $page;

        return $pagination;
    }
}

<?php
namespace Yacy\Yacy\Controller;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Eike Starkmann <eikestarkmann@web.de>
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
class SearchController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {


	/**
	 * searchResultRepository
	 *
	 * @var \Yacy\Yacy\Domain\Repository\SearchRepository
	 * @inject
	 */
	protected $searchRepository = NULL;
	
	/**
	 * @return void
	 */
	public function initializeSearchAction() {
		$itemDemandConfiguration = $this->arguments['demand']->getPropertyMappingConfiguration();
		$itemDemandConfiguration->allowAllProperties();
		$itemDemandConfiguration
		->setTypeConverterOption(
				'TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter',
				\TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter::CONFIGURATION_CREATION_ALLOWED,
				TRUE
		);
	}

	/**
	 * action index
	 *
	 * @return void
	 */
	public function indexAction() {
		/* @var $demand Yacy\Yacy\Domain\Model\Demand */
		$demand = $this->objectManager->get('Yacy\Yacy\Domain\Model\Demand');

		if($this->settings['domain']&&$this->settings['port']){
			$demand->setHost($this->settings['domain']);
			$demand->setPort($this->settings['port']);
		}
		if($this->settings['resultPage']){
			$demand->setResultPage($this->settings['resultPage']);
		}
		$this->view->assign('demand', $demand);
	}

	/**
	 * Search Action
	 * @param \Yacy\Yacy\Domain\Model\Demand $demand
	 * @param integer $page
	 */
	public function searchAction(\Yacy\Yacy\Domain\Model\Demand $demand, $page = 1) {
		$itemsPerPage = 10;
		
		$demand->setStartRecord($itemsPerPage * ($page - 1));
		
		$results = $this->searchRepository->findDemandedViaYacyRss($demand);
		
		$resultsCount = $this->searchRepository->countAllRequested($demand);
		
		$pagination = $this->buildPagination($itemsPerPage,$page,$demand, $resultsCount);
		
		$this->view->assign('pagination', $pagination);
		$this->view->assign('demand', $demand);
		$this->view->assign('results', $results);
		$this->view->assign('resultsCount', $resultsCount);
	}
	
	/**
	 * 
	 * @param integer $itemsPerPage
	 * @param integer $page
	 * @param \Yacy\Yacy\Domain\Model\Demand $demand
	 * @param integer $resultsCount
	 * @return integer
	 */
	protected function buildPagination($itemsPerPage = 10, $page = 1 , \Yacy\Yacy\Domain\Model\Demand $demand, $resultsCount){

		if(!$resultsCount <= $itemsPerPage) {
			//build the pagination
			
			//build paginator
			$pages = ceil($resultsCount / $itemsPerPage);
			//We limit the pagination menu to 11 pages
			//Case I: the calculatet pages are below 10
			if ($pages <= 10) {
				$minPagination = 1;
				$maxPagination = $pages;
			}
			//Case II: the calculated pages are more than 10
			if ($pages > 10) {
				$maxPagination = $page + 5;
				if ($maxPagination > $pages) {
					$maxPagination = $pages;
				}
				$minPagination = $maxPagination -11;
				if($minPagination <1) {
					$minPagination = 1;
					$maxPagination = 11;
				}
			}
			//Now we bild the page navigation
			for ($i = $minPagination; $i <= $maxPagination; $i++) {
				$pagination['pages'][$i]['text'] = $i;
			}
			//Build next / prev links
			if($page >1) {
				$pagination['prev'] = $page -1;
			}
			if($page < $pages) {
				$pagination['next'] = $page +1;
			}
			//build the firstpage / lastPage links
			if($minPagination > 1){
				$pagination['first'] = 1;
			}
			if($maxPagination < $pages){
				$pagination['last'] = $pages;
			}
		}
		//write the actual page for css
		$pagination['current'] = $page;
	
		return $pagination;
	}
	

}
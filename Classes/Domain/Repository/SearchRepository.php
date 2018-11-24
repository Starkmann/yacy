<?php
namespace Eike\Yacy\Domain\Repository;
use Eike\Yacy\Domain\Model\Demand;
use Eike\Yacy\Domain\Model\SearchResult;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
/***************************************************************
 *
 *  Copyright notice
 *
(c) 2018 Eike Starkmann <eike.starkmann@posteo.de>
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
 * The repository for SearchResults
 */
class SearchRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {


    public function findDemanded(Demand $demand, $page =1)
    {
        if($demand->getInterface() === 'yacysearch.rss'){
            return $this->findDemandedViaYacyRss($demand, $page);
        }
        if($demand->getInterface() === 'yacysearch.json'){
            return $this->findDemandedViaYacyJson($demand, $page);
        }
    }

    public function countAllRequested(\Eike\Yacy\Domain\Model\Demand $demand){
        $xml = $this->getXmlFromYacyViaRss($demand);
        return (int)$xml->channel->children("opensearch", true)->totalResults; ;
    }

	protected function findDemandedViaYacyRss(\Eike\Yacy\Domain\Model\Demand $demand, $page = 1){
		$xml = $this->getXmlFromYacyViaRss($demand);

		/* @var $searchResults \TYPO3\CMS\Extbase\Persistence\ObjectStorage */
		$searchResults = $this->objectManager->get(ObjectStorage::class);

		foreach ($xml->channel->item as $item){
			/* @var $searchResult \Eike\Yacy\Domain\Model\SearchResult */
			$searchResult = $this->objectManager->get(SearchResult::class);
			$searchResult->setTitle((string)$item->title);
			$searchResult->setPubDate((string)$item->pubDate);
			$searchResult->setDescription((string)$item->description);
			$searchResult->setLink((string)$item->link);
			$searchResults->attach($searchResult);
		}
		return $searchResults;
	}

	protected function getXmlFromYacyViaRss(\Eike\Yacy\Domain\Model\Demand $demand){
        $query = $demand->getRequestUrl();
        $query .= '?query='.$demand->getQuery();
        $query .= '&maximumRecords=10';
        if($demand->getStartRecord()){
            $query = $query.'&startRecord='.$demand->getStartRecord();
        }
        return new \SimpleXMLElement($query, $options, TRUE, $ns, $is_prefix);

	}

	protected function findDemandedViaYacyJson(Demand $demand, $page){

    }


}

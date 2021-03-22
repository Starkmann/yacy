<?php
namespace Eike\Yacy\Domain\Repository;

use Eike\Yacy\Domain\Model\Demand;

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
class RssSearchRepository extends AbstractSearchRepository
{
    /**
     * @param Demand $demand
     * @param int $page
     * @param int $debug
     * @return mixed|void
     */
    public function findDemanded(Demand $demand, $page =1, $debug = 0)
    {
        $xml = new \SimpleXMLElement($demand->getRequestUrl(), 1, true);
        $result = json_decode(json_encode($xml->channel), true);
        $result['items'] = $result['item'];
        unset($result['item']);
        $result['startIndex'] = (int)$xml->channel->children('opensearch', true)->startIndex;
        $result['itemPerPage'] = (int)$xml->channel->children('opensearch', true)->itemsPerPage;
        $result['totalResults'] = (int)$xml->channel->children('opensearch', true)->totalResults;
        return $result;
    }
}

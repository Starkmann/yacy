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
class JsonSearchRepository extends AbstractSearchRepository
{
    /**
     * @param Demand $demand
     * @param int $page
     * @return mixed
     */
    public function findDemanded(Demand $demand, $page =1)
    {
        $json = json_decode(file_get_contents($demand->getRequestUrl()), true);
        return $json['channels'][0];
    }
}

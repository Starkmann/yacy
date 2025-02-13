<?php

namespace Eike\Yacy\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use Eike\Yacy\Domain\Model\Demand;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2018 Eike Starkmann <eike.starkmann@posteo.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Eike\Yacy\Domain\Model\Demand.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Eike Starkmann <eike.starkmann@posteo.de>
 */
class DemandTest extends UnitTestCase
{
    /**
     * @var Demand
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new Demand();
    }

    protected function tearDown()
    {
        unset($this->subject);
    }

    /**
     * @test
     */
    public function getRequestUrlReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getRequestUrl()
        );
    }

    /**
     * @test
     */
    public function setRequestUrlForStringSetsRequestUrl(): void
    {
        $this->subject->setRequestUrl('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'requestUrl',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHostReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getHost()
        );
    }

    /**
     * @test
     */
    public function setHostForStringSetsHost(): void
    {
        $this->subject->setHost('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'host',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDomainReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getDomain()
        );
    }

    /**
     * @test
     */
    public function setDomainForStringSetsDomain(): void
    {
        $this->subject->setDomain('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'domain',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getQueryReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getQuery()
        );
    }

    /**
     * @test
     */
    public function setQueryForStringSetsQuery(): void
    {
        $this->subject->setQuery('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'query',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStartRecordReturnsInitialValueForInteger(): void
    {
        $this->assertSame(
            0,
            $this->subject->getStartRecord()
        );
    }

    /**
     * @test
     */
    public function setStartRecordForIntegerSetsStartRecord(): void
    {
        $this->subject->setStartRecord(12);

        $this->assertAttributeEquals(
            12,
            'startRecord',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMaximumRecordsReturnsInitialValueForInteger(): void
    {
        $this->assertSame(
            0,
            $this->subject->getMaximumRecords()
        );
    }

    /**
     * @test
     */
    public function setMaximumRecordsForIntegerSetsMaximumRecords(): void
    {
        $this->subject->setMaximumRecords(12);

        $this->assertAttributeEquals(
            12,
            'maximumRecords',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContentDomReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getContentDom()
        );
    }

    /**
     * @test
     */
    public function setContentDomForStringSetsContentDom(): void
    {
        $this->subject->setContentDom('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'contentDom',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getResourceReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getResource()
        );
    }

    /**
     * @test
     */
    public function setResourceForStringSetsResource(): void
    {
        $this->subject->setResource('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'resource',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUrlMaskFilterReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getUrlMaskFilter()
        );
    }

    /**
     * @test
     */
    public function setUrlMaskFilterForStringSetsUrlMaskFilter(): void
    {
        $this->subject->setUrlMaskFilter('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'urlMaskFilter',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPreferMaskFilterReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getPreferMaskFilter()
        );
    }

    /**
     * @test
     */
    public function setPreferMaskFilterForStringSetsPreferMaskFilter(): void
    {
        $this->subject->setPreferMaskFilter('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'preferMaskFilter',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVerifyReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getVerify()
        );
    }

    /**
     * @test
     */
    public function setVerifyForStringSetsVerify(): void
    {
        $this->subject->setVerify('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'verify',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLanguageReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getLanguage()
        );
    }

    /**
     * @test
     */
    public function setLanguageForStringSetsLanguage(): void
    {
        $this->subject->setLanguage('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'language',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPortReturnsInitialValueForInteger(): void
    {
        $this->assertSame(
            0,
            $this->subject->getPort()
        );
    }

    /**
     * @test
     */
    public function setPortForIntegerSetsPort(): void
    {
        $this->subject->setPort(12);

        $this->assertAttributeEquals(
            12,
            'port',
            $this->subject
        );
    }
}

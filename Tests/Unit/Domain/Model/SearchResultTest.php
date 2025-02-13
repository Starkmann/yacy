<?php

namespace Eike\Yacy\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use Eike\Yacy\Domain\Model\SearchResult;
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
 * Test case for class \Eike\Yacy\Domain\Model\SearchResult.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Eike Starkmann <eike.starkmann@posteo.de>
 */
class SearchResultTest extends UnitTestCase
{
    /**
     * @var \Eike\Yacy\Domain\Model\SearchResult
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new SearchResult();
    }

    protected function tearDown()
    {
        unset($this->subject);
    }

    /**
     * @test
     */
    public function getLinkReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getLink()
        );
    }

    /**
     * @test
     */
    public function setLinkForStringSetsLink(): void
    {
        $this->subject->setLink('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'link',
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
    public function getPathReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getPath()
        );
    }

    /**
     * @test
     */
    public function setPathForStringSetsPath(): void
    {
        $this->subject->setPath('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'path',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFileReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getFile()
        );
    }

    /**
     * @test
     */
    public function setFileForStringSetsFile(): void
    {
        $this->subject->setFile('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'file',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription(): void
    {
        $this->subject->setDescription('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCreatorReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getCreator()
        );
    }

    /**
     * @test
     */
    public function setCreatorForStringSetsCreator(): void
    {
        $this->subject->setCreator('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'creator',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPubDateReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getPubDate()
        );
    }

    /**
     * @test
     */
    public function setPubDateForStringSetsPubDate(): void
    {
        $this->subject->setPubDate('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'pubDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLatitudeReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getLatitude()
        );
    }

    /**
     * @test
     */
    public function setLatitudeForStringSetsLatitude(): void
    {
        $this->subject->setLatitude('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'latitude',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLongitudeReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getLongitude()
        );
    }

    /**
     * @test
     */
    public function setLongitudeForStringSetsLongitude(): void
    {
        $this->subject->setLongitude('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'longitude',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSizeReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getSize()
        );
    }

    /**
     * @test
     */
    public function setSizeForStringSetsSize(): void
    {
        $this->subject->setSize('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'size',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle(): void
    {
        $this->subject->setTitle('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSubjectReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getSubject()
        );
    }

    /**
     * @test
     */
    public function setSubjectForStringSetsSubject(): void
    {
        $this->subject->setSubject('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'subject',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGuidReturnsInitialValueForString(): void
    {
        $this->assertSame(
            '',
            $this->subject->getGuid()
        );
    }

    /**
     * @test
     */
    public function setGuidForStringSetsGuid(): void
    {
        $this->subject->setGuid('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'guid',
            $this->subject
        );
    }
}

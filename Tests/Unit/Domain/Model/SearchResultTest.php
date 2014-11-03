<?php

namespace Yacy\Yacy\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Eike Starkmann <eikestarkmann@web.de>
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
 * Test case for class \Yacy\Yacy\Domain\Model\SearchResult.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Eike Starkmann <eikestarkmann@web.de>
 */
class SearchResultTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Yacy\Yacy\Domain\Model\SearchResult
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Yacy\Yacy\Domain\Model\SearchResult();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getLinkReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLink()
		);
	}

	/**
	 * @test
	 */
	public function setLinkForStringSetsLink() {
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
	public function getHostReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getHost()
		);
	}

	/**
	 * @test
	 */
	public function setHostForStringSetsHost() {
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
	public function getPathReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPath()
		);
	}

	/**
	 * @test
	 */
	public function setPathForStringSetsPath() {
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
	public function getFileReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFile()
		);
	}

	/**
	 * @test
	 */
	public function setFileForStringSetsFile() {
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
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
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
	public function getCreatorReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCreator()
		);
	}

	/**
	 * @test
	 */
	public function setCreatorForStringSetsCreator() {
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
	public function getPubDateReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPubDate()
		);
	}

	/**
	 * @test
	 */
	public function setPubDateForStringSetsPubDate() {
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
	public function getLatitudeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLatitude()
		);
	}

	/**
	 * @test
	 */
	public function setLatitudeForStringSetsLatitude() {
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
	public function getLongitudeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLongitude()
		);
	}

	/**
	 * @test
	 */
	public function setLongitudeForStringSetsLongitude() {
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
	public function getSizeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSize()
		);
	}

	/**
	 * @test
	 */
	public function setSizeForStringSetsSize() {
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
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
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
	public function getSubjectReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSubject()
		);
	}

	/**
	 * @test
	 */
	public function setSubjectForStringSetsSubject() {
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
	public function getGuidReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getGuid()
		);
	}

	/**
	 * @test
	 */
	public function setGuidForStringSetsGuid() {
		$this->subject->setGuid('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'guid',
			$this->subject
		);
	}
}

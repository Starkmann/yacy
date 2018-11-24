<?php
namespace Eike\Yacy\Domain\Model;


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
 * A search result
 */
class SearchResult extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * link
	 *
	 * @var string
	 */
	protected $link = '';

	/**
	 * host
	 *
	 * @var string
	 */
	protected $host = '';

	/**
	 * path
	 *
	 * @var string
	 */
	protected $path = '';

	/**
	 * file
	 *
	 * @var string
	 */
	protected $file = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * creator
	 *
	 * @var string
	 */
	protected $creator = '';

	/**
	 * pubDate
	 *
	 * @var string
	 */
	protected $pubDate = '';

	/**
	 * latitude
	 *
	 * @var string
	 */
	protected $latitude = '';

	/**
	 * longitude
	 *
	 * @var string
	 */
	protected $longitude = '';

	/**
	 * size
	 *
	 * @var string
	 */
	protected $size = '';

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * subject
	 *
	 * @var string
	 */
	protected $subject = '';

	/**
	 * guid
	 *
	 * @var string
	 */
	protected $guid = '';

	/**
	 * Returns the link
	 *
	 * @return string $link
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * Sets the link
	 *
	 * @param string $link
	 * @return void
	 */
	public function setLink($link) {
		$this->link = $link;
	}

	/**
	 * Returns the host
	 *
	 * @return string $host
	 */
	public function getHost() {
		return $this->host;
	}

	/**
	 * Sets the host
	 *
	 * @param string $host
	 * @return void
	 */
	public function setHost($host) {
		$this->host = $host;
	}

	/**
	 * Returns the path
	 *
	 * @return string $path
	 */
	public function getPath() {
		return $this->path;
	}

	/**
	 * Sets the path
	 *
	 * @param string $path
	 * @return void
	 */
	public function setPath($path) {
		$this->path = $path;
	}

	/**
	 * Returns the file
	 *
	 * @return string $file
	 */
	public function getFile() {
		return $this->file;
	}

	/**
	 * Sets the file
	 *
	 * @param string $file
	 * @return void
	 */
	public function setFile($file) {
		$this->file = $file;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the creator
	 *
	 * @return string $creator
	 */
	public function getCreator() {
		return $this->creator;
	}

	/**
	 * Sets the creator
	 *
	 * @param string $creator
	 * @return void
	 */
	public function setCreator($creator) {
		$this->creator = $creator;
	}

	/**
	 * Returns the pubDate
	 *
	 * @return string $pubDate
	 */
	public function getPubDate() {
		return $this->pubDate;
	}

	/**
	 * Sets the pubDate
	 *
	 * @param string $pubDate
	 * @return void
	 */
	public function setPubDate($pubDate) {
		$this->pubDate = $pubDate;
	}

	/**
	 * Returns the latitude
	 *
	 * @return string $latitude
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * Sets the latitude
	 *
	 * @param string $latitude
	 * @return void
	 */
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
	}

	/**
	 * Returns the longitude
	 *
	 * @return string $longitude
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * Sets the longitude
	 *
	 * @param string $longitude
	 * @return void
	 */
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
	}

	/**
	 * Returns the size
	 *
	 * @return string $size
	 */
	public function getSize() {
		return $this->size;
	}

	/**
	 * Sets the size
	 *
	 * @param string $size
	 * @return void
	 */
	public function setSize($size) {
		$this->size = $size;
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the subject
	 *
	 * @return string $subject
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * Sets the subject
	 *
	 * @param string $subject
	 * @return void
	 */
	public function setSubject($subject) {
		$this->subject = $subject;
	}

	/**
	 * Returns the guid
	 *
	 * @return string $guid
	 */
	public function getGuid() {
		return $this->guid;
	}

	/**
	 * Sets the guid
	 *
	 * @param string $guid
	 * @return void
	 */
	public function setGuid($guid) {
		$this->guid = $guid;
	}

}

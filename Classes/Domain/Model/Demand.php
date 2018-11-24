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
 * Damand object for yacy search
 */
class Demand extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{

    /**
     * @var string
     */
    protected $protocol = 'http';

    /**
     * @var string
     */
    protected $interface = 'yacysearch.rss';

    /**
     * domain
     *
     * @var string
     */
    protected $domain = '';

    /**
     * query
     *
     * @var string
     */
    protected $query = '';

    /**
     * startRecord
     *
     * @var int
     */
    protected $startRecord = 0;

    /**
     * maximumRecords
     *
     * @var int
     */
    protected $maximumRecords = 10;

    /**
     * contentDom
     *
     * @var string
     */
    protected $contentDom = '';

    /**
     * resource
     *
     * @var string
     */
    protected $resource = '';

    /**
     * urlMaskFilter
     *
     * @var string
     */
    protected $urlMaskFilter = '';

    /**
     * preferMaskFilter
     *
     * @var string
     */
    protected $preferMaskFilter = '';

    /**
     * verify
     *
     * @var string
     */
    protected $verify = '';

    /**
     * language
     *
     * @var string
     */
    protected $language = '';

    /**
     * port
     *
     * @var int
     */
    protected $port = 0;

    /**
     * The result page to reffer to
     *
     * @var int
     */
    protected $resultPage = 0;

    /**
     * Returns the domain
     *
     * @return string $domain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets the domain
     *
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * Returns the query
     *
     * @return string $query
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Sets the query
     *
     * @param string $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }

    /**
     * Returns the startRecord
     *
     * @return int $startRecord
     */
    public function getStartRecord()
    {
        return $this->startRecord;
    }

    /**
     * Sets the startRecord
     *
     * @param int $startRecord
     */
    public function setStartRecord($startRecord)
    {
        $this->startRecord = $startRecord;
    }

    /**
     * Returns the maximumRecords
     *
     * @return int $maximumRecords
     */
    public function getMaximumRecords()
    {
        return $this->maximumRecords;
    }

    /**
     * Sets the maximumRecords
     *
     * @param int $maximumRecords
     */
    public function setMaximumRecords($maximumRecords)
    {
        $this->maximumRecords = $maximumRecords;
    }

    /**
     * Returns the contentDom
     *
     * @return string $contentDom
     */
    public function getContentDom()
    {
        return $this->contentDom;
    }

    /**
     * Sets the contentDom
     *
     * @param string $contentDom
     */
    public function setContentDom($contentDom)
    {
        $this->contentDom = $contentDom;
    }

    /**
     * Returns the resource
     *
     * @return string $resource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets the resource
     *
     * @param string $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }

    /**
     * Returns the urlMaskFilter
     *
     * @return string $urlMaskFilter
     */
    public function getUrlMaskFilter()
    {
        return $this->urlMaskFilter;
    }

    /**
     * Sets the urlMaskFilter
     *
     * @param string $urlMaskFilter
     */
    public function setUrlMaskFilter($urlMaskFilter)
    {
        $this->urlMaskFilter = $urlMaskFilter;
    }

    /**
     * Returns the preferMaskFilter
     *
     * @return string $preferMaskFilter
     */
    public function getPreferMaskFilter()
    {
        return $this->preferMaskFilter;
    }

    /**
     * Sets the preferMaskFilter
     *
     * @param string $preferMaskFilter
     */
    public function setPreferMaskFilter($preferMaskFilter)
    {
        $this->preferMaskFilter = $preferMaskFilter;
    }

    /**
     * Returns the verify
     *
     * @return string $verify
     */
    public function getVerify()
    {
        return $this->verify;
    }

    /**
     * Sets the verify
     *
     * @param string $verify
     */
    public function setVerify($verify)
    {
        $this->verify = $verify;
    }

    /**
     * Returns the language
     *
     * @return string $language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets the language
     *
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Returns the port
     *
     * @return int $port
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Sets the port
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /*
     * No real reason for having this but typo3 needs it in some way
     */
    /**
     * Returns the port
     */
    public function getUid()
    {
    }

    /**
     * Sets the port
     *
     * @param int $port
     */
    public function setUid($port)
    {
    }

    /**
     * @return int
     */
    public function getResultPage()
    {
        return $this->resultPage;
    }

    /**
     * @param int $resultPage
     */
    public function setResultPage($resultPage)
    {
        $this->resultPage = $resultPage;
    }

    /**
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }

    /**
     * @param string $protocol
     */
    public function setProtocol(string $protocol)
    {
        $this->protocol = $protocol;
    }

    /**
     * @return string
     */
    public function getInterface(): string
    {
        return $this->interface;
    }

    /**
     * @param string $interface
     */
    public function setInterface(string $interface)
    {
        $this->interface = $interface;
    }

    /**
     * Builds the request url
     *
     * @return string
     */
    public function getRequestUrl()
    {
        $url =
            $this->getProtocol() .
            '://' .
            $this->getDomain() .
            ':' .
            $this->getPort() .
            '/' .
            $this->getInterface() .
            '?query=' .
            $this->getQuery() .
            '&maximumRecords=' .
            $this->getMaximumRecords() .
            '&startRecord=' .
            $this->getStartRecord();

        return $url;
    }
}

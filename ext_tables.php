<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
if (!defined('TYPO3')) {
    die('Access denied.');
}

ExtensionUtility::registerPlugin(
    'Yacy',
    'Search',
    'Yacy'
);

ExtensionManagementUtility::addStaticFile('yacy', 'Configuration/TypoScript', 'Yacy Search');

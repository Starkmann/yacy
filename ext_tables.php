<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Eike.Yacy',
    'Search',
    'Yacy'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('yacy', 'Configuration/TypoScript', 'Yacy Search');

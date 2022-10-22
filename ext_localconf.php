<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Eike\Yacy\Controller\SearchController;
if (!defined('TYPO3')) {
    die('Access denied.');
}

ExtensionUtility::configurePlugin(
    'Yacy',
    'Search',
    [
        SearchController::class => 'index, search',

    ],
    // non-cacheable actions
    [
        SearchController::class => 'search',

    ]
);

<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Eike.' . $_EXTKEY,
    'Search',
    [
        'Search' => 'index, search',

    ],
    // non-cacheable actions
    [
        'Search' => 'search',

    ]
);

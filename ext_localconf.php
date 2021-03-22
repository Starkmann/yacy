<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Eike.Yacy',
    'Search',
    [
        'Search' => 'index, search',

    ],
    // non-cacheable actions
    [
        'Search' => 'search',

    ]
);

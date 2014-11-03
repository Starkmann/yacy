<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Yacy.' . $_EXTKEY,
	'Search',
	array(
		'Search' => 'index, search',
		
	),
	// non-cacheable actions
	array(
		'Search' => 'search',
		
	)
);

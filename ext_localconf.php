<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Search',
	array(
		'Search' => 'index, search',
		
	),
	// non-cacheable actions
	array(
		'Search' => 'search',
		
	)
);

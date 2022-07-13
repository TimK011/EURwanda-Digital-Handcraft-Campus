<?php
/*
 * Extension Manager configuration file for ext "sr_language_menu".
 */

$EM_CONF[$_EXTKEY] = [
	'title' => 'Language Selection',
	'description' => 'A TYPO3 plugin to display a list of languages to select from. Clicking on a language links to the corresponding version of the page.',
	'category' => 'plugin',
	'version' => '11.5.0',
	'state' => 'stable',
	'clearcacheonload' => 0,
	'author' => 'Stanislas Rolland',
	'author_email' => 'typo3AAAA(arobas)sjbr.ca',
	'author_company' => 'SJBR',
	'constraints' => [
		'depends' => [
			'typo3' => '11.5.0-11.5.99',
			'static_info_tables' => '11.5.0-11.5.99'
		],
		'conflicts' => [],
		'suggests' => []
	],
    'autoload' => [
        'psr-4' => [
        	'SJBR\\SrLanguageMenu\\' => 'Classes'
        ]
    ]
];
<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'CM Multiple Choice',
    'description' => 'Extension zur erstellung für Multiplechoice Fragen',
    'category' => 'plugin',
    'author' => 'Tim Koll',
    'author_email' => 's4tikoll@uni-trier.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

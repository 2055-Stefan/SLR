<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 - Demo',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Htl3r\\Typo3Demo\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Stefan Scheer',
    'author_email' => '2055@htl.rennweg.at',
    'author_company' => 'HTL3R',
    'version' => '1.0.0',
];

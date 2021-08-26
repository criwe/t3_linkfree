<?php

/**
 * Extension Manager/Repository config file for ext "t3_linkfree".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'T3 Linkfree',
    'description' => 'Simple linktree alternative. Easy to use',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Itfoo\\t3_linkfree\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christoph Werner',
    'author_email' => 'christoph.werner@itfoo.de',
    'author_company' => 'itfoo',
    'version' => '1.0.1',
];

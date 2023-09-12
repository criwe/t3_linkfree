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
            'typo3' => '11.5.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'Christoph Werner',
    'author_email' => 'christoph.werner@itfoo.de',
    'author_company' => 'itfoo',
    'version' => '1.0.5',
];

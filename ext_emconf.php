<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'T3api',
    'description' => 'REST API for your TYPO3 project. Config with annotations, build in filtering, pagination, typolinks, image processing, serialization contexts, responses in Hydra/JSON-LD format.',
    'category' => 'plugin',
    'author' => 'SourceBroker Team',
    'author_email' => 'office@sourcebroker.dev',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.1.0',
    'constraints' => [
        'depends' => [
            'php' => '7.2.0-7.4.99',
            'typo3' => '8.7.0-11.0.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

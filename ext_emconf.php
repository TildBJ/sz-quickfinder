<?php

/**########################################################################
 * # Extension Manager/Repository config file for ext: "sz_indexed_search"
 * #
 * # Auto generated by Extension Builder 2014-03-20
 * #
 * # Manual updates:
 * # Only the data in the array - anything else is removed by next write.
 * # "version" and "dependencies" must not be touched!
 * ########################################################################**/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Indexed Search Extend',
    'description' => 'Adds autocomplete to indexed search',
    'category' => 'plugin',
    'author' => 'Dennis Römmich',
    'author_email' => 'dennis.roemmich@sunzinet.com',
    'author_company' => 'sunzinet AG',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '3.0.1',
    'constraints' => [
        'depends' => [
            'extbase' => '1.3',
            'fluid' => '1.3',
            'typo3' => '6.2.0-7.6.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Sunzinet\\SzIndexedSearch\\' => 'Classes']
    ],
    'autoload-dev' => [
        'psr-4' => ['Sunzinet\\SzIndexedSearch\\Unit\\' => 'Tests']
    ]
];

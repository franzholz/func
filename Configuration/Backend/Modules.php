<?php

declare(strict_types=1);

use TYPO3\CMS\Func\Controller\PageFunctionsController;

return [
    'web_func' => [
        'parent' => 'web_ts',
        'access' => 'user',
        'path' => '/module/web/func',
        'labels' => 'LLL:EXT:func/Resources/Private/Language/locallang_mod_web_func.xlf',
        'iconIdentifier' => 'tx-func-icon',
        'routes' => [
            '_default' => [
                'target' => PageFunctionsController::class . '::main',
            ],
        ],
    ],
];



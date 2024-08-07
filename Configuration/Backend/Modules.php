<?php

declare(strict_types=1);

use TYPO3\CMS\Func\Controller\PageFunctionsController;

return [
    'web_func' => [
        'path' => '/module/web/func',
        'access' => 'admin',
        'labels' => [
            'title' => 'LLL:EXT:func/Resources/Private/Language/locallang_mod_web_func.xlf'
        ],
        'icon' => 'EXT:func/Resources/Public/Icons/module-func.svg',
        'routes' => [
            '_default' => [
                'target' => PageFunctionsController::class . '::main',
            ],
            'edit' => [
                'path' => '/edit-me',
                'target' => MyModuleController::class . '::edit',
            ],
            'manage' => [
                'target' => AnotherController::class . '::manage',
                'methods' => ['POST'],
            ],
        ],
    ],
];



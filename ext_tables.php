<?php
defined('TYPO3') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'web',
    'func',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Func\Controller\PageFunctionsController::class . '::mainAction',
        'access' => 'user,group',
        'name' => 'web_func',
        'icon' => 'EXT:func/Resources/Public/Icons/module-func.svg',
        'labels' => 'LLL:EXT:func/Resources/Private/Language/locallang_mod_web_func.xlf'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    '_MOD_web_func',
    'EXT:func/Resources/Private/Language/locallang_csh_web_func.xlf'
);


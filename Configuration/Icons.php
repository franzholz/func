<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'tx-func-icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:func/Resources/Public/Icons/module-func.svg',
    ],
];

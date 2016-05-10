<?php

/*
 * Asset Packagist
 *
 * @link      https://github.com/hiqdev/asset-packagist
 * @package   asset-packagist
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

$common = require __DIR__ . '/common.php';

$config = [
    'components' => [
        'config' => [
            'include' => '@hiqdev/assetpackagist/config/goals.yml',
        ],
    ],
];

return yii\helpers\ArrayHelper::merge($common, $config);
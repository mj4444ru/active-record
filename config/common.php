<?php

declare(strict_types=1);

use Yii\ActiveRecord\ActiveRecordManager;
use Yii\ActiveRecord\Contracts\ActiveRecordManagerInterface;

/**
 * @var array $params
 */
return [
    ActiveRecordManagerInterface::class => ActiveRecordManager::class,
    ActiveRecordManager::class => ActiveRecordManager::class,
];

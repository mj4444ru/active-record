<?php

declare(strict_types=1);

namespace Yii\ActiveRecord\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final class ConnectionName
{
    public function __construct(public readonly ?string $name = null)
    {
    }
}

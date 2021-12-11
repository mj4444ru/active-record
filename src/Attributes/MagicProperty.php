<?php

declare(strict_types=1);

namespace Yii\ActiveRecord\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
final class MagicProperty
{
    public function __construct(public readonly string $propertyName, public readonly string $attributeName)
    {
    }
}

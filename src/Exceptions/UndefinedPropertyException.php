<?php

declare(strict_types=1);

namespace Yii\ActiveRecord\Exceptions;

use LogicException;
use Throwable;

final class UndefinedPropertyException extends LogicException
{
    public function __construct(string $className, string $propertyName, int $code = 0, Throwable $previous = null)
    {
        parent::__construct(sprintf('Undefined property: %s::$%s', $className, $propertyName), $code, $previous);
    }
}

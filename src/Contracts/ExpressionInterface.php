<?php

declare(strict_types=1);

namespace Yii\ActiveRecord\Contracts;

use Countable;
use Stringable;

interface ExpressionInterface extends Stringable, Countable
{
    public function __toString(): string;

    public function count(): int;

    public function getParams(): array;
}

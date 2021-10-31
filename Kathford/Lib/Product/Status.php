<?php

namespace Kathford\Lib\Product;

final class Status
{
    const AVAILABLE = 1;

    const NOT_AVAILABLE = 0;

    public static $current = [
        self::AVAILABLE => 'Available',
        self::NOT_AVAILABLE => 'Not-Available'
    ];
}
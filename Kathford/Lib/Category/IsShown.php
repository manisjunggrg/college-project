<?php

namespace Kathford\Lib\Category;

use phpDocumentor\Reflection\Types\Self_;

final class IsShown
{
    const SHOW = 'SHOW';

    const HIDE = 'HIDE';

    const NONE = 0;

    const DISPLAY = 1;

    public static $current = [
        self::SHOW => 'True',
        self::HIDE => 'False'
    ];

}
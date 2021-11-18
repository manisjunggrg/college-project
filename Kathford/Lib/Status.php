<?php

namespace Kathford\Lib;

final class Status
{

    /**
     *
     * Inactive means it will not display
     */
    const INACTIVE = 0;

    const INACTIVE_TEXT = 'Inactive';

    /*
     *
     * Active status will display
     */
    const ACTIVE = 1;


    public static $current = [
        self::INACTIVE => 'In-Active',
        self::ACTIVE => 'Active',
    ];

}
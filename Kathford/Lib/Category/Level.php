<?php

namespace Kathford\Lib\Category;

final class Level
{
    /**
     * Parent Level of Category
     */
     const PARENT = 0;

    /**
     * Sub Parent Level of category where parent is 0
     */
     const SUB_PARENT = 1;

    /**
     * This category is under the sub_parent category 1
     */
     const SUB_SUB_PARENT = 2;

}
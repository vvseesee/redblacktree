<?php

namespace Vvseesee\Redblacktree\Facades;

use Illuminate\Support\Facades\Facade;
use Vvseesee\Redblacktree\RedBlackTree as Accessor;

class RedBlackTree extends Facade
{
    public static function getFacadeAccessor()
    {
        return Accessor::class;
    }
}

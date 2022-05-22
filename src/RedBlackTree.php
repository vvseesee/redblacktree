<?php

namespace Vvseesee\Redblacktree;

use Illuminate\Config\Repository;
use Illuminate\Support\Collection;

class RedBlackTree
{
    private $config;

    public function __construct(Repository $config)
    {
        $this->config = collect($config->get('redblacktree'));
    }

    public function run()
    {
        echo $this->config->get('key');
        echo "<br/>";
        echo __CLASS__;
    }
}

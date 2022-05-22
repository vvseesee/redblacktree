<?php

namespace Vvseesee\Redblacktree;

use Illuminate\Support\ServiceProvider;

class RedBlackTreeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(RedBlackTree::class, function ($app) {
            return new RedBlackTree($app['config']);
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/Config/redblacktree.php' => config_path('redblacktree.php'),
            ]);
        }
    }

    public function provides()
    {
        return [RedBlackTree::class];
    }
}

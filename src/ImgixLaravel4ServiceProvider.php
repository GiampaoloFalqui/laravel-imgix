<?php

namespace Nasyrov\Laravel\Imgix;

use Illuminate\Support\ServiceProvider;
use Imgix\ShardStrategy;
use Imgix\UrlBuilder;
use Config;

class ImgixLaravel4ServiceProvider extends ImgixServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    const ALIAS = 'imgix';

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->package('nasyrov/laravel-imgix', 'laravel-imgix', __DIR__ . '/..');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(UrlBuilder::class, function ($app) {
            return new UrlBuilder(
                $app['config']->get('laravel-imgix::imgix.domains'),
                $app['config']->get('laravel-imgix::imgix.useHttps', false),
                $app['config']->get('laravel-imgix::imgix.signKey', ''),
                $app['config']->get('laravel-imgix::imgix.shardStrategy', ShardStrategy::CRC),
                $app['config']->get('laravel-imgix::imgix.includeLibraryParam', true)
            );
        });

        $this->app->singleton(Imgix::class, function ($app) {
            return new Imgix($app[UrlBuilder::class]);
        });

        $this->app->alias(Imgix::class, static::ALIAS);
    }
}
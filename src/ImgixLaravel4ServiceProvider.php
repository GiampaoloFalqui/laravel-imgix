<?php

namespace Nasyrov\Laravel\Imgix;

use Illuminate\Support\ServiceProvider;
use Imgix\ShardStrategy;
use Imgix\UrlBuilder;

class ImgixLaravel4ServiceProvider extends ImgixServiceProvider
{
    const ALIAS = 'imgix';
}
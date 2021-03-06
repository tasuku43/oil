<?php
declare(strict_types = 1);

namespace App\Providers;

use App\Http\Middleware\SampleGlobalMiddleware;
use App\Http\Middleware\SampleRouteMiddleware;
use ToyContainer\ServiceProvider;

/**
 * Class MiddlewareServiceProvider
 *
 * @package App\Providers
 */
class MiddlewareServiceProvider extends ServiceProvider
{
    final public function register(): void
    {
        $this->container->add(SampleRouteMiddleware::class);

        $this->container->add(SampleGlobalMiddleware::class);
    }
}

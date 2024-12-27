<?php

namespace ForwarderShippingServiceProviderTemplate\Providers;

use Plenty\Plugin\RouteServiceProvider as PlentyRouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class RouteServiceProvider
 * @package ShippingServiceProviderTemplate\Providers
 */
class RouteServiceProvider extends PlentyRouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        // $router->get('hello-world','ShippingServiceProviderTemplate\Controllers\Controller@getHelloWorldPage');
    }
}

<?php

namespace ForwarderShippingServiceProviderTemplate\Providers;

use Plenty\Plugin\ServiceProvider as PlentyServiceProvider;
use Plenty\Modules\Order\Shipping\ServiceProvider\Services\ShippingServiceProviderService;
use ForwarderShippingServiceProviderTemplate\Helpers\ShippingServiceProvider;

/**
 * Class ServiceProvider
 * @package ShippingServiceProviderTemplate\Providers
 */
class ServiceProvider extends PlentyServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(RouteServiceProvider::class);
    }

    /**
     * Boot actual plugin
     * @param ShippingServiceProviderService $shippingServiceProviderService
     */
    public function boot
    (
        ShippingServiceProviderService $shippingServiceProviderService
    )
    {
        $shippingServiceProviderService->registerShippingProvider(
            ShippingServiceProvider::PLUGIN_NAME,
            ['de' => ShippingServiceProvider::SHIPPING_SERVICE_PROVIDER_NAME, 'en' => ShippingServiceProvider::SHIPPING_SERVICE_PROVIDER_NAME],
            [
                'ForwarderShippingServiceProviderTemplate\\Controllers\\ShipmentController@getLabels',
            ]
        );
    }
}

<?php

namespace Pyz\Zed\MerchantPortal\Communication\Plugin\Router;

use Spryker\Zed\Router\Dependency\Plugin\RouteProviderPluginInterface;
use Symfony\Component\Routing\RouteCollection;
use Spryker\Zed\Router\RouterConfig;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

class MerchantPortalRouterPlugin extends AbstractPlugin implements RouteProviderPluginInterface
{
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection->add('customer', $this->buildRoute('/customer', 'CustomerMerchantPortal', 'Customer', 'index'));

        $routeCollection->add('customer-list', $this->buildRoute('/merchant-gateway/customer-list', 'CustomerMerchantPortal', 'Gateway', 'customerList'));

        return $routeCollection;
    }

    protected function buildRoute(string $path, string $module, string $controller, string $action): \Symfony\Component\Routing\Route
    {
        return (new \Symfony\Component\Routing\Route($path, [
            '_module' => $module,
            '_controller' => $controller,
            '_action' => $action,
        ]));
    }
}

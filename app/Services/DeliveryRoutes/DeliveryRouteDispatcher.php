<?php
namespace Services\DeliveryRoutes;

use Utils\RouteBinarySelector;

/**
 *
 * @author HiroomiOkoshi
 *        
 */
class DeliveryRouteDispatcher
{

  public function dispatch($route)
  {
    $route = $route->filter() ? $route->routeA() : $route->routeB();
    if ($route instanceof RouteBinarySelector) {
      return $this->dispatch($route);
    }
    return $route;
  }
  
  /**
   */
  public function __construct()
  {
  }
}


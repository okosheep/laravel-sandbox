<?php
namespace Services;

use Services\DeliveryRoutes\ZeroToTenRoute;
use Services\DeliveryRoutes\DeliveryRouteDispatcher;

/**
 *
 * @author HiroomiOkoshi
 *        
 */
class DeliveryRouteService
{
  private static $instance;
  
  public static function getInstance()
  {
    if (is_null(self::$instance)) {
      self::$instance = new self();
    }
    return self::$instance;
  }
  
  public function simpleRoute($num, $str)
  {
    $dispatcher = new DeliveryRouteDispatcher();
    return $dispatcher->dispatch(new ZeroToTenRoute($num, $str));
  }
  
  public function complexRoute($num, $str)
  {
    if ($num >= 0 && $num < 10) {
      if ($num == 1) {
        return 'A';
      } else {
        return 'B';
      }
    } elseif ($num >= 10 && $num < 20) {
      return 'J';
    } elseif ($num >= 20 && $num < 30) {
      return 'K';
    } else {
      return 'Z';
    }
  }
  
  /**
   * インスタンスを生成する。
   */
  private function __construct()
  {
  }
}


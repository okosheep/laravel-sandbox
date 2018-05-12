<?php
namespace Services\DeliveryRoutes;

use Utils\RouteBinarySelector;

/**
 *
 * @author HiroomiOkoshi
 *        
 */
class ZeroToTenRoute implements RouteBinarySelector
{

  private $num;

  private $str;

  public function __construct($num, $str)
  {
    $this->num = $num;
    $this->str = $str;
  }

  public function filter()
  {
    return $this->num >= 0 && $this->num < 10;
  }

  public function routeB()
  {
    return new TenOverRoute($this->num, $this->str);
  }

  public function routeA()
  {
    return new NumEqualsOneRoute($this->num, $this->str);
  }
}


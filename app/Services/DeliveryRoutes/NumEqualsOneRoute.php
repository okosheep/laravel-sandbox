<?php
namespace Services\DeliveryRoutes;

use Utils\RouteBinarySelector;

/**
 *
 * @author HiroomiOkoshi
 *        
 */
class NumEqualsOneRoute implements RouteBinarySelector
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
    return $this->num == 1;
  }


  public function routeB()
  {
    return 'B';
  }


  public function routeA()
  {
    return 'A';
  }
}


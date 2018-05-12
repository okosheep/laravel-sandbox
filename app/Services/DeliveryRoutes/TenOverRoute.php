<?php
namespace Services\DeliveryRoutes;

use Utils\RouteBinarySelector;

class TenOverRoute implements RouteBinarySelector
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
    return $this->num >= 10 && $this->num < 20;
  }

  public function routeB()
  {
    return new class($this->num, $this->str) implements RouteBinarySelector {

      private $num;

      private $str;

      public function __construct($num, $str)
      {
        $this->num = $num;
        $this->str = $str;
      }

      public function filter()
      {
        return $this->num >= 20 && $this->num < 30;
      }

      public function routeB()
      {
        return 'Z';
      }

      public function routeA()
      {
        return 'K';
      }
    };
  }

  public function routeA()
  {
    return 'J';
  }
}


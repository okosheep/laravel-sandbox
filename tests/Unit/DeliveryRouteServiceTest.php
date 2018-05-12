<?php
namespace Tests\Unit;

use Services\DeliveryRouteService;

/**
 * DeliveryRouteService test case.
 */
class DeliveryRouteServiceTest extends \PHPUnit\Framework\TestCase
{

  /**
   * Tests DeliveryRouteService->simpleRoute()
   */
  public function testSimpleRoute()
  {
    $service = DeliveryRouteService::getInstance();
    $this->assertEquals('A', $service->simpleRoute(1, 'hello'));
    $this->assertEquals('K', $service->simpleRoute(21, 'hello'));
  }

  /**
   * Tests DeliveryRouteService->complexRoute()
   */
  public function testComplexRoute()
  {
    $service = DeliveryRouteService::getInstance();
    $this->assertEquals('A', $service->complexRoute(1, 'hello'));
    $this->assertEquals('K', $service->complexRoute(21, 'hello'));
  }
}


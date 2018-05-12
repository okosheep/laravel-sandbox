<?php

namespace Tests\Unit;

/**
 * SandboxService test case.
 */
use \Services\SandboxService;

class SandboxServiceTest extends \PHPUnit\Framework\TestCase
{

  /**
   * Tests SandboxService->sayHello()
   */
  public function testSayHello()
  {
    // ./vendor/bin/phpunit Tests/Unit/SandboxServiceTest
    // composer dump-autoload
    // composer clear-cache
    $service = new SandboxService();
    $service->sayHello();
    $this->assertTrue(true);
  }
}


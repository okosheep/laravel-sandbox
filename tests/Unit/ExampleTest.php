<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

// ./vendor/bin/phpunit Tests/Unit/ExampleTest.php 
class ExampleTest extends TestCase
{

  /**
   * A basic test example.
   *
   * @return void
   */
  public function testBasicTest()
  {
    $result = $this->excludeHiddenProduct(',3333,4444,,5555,', '1111,2222,3333,4444');
    echo '1 '.implode(',', $result)."\n";
    
    $result = $this->sortListByOrder('1111,2222,3333,4444', '1,2,3,4');
    echo '2 '.implode(',', $result)."\n";
    
    $result = $this->sortListByOrder('1111,2222,3333,4444', '2,1,3,4');
    echo '3 '.implode(',', $result)."\n";
    
    $result = $this->sortListByOrder('1111,2222,3333,4444', '4,3,2,1');
    echo '4 '.implode(',', $result)."\n";
    
    $result = $this->sortListByOrder(',2222,3333,4444', '4,3,2,1');
    echo '5 '.implode(',', $result)."\n";
    
    $result = $this->sortListByOrder('1111,2222,3333,', '4,3,2,1');
    echo '6 '.implode(',', $result)."\n";
    
    $result = $this->sortListByOrder('1111,,,4444', '2,1,4,3');
    echo '7 '.implode(',', $result)."\n";
    
    $this->assertTrue(true);
  }

  private function excludeHiddenProduct($base, $hiddenProducts)
  {
    $baseArray = explode(',', $base);
    $hiddenProductsArray = explode(',', $hiddenProducts);
    $result = array();
    foreach ($baseArray as $baseItem)
    {
      $hit = false;
      foreach ($hiddenProductsArray as $hiddenProductsItem)
      {
        if ($baseItem == $hiddenProductsItem)
        {
          $hit = true;
          break;
        }
      }
      if ($hit)
      {
        $result[] = '';
      }
      else
      {
        $result[] = $baseItem;
      }
    }
    return $result;
  }

  private function sortListByOrder($list, $order)
  {
    $listArray = explode(',', $list);
    $orderArray = explode(',', $order);
    $sortedArray = array();
    foreach ($orderArray as $searchId)
    {
      foreach ($listArray as $index => $record)
      {
        if ($searchId == ($index + 1))
        {
          $sortedArray[] = $record;
          unset($listArray[$index]);
          break;
        }
      }
    }
    return $sortedArray;
  }
}

<?
require_once "UnitTest/UnitTest.php";

class TestClass extends UnitTest {

  public function test($result, $test_suite)
  {
    $unit_test = new UnitTest();
    return $unit_test->testEquals($result, $test_suite);
  }
}

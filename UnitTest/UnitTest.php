<?
class UnitTest {

  public function testEquals ($result, $test_suite)
  {
    if($result == $test_suite) {
      $str = "OK";
    }
    else {
      $str = "Failure<br />Тестовое: " . $test_suite . "<br />Результат: " . $result;
    }

    return $str;
  }
}

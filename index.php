<?
require_once "SimpleClass.php";
require_once "TestClass.php";

$simple_class = new SimpleClass();
$test_class = new TestClass();
$result = $simple_class->revertPunctuationMarks("Привет! Как твои дела? Мои хорошо! А мои не очень( Жаль. Ну ничего)");
echo $result;

echo "<br /><br />";

echo "<br /><br />Тест 1<br />";
echo $test_class->test("Привет?", $simple_class->revertPunctuationMarks("Привет?"));

echo "<br /><br />Тест 2<br />";
echo $test_class->test("Привет? Как твои дела!", $simple_class->revertPunctuationMarks("Привет! Как твои дела?"));

echo "<br /><br />Тест 3<br />";
echo $test_class->test("Привет5 Как твои дела?", $simple_class->revertPunctuationMarks("Привет5 Как твои дела?"));

echo "<br /><br />Тест 4<br />";
echo $test_class->test("Привет!Кактвоидела?", $simple_class->revertPunctuationMarks("Привет?Кактвоидела!"));

echo "<br /><br />Тест 5<br />";
echo $test_class->test("", $simple_class->revertPunctuationMarks(""));

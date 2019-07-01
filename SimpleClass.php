<?
class SimpleClass {
  
  function revertPunctuationMarks($text)
  {
    // Символы для замены
    $symbols = array (
        '!', '?', '.', ',', '@', '"', '\'', '(', ')',
        '#', '№', '$', ';', '%', '^', ':', '&', '*',
        '-', '_', '+', '=', '/', '\\', '|', '~', '<',
        '>', '{', '}', '[', ']', '`'
    );
    $i = 0;// Индекс символа для замены
    $arr_index = array();// Массив индексов символов для замены
    $arr_symbols = array();// Массив символов для замены
    $text_arr = preg_split('//u', $text);// Исходный текст преобразованный в массив

    // Поиск символов и их индексов для замены в тексте
    foreach ($text_arr as $letter) {
      foreach ($symbols as $symbol) {
        if($letter == $symbol) {
          array_push($arr_index, $i);
          array_push($arr_symbols, $symbol);
        }
      }
      $i++;
    }

    // Замена символов между собой
    for($i = 0; $i < count($arr_index); $i++) {
      $text_arr[$arr_index[$i]] = $arr_symbols[count($arr_symbols) - $i - 1];
    }

    // Преобразуем массив в строку
    $result = implode($text_arr);

    return $result;
  }
}

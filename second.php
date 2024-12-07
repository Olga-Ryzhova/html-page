<?php 
  if (isset($_GET['text'])) {
    $text = $_GET['text'];

    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="' . $text . '.txt"');
  } else {
    echo "Ошибка: отсутствует параметр text!";
  }
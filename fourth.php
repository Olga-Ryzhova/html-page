<?php
  session_name();
  session_start();

  echo 
    "<h2>Это 4 страница.<br/></h2> 
    <h3> Количество открытий предыдущей страницы: {$_SESSION['count']} </h3>";



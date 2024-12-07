<?php
  session_name();
  session_start();
  
  $_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 0;

  if ( $_SESSION['count'] === 3) {
    header('Location: ./fourth.php');
  }

  echo"<h2>Это 3 страница.</h2>";


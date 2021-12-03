<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: .\app\templates\login.php');
?>

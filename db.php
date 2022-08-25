<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'sqluser',
  'Testpass123',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>

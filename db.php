<?php
session_start();

$conn = mysqli_connect(
  'phpmysql-server.mysql.database.azure.com',
  'sqluser',
  'Testpass123',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>

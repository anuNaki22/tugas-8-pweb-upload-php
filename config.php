<?php

$server = "localhost";
$user = "root";
$password = "";
$db_name = "new_pweb_ppdb";

$db = mysqli_connect($server, $user, $password, $db_name);

if (!$db) 
{
  die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
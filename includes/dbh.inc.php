<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem_tut";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName, 3307);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
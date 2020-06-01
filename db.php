<?php
// xUdz%I2E пароль к базе данных gula612_php

$dbhost = "localhost";
$dbuser = "gula612_php"; //root
$dbpass = "xUdz%I2E"; //root
$dbname = "gula612_php";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8"); 

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД ".$mysqli->connect_error);
}
<?php
//CONEXION
$server = 'localhost';
$dbuser = "root";
$password = "";
$dbname = "blog_master";

$db = mysqli_connect($server, $dbuser, $password, $dbname);

//Seteamos las tildes y eñes
mysqli_query($db, "SET NAMES 'utf8'");

//Iniciar la sesion
session_start();
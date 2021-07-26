<?php
//CONEXION
$server = 'localhost';
$dbuser = "root";
$password = "";
$dbname = "blog_master";

$db = mysqli_connect($server, $dbuser, $password, $dbname);

//Seteamos o configuramos para que admita o traiga las tildes y eñes de la BD
mysqli_query($db, "SET NAMES 'utf8'");

//Iniciar la sesion
session_start();
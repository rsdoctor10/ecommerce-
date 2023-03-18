<?php
$servername="localhost";
$dbitem_name="root";
$dbitem_price="";
$dbname="midterm";

$conn = mysqli_connect($servername,$dbitem_name,$dbitem_price,$dbname);

// Check connection
if (!$conn){
    die("Maintenance Mode.");
}

session_start();
include_once ("sql_utilities.php");

<?php
$servername = "localhost";
$username = "root";
$dbname = "yoga";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "Data Base not connected".mysqli_connect_error();
}

?>
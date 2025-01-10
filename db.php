<?php
$host='localhost';
$user='root';
$password='';
$database='jose';
$conn=mysqli_connect($host,$user,$password,$database);
if(!$conn){
    echo'unable to connect';
}


?>
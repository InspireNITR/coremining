<?php


$servername="localhost";
$username="root";
$password="";
$database="inspire";


$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    echo"Connection  not Succesful";
}





<?php
$serwer='localhost';
$user='klemens.mulica';
$password='my53p1Gsql';
$db='klemens.mulica';
$conn=mysqli_connect($serwer,$user,$password,$db);
if(!$conn){
    echo"blad poloczenia".mysqli_connect_error();
}else{
    echo"Poloczenie udane";
}

?>
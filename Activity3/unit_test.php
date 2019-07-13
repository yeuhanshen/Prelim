<?php
require("../model/UserModel.php");

$Data= new UserModel();

$Data->name = "john flores";
$Data->email = "john@flores.com";
$Data->username = "johnflores";
$Data->password ="1234";
echo"Case#1: Inserting record  RESULT :";
var_dump($Data->insert());


$Data->password = "5";
$Data->id = 3;
echo "Case#2 updating record RESULT :";
var_dump($Data->update());


echo "Case#3 Read All record RESULT";
var_dump($Data->readAll());

$Data->id = "41";
echo"Case#4 Delete record RESULT ";
var_dump($Data->delete());


?>
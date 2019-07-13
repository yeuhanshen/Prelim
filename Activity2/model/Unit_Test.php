<?php
require("UserModel.php");
//case 1 Inserting data using valid SQL insert command
$usermodelObj = new UserModel();
$usermodelObj->name = 'John';
$usermodelObj->email = 'John@flores.com';
$usermodelObj->username = 'johnflores';
$usermodelObj->password = 'johnflores';


//echo "Case 1";
//var_dump($usermodelObj->insert());

// echo "Case 2";
// var_dump($usermodelObj->update(1));

//echo "Case 3";
//var_dump($usermodelObj->readall());

//echo "Case 4";
//var_dump($usermodelObj->delete(2));

//echo "Case 5";
//var_dump($usermodelObj->insert(3));

//echo "Case 6";
//var_dump($usermodelObj->update('a'));

echo "Case 7";
var_dump($usermodelObj->delete('a'));


?>
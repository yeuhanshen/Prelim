<?php
require ("Database.php");
//case 1 Inserting data using valid SQL insert command
$dbObj = new Database();
//$result = $dbObj->execute("INSERT INTO tbluser(name,age,address,nationality) VALUES ('John',19,'Cebu City','Filipino')");
//echo "Case1 result:".$result;
//case 2 Updating data using valid SQL update command
//$result = $dbObj->execute("UPDATE tbluser SET name='John Flores'where id=1");
//echo "Case2 result:".$result;
//case 3
//$result = $dbObj->execute("SELECT * FROM tbluser");
//echo "Case3 result:".$result;
//case 4
//$result = $dbObj->execute("DELETE FROM tbluser where id=1");
//echo "Case4 result:".$result;
//case 5
//$result = $dbObj->execute("INSERT INTO tbluser(names,age,address,nationality) VALUES ('John',19,'Cebu City','Filipino')");
//echo "Case5 result:".$result;
//case 6
//$result = $dbObj->execute("UPDATE tbluser SET names='John Flores'where id=0");
//echo "Case6 result:".$result;
//case 7
//$result = $dbObj->execute("SELECT * FROM tblusers");
//echo "Case7 result:".$result;
//case 8
$result = $dbObj->execute("DELETE FROM tblusers where id=1");
echo "Case8 result:".$result;
?>
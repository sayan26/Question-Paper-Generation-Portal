<html>
<head>
	<title> Update Question </title>
</head>
<body style="margin:100px" bgcolor="green">





<form action="" method="POST">
        <div class='container'>
    <label for='username' >Question:</label><br/>
    <input type='text' name='username' id='username' value='<?php $sql ?>' maxlength="50" /><br/>
    <div class='container'>
    <input type='submit' name='Submit' value='Submit' />

</form>


<?php

require_once("./updatequestion.php");


define ("DB_HOST", "localhost"); // set database host

define ("DB_USER", "Sayan"); // set database user

define ("DB_PASS","sayan@123"); // set database password

define ("DB_NAME","login"); // set database name



$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");

$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");


$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sql = "INSERT INTO `questions`(`id`, `questions`) VALUES ([value-1],[value-2])";

if($con->query($sql)=== TRUE)
{
	echo "New Record Entered Successfully";
}
else
 {
 	  echo "Not Inserted";
 }


?>

</body>
</html>
<?php
require("./register.php");
require("./form.php");

$link = mysqli_connect("mysql.hostinger.in", "u839439463_queb", "sayan123", "u839439463_queb");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "INSERT INTO registration (subject, semester) VALUES ('$Subject', '$semester')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>
<?php

$con = mysqli("connect.php");
$qry = var_faculty;



function display()
{
	if($qry==true)
	{
	    echo 'Faculty Already Exists';
	}    
	    else
	    {
	      echo 'Faculty Inserted';
	    }
	}




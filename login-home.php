<?PHP
require_once("./include/membersite_config2.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Home page</title>
  
</head>
<body  style = "margin:100px" background="img/online-education.jpg" bgproperties="fixed">

<div id='fg_membersite_content'>
	<font style="Impact" size="7"><center>Quebsys</center></font>
	<br>
<font style="Impact" size="5"><center>Faculty Of Engineering And Technology, SRM University</center></font>
<br> 
<br>
<p align="left"> <font size ="5">Welcome back : <?= $fgmembersite->UserFullName(); ?> </font>  
<p align="right"><a href='logout.php'> <font size ="4">Logout</a> </p> </font>
<p align="left"><a href='access-controlled.php'><font size ="5">Information</a></p> </font>
<br>
<p align="left"><a href='question.php'><font size ="5">Generate Question Paper</a></p></font>
<br>
<p align="left"><a href='change-pwd.php'><font size ="5">Change password</a></p></font>
<br>

</div>
</body>
</html>

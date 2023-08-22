<!DOCTYPE html>
<html>
<head>
<title>Html -Php  Demo </title>
<head>
<body>
<form method =”post”
action =”http://localhost/getdata.php”>
Name:<input type=”text” name=”myname” size=”20”/>
<br/>
<input type =”submit” name=”submit” value=”value”/>
</form>
<?php>
Print”the name is:”;
Print $-post[“my name”];
$len= strlen ($_post[“my name”];
Print”<br/> the length of name is:”;
Print$len ;
?>
</body>
</html>
 

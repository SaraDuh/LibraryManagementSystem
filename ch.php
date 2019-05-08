<?php
if (!empty($_POST))
{echo"emmmmpppttyyyyy";}
for($j=0;$j<$i;$j++){
$t=$tmp[$j];
echo $t;
if(isset($_POST["sara@gmail.com"])){
echo "gbjhnk";
if(!($database=mysql_connect("localhost","root","")))
die ("<p>Could not connect to database</p>");
if(!mysql_select_db("Library management system",$database))
die ("<p>Could not open Library management system database</p>");
echo $tmp[$j];
// mail($tmp,"message","it's time to retrieve the book<3");
mysql_close($database);
// header("Location: Sendnotification.php");
}
}
?>
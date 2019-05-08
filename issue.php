<?php
session_start();

if(!isset($_SESSION['lib'])){
header("location: signin.php");
}

$database=mysql_connect("localhost","root","");
$sdb=mysql_select_db("Library management system",$database);
if(isset($_POST['SS'])){
if(isset($_POST['issuedBooks'])&&is_array($_POST['issuedBooks'])){
foreach($_POST['issuedBooks'] as $selectd){
$date=date('Y-m-d',strtotime("+7 days"));
 echo "$date";
$query="UPDATE  issuedBook SET issued='1', date='$date'  WHERE id='$selectd'";
 $result=mysql_query($query,$database);
 $rrr=mysql_query("SELECT * FROM Book INNER JOIN issuedBook on issuedBook.ISBN=Book.ISBN WHERE issuedBook.id='$selectd'",$database);
$row=mysql_fetch_assoc($rrr);
$num= $row['numOfCopies']; 
$isbn=$row['ISBN']; 
 $num--;
$q="UPDATE  Book SET numOfCopies='$num' WHERE ISBN='$isbn'";
mysql_query($q,$database);
  }

} mysql_close($database);
 header("location:Issue a book.php");
}


?>
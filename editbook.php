 <?php
session_start();
if(!isset($_SESSION['lib'])){
header("location: signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit a book</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="moreStyle.css">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
     
          <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="librarian.php">Home</a>
            </li>
            <li class="nav-item">
<div id="submenu">
              <a class="nav-link js-scroll-trigger" href="#">Manage books</a>
              <div id="sublist">
              <a class="nav-link js-scroll-trigger" href="Issuebook.php">Issue a book</a>
              <a class="nav-link js-scroll-trigger" href="Addnewbook.php">Add a new book</a>
</div>
              </div>
              </li>
           <li class="nav-item">
<div id="submenu">
              <a class="nav-link js-scroll-trigger" href="#">View report</a>
              <div id="sublist">
              <a class="nav-link js-scroll-trigger" href="viewexistingbookreport.php">existing books</a>
              <a class="nav-link js-scroll-trigger" href="viewissuedbookreport.php">issued books</a>
              
              </div>
              </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="ViewCategories.php">View categories</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Sendnotification.php">Send notification</a>
            </li>
           
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Accessallmembersaccounts.php">Access members accounts</a>
            </li>    
            <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="SearchBook.php">Search a book</a>

         </li>   
          </ul>

               <a class="nav-link js-scroll-trigger" href="logout.php"><img src="utilities.png" width="15%"class="ml" ></a>

    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
                          <h1>Edit book information:</h1>

      </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
<form method="post" action="#">
        <input type="text"  class="form-control" name="bookName" placeholder="Enter book name"  autofocus>
        <input type="text"  class="form-control" name="copy" placeholder="Enter copy of the book">
        <input type="text"  class="form-control" name="authors" placeholder="Enter authors name">
        <input type="text"  class="form-control" name="ISBN" placeholder="Enter ISBN">
        <input type="text"  class="form-control" name="numOfCopies" placeholder="Enter number of copies">
        <input type="text" class="form-control" name="categoryName" placeholder="Enter it's type(category)">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Edit</button>
        </form>

       
          </div>
          <?php
if(isset($_POST["submit"])){
if(!($database=mysql_connect("localhost","root","")))
die ("<p>Could not connect to database</p>");
if(!mysql_select_db("Library management system",$database))
die ("<p>Could not open Library management system database</p>");
$is=$_SESSION['is'];
   
  $bookName=$_POST["bookName"];
  if($bookName!=""){
    $bookName = test_input($_POST["bookName"]);
      $sql=mysql_query("UPDATE Book SET bookName = '$bookName' WHERE ISBN='$is'");}
         
 $copy = $_POST["copy"];
if($copy!=""){
  $copy = test_input($_POST["copy"]); 
  $sql=mysql_query("UPDATE Book SET copy = '$copy' WHERE ISBN='$is'");} /////
  
  
  $authors =$_POST["authors"];
  if($authors!=""){
  $authors = test_input($_POST["authors"]);
   $sql=mysql_query("UPDATE Book SET authors = '$authors' WHERE ISBN='$is'");}///


  $numOfCopies = $_POST["numOfCopies"];
if($numOfCopies!=""){
  $numOfCopies = test_input($_POST["numOfCopies"]); 
   $sql=mysql_query("UPDATE Book SET numOfCopies = '$numOfCopies' WHERE ISBN='$is'");}///
   
   
    $categoryName = $_POST["categoryName"];
    if($categoryName!=""){
  $categoryName = test_input($_POST["categoryName"]); 
$sql=mysql_query("SELECT categoryName FROM Category  WHERE  WHERE ISBN='$is''");
 if(mysql_num_rows($sql)==0){
       $sql1=mysql_query("INSERT INTO Category (categoryName) VALUES('$categoryName')");}
          $sql=mysql_query("UPDATE Book SET categoryName = '$categoryName' WHERE ISBN='$is'");}///

      
      
  $ISBN = $_POST["ISBN"];

if( $ISBN!=""){
  $ISBN = test_input($_POST["ISBN"]);
$ISBNExist=mysql_query("SELECT ISBN FROM Book  WHERE ISBN='$ISBN'");
 if(mysql_num_rows($ISBNExist)>0){
    echo "<p style='color:red;'>"."ISBN already exists"."</p>"; 
     
    die();}
    else {
      $sql=mysql_query("UPDATE Book SET ISBN = '$ISBN' WHERE ISBN='$is'");
  
    }}
          





mysql_close($database);
header("Location:ViewCategories.php");
    exit;
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>










        </div>
      </div>
    </section>

   
   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>

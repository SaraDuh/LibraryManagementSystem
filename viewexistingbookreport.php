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
<link rel="stylesheet" type="text/css" href="moreStyle.css">

    <title>View report of existing book</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
     <h1>Existing book report:</h1>

      </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
           <?php 
          
if(!($database=mysql_connect("localhost","root","")))
die ("<p>Could not connect to database</p>");
if(!mysql_select_db("Library management system",$database))
die ("<p>Could not open Library management system database</p>");
$result = mysql_query("SELECT * FROM Book");
echo "<table style='width:100%'>";
echo "<tr>";
echo "<th style='color:blue'>Book Name</th>";
echo "<th style='color:blue'>Copy</th>";
echo "<th style='color:blue'>Authors</th>";
echo "<th style='color:blue'>ISBN</th>";
echo "<th style='color:blue'>Category</th>";
echo "<th style='color:blue'>Number of copies</th>";
echo "</tr>";

while ($row = mysql_fetch_assoc($result)) {
echo "<tr>";
echo "<td>".$row["bookName"]."</td>";
echo "<td>".$row["copy"]."</td>";
echo "<td>".$row["authors"]."</td>";
echo "<td>".$row["ISBN"]."</td>";
echo "<td>".$row["categoryName"]."</td>";
echo "<td>".$row["numOfCopies"]."</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($database);
exit;
?>
        </div>
      
      </div>
    </section>

   
    <!-- Footer -->
 

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>

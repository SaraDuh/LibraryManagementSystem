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

    <title>Librarian page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="moreStyle.css">

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
        <h1>WELCOME TO LIBRARY MANAGEMENT SYSTEM</h1>
        <p>This page is for librarian</p><br><br
        

    </header>



   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>

<!DOCTYPE html>
<html lang="en">

  <head>
  <?php
session_start();

if(!isset($_SESSION['member'])){
header("location: signin.php");
}
?>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>member home page</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    
       <!-- My style -->
<link rel="stylesheet" type="text/css" href="moreStyle.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <div id="acco">
            <a  class="navbar-brand js-scroll-trigger" href="#" >Account</a>
             <div id="accountList">
              <a class="nav-link js-scroll-trigger" href="#">update information</a>
              <a class="nav-link js-scroll-trigger" href="#">sign out</a>
              </div></div>

        <a class="navbar-brand js-scroll-trigger" href="SearchBook.php">Search</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             
              <li class="nav-item"><div id="submenu">
              <a class="nav-link js-scroll-trigger" href="#">View</a>
              <div id="sublist">
              <a class="nav-link js-scroll-trigger" href="#Categories">books categories</a>
              <a class="nav-link js-scroll-trigger" href="issueBooktohim.php">issued books</a>
              <a class="nav-link js-scroll-trigger" href="issueBookHistory.php">issued books history</a>

              </div></div></li>
              <li>
                
               <div id="submenu">
              <a class="nav-link js-scroll-trigger" href="#">request</a>
              <div id="sublist">
             <a class="nav-link js-scroll-trigger" href="requestBook.html">new book</a>
              <a class="nav-link js-scroll-trigger" href="extend.php">extend due date</a>

              </div></div></li>



              </li>
                           <a class="nav-link js-scroll-trigger" href="viewNotification.php"><img src="stock-vector-bell-icon-in-trendy-flat-style-isolated-on-grey-background-notification-symbol-for-your-web-site-407306239.jpg" width=20px"></a>

          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>WELCOME To LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
             
          </div>
        </div>
      </div>
    </section>
    
     
    
   

    
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact us</h2>
            <p class="lead"> 
            <div class="contactUs">

            <img src="img/page1_icon1.png" alt="" class="img1 no_resize">
            <h6><a href="mailto:librian@gmail.com">Ask a Librarian</a></h6>
            <p> </p>
       
            <img src="img/page1_icon3.png" alt="" class="img1 no_resize">
            <h6><a href="Signup.html">Join the Library</a></h6>
            <p> </p>
             </div>
    </p>
          </div>
        </div>
      </div>
    </section>
<br>
<br>
<br>
<br><br>
<br>
  
  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>

<?php
if(!isset($_SESSION['member'])){
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

    <title>view notification</title>
    
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

        <a class="navbar-brand js-scroll-trigger" href="#page-top">Search</a>
        <input type="text">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             
              <li class="nav-item"><div id="submenu">
              <a class="nav-link js-scroll-trigger" href="#">View</a>
              <div id="sublist">
              <a class="nav-link js-scroll-trigger" href="#Categories">books categories</a>
              <a class="nav-link js-scroll-trigger" href="issueBook.html">issued books</a>
              <a class="nav-link js-scroll-trigger" href="issueBookHistory.html">issued books history</a>

              </div></div></li>
              <li>
                
               <div id="submenu">
              <a class="nav-link js-scroll-trigger" href="#">request</a>
              <div id="sublist">
             <a class="nav-link js-scroll-trigger" href="requestBook.html">new book</a>
              <a class="nav-link js-scroll-trigger" href="extend.html">extend due date</a>

              </div></div></li>



              </li>
                           <a class="nav-link js-scroll-trigger" href="viewNotification.php"><img src="stock-vector-bell-icon-in-trendy-flat-style-isolated-on-grey-background-notification-symbol-for-your-web-site-407306239.jpg" width=20px"></a>

          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>View notifications:</h1>
        </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <?php
if(!($database=mysql_connect("localhost","root","")))
die ("<p>Could not connect to database</p>");
if(!mysql_select_db("Library management system",$database))
die ("<p>Could not open Library management system database</p>");
$result = mysql_query("SELECT  Book.bookName, Book.ISBN,Book.copy,issuedBook.date,issuedBook.message,Member.memberName
FROM issuedBook
INNER JOIN Book
ON issuedBook.ISBN=Book.ISBN
INNER JOIN Member
ON Member.memberName = issuedBook.memberName
WHERE Member.memberName='".$_SESSION['member']."'AND message >"."''" );
echo "<table style='width:100%'>";
echo "<tr>";
echo "<th style='color:blue'>Message</th>";
echo "<th style='color:blue'>Book Name</th>";
echo "<th style='color:blue'>Copy</th>";
echo "<th style='color:blue'>ISBN</th>";
echo "<th style='color:blue'>Date</th>";
echo "</tr>";
while ($row = mysql_fetch_assoc($result)) {
echo "<tr>";
echo "<td>".$row["message"]."</td>";
echo "<td>".$row["bookName"]."</td>";
echo "<td>".$row["copy"]."</td>";
echo "<td>".$row["ISBN"]."</td>";
echo "<td>".$row["date"]."</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($database);
?>
    
          </div>
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

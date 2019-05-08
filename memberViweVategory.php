<?php
if(!isset($_SESSION['member'])){
header("location: signin.php");
}?>
<!DOCTYPE html>
<html lang="en">
 
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>view for member</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    
       <!-- My style -->
<link rel="stylesheet" type="text/css" href="moreStyle.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
  <body id="page-top">

    <!-- Navigation -->
    <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <div id="acco">
            <a  class="navbar-brand js-scroll-trigger" href="#" >Account</a>
             <div id="accountList">
              <a class="nav-link js-scroll-trigger" href="#">update information</a>
              <a class="nav-link js-scroll-trigger" href="logout.php">sign out</a>
              </div></div>

        <a class="navbar-brand js-scroll-trigger" href="#page-top">Search</a>
        <input type="text">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             
              <li class="nav-item"><div id="submenu">
              <a class="nav-link js-scroll-trigger" href="">View</a>
              <div id="sublist">
              <a class="nav-link js-scroll-trigger" href="memberHomePage.html#Categories">books categories</a>
              <a class="nav-link js-scroll-trigger" href="issueBook.html">issued books</a>
              <a class="nav-link js-scroll-trigger" href="issueBookHistory.html">issued books history</a>

              </div></div></li>
              <li>
                
               <div id="submenu">
              <a class="nav-link js-scroll-trigger" href="#">request</a>
              <div id="sublist">
              <a class="nav-link js-scroll-trigger" href="requestBook.html">new book</a>
              <a class="nav-link js-scroll-trigger" href="#">extend due date</a>
              

              </div></div></li>



              </li>
             
          </ul>
        </div>
      </div>
    </nav>
 
    <header class="bg-primary text-white">
      <div class="container text-center">
   
      </div>
    </header>
 
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
  <br>
  <br>
  <br>
        <?php
$database=mysql_connect("localhost","root","");
mysql_select_db("Library management system",$database);
    $strSQL = "SELECT * FROM category ORDER BY categoryName DESC";
       $rs = mysql_query($strSQL,$database);
    // Execute the query (the recordset $rs contains the result)
    
    // Loop the recordset $rs
   
// Each row will be made into an array ($row) using mysql_fetch_array
   echo "<form class='form-signin' action='#' id='test' method='post'> ";
   
    while($row = mysql_fetch_array($rs)) {
    echo "<input type='radio' name='cate' value=".$row["categoryName"].">".$row["categoryName"]."<br>";   
    }
     echo " <input class='btn btn-primary'  type='submit' name='Submit' value='View books of selected category '>";
    echo "</form>";
    
    if(isset($_POST['Submit'])&&isset($_POST['cate'])){
        $categoryName=$_POST['cate'];
        $result = mysql_query("SELECT * FROM Book WHERE categoryName ='$categoryName'",$database);
        echo "<table style='width:100%'>";
        echo "<tr>";
        echo "<th style='color:blue'>Book Name</th>";
        echo "<th style='color:blue'>Copy</th>";
        echo "<th style='color:blue'>Authors</th>";
        echo "<th style='color:blue'>ISBN</th>";
        echo "<th style='color:blue'>Category</th>";
        echo "<th style='color:blue'>Number of copies</th>";
        echo "</tr>";
                    echo "<form method='post' action='requestBook.php'>";

        while ($row = mysql_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['bookName']."</td>";
            echo "<td>".$row['copy']."</td>";
            echo "<td>".$row['authors']."</td>";
            echo "<td>".$row['ISBN']."</td>";
            echo "<td>".$row['categoryName']."</td>";
            echo "<td>".$row['numOfCopies'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='requstedBook[]' value=".$row['ISBN']."> Request<br>";
            echo "</tr>";
        }

         echo "</table>";
             echo " <input   type='submit' name='SS' value='send request'>";
              echo "</form>";  
             echo "<form method='post' action='#'>"."<br><p>Enter book isbn to edit book information:</p>"."<br><input type='text' name='inf1'> "." <input   type='submit' name='inf' value='Ok'>"."</form>";
       }

if(isset($_POST['inf'])){
if (empty($_POST['inf1']))  
echo "<p style='color:red;'>"."Enter ISBN first!"."</p>";
else{
$s=$_POST['inf1'];
$sql=mysql_query("SELECT ISBN FROM Book WHERE ISBN='$s'");
if(mysql_num_rows($sql)==0){
echo "<p style='color:red;'>"."Invalid ISBN!"."</p>";}
else{
$_SESSION["is"]=$_POST['inf1'];
header("Location:editbook.php");}
}
}    ?> 
<!-- 

    <script> $document.ready(function(){
    $('.pic').click(function(){
    $(this).hide();
 -->
<!-- 
    // var value=$this.val();
//     var ajaxurl='ajax.php',
//     data={'action': value };
//     $.post(ajaxurl,data,function(response){
//     alert('action performed successfully'); 
//     });
//     });
    });
 --> <!-- 
</script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script>
 -->



    
    
    
    
    
    <?php
        mysql_close($database);
       
    ?>
 </div>
        </div>
      
      </div>
 
<br>
<br>
<br>
<br>
<br>
<br>
 
  
    
      <!-- /.container -->
    </footer>
 
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 
    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
 
  </body>
 
</html>
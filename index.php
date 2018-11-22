<!DOCTYPE html>

<?php
include("PHP/connect.php");
include("PHP/Mysql.class.php");
include("PHP/MysqlStatement.class.php");
?>

<html>
<head>
    <!-- Include meta tag to ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include jQuery Mobile stylesheets -->
    

    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

    <!-- Include the jQuery library -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Include the jQuery Mobile library -->
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link href="CSS/style.css" rel="stylesheet">
</head>
<body>



<?php
/**
 * DEBUG:
 * echo $MysqlStatement_delete->sql; Anzeige SQL Statement
 */

/* get the mysql object */
$Mysql = new Mysql();


/* settings data if a new version is out there and the std STP ID */
//SELECT * FROM user WHERE name="matthias" AND pw="1234";

$sql = "SELECT * FROM user WHERE username=:0 AND userpassword=:1";
$MysqlStatement_select = $Mysql->getMysqlStatement($sql);
$MysqlStatement_select->execute($_POST[name], $_POST[pw]);

?>


<div data-role="page" id="LandingPage">

<!-- 
     <div style="z-index:-50 !important; postion: fixed !important;" class="background">
          <img style="z-index:-50 !important; postion: fixed !important;" src="image/1.png" title="SmartGlassed_BG">

</div>  -->



    <div data-role="main" class="ui-content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

         <label for="usrnm" class="ui-hidden-accessible">username:</label>
         
          <input type="text" name="name" id="usrnm" placeholder="username">

          <label for="pswd" class="ui-hidden-accessible">password:</label>
          <input type="text" name="pw" id="pswd" placeholder="Password">
      

            <input type="submit" value="LOGIN" >
            FORGOT YOUR PASSWORD?<br>
            DONT'T HAVE AN ACCOUNT YET?
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <input type="submit" value="SIGN UP" >



        </form>

    </div>



 <?php 

        if ($MysqlStatement_select->num_rows>=1)
        {
        echo "it worked";

        header("Location: http://localhost:8888/SmarterThanSmarties/login.php");
        
        }

?>

</div>




</body>
</html>


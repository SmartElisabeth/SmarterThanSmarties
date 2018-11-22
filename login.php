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
    <div data-role="header">
        <h1>Smart<span>Glassed Second Page<span></h1>

    </div><!-- /header -->

    <div data-role="main" class="ui-content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
            Username: <input type="text" name="name" ><br>

             Password: <input type="text" name="pw"><br>
             <a href="onboarding1.php" class="ui-btn ui-btn-b ui-corner-all">Login</a>


            <input type="submit" value="Login">

            


        </form>
    </div>

 <div class="background">
          <img src="image/1.png" title="SmartGlassed_BG">
</div> 

    <?php echo "<br /> SQL Statement: <br/>" . $MysqlStatement_select->sql; ?>

    <?php echo "<br /> NUM: " . $MysqlStatement_select->num_rows; ?>


    <?php

    echo "<br /> Beliebiger Inhalt: <br />";
    while ($data = $MysqlStatement_select->fetchArray()) {
        echo $data['content'];
    }
    ?>
</div>



</body>
</html>


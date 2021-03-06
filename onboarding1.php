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
<link rel="stylesheet" href="themes/Glass1.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />

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


<div data-role="page" id="onboarding1" class="onboarding1">
    <div  data-role="main" class="ui-content" data-theme="a">

   <div style="top: 55%; position: absolute; width: 93%; text-align: center;">
    <p>TO MEET YOUR PREFERENCE<br>
WE ASK YOU TO ANSWER 
THREE SIMPLE 
QUESTIONS.</p>
</div>

        <!--  <div class="background">
            <img src="image/4.png" title="SmartGlassed_BG" > -->
            <div style="top: 83%; position: absolute; width: 93%;">

        <a href="onboarding2.php" class="ui-btn" data-ajax="false" >NEXT</a>
            </div>

        <div style="top: 93%; position: absolute; width: 93%; text-align: center;">

        <a href="onboarding2.php" data-ajax="false"  >SKIP</a>
            </div>

        </div>


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


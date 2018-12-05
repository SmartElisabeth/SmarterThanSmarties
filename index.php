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






<div data-role="page" id="Login" class="login">

<!-- 
     <div style="z-index:-50 !important; postion: fixed !important;" class="background">
          <img style="z-index:-50 !important; postion: fixed !important;" src="image/1.png" title="SmartGlassed_BG">

</div>  -->



    <div data-role="main" class="ui-content" data-theme="a">
 
       <div style="top: 50%; position: absolute; width: 93%;">
        
    
      

         <label for="usrnm" class="ui-hidden-accessible">username:</label>
         
          <input type="text" name="name" id="usrnm" placeholder="username">

          <label for="pswd" class="ui-hidden-accessible">password:</label>
          
          <input type="text" name="pw" id="pswd" placeholder="Password">
      

            <button onClick='checkIn();'> Login </button>

             <div align="center">
             <br>
            FORGOT YOUR PASSWORD?
            </div>

            <div style="margin-top:30%"; align="center"; >  
            DON'T HAVE AN ACCOUNT YET? 
            <a  href="#"> SIGN UP</a>
            </div>


        </div>
        </div>
  





</div>

<script>
    function checkIn(){

       var Password_Value = $('#pswd').val();
       var name_Value = $('#usrnm').val();

        $.post( "checklogin.php",{ name: name_Value, pw: Password_Value}, function(data) {
            console.log("worked " + data);




            if (data ==1){


            console.log("jaa");
            $.mobile.changePage( "onboarding1.php", { reverse: true, transition: "fade", changeHash: true,reload:true });
       

            }
            else {
            console.log("nein");

            }



        });
    }
</script>


</body>

</html>


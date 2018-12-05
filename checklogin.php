

<?php
include("PHP/connect.php");
include("PHP/Mysql.class.php");
include("PHP/MysqlStatement.class.php");

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

if ($MysqlStatement_select->num_rows >= 1)

{
echo "1";
}
else {

echo "0";


}

?>
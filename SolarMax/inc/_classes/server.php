<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "database_solarmax";
$charset  = 'utf8mb4';


date_default_timezone_set("America/New_York");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
mysqli_query($con, "SET NAMES UTF8") or die(mysqli_error($con));
setlocale(LC_TIME, 'us_US');
date_default_timezone_set("America/New_York");
$con->set_charset($charset);
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
}

?>
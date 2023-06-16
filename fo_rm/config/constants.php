<?php  
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "user_db";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if($conn->connect_error){
    die('Cennection failed '.$conn->connect_error);
}

?>
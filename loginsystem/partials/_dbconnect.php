<?php
$server = "localhost:3307";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
//     echo "Success Connected";
// }
// else{
    die("Error".mysqli_connect_error());
}
?>
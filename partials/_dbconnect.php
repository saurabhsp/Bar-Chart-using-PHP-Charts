<?php
$server="localhost";
$username = "root";
$password= "";
$database= "blackcoffer";



$conn= mysqli_connect($server,$username,$password, $database);
if(!$conn){
//     echo "success";
// }
// else{
    die ("error db not connected". mysqli_connect_error());
}
?>
<?php

$server = "apdbs.cngnvrj4k7he.ap-south-1.rds.amazonaws.com";
$username = "apdbs";
$password = "aryanpatel";
$database = "aryan";

$con = mysqli_connect($server, $username, $password, $database);

if($con){
    // echo "Connection Successful";
}else{
    echo "<script>alert('Connection Failed');</script>";
}

?>
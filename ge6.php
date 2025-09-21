<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'PRACTICE';

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
// else{
//     echo "Connected Successfully";
// }
// $sql = 'CREATE DATABASE PRACTICE';
// if (mysqli_query($conn,$sql)){
//     echo "Database Created Successfully.";
// }
// else{
//     echo "Database Error".mysqli_error($conn);
// }
// $sql = 'CREATE TABLE DATA(id int(6) auto_increment primary key,
// name varchar(30) not null,
// email varchar(30) not null,
// address varchar(50),phone int(10) not null)';

// if(mysqli_query($conn,$sql)){
//     echo "Table Created Successfully";
// }
// else{
//     echo "Table Error".mysqli_error($conn);
// }


mysqli_close($conn);
?>
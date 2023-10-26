<?php
$servername = "localhost";  
$username = "root";
$password = "";
$dbname = "arun";



$name=$_POST['name'];
$mail=$_POST['email'];
$pass=$_POST['pass'];
$state=$_POST['state'];
$loc=$_POST['location'];
$pin=$_POST['pincode'];
$blood=$_POST['blood'];
$age=$_POST['age'];
$sex=$_POST['gender'];
$mob=$_POST['mobile'];
$paid=$_POST['paid'];



$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO donor_reg (name,email,pass,state,location,pincode,blood,age,gender,mobile,paid)
VALUES ('".$name."','".$mail."','".$pass."','".$state."','".$loc."','".$pin."','".$blood."','".$age."','".$sex."','".$mob."','".$paid."')";
if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codexworld";

$id = $_GET['id'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM donor_reg WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully ";
    } else {
    echo "Error on deleting the record: " . $conn->error;
    }
 
    $conn->close();

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_data";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Sorry, connection was not established" . mysqli_connect_error());
}

if (isset($_GET["delUser"])) {
    $name = $_GET["delUser"];

    $sql = "DELETE FROM info WHERE Username = '$name'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:Admin.php');
    } else {
        die(mysqli_connect_error());
    }
}

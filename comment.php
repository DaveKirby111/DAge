<?php

$server = "localhost";
$username = "root";
$pass = "root";
$db = "DAge";
$name = $_POST['uname'];
$comm = $_POST['comm'];

$conn = new mysqli($server, $username, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into comments(name, comment) 
values ('$name', '$comm')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>

<br><br>

<a href="comments.php" class="return">Return to comments</a>
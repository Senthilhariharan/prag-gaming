<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
	session_start();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$team = $_POST['Team'];
	$member1 = $_POST["member1"];
	$member2 = $_POST['member2'];
	$member3 = $_POST['member3'];
	$platform = $_POST['platform'];
	$comment = $_POST['comment'];
	$zip = $_POST['zip_file'];
	
$sql = "INSERT INTO upload (Team, member1, member2, member3, comment)
VALUES ('John', 'Doe', 'john','john','john')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
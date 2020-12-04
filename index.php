<?php

$servername = "localhost";
$username = "admin";
$password = "Blaznprinx@13";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Img FROM table_image";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> image: ". $row["ID"]. $row["Img"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>
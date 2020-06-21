<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "org";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, email, phone, subject, message FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table><tr><th>Name</th><th>Email</th><th>Phone</th><th>Subject</th><th>message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["subject"]. "</td><td>" . $row["message"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
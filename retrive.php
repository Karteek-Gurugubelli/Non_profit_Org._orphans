
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

$sql = "SELECT id, fname, lname, gender, age, study FROM child";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table><tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>age</th><th>Study</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fname"]. "</td><td>" . $row["lname"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["age"]. "</td><td>" . $row["study"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

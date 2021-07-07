<?php
// define
define('DB_SERVERNAME', 'localhost');
define("DB_USERNAME", 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'university');

//create sqli
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection 
if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Connection succesful";
}
//prepared statement
$statement = $conn->prepare('INSERT INTO `students` (`name`, `surname`, `email`) VALUES (?, ?, ?) ');
$statement->bind_param('sss', $name, $surname, $email);
$name = 'Stefania';
$surname = 'Mastrella';
$email = 'stemas@example.it';
$statement->execute();

//query
$sql = "SELECT * FROM `students`";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) { ?>
<h1>Students List</h1>
<?php
while($row = $result->fetch_assoc()) { ?>
<div class="student" style="padding: 20px 0;">
    <p> <strong>Student Name:</strong><?= $row['name']; ?></p>
    <p> <strong>Student Lastname:</strong><?= $row['surname']; ?></p>
    <p> <strong>Student E-mail:</strong><?= $row['email']; ?></p>
</div>
<?php }
} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
}
$conn->close();
?>

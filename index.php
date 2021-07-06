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
//query
$sql = "SELECT * FROM `students` WHERE YEAR(date_of_birth) = 1990";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) { ?>
<h1>Students born in 1990</h1>
<?php
while($row = $result->fetch_assoc()) { ?>

<?php }
} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
}
$conn->close();
?>
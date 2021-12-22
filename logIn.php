<?php
// replace **** with your servername, username, password, dbname
$conn = new mysqli('****', '****', '****', '****');
    
if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}
    
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM userstable WHERE username = ('$username') AND password = ('$password')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo 'Hello ' . $row['username'];
    }
} else {
    echo "0 results";
}

$conn->close();

?>

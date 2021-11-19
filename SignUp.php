<?php
$conn = new mysqli('****', '****', '****', '****');
    
if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}
    
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO userstable (username, password) VALUES ('$username', '$password')";

if($conn->query($sql) === TRUE) {
    echo "Account created!";
} else {
    echo "Error! " . mysqli_error($conn);
}

mysqli_close($conn);

?>
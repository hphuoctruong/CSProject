<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Quyen_user_database');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);


// Attempt insert query execution
// $sql = "INSERT INTO user_info (username, email, password, first_name, last_name) VALUES ('spiderman', 'peterparker@mail.com', '1234', 'Peter', 'Parker')";
// if(mysqli_query($link, $sql)){
//     echo "Records inserted successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }

?>
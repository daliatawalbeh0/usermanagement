<?php
session_start();
require 'connection4.php';

$user_name = $_SESSION['user_name'];
echo "Hello ". $user_name;

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
 
    <form action="signup4.php" method="post" enctype="multipart/form-data">
       
    </form>
</body>
</html>

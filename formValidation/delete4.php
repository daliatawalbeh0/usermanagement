<?php 
if(isset($_GET["id"])){
    $user_id = $_GET["id"];
    include 'connection4.php';
$sql="DELETE FROM users WHERE user_id=$user_id";
$conn ->query($sql);
}
header("location: admin4.php");
exit;

?>
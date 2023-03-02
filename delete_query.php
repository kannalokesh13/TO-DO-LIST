<?php
@session_start();
include "databaseconnection.php";
$email=$_SESSION['email1'];
if($_GET['tasks']){
    $task=$_GET['tasks'];
$query="DELETE FROM tolist_data WHERE email='$email' AND tasks='$task'";

    // $task_id = $_GET['email'];

    $conn->query($query) or die(mysqli_errno($conn));
    header("location:delete.php");
}	
?>
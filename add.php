<?php
@session_start();
include "databaseconnection.php";
$user=$_SESSION['user1'];
$email=$_SESSION['email1'];
//echo $email;
if(!empty($_POST['task'])){
    $task1=strtolower($_POST['task']);
    $query="INSERT INTO tolist_data(email,tasks,status) VALUES('$email','$task1','pending')";
    if(mysqli_query($conn,$query)){
        echo '<script> alert("succefully added");
               document.location.href("add.php");
             </script>';
        }
}
// if(empty($_POST['task'])){
//     echo '<script> alert("give the task you have to complete");
//                document.location.href("add.php");
//              </script>';
// }
?>
<html>
    <head>
        <style>
            .al{
                align:center;
            }

            </style>
        
</head>

    <body>
        <div class="al">
        <h2 align="center"><?php echo "Hi '$user' you can add your tasks to complete";?>
        <br>
<form action="#" method="POST" align="center">
        <input type="text" name="task">
        <button type="submit" name="add">add</button>
</form>
</div>
<a href="panel.php">go back</a>

</body>

    </html>

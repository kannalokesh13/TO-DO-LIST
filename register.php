<?php
@session_start();
include "databaseconnection.php";
if(!empty($_POST['name']) && !empty($_POST['password1']) && !empty($_POST['password2']) && !empty($_POST['email'])){
    $pass1=$_POST['password1'];
    $pass2=$_POST['password2'];
    $email=$_POST['email'];
    $name=$_POST['name'];
if($pass1==$pass2){
    $query="INSERT INTO login(name,email,password) VALUES('$name','$email','$pass1')";
    if(mysqli_query($conn,$query)){
        echo '<script> alert("succefully created");
               document.location.href("register.php");
             </script>';
        }
    
}
else{
    echo '<script> alert("password is not matched");
               document.location.href("register.php");
             </script>';
}
}


?>

<html>
    <head>
        <style>

            </style> 
</head>

<body>
    <div align="right">
    <a href="index.php">go back</a>
</div>
<form action="#" method="post" align="center">
    <label>name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="name"><br><br>
    <label>email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email" name="email"><br><br>
    <label>Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="password1"><br><br>
    <label>confirm password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="password2"><br><br>
    <input type="submit">

</form>

</body>

    </html>

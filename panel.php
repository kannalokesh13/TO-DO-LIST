<?php
@session_start();
$user=$_SESSION['user1'];
?>
<html>
<head>

<style>
.navigator{
box-sizing:border-box;
margin:0;

background-color:rgb(34,34,34);
display:flex;
justify-content:space-between;
align-items:center;
padding:30px,30px;

}

li,a{
font-family:"montserrat",sans-serif;
color:white;
text-decoration:none;
font-weight:300;
font-size:20px;

}
.nav-links{
list-style:none;
}
li{
display:inline-block;
padding:0px 20px;
}
li a{
transition:all 0.3s ease 0s;
}
li a:hover{
color:green;
}


</style>

</head>
<body>

<div class="navigator">
<nav>
<ul class="nav_links">
<li><a href="add.php">ADD</a></li>
<li><a href="delete.php">DELETE</a></li>
<li><a href="mark.php">MARK AS COMPLETE</a></li>
<li><a href="list.php">LIST OF TASKS</a></li>
<li><a href="index.php">LOGOUT</a></li>
</ul>
</nav>
</div>
</body>

</html>
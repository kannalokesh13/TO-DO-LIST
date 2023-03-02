<?php
@session_start();
error_reporting(E_ERROR | E_PARSE);
include "databaseconnection.php";
$email2=$_SESSION['email1'];
$query="SELECT tasks,status FROM tolist_data WHERE email='$email2' ";
$res=$conn->query($query);
if($res->num_rows>0){
    $options=mysqli_fetch_all($res,MYSQLI_ASSOC);
}
else{
    echo "No Data Exists To Complete";
}
?>
<html>
    <head>
        <style>
            .table-hover{
                width:70%;
                align:center;
              }
               th,td{
                text-align : center;
              } 

            </style>
</head>

<body>
<table class="table table-hover" align="center">
    <tr>
        <th>S.no</th>
        <th>task</th>
        <th>status</th>
    </tr>
    <?php
            $sn=1;
            foreach($options as $option)
            {
            ?>
            <tr>
            <td><?PHP echo $sn; ?></td>
            <td><?php echo $option['tasks']; ?></td>
            <td><?php echo $option['status']; ?></td>
            </tr>
            <?php $sn++;
            }
            ?>



</table>
<a href="panel.php">go back</a>
</body>

    </html>
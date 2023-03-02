<?php
@session_start();
error_reporting(E_ERROR | E_PARSE);
include "databaseconnection.php";
$email2=$_SESSION['email1'];
$query="SELECT email,tasks,status FROM tolist_data WHERE email='$email2' ";
$res=$conn->query($query);
if($res->num_rows>0){
    $options=mysqli_fetch_all($res,MYSQLI_ASSOC);
}
else{
    echo "No Data Exists";
}
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
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
        <th>action</th>
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
            <td> <a href="delete_query.php?tasks=<?php echo $option['tasks']?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
						
            </tr>
            <?php $sn++;
            }
            ?>



</table>
<a href="panel.php">go back</a>
</body>

    </html>
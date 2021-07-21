<?php
require('connect2.php');
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="select * from cash";
$res=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cash details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <a href="export1.php"><button type="button" class="btn btn-primary">Export</button></a>
  <table class="table table-bordered  table-striped">
    <thead>
      <tr>
        <th>Cashdate</th>
        <th>Unid</th>
        <th>dr/cr</th>
        <th>from acc details</th>
        <th>from amount no</th>
        <th>to acc details</th>
        <th>to amount no</th>
        
        
      </tr>
    </thead>
    <tbody>
	 <?php while($row=mysqli_fetch_assoc($res)){?>	
	 <tr>
        <td><?php echo $row['cashdate']?></td>
        <td><?php echo $row['unid']?></td>
        <td><?php echo $row['drcr']?></td>
        <td><?php echo $row['accdet']?></td>
        <td><?php echo $row['amount1']?></td>
        <td><?php echo $row['accdet1']?></td>
        <td><?php echo $row['amount2']?></td>
        
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<style>
.btn{
	float: right;
    margin-bottom: 20px;
    margin-top: 20px;
}
</style>
</body>
</html>

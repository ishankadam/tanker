<?php
require('connect2.php');
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="select * from vendor";
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
  <a href="export2.php"><button type="button" class="btn btn-primary">Export</button></a>
  <table class="table table-bordered  table-striped">
    <thead>
      <tr>
        <th>Name of the firm</th>
        <th>GST no</th>
        <th>Mobile no</th>
        <th>Address</th>
        <th>Concern person</th>
        <th>Bank account no</th>
        <th>Name of the bank</th>
        <th>IFSC code</th>
        <th>Limit</th>
        
        
      </tr>
    </thead>
    <tbody>
	 <?php while($row=mysqli_fetch_assoc($res)){?>	
	 <tr>
        <td><?php echo $row['notf']?></td>
        <td><?php echo $row['gst']?></td>
        <td><?php echo $row['mono']?></td>
        <td><?php echo $row['add1']?></td>
        <td><?php echo $row['cp']?></td>
        <td><?php echo $row['baccno']?></td>
        <td><?php echo $row['notb']?></td>
        <td><?php echo $row['ifsc1']?></td>
        <td><?php echo $row['limit1']?></td>
        
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

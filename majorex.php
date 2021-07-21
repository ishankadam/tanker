<?php
require('connect2.php');
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="select * from major";
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
  <a href="export3.php"><button type="button" class="btn btn-primary">Export</button></a>
  <table class="table table-bordered  table-striped">
    <thead>
      <tr>
        <th>ID (AUTO) WITH START MA</th>
        <th>TT no</th>
        <th>Load/Unload</th>
        <th>Date</th>
        <th>Problem Details 1</th>
        <th>Problem Details 2</th>
        <th>Problem Details 3</th>
        <th>Problem Details 4</th>
        <th>Problem Details 5</th>
        <th>vendor</th>
        <th>Cash/Credit</th>
        <th>Quantity</th>
        <th>Amount</th>
        <th>bill no</th>
        <th>vendor</th>
        
        
      </tr>
    </thead>
    <tbody>
	 <?php while($row=mysqli_fetch_assoc($res)){?>	
	 <tr>
        <td><?php echo $row['idma']?></td>
        <td><?php echo $row['tt']?></td>
        <td><?php echo $row['load1']?></td>
        <td><?php echo $row['date1']?></td>
        <td><?php echo $row['probdet']?></td>
        <td><?php echo $row['probdet1']?></td>
        <td><?php echo $row['probdet2']?></td>
        <td><?php echo $row['probdet3']?></td>
        <td><?php echo $row['probdet4']?></td>
        <td><?php echo $row['vendor']?></td>
        <td><?php echo $row['cash']?></td>
        <td><?php echo $row['qty']?></td>
        <td><?php echo $row['amt']?></td>
        <td><?php echo $row['billno']?></td>
        <td><?php echo $row['vendor1']?></td>        
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

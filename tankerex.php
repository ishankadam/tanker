<?php
require('connect2.php');
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="select * from tankerdetails";
$res=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>tanker details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <a href="export.php"><button type="button" class="btn btn-primary">Export</button></a>
  <table class="table table-bordered  table-striped">
    <thead>
      <tr>
        <th>REGISTRATION NUMBER</th>
        <th>certificate number</th>
        <th>image</th>
        <th>make</th>
        <th>model</th>
        <th>manufacturingdate</th>
        <th>DATE</th>
        <th>fitness</th>
        <th>image1</th>
        <th>insurance</th>
        <th>productinsurance</th>
        <th>statepermit</th>
        <th>nationalpermit</th>
        <th>explosive</th>
        <th>calibraton</th>
        <th>polution</th>
        <th>safety</th>
        <th>tax</th>
        <th>emidate</th>
        <th>emiamount</th>
        <th>restemiamount</th>
        <th>tyre</th>
        <th>battery</th>
        <th>capacity</th>
        <th>ch1</th>
        <th>ch2</th>
        <th>ch3</th>
        <th>ch4</th>
        <th>ch5</th>
        <th>ch6</th>
        <th>company</th>
        <th>slno</th>
        <th>dop</th>
        <th>warupto</th>
        <th>image2</th>
        <th>dlno</th>
        <th>hazno</th>
        <th>aadharno</th>
        <th>mobileno</th>
        <th>address</th>
        <th>accno</th>
        <th>nob</th>
        <th>ifsc</th>
        <th>dlno1</th>
        <th>hazno1</th>
        <th>aadharno1</th>
        <th>mobileno1</th>
        <th>address1</th>
        <th>accno1</th>
        <th>nob1</th>
        <th>ifsc1</th>
        
      </tr>
    </thead>
    <tbody>
	 <?php while($row=mysqli_fetch_assoc($res)){?>	
	 <tr>
        <td><?php echo $row['registrationnumber']?></td>
        <td><?php echo $row['certificate']?></td>
        <td><?php echo $row['image']?></td>
        <td><?php echo $row['make']?></td>
        <td><?php echo $row['model']?></td>
        <td><?php echo $row['manufacturingdate']?></td>
        <td><?php echo $row['DATE']?></td>
        <td><?php echo $row['fitness']?></td>
        <td><?php echo $row['image1']?></td>
        <td><?php echo $row['insurance']?></td>
        <td><?php echo $row['productinsurance']?></td>
        <td><?php echo $row['statepermit']?></td>
        <td><?php echo $row['nationalpermit']?></td>
        <td><?php echo $row['explosive']?></td>
        <td><?php echo $row['calibraton']?></td>
        <td><?php echo $row['polution']?></td>
        <td><?php echo $row['safety']?></td>
        <td><?php echo $row['tax']?></td>
        <td><?php echo $row['emidate']?></td>
        <td><?php echo $row['emiamount']?></td>
        <td><?php echo $row['restemiamount']?></td>
        <td><?php echo $row['tyre']?></td>
        <td><?php echo $row['battery']?></td>
        <td><?php echo $row['capacity']?></td>
        <td><?php echo $row['ch1']?></td>
        <td><?php echo $row['ch2']?></td>
        <td><?php echo $row['ch3']?></td>
        <td><?php echo $row['ch4']?></td>
        <td><?php echo $row['ch5']?></td>
        <td><?php echo $row['ch6']?></td>
        <td><?php echo $row['company']?></td>
        <td><?php echo $row['slno']?></td>
        <td><?php echo $row['dop']?></td>
        <td><?php echo $row['warupto']?></td>
        <td><?php echo $row['image2']?></td>
        <td><?php echo $row['dlno']?></td>
        <td><?php echo $row['hazno']?></td>
        <td><?php echo $row['aadharno']?></td>
        <td><?php echo $row['mobileno']?></td>
        <td><?php echo $row['address']?></td>
        <td><?php echo $row['accno']?></td>
        <td><?php echo $row['nob']?></td>
        <td><?php echo $row['ifsc']?></td>
        <td><?php echo $row['dlno1']?></td>
        <td><?php echo $row['hazno1']?></td>
        <td><?php echo $row['aadharno1']?></td>
        <td><?php echo $row['mobileno1']?></td>
        <td><?php echo $row['address1']?></td>
        <td><?php echo $row['accno1']?></td>
        <td><?php echo $row['nob1']?></td>
        <td><?php echo $row['ifsc1']?></td>
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

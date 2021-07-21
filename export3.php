<?php
require('connect2.php');
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="select * from major";
$res=mysqli_query($conn,$sql);
$html='<table><tr><td>ID (AUTO) WITH START MA</td><td>TT no</td><td>Load/Unload</td><td>Date</td><td> Problem Details 1</td><td>Problem Details 2</td><td>Problem Details 3</td><td>Problem Details4 </td><td>Problem Details 5</td><td>vendor</td><td>Cash/Credit</td><td>Quantity</td><td>Amount</td><td>bill no</td><td>vendor</td></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr><td>'.$row['idma'].'</td><td>'.$row['tt'].'</td><td>'.$row['load1'].'</td><td>'.$row['date1'].'</td><td>'.$row['probdet'].'</td><td>'.$row['probdet1'].'</td><td>'.$row['probdet2'].'</td><td>'.$row['probdet3'].'</td><td>'.$row['probdet4'].'</td><td>'.$row['vendor'].'</td><td>'.$row['cash'].'</td><td>'.$row['qty'].'</td><td>'.$row['amt'].'</td><td>'.$row['billno'].'</td><td>'.$row['vendor1'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=majorreport.xls');
echo $html;
?>
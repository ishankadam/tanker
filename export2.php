<?php
require('connect2.php');
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="select * from vendor";
$res=mysqli_query($conn,$sql);
$html='<table><tr><td>Name of the firm</td><td>GST no</td><td>Mobile no</td><td>Address</td><td> Concern person</td><td>Bank account no</td><td>Name of the bank </td><td>IFSC code</td><td>Limit</td></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr><td>'.$row['notf'].'</td><td>'.$row['gst'].'</td><td>'.$row['mono'].'</td><td>'.$row['add1'].'</td><td>'.$row['cp'].'</td><td>'.$row['baccno'].'</td><td>'.$row['notb'].'</td><td>'.$row['ifsc1'].'</td><td>'.$row['limit1'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=vendorreport.xls');
echo $html;
?>
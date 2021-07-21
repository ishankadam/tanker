<?php
require('connect2.php');
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="select * from cash";
$res=mysqli_query($conn,$sql);
$html='<table><tr><td>Cash date</td><td>Unid</td><td>Dr/Cr</td><td>from acc details</td><td> amount </td><td>to acc details</td><td>amount </td></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr><td>'.$row['cashdate'].'</td><td>'.$row['unid'].'</td><td>'.$row['drcr'].'</td><td>'.$row['accdet'].'</td><td>'.$row['amount1'].'</td><td>'.$row['accdet1'].'</td><td>'.$row['amount2'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=cashreport.xls');
echo $html;
?>
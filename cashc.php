<?php
include 'connect2.php';
$conn=new mysqli($servername,$username,$password,$dbname);

$cashdate=$unid=$drcr=$accdet=$amount1=$accdet1=$amount2="";
$status='0';

if(isset($_POST['submit']))
{
	$cashdate = $_POST['cashdate'];
	$unid = $_POST['unid'];
  $drcr = $_POST['drcr'];
  $accdet = $_POST['accdet'];
  $amount1 = $_POST['amount1'];
  $accdet1 = $_POST['accdet1'];
  $amount2 = $_POST['amount2'];



  	$query="INSERT INTO cash values('$cashdate','$unid','$drcr','$accdet','$amount1','$accdet1','$amount2')";
	$data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('New records updated successfully')</script>";
    header("refresh:0; url=cashex.php");
    }
    else {
     echo "<script> alert('Something Went Wrong!!!')</script>";
     header("refresh:0; url=cash.php");
    }
}
?>
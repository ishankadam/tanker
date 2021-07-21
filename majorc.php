<?php
include 'connect2.php';
$conn=new mysqli($servername,$username,$password,$dbname);

$idma=$tt=$load1=$date1=$probdet=$probdet1=$probdet2=$probdet3=$probdet4=$vendor=$cash=$qty=$amt=$billno=$vendor1="";
$status='0';

if(isset($_POST['submit']))
{
	$idma = $_POST['idma'];
	$tt = $_POST['tt'];
  $load1 = $_POST['load1'];
  $date1 = $_POST['date1'];
  $probdet = $_POST['probdet'];
  $probdet1 = $_POST['probdet1'];
  $probdet2 = $_POST['probdet2'];
  $probdet3 = $_POST['probdet3'];
  $probdet4 = $_POST['probdet4'];
  $vendor = $_POST['vendor'];
  $cash = $_POST['cash'];
  $qty = $_POST['qty'];
	$amt = $_POST['amt'];
  $billno = $_POST['billno'];
  $vendor1 = $_POST['vendor1'];

  	$query="INSERT INTO major values('$idma','$tt','$load1','$date1','$probdet','$probdet1','$probdet2','$probdet3','$probdet4','$vendor','$cash','$qty','$amt','$billno','$vendor1')";
	$data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('New records updated successfully')</script>";
    header("refresh:0; url=user.php");
    }
    else {
     echo "<script> alert('Something Went Wrong!!!')</script>";
     header("refresh:0; url=user.php");
    }
}
?>
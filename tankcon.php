<?php
include 'connect2.php';
$conn=new mysqli($servername,$username,$password,$dbname);

$registrationnumber=$certificate=$image=$make=$model=$manufacturingdate=$DATE=$fitness=$image1=$insurance=$productinsurance=$statepermit=$nationalpermit=$explosive=$calibraton=$polution=$safety=$tax=$emidate=$emiamount=$restemiamount=$tyre=$battery=$capacity=$ch1=$ch2=$ch3=$ch4=$ch5=$ch6=$company=$slno=$dop=$warupto=$image2=$dlno=$hazno=$aadharno=$mobileno=$address=$accno=$nob=$ifsc=$dlno1=$hazno1=$aadharno1=$mobileno1=$address1=$accno1=$nob1=$ifsc1="";
$status='0';

if(isset($_POST['submit']))
{
	$registrationnumber = $_POST['registrationnumber'];
	$certificate = $_POST['certificate'];
  $image = $_POST['image'];
  $make = $_POST['make'];
  $model = $_POST['model'];
  $manufacturingdate = $_POST['manufacturingdate'];
  $DATE = $_POST['DATE'];
  $fitness = $_POST['fitness'];
	$image1 = $_POST['image1'];
  $insurance = $_POST['insurance'];
  $productinsurance = $_POST['productinsurance'];
  $statepermit = $_POST['statepermit'];
  $nationalpermit = $_POST['nationalpermit'];
  $explosive = $_POST['explosive'];
  $calibraton= $_POST['calibraton'];
  $polution = $_POST['polution'];
  $safety = $_POST['safety'];
  $tax = $_POST['tax'];
  $emidate = $_POST['emidate'];
  $emiamount = $_POST['emiamount'];
  $restemiamount = $_POST['restemiamount'];
  $tyre = $_POST['tyre'];
  $battery = $_POST['battery'];
  $capacity = $_POST['capacity'];
  $ch1 = $_POST['ch1'];
  $ch2 = $_POST['ch2'];
  $ch3 = $_POST['ch3'];
  $ch4 = $_POST['ch4'];
  $ch5 = $_POST['ch5'];
  $ch6 = $_POST['ch6'];
  $company = $_POST['company'];
  $slno = $_POST['slno'];
  $dop = $_POST['dop'];
  $warupto = $_POST['warupto'];
  $image2 = $_POST['image2'];
  $dlno = $_POST['dlno'];
  $hazno = $_POST['hazno'];
  $aadharno = $_POST['aadharno'];
  $mobileno = $_POST['mobileno'];
  $address = $_POST['address'];
  $accno = $_POST['accno'];
  $nob = $_POST['nob'];
  $ifsc = $_POST['ifsc'];
  $dlno1 = $_POST['dlno1'];
  $hazno1 = $_POST['hazno1'];
  $aadharno1 = $_POST['aadharno1'];
  $mobileno1 = $_POST['mobileno1'];
  $address1 = $_POST['address1'];
  $accno1 = $_POST['accno1'];
  $nob1 = $_POST['nob1'];
  $ifsc1 = $_POST['ifsc1'];


  	$query="INSERT INTO tankerdetails values('$registrationnumber','$certificate','$image','$make','$model','$manufacturingdate','$DATE','$fitness','$image1','$insurance','$productinsurance','$statepermit','$nationalpermit','$explosive','$calibraton','$polution','$safety','$tax','$emidate','$emiamount','$restemiamount','$tyre','$battery','$capacity','$ch1','$ch2','$ch3','$ch4','$ch5','$ch6','$company','$slno','$dop','$warupto','$image2','$dlno','$hazno','$aadharno','$mobileno','$address','$accno','$nob','$ifsc','$dlno1','$hazno1','$aadharno1','$mobileno1','$address1','$accno1','$nob1','$ifsc1')";
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
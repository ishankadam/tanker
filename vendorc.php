<?php
include 'connect2.php';
$conn=new mysqli($servername,$username,$password,$dbname);

$notf=$gst=$mono=$add1=$cp=$baccno=$notb=$ifsc1=$limit="";
$status='0';

if(isset($_POST['submit']))
{
	$notf = $_POST['notf'];
	$gst = $_POST['gst'];
  $mono = $_POST['mono'];
  $add1= $_POST['add1'];
  $cp = $_POST['cp'];
  $baccno = $_POST['baccno'];
  $notb = $_POST['notb'];
  $ifsc1 = $_POST['ifsc1'];
	$limit1 = $_POST['limit1'];


  	$query="INSERT INTO vendor values('$notf','$gst','$mono','$add1','$cp','$baccno','$notb','$ifsc1','$limit1')";
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
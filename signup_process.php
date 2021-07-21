<?php
include 'connect.php';

if(isset($_POST['login']))
{
  $username = $_POST['uname'];
  $password = $_POST['password']; 
  $conpassword=$_POST['conpassword'];

  $query="INSERT INTO login_details(username,password) values('$username','$password')";
  $query1="select username from login_details where username ='$username'";
  $search=mysqli_query($conn,$query1);
  if($password == $conpassword)
  {
  if($search->num_rows==0)
  {
    $data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('Account created successfully')</script>";
    header("refresh:0; url=login.php");
    }
    else 
    {
     echo "<script> alert('Something Went Wrong...')</script>";
     header("refresh:0; url=signup.php");
    }
  }
   else
    {
     echo "<script> alert('Username is already taken...')</script>";
     header("refresh:0; url=signup.php");
    }
  }
  else
    {
     echo "<script> alert('Password does not match')</script>";
     header("refresh:0; url=signup.php");
    }
  }

  else
{
  echo "POST is not set!";
}

?>
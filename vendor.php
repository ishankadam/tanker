<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styles.css" rel="stylesheet" type="text/css" />
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}
* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=email],input[type=text], input[type=password],input[type=text], input[type=tel],input[type=number],input[type=DATE]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=email]:focus, input[type=password]:focus, input[type=text]:focus, input[type=range]:focus{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<SCRIPT type="text/javascript">
function validate(thisform)
{

	var ph = thisform.phnum.value;
	var pass = thisform.password.value;
	var conpass = thisform.pswrepeat.value;
	
	
	if (pass != conpass) 
	{ 
	alert("You first Passwords is not similar with 2nd password. Please enter same password in both"); 
	thisform.pswrepeat.focus();
	return false; 
	}
	
	if(ph.length<10)
	{
		alert("phone number must have atleast 10 digits");
		thisform.phnum.focus();	
		return false;
	}
	if(isNaN(ph))
	{
		alert("Invalid phone number");
		thisform.phnum.focus();	
		return false;
	}
		return true;
}
</SCRIPT>

</head>
<body>

<form action="vendorc.php" onsubmit="return validate(this)" method="post">
  <div class="container">
    <h1>Enter Vendor Details</h1>
    <hr>
    <label for="notf"><b>1.Name of the firm</b></label>
    <input type="text" placeholder="Enter Name of the firm" name="notf" required>
    
    <label for="gst"><b>2.GST no</b></label>
    <input type="Number" placeholder="Enter GST" name="gst" required>

    <label for="mono"><b>3.Mobile Number</b></label>
    <input type="Number" placeholder="Enter Mobile number" name="mono" required>

    <label for="add"><b>4.Address</b></label>
    <input type="text" placeholder="Enter Address" name="add1" required>

    <label for="cp"><b>5.Concern Person</b></label>
    <input type="text" placeholder="Enter Concern Person" name="cp" required>

    <label for="baccno"><b>6.Bank account no</b></label>
    <input type="text" placeholder="Enter bank account number" name="baccno" required>

    <label for="notb"><b>7.Name of the Bank</b></label>
    <input type="text" placeholder="Enter Name of the Bank" name="notb" required>

    <label for="ifsc1"><b>8.IFSC code</b></label>
    <input type="text" placeholder="Enter Ifsc code" name="ifsc1" required>

    <label for="limit"><b>9.Limit</b></label>
    <input type="Number" placeholder="Enter Limit" name="limit1" required>

  

    <input type="submit" name="submit" id="login-register-buttons" value="next"></a>
      <a href="user.php" id="login-register-butons">Cancel</a>
  </div>
  
  
</form>
</body>
</html>
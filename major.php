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

<form action="majorc.php" onsubmit="return validate(this)" method="post">
  <div class="container">
    <h1>Enter Major maintenance Details</h1>
    <hr>
    <label for="idma"><b>1.ID (AUTO) WITH START MA</b></label>
    <input type="text" placeholder="Enter ID (AUTO) WITH START MA" name="idma" required>
    <label for="tt"><b>TT no</b></label>
    <input type="number" placeholder="Enter TT number" name="tt" required >
    
    <label for="load1"><b>Load/Unload</b></label>
    <input type="text" placeholder="Load/Unload" name="load1" required>

    <label for="date1"><b>Date</b></label>
    <input type="DATE" placeholder="Enter DATE" name="date1" required>

    <br>

    <label for="probdet"><b>2.Problem Details</b></label>
    <input type="text" placeholder="1.Enter Problem Details" name="probdet" required>
    <input type="text" placeholder="2.Enter Problem Details" name="probdet1" required>
    <input type="text" placeholder="3.Enter Problem Details" name="probdet2" required>
    <input type="text" placeholder="4.Enter Problem Details" name="probdet3" required>
    <input type="text" placeholder="5.Enter Problem Details" name="probdet4" required>



    <label for="spared"><b>3.Spare Details</b></label>
    <br>
    <label for="vendor"><b>vendor</b></label>
    <input type="text" placeholder="Enter vendor" name="vendor" required>

    <label for="cash"><b>Cash/Credit</b></label>
    <input type="Text" placeholder="Enter Cash/Credit" name="cash" required>

    <label for="qty"><b>Quantity</b></label>
    <input type="number" placeholder="Enter Quantity" name="qty" >

    <label for="amt"><b>Amount</b></label>
    <input type="number" placeholder="Enter Amount" name="amt" >

    <label for="billno"><b>bill no</b></label>
    <input type="number" placeholder="Enter Billno" name="billno" >

    <label for="carbon"><b>4.Carbon brush</b></label>
    <br>
    <label for="vendor1"><b>vendor</b></label>
    <input type="text" placeholder="Enter vendor " name="vendor1" required>

  

    <input type="submit" name="submit" id="login-register-buttons" value="next"></a>
      <a href="user.php" id="login-register-butons">Cancel</a>
  </div>
  
  
</form>
</body>
</html>
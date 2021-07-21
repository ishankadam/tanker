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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<SCRIPT type="text/javascript">
function validate(thisform)
{

	var sum = parseInt(document.getElementByID('capacity').value);
    var ph1 = parseInt(document.getElementByID('ch1').value);
    var ph2 = parseInt(document.getElementByID('ch2').value);
    var ph3 = parseInt(document.getElementByID('ch3').value);
    var ph4 = parseInt(document.getElementByID('ch4').value);
    var ph5 = parseInt(document.getElementByID('ch5').value);
    var ph6 = parseInt(document.getElementByID('ch6').value);
	
        if (sum != ph1+ph2+ph3+ph4+ph5+ph6) 
    { 
    alert("enter Correct capacity"); 
    thisform.ch1.focus();
    return false; 
    }
	
	
}
</SCRIPT>

</head>
<body>

<form action="tankcon.php" onsubmit="return validate(this)" method="post">
  <div class="container">
    <h1>Enter Tanker Details</h1>
    <hr>
    <label for="registrationnumber"><b>1.REGISTRATION NUMBER</b></label>
    <input type="text" placeholder="Enter registrationnumber" name="registrationnumber" required>
    <input type="number" placeholder="Enter certificate number" name="certificate" required >
	<label for=rc"><b>enter rc book photo</b></label>
    <input type="file" name="image" id="image">
    <input type="submit" value="Upload Image" name="submit" required>
    <br>

    <label for="make"><b>2.MAKE</b></label>
    <input type="text" placeholder="Enter make" name="make" required>

    <label for="model"><b>3.MODEL</b></label>
    <input type="text" placeholder="Enter model" name="model" required>

    <label for="manufacturingdate"><b>4.MANUFACTURING DATE</b></label>
    <input type="DATE" placeholder="Enter MANUFACTURING DATE " name="manufacturingdate" required>

    <label for="fitness"><b>5.FITNESS</b></label>
    <input type="DATE" placeholder="Enter DATE" name="DATE" required>
    <input type="text" placeholder="Enter fitness" name="fitness" required >
	<label for="fitness"><b>Upload Fitness certificate</b></label>
        <input type="file" name="image1" id="image1">
    <input type="submit" value="Upload Image" name="submit" required>
    <br>

    <label for="insurance"><b>6.INSURANCE</b></label>
    <input type="DATE" placeholder="Enter INSURANCE date " name="insurance" required>

    <label for="productinsurance"><b>7.PRODUCT INSURANCE</b></label>
    <input type="DATE" placeholder="Enter PRODUCT INSURANCE date " name="productinsurance" >

    <label for="statepermit"><b>8.STATE PERMIT</b></label>
    <input type="DATE" placeholder="Enter STATE PERMIT Date" name="statepermit" required>

    <label for="nationalpermit"><b>9.NATIONAL PERMIT</b></label>
    <input type="DATE" placeholder="Enter NATIONAL PERMIT Date" name="nationalpermit" >

    <label for="explosive"><b>10.EXPLOSIVE</b></label>
    <input type="DATE" placeholder="Enter EXPLOSIVE" name="explosive" required>

    <label for="calibraton"><b>11.CALIBRATION</b></label>
    <input type="DATE" placeholder="Enter CALIBRATION " name="calibraton" required>

    <label for="polution"><b>12.POLUTION</b></label>
    <input type="DATE" placeholder="Enter POLUTION " name="polution" required>

    <label for="safety"><b>13.SAFETY</b></label>
    <input type="DATE" placeholder="Enter SAFETY " name="safety" >

    <label for="tax"><b>14.TAX</b></label>
    <input type="DATE" placeholder="Enter tax " name="tax" required>

    <label for="make"><b>15.Financer Name</b></label>
    <br>
    <label for="emidate"><b>EMI Date</b></label>
    <input type="DATE" placeholder="Enter EMI date " name="emidate" >
    <label for="emiamount"><b>EMI Amount</b></label>
    <input type="number" placeholder="Enter EMI Amount " name="emiamount" >
    <label for="restemiamount"><b>Rest EMI Amount</b></label>
    <input type="number" placeholder="Enter Rest EMI Amount " name="restemiamount" >

    <label for="tyre"><b>16.Tyre</b></label>
    <br>
    <label for="tyre"><b>How much tyre</b></label>
    <input type="number" placeholder="Enter How much tyre" name="tyre" >

    <label for="battery"><b>17.Battery</b></label>
    <br>
    <label for="battery"><b>How much battery</b></label>
    <input type="number" placeholder="Enter How much Battery" name="battery" >

    <label for="capacity"><b>18.Capacity</b></label>
    <br>
    <label for="capacity"><b>How much capacity</b></label>
    <input type="number" id="capacity" placeholder="Enter capacity" name="capacity" >

    <label for="ch1"><b>ch1</b></label>
    <input type="number" id="ch1" placeholder="Enter ch1" name="ch1" >

    <label for="ch2"><b>ch2</b></label>
    <input type="number" id="ch2" placeholder="Enter ch2" name="ch2" >

    <label for="ch3"><b>ch3</b></label>
    <input type="number" id="ch3" placeholder="Enter ch3" name="ch3" >

    <label for="ch4"><b>ch4</b></label>
    <input type="number" id="ch4" placeholder="Enter ch4" name="ch4" >

    <label for="ch5"><b>ch5</b></label>
    <input type="number" id="ch5" placeholder="Enter ch5" name="ch5" >

    <label for="ch6"><b>ch6</b></label>
    <input type="number" id="ch6" placeholder="Enter ch6" name="ch6" >

    <label for="capacity"><b>19.Tyre Details</b></label>
    <br>
    <label for="capacity"><b>position</b></label>
    <table>
  <tr>
    <th></th>
    <th>SLNo</th>
    <th>Company</th>
    <th>radial/nylon</th>
    <th>new/resole</th>
    <th>%left</th>
    <th>est km</th>
    <th>present km</th>
</tr>
    <tr>
    <td></td>
    </tr>
    <tr>
    <td>FR LF</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>FR RH</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>HOUSING LF IN</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>HOUSING LF OUT</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>HOUSING RH IN</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>HOUSING RH OUT</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>TROLLY LF IN</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>TROLLY LF OUT</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>TROLLY RH IN</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr> 
    <tr>
    <td>TROLLY RH OUT</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>FIX LIFT LF</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>FIX LIFT RH</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>LIFT LF</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>LIFT RH</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>
    <tr>
    <td>STEPIN</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    </tr>

  </tr>
</table>
    <br>
    <label for="battery"><b>20.battery</b></label>
    <br>
    <label for="company"><b>company</b></label>
    <input type="text" placeholder="Enter company" name="company" >

    <label for="slno"><b>SL.NO</b></label>
    <input type="number" placeholder="Enter SL.NO" name="slno" >

    <label for="dop"><b>Date of Purchase</b></label>
    <input type="DATE" placeholder="Enter DAte of Purchase" name="dop" >

    <label for="warupto"><b>Warranty upto</b></label>
    <input type="DATE" placeholder="Enter Warranty upto" name="warupto" >

    <label for="photo"><b>photo</b></label>
    <input type="file" name="image2" id="image2">
    <input type="submit" value="Upload Image" name="submit" required>
    <br>


    <label for="driver"><b>21.Drivers Name</b></label>
    <br>
    <label for="dlno"><b>DL NO</b></label>
    <input type="number" placeholder="Enter DL no" name="dlno" required>

    <label for="hazno"><b>Hazadious NO</b></label>
    <input type="number" placeholder="Enter hazadious no" name="hazno" required >

    <label for="aadharno"><b>Aadhar NO</b></label>
    <input type="number" placeholder="Enter Aadhar no" name="aadharno" required>

    <label for="mobileno"><b>mobile NO</b></label>
    <input type="number" placeholder="Enter Mobile no" name="mobileno" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address" required>

    <label for="accno"><b>Bank Account number</b></label>
    <input type="text" placeholder="Enter Bank Account number" name="accno" required>

    <label for="nob"><b>Name of bank</b></label>
    <input type="text" placeholder="Enter Name of bank" name="nob" required>

    <label for="ifsc"><b>Ifsc code</b></label>
    <input type="text" placeholder="Enter Ifsc" name="ifsc" required>

    <label for="Helpers"><b>22.Helpers Name</b></label>
    <br>
    <label for="dlno1"><b>DL NO</b></label>
    <input type="number" placeholder="Enter DL no" name="dlno1" required>

    <label for="hazno1"><b>Hazadious NO</b></label>
    <input type="number" placeholder="Enter hazadious no" name="hazno1" required >

    <label for="aadharno1"><b>Aadhar NO</b></label>
    <input type="number" placeholder="Enter Aadhar no" name="aadharno1" required>

    <label for="mobileno1"><b>mobile NO</b></label>
    <input type="number" placeholder="Enter Mobile no" name="mobileno1" required>

    <label for="address1"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address1" required>

    <label for="accno1"><b>Bank Account number</b></label>
    <input type="text" placeholder="Enter Bank Account number" name="accno1" required>

    <label for="nob1"><b>Name of bank</b></label>
    <input type="text" placeholder="Enter Name of bank" name="nob1" required>

    <label for="ifsc1"><b>Ifsc code</b></label>
    <input type="text" placeholder="Enter Ifsc" name="ifsc1" required>

    <input type="submit" name="submit" id="login-register-buttons" value="next"></a>
      <a href="user.php" id="login-register-butons">Cancel</a>
  </div>
  
  
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<style>
    /* Full-width input fields */
    input[type=text], input[type=password],input[type =tel],input[type = email],input[type = date] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn,.signupbtn {
        float: left;
        width: 50%;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    .error {
        color: #FF0000;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
            width: 100%;
        }
    }
</style>
<body>
<h2><center>Signup Form</center></h2>
<button type=button id=f1 onclick="func(1)">Register Estate Agent Customer</button>
<button type=button id=f2 onclick="func(2)">Register Individual Customer</button>

<script type="text/javascript">
    window.onload = function(){
        document.getElementById("EAC").style.display="none";
        document.getElementById("IC").style.display="none";
    }
    function func(a) {

        if(a==1) {
            document.getElementById("EAC").style.display="none";
            document.getElementById("IC").style.display="block";

        }
        if(a==2) {
            document.getElementById("IC").style.display="none";
            document.getElementById("EAC").style.display="block";
        }

    }
</script>

<form id="EAC" action="GG_Customer_Individual.php" method="post" style="border:1px solid #ccc">
    <h2>Individual Customer</h2>
    <p><span class="error">* required field.</span></p></br>
    <div class="container">

        <span class="error">* <?php if(isset($_GET['$custId_IC_Err'])){ echo  $_GET['$custId_IC_Err'];}?></span></br>
        <label><b>Customer ID</b></label>
        <input type="text" placeholder="Enter Customer ID" name="custId" required>

        <span class="error">* <?php if(isset($_GET['$staffId_IC_Err'])){ echo  $_GET['$staffId_IC_Err'];}?></span></br>
        <label><b>Staff ID</b></label>
        <input type="text" placeholder="Enter Staff ID" name="staffId" required>

        <span class="error">* <?php if(isset($_GET['$custName_IC_Err'])){ echo  $_GET['$custName_IC_Err'];}?></span></br>
        <label><b>Customer Name</b></label>
        <input type="text" placeholder="Enter Name" name="custName" required>

        <span class="error">* <?php if(isset($_GET['$custSurname_IC_Err'])){ echo  $_GET['$custSurname_IC_Err'];}?></span></br>
        <label><b>Customer Surname</b></label>
        <input type="text" placeholder="Enter Surname" name="custSurname" required>

        <span class="error">* <?php if(isset($_GET['custEmail_IC_Err'])){ echo  $_GET['custEmail_IC_Err'];}?></span></br>
        <label><b>Customer Email</b></label>
        <input type="email" placeholder="Enter Email" name="custEmail" required>

        <span class="error">* <?php if(isset($_GET['$custMobileNo_IC_Err'])){ echo  $_GET['$custMobileNo_IC_Err'];}?></span></br>
        <label><b>Customer Mobile Number</b></label>
        <input type="tel" placeholder="Enter Mobile Number" name="custMobileNo" required>

        <span class="error">* <?php if(isset($_GET['$DOB_IC_Err'])){ echo  $_GET['$DOB_IC_Err'];}?></span></br>
        <label><b>Customer DOB</b></label>
        <input type="date" placeholder="Enter DOB" name="DOB" required>

        <span class="error">* <?php if(isset($_GET['$secretCodeNb_IC_Err'])){ echo  $_GET['$secretCodeNb_IC_Err'];}?></span></br>
        <label><b>Customer Secret Code Number</b></label>
        <input type="password" placeholder="Secret Code No" name="secretCodeNb" required>


        <input type="checkbox" checked="checked"> Remember me
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>

<form id="IC" action="GG_Customer_Estate_Agent.php" method="post" style="border:1px solid #ccc">
    <h2>Estate Agent Customer</h2>
    <div class="container">

        <label><b>Customer ID</b></label>
        <input type="text" placeholder="Enter Customer ID" name="custId" required>

        <label><b>Staff ID</b></label>
        <input type="text" placeholder="Enter Staff ID" name="staffId" required>

        <label><b>Customer Name</b></label>
        <input type="text" placeholder="Enter Name" name="custName" required>

        <label><b>Customer Surname</b></label>
        <input type="text" placeholder="Enter Surname" name="custSurname" required>

        <label><b>Customer Email</b></label>
        <input type="email" placeholder="Enter Email" name="custEmail" required>

        <label><b>Customer Mobile Number</b></label>
        <input type="tel" placeholder="Enter Mobile Number" name="custMobileNo" required>

        <label><b>Customer Company Name</b></label>
        <input type="text" placeholder="Enter Company Name" name="companyName" required>

        <label><b>Customer Password</b></label>
        <input type="password" placeholder="Password" name="custPassword" required>

        <input type="checkbox" checked="checked"> Remember me
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>

</body>

<?php
if(!isset($_GET['response']))
{
    $_GET['response']=-99;
}
else if ($_GET['response'] == "success")
{
    echo "User registered  successfully";
}

?>

</html>

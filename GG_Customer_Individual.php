<?php
$custName_IC = $_POST['custName'];
$custSurname_IC = $_POST['custSurname'];
$custEmail_IC = $_POST['custEmail'];
$custMobileNo_IC = $_POST['custMobileNo'];
$DOB_IC = $_POST['DOB'];
$secretCodeNb_IC = $_POST['secretCodeNb'];
$custId_IC = $_POST['custId'];
$staffId_IC = $_POST['staffId'];

//$custName_IC = $custSurname_IC = $custEmail_IC = $custMobileNo_IC = $DOB_IC= $secretCodeNb_IC = $custId_IC = $staffId_IC = "";
$custName_IC_Err = $custSurname_IC_Err = $custEmail_IC_Err= $custMobileNo_IC_Err = $DOB_IC_Err =$secretCodeNb_IC_Err = $custId_IC_Err = $staffId_IC_Err = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    //customer name
    if(empty($_POST['custName'])){
        $custName_IC_Err = "Name is required";
        header( 'Location: addCustomer.php?custName_IC_Err=Name is required' );
    }
    else{
        $custName_IC = test_input($_POST['custName']);
        if (!preg_match("/^[a-zA-Z ]*$/",$custName_IC)) {
            $custName_IC_Err = "Only letters and white space allowed";
        }
    }

    //customer surname
    if(empty($_POST['custSurname'])){
        $custSurname_IC_Err = "Surname is required";
        header( 'Location: addCustomer.php?custSurname_IC_Err=Surname is required' );

    }
    else{
        $custSurname_IC = test_input($_POST['custSurname']);
        if (!preg_match("/^[a-zA-Z ]*$/",$custSurname_IC)) {
            $custSurname_IC_Err = "Only letters and white space allowed";
        }
    }

//customer email
    if(empty($_POST['custEmail'])){
        $custEmail_IC_Err = "Email is required";
        header( 'Location: addCustomer.php?custEmail_IC_Err=Email is required' );
    }
    else{
        $custEmail_IC = test_input($_POST['custEmail']);
        if (!filter_var($custEmail_IC, FILTER_VALIDATE_EMAIL)) {
            $custEmail_IC_Err = "Invalid email format";
        }
    }

//customer mobile number
    if(empty($_POST['custMobileNo'])){
        $custMobileNo_IC_Err = "Mobile Number is required";
        header( 'Location: addCustomer.php?custMobileNo_IC_Err=Mobile number is required' );
    }
    else{
        $custMobileNo_IC = test_input($_POST['custMobileNo']);
        if (!preg_match("/^-?[0-9]+$/",$custMobileNo_IC)) {
            $custMobileNo_IC_Err = "Only numbers allowed";
        }
    }

//customer DOB
    if(empty($_POST['DOB'])){
        $DOB_IC_Err = "DOB is required";
        header( 'Location: addCustomer.php?DOB_IC_Err=DOB is required' );
    }
    else{
        $DOB_IC = test_input($_POST['DOB']);
        if (!preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/",$DOB_IC)) {
            $DOB_IC_Err = "Only date format is allowed yyyy-mm-dd ";
        }
    }

//customer secret code
    if(empty($_POST['secretCodeNb'])){
        $secretCodeNb_IC_Err = "Secret Code is required";
        header( 'Location: addCustomer.php?secretCodeNb_IC_Err=Secret code is required' );
    }
    else{
        $secretCodeNb_IC = test_input($_POST['secretCodeNb']);
        if (!preg_match("/^[a-zA-Z ]*$/",$secretCodeNb_IC)) {
            $secretCodeNb_IC_Err = "Only letters and white space allowed";
        }
    }

//customer ID
    if(empty($_POST['custId'])){
        $custId_IC_Err = "Customer ID is required";
        header( 'Location: addCustomer.php?custId_IC_Err=Customer ID is required' );
    }
    else{
        $custId_IC = test_input($_POST['custId']);
        if (!preg_match("/([a-zA-Z0-9])/",$custId_IC)) {
            $custId_IC_Err = "Only letters and numbers allowed";
        }
    }

//staff ID
    if(empty($_POST['staffId'])){
        $staffId_IC_Err = "Staff ID is required";
        header( 'Location: addCustomer.php?staffId_IC_Err=Staff ID is required' );
    }
    else{
        $staffId_IC = test_input($_POST['staffId']);
        if (!preg_match("/([a-zA-Z0-9])/",$staffId_IC)) {
            $staffId_IC_Err = "Only letters and numbers allowed";
        }
    }

}

$connection_IC=mysqli_connect("127.0.0.1","root") or die("Access denied");

$res_IC=mysqli_select_db($connection_IC,"BOILHEATER");

if(!$res_IC){
    echo"Connection Failed";
}
else {
    $qry_IC = "insert into GG_Customer_Individual (custName,custSurname,custEmail,custMobileNo,DOB,secretCodeNb,custId,staffId)"
        . "values('$custName_IC','$custSurname_IC','$custEmail_IC','$custMobileNo_IC','$DOB_IC','$secretCodeNb_IC','$custId_IC','$staffId_IC')";
}

$rslt_IC = mysqli_query($connection_IC, $qry_IC) or die(mysqli_error($connection_IC));
if($rslt_IC)
{
    header( 'Location: addCustomer.php?response=success&GratiaGamage_W1654554' ) ;  // Page redirection with query string. If insertion successful
}
mysqli_close();

?>
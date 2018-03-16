<?php
$custName_EAC = $_POST['custName'];
$custSurname_EAC = $_POST['custSurname'];
$custEmail_EAC = $_POST['custEmail'];
$custMobileNo_EAC = $_POST['custMobileNo'];
$companyName_EAC = $_POST['companyName'];
$custPassword_EAC = $_POST['custPassword'];
$custId_EAC = $_POST['custId'];
$staffId_EAC = $_POST['staffId'];

$connection_EAC=mysqli_connect("127.0.0.1","root") or die("Access denied");

$res_EAC=mysqli_select_db($connection_EAC,"BOILHEATER");

if(!$res_EAC){
    echo"Connection Failed";
}
else {
    $qry_EAC = "insert into GG_Customer_Estate_Agent (custName,custSurname,custEmail,custMobileNo,companyName,custPassword,custId,staffId)values('$custName_EAC','$custSurname_EAC','$custEmail_EAC','$custMobileNo_EAC','$companyName_EAC','$custPassword_EAC','$custId_EAC','$staffId_EAC')";
}

$rslt_EAC = mysqli_query($connection_EAC, $qry_EAC) or die(mysqli_error($connection_EAC));
if($rslt_EAC)
{
    header( 'Location: addCustomer.php?response=success&GratiaGamage_W1654554' ) ;  // Page redirection with query string. If insertion successful
}
mysqli_close();
?>
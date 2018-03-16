<!DOCTYPE html>
<html>
<head>
<style>
    h2{
        color: green;
    }

    #display {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #display td, #display th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #display tr:nth-child(even){background-color: #f2f2f2;}

    #display tr:hover {background-color: #ddd;}

    #display th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }

    </style>
</head>
<body>

</body>
</html>

<?php
$con = mysqli_connect("127.0.0.1","root","","BOILHEATER");
if(!$con){
    echo "Not connected";
    print_r(mysqli_connect_error());
    die();
}
else{
    echo "<h2>Display Table Data</h2></br>";
}
$result_GG_Customer_Individual = mysqli_query($con,"SELECT * FROM GG_Customer_Individual");

echo "<table id='display' border='1'>
<tr>
<th>Customer Name</th>
<th>Customer Surname</th>
<th>Customer Email</th>
<th>Customer Mobile Number</th>
<th>Customer DOB</th>
<th>Secret code number</th>
<th>Customer ID</th>
<th>Staff ID</th>
</tr>";

while($row_GG_Customer_Individual = mysqli_fetch_array($result_GG_Customer_Individual))
{
    echo "<tr>";
    echo "<td>" . $row_GG_Customer_Individual['custName'] . "</td>";
    echo "<td>" . $row_GG_Customer_Individual['custSurname'] . "</td>";
    echo "<td>" . $row_GG_Customer_Individual['custEmail'] . "</td>";
    echo "<td>" . $row_GG_Customer_Individual['custMobileNo'] . "</td>";
    echo "<td>" . $row_GG_Customer_Individual['DOB'] . "</td>";
    echo "<td>" . $row_GG_Customer_Individual['secretCodeNb'] . "</td>";
    echo "<td>" . $row_GG_Customer_Individual['custId'] . "</td>";
    echo "<td>" . $row_GG_Customer_Individual['staffId'] . "</td>";
    echo "</tr>";
}
echo "</table>";

$result_GG_Customer_Estate_Agent = mysqli_query($con,"SELECT * FROM GG_Customer_Estate_Agent");

echo "<table id='display' border='1'>
<tr>
<th>Customer Name</th>
<th>Customer Surname</th>
<th>Customer Email</th>
<th>Customer Mobile Number</th>
<th>Company Name</th>
<th>Customer Password</th>
<th>Customer ID</th>
<th>Staff ID</th>
</tr></br>";

while($row_GG_Customer_Estate_Agent = mysqli_fetch_array($result_GG_Customer_Estate_Agent))
{
    echo "<tr>";
    echo "<td>" . $row_GG_Customer_Estate_Agent['custName'] . "</td>";
    echo "<td>" . $row_GG_Customer_Estate_Agent['custSurname'] . "</td>";
    echo "<td>" . $row_GG_Customer_Estate_Agent['custEmail'] . "</td>";
    echo "<td>" . $row_GG_Customer_Estate_Agent['custMobileNo'] . "</td>";
    echo "<td>" . $row_GG_Customer_Estate_Agent['companyName'] . "</td>";
    echo "<td>" . $row_GG_Customer_Estate_Agent['custPassword'] . "</td>";
    echo "<td>" . $row_GG_Customer_Estate_Agent['custId'] . "</td>";
    echo "<td>" . $row_GG_Customer_Estate_Agent['staffId'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>
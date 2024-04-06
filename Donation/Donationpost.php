<?php
$_server="localhost";
$user="root";
$pw="";
$db="donation";

$conn=new mysqli($_server,$user,$pw,$db);

if($conn-> connect_error)
{
    die("Connection Failed:".$conn->connect_error);
}

$FirstName=$_POST["fname"];
$LastName=$_POST["lname"];
$Email=$_POST["email"];
$Amount=$_POST["amount"];

$sql="INSERT INTO donationInformation(FirstName,LastName,Email,Amount ) VALUES ('$FirstName','$LastName','$Email','$Amount')";
$r=mysqli_query($conn,$sql);

if($r)
{
    echo "<body style='background-color:#262626'>";
    echo"<p> <font color=red font face='arial' align='center' size='5pt'>Thank You for the Donation.</font> </p>";
}
else{
    echo "<body style='background-color:#262626'>";
    echo"<p> <font color=red font face='arial' align='center' size='5pt'>ReTry in few minutes</font> </p>";
}
  

?>
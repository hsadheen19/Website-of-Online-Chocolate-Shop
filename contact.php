<?php
$con = mysqli_connect("localhost", "root");
if($con){
echo "Connection successful";
}
else
echo "No connection";
}
mysqli_select_db($con, "user_information");
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$query= "INSERT INTO informations ( name, email, number) VALUES ( $name, 
$email, $number) ";
mysqli_query($con, $query);
header('location:index.php');
mysqli_close($con);
?>
<?php 
$con = mysqli_connect("localhost","root","","harshit") or die(mysqli_error($con));
$a = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$getdata = "insert into users(first_name , last_name , email , password)values ('$a' , '$Last_Name' , '$Email' , '$Password')";
$datasubmit = mysqli_query($con,$getdata)or die(mysqli_error($con));
echo "data successfully inserted";
?>
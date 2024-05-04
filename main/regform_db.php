<?php

$fname = $_POST['fname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$country = $_POST['country'];
$courses = $_POST['courses'];
$conn = mysqli_connect("localhost","root","","regform");
$sql = "INSERT INTO a1 (fname,email,mobile,gender,address,city,pincode,state,country,courses) VALUES('$fname','$email','$mobile','$gender','$address','$city','$pincode','$state','$country','$courses')";
$data = mysqli_query($conn,$sql);
       
if($data)
{
       echo "success";

}
 else{
        echo "fail";
 }
 ?>

<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mno = $_POST['mno'];
$msg = $_POST['msg'];
$conn =mysqli_connect("localhost","root","","college");
$sql ="INSERT INTO contact (fname,lname,email,mno,msg) Values('$fname','$lname','$email','$mno','$msg')";
$raw = mysqli_query($conn,$sql);
if($raw)
{
       echo "successfull send ";

}
else
{
       echo "fail some error";
}
 ?>
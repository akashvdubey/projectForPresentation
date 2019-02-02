<?php
if(isset($_POST["b"]))
{

 $fname=$_POST['firstName'];
 $lname=$_POST['secondName'];
 $phone=$_POST['MoNumber'];
 /*$gender=$_POST['gender'];*/
 $mail=$_POST['eMail'];
 $dob=$_POST['dob'];


  $con=mysqli_connect("localhost","","");
  if (!$con)
  {
    die('Could not connect: ' . mysqli_error());
  }
  mysqli_select_db( $con,"laundry");
  $sql="insert into details value('$fname', '$lname', '$phone','$mail', '$dob');";
  mysqli_query($con,$sql);
  if(mysqli_affected_rows($con)>0)
    echo "Record Inserted";

  else
    echo "Record Not Inserted";
}
?>

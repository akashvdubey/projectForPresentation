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
  $sql="insert into details (fname,lname,phone,email,dob) values('akash', 'dubey','1245789631','akashvdubey@gmail.com', '1988-01-01')";

  if(mysqli_query($con,$sql)==TRUE)
    echo "Record Inserted";

  else
    echo "Record Not Inserted";
}

?>

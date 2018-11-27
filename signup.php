<?php
$servername = "localhost";
$username = "";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
mysqli_select_db($conn,"laundry");
if(!empty($_GET))
{
     $output = '';
     $message = '';
     $fname = mysqli_real_escape_string($conn, $_GET["firstName"]);
     $lname = mysqli_real_escape_string($conn, $_GET["secondName"]);
     $gender = mysqli_real_escape_string($conn, $_GET["gender"]);
     $phone = mysqli_real_escape_string($conn, $_GET["MoNumber"]);
     $dob = mysqli_real_escape_string($conn, $_GET["dob"]);
     $mail = mysqli_real_escape_string($conn, $_GET["eMail"]);

     $sql="INSERT INTO details(fname,lname,sex,phone,email,dob)
           VALUES('$fname', '$lname', '$gender', '$phone','$mail', '$dob');";
}
if(mysqli_query($conn, $sql))
    {
      echo "true";
         $output .= '<label class="text-success">' . $message . '</label>';
         $select_query = "SELECT * FROM details ORDER BY fname DESC";
         $result = mysqli_query($conn, $select_query);
         $output .= '
              <table class="table table-bordered">
                   <tr>
                        <th width="70%">Employee Name</th>
                        <th width="15%">Edit</th>
                        <th width="15%">View</th>
                   </tr>
         ';
         while($row = mysqli_fetch_array($result))
         {
              $output .= '
                   <tr>
                        <td>' . $row["fname"] . '</td>
                        <td><input type="button" name="edit" value="Edit" id="'.$row["email"] .'" class="btn btn-info btn-xs edit_data" /></td>
                        <td><input type="button" name="view" value="view" id="' . $row["lname"] . '" class="btn btn-info btn-xs view_data" /></td>
                   </tr>
              ';
         }
         $output .= '</table>';
    }
    echo $output;
      echo"error";

?>

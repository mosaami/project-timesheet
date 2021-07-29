<?php
include("dbconn.php");
error_reporting(0);

$p_id=$_GET['id'];
$query = "DELETE FROM tbl_contact WHERE p_id  = '$p_id'";

$data = mysqli_query($con,$query);

if($data)
{
    header("location:display.php");
    // echo "<font color = 'green'>Record Deleted From Database";
}
else
{
    echo "<font color = 'red'>Record Not Deleted From Database";
}
?>
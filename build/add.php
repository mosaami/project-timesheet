<?php
// database connection code
if(isset($_POST['txtName']))
{
include "dbconn.php"; 

// $txtId = $_POST['txtId'];
$txtName = $_POST['txtName'];
$txtTask = $_POST['txtTask'];
$txtNotes = $_POST['txtNotes'];
$txtWorktime= $_POST['txtWorktime'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`p_name`, `p_task`, `p_notes`, `p_worktime`) VALUES ('$txtName', '$txtTask', '$txtNotes', '$txtWorktime')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
	header("Location: index.php");
exit();
}
}
else
{
	echo "Records couldn't be recorded";
	
}
?>
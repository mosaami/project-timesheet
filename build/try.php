<?php
include "DbConnect.php";
$db = new DbConnect();
$con = $db->connect();
$stmt= $con->prepare("SELECT * FROM tbl_contact");
$stmt->execute();
$stmt = $stmt-> fetchAll(PDO::FETCH_ASSOC);
echo"<pre>";
    print_r($tests);

  ?>  
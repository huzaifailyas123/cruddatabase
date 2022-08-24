<?php
session_start();
include 'conn.php';

$id = $_GET['id'];

$sql = "DELETE FROM `user_tbl` WHERE `id` = '$id'";

$query = mysqli_query($con, $sql);

if($query)
{
    $_SESSION['SuccessMessage'] = "Data Deleted Successfully";
    header('Location: display.php');
}
else
{
    $_SESSION['ErrorMessage'] = "Data Not Deleted";
    header('Location: display.php');
}

?>
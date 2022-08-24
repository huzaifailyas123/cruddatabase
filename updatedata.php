<?php
session_start();
include 'conn.php';

if(isset($_POST['updatebtn']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $sql = "UPDATE `user_tbl` SET `name` = '$name', `email` = '$email', `age` = '$age', `city` = '$city', `gender` = '$gender', `country` = '$country' WHERE `id` = '$id'";

    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['SuccessMessage'] = "Data Update Successfully";
        header('Location: display.php');
    }
    else
    {
        $_SESSION['ErrorMessage'] = "Data Not Updated";
        header('Location: display.php');
    }


}


?>
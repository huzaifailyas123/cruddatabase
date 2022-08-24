<?php
session_start();
include 'conn.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $sql = "INSERT INTO `user_tbl` (`name`, `email`, `age`, `city`, `gender`, `country`) VALUES ('$name', '$email', '$age', '$city', '$gender', '$country')";

    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['SuccessMessage'] = "Data Inserted Successfully";
        header('Location: index.php');
    }
    else
    {
        $_SESSION['ErrorMessage'] = "Data Insertion Failled";
        header('Location: index.php');
    }


}



?>
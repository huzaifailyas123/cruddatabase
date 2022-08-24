<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'conn.php';
    $id = $_GET['id'];

    $sql = "SELECT * FROM `user_tbl` WHERE `id` = '$id'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center pt-5">
            <div class="col-6 card shadow">
                <form action="updateData.php" method="POST">
                    <div class="my-3">
                        <h1 class="text-center text-primary text-uppercase">Update User</h1>
                    </div>
                    <div class="my-3">
                        <input type="hidden" name="id" class="form-control" placeholder="Enter Your Name" value="<?php echo $row[0];   ?>">
                    </div>
                    <div class="my-3">
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php echo $row[1];   ?>">
                    </div>
                    <div class="my-3">
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $row[2];   ?>">
                    </div>
                    <div class="my-3">
                        <input type="number" name="age" class="form-control" placeholder="Enter Your Age" value="<?php echo $row[3];   ?>">
                    </div>
                    <div class="my-3">
                        <input type="text" name="city" class="form-control" placeholder="Enter Your City" value="<?php echo $row[4];   ?>">
                    </div>
                    <div class="my-3">
                        <?php

                        if (strtolower($row[5]) == "male") {
                        ?>

                            <label for="" class="form-check-label">Gender : </label>
                            <label for="" class="ms-2 me-3 form-check-label">Male : </label>
                            <input type="radio" class="form-check-input" name="gender" value="Male" checked>
                            <label for="" class="ms-2 me-3 form-check-label">Female : </label>
                            <input type="radio" class="form-check-input" name="gender" value="Female">


                        <?php
                        } else {
                        ?>
                            <label for="" class="form-check-label">Gender : </label>
                            <label for="" class="ms-2 me-3 form-check-label">Male : </label>
                            <input type="radio" class="form-check-input" name="gender" value="Male">
                            <label for="" class="ms-2 me-3 form-check-label">Female : </label>
                            <input type="radio" class="form-check-input" name="gender" value="Female" checked>


                        <?php
                        }
                        ?>

                    </div>
                    <select class="form-select" aria-label="Default select example" name="country">
                        <option selected><?php echo $row[6];  ?></option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="India">India</option>
                        <option value="Srilanka">Srilanka</option>
                    </select>
                    <div class="my-3">
                        <div class="row">
                            <div class="col-4">
                                <a href="./display.php" class="btn btn-info text-light w-100">Back to Data</a>
                            </div>
                            <div class="col-8">
                                <input type="submit" name="updatebtn" value="Update" class="btn btn-primary w-100">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>
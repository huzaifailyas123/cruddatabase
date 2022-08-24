<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-6">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">User Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php">User Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    session_start();

    if (isset($_SESSION['SuccessMessage'])) {

    ?>

        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hey! </strong>
                        <?php echo $_SESSION['SuccessMessage'];
                        session_unset();
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="col-6 card shadow">
                <form action="create.php" method="POST">
                    <div class="my-3">
                        <h1 class="text-center text-primary text-uppercase">User Form</h1>
                    </div>
                    <div class="my-3">
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="my-3">
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                    </div>
                    <div class="my-3">
                        <input type="number" name="age" class="form-control" placeholder="Enter Your Age">
                    </div>
                    <div class="my-3">
                        <input type="text" name="city" class="form-control" placeholder="Enter Your City">
                    </div>
                    <div class="my-3">
                        <label for="" class="form-check-label">Gender : </label>
                        <label for="" class="ms-2 me-3 form-check-label">Male : </label>
                        <input type="radio" class="form-check-input" name="gender" value="Male" checked>
                        <label for="" class="ms-2 me-3 form-check-label">Female : </label>
                        <input type="radio" class="form-check-input" name="gender" value="Female">
                    </div>
                    <select class="form-select" aria-label="Default select example" name="country">
                        <option selected>Select Country</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="India">India</option>
                        <option value="Srilanka">Srilanka</option>
                    </select>
                    <div class="my-3 text-center">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary w-75">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</body>

</html>
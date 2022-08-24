<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-10">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">User Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="display.php">User Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <h1 class="my-5 text-center text-primary text-uppercase">User Data</h1>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 ">
  
    <table class="table table-success table-striped table-bordered table-primary table-hover text-center align-middle table-striped   ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">AGE</th>
      <th scope="col">CITY</th>
      <th scope="col">GENDER</th>
      <th scope="col">COUNTRY</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php
   include 'conn.php';
   $sql = "SELECT * FROM `user_tbl`";

   $query = mysqli_query($con,$sql);

   while($row = mysqli_fetch_array($query)){

    ?>
    <tr>
    <td><?php echo $row[0]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
      <td><?php echo $row[3]; ?></td>
      <td><?php echo $row[4]; ?></td>
      <td><?php echo $row[5]; ?></td>
      <td><?php echo $row[6]; ?></td>
      <td><a href="update.php?id=<?php echo $row[0];  ?>"><i class="fa-solid fa-pen-to-square"></i></a> | <a href="delete.php?id=<?php echo $row[0];  ?>" class="text-danger"><i class="fa-solid fa-trash"></i></a>
        
    </tr>
    <?php
   }
  ?>
  </tbody>
</table>
</div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
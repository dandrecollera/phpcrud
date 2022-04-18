<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $birthdate = $_POST['birthday'];
    $newDate = date("Y-m-d", strtotime($birthdate));

    $sql = "insert into `patient`(fname, lname, birthdate,age) values('$firstname', '$lastname', CAST('".$birthdate."' AS DATE) ,'$age')";
    $result = mysqli_query($con,$sql);

    if(!$result){
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>

    <!-- ito copy paste -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <section class="container p-5 col-12 col-md-6" id="loginForm">
        <div class="card bg-light text-dark shadow ">
            <div class="card-header">Patient</div>
            <div class="card-body">
                <h1 class="card-title mb-3">Add Patient</h1>
                <h6 class="card-subtitle mb-3">Enter all fields</h6>
                <hr class="mb-4">
                <form method="post">
                    <div class="input-group pb-3">
                        <span class="input-group-text">First and last name</span>
                        <input type="text" aria-label="First name" class="form-control" name="firstname">
                        <input type="text" aria-label="Last name" class="form-control" name="lastname">
                    </div>
                    <div class="input-group pb-3">
                        <span class="input-group-text">Birthday</span>
                            <input type="date" id="birthday" name="birthday">
                    </div>
                    <div class="input-group pb-3">
                        <span class="input-group-text">Age</span>
                        <input type="text" aria-label="Age" class="form-control" name="age">
                    </div>
                    <button type="submit" class="btn btn-outline-primary" name="submit">Submit</button>
                    <a href="main.php"><button type="button" class="btn btn-outline-primary">Back</button></a>
                </form>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </section>

    <!-- ito rin copy paste -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <section class="container p-5 col-12 col-md-6" id="loginForm">
        <div class="card bg-light text-dark shadow ">
            <div class="card-header">Patient</div>
            <div class="card-body">
                <h1 class="card-title mb-3">Patient List</h1>
                <h6 class="card-subtitle mb-3">Here is the list of patients.</h6>
                <hr class="mb-4">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Patient ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">Age</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql="Select * from `patient`";
                            $result = mysqli_query($con, $sql);

                            if($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    $id=$row['patient_id'];
                                    $fname=$row['fname'];
                                    $lname=$row['lname'];
                                    $birthdate=$row['birthdate'];
                                    $age=$row['age'];
                                    echo '
                                        <tr>
                                            <th scope="row">'.$id.'</th>
                                            <td>'.$fname.'</td>
                                            <td>'.$lname.'</td>
                                            <td>'.$birthdate.'</td>
                                            <td>'.$age.'</td>
                                        </tr>
                                    ';
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <a href="main.php"><button type="button" class="btn btn-outline-primary">Back</button></a>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
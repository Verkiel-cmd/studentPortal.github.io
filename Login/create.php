<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_stu";

$conn = new mysqli($servername, $username, $password, $dbname);

$name = "";
$email = "";
$phone = "";
$address = "";

$nameError = "";
$emailError = "";
$phoneError = "";
$addressError = "";

$successMessage ="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $isValid = true;

        if ( empty($name) ) {  
            $nameError = "Name are required";
            $isValid = false;
        }
        if ( empty($email) ) {  
            $emailError = "Email are required";
            $isValid = false;
        }
        if ( empty($phone) ) {  
            $phoneError = "Phone are required";
            $isValid = false;
        }
        if ( empty($address) ) {  
            $addressError = "Address are required";
            $isValid = false;
        }

        $sql = "INSERT INTO studentawt (name, email, phone, address)" . 
               "VALUES ('$name', '$email', '$phone', '$address')";
               $result = $conn->query($sql);

               if (!$result) {
                if ($conn->errno == 1062) { // 1062 is the error code for duplicate entry
                    $errorMessage = "Duplicate entry detected. Please use unique values.";
                } else {
                    $errorMessage = "Invalid query: " . $conn->error;
                }
            }

if ($isValid) {
    
        $name = "";
        $email = "";
        $phone = "";
        $address = "";

        $successMessage = "Student added successfully";
 
    } 
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">

        <?php
    if (!empty($successMessage)) {
        echo "
        <div class='row mb-3'>
        <div class='offset-sm-0 col-sm-6'>
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>$successMessage</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-lable='Close'></button>
        </div>
        </div>
        </div>
        ";
    }
    ?>

        <h2>New Student</h2>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-0 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>

            <?php
            if (!empty($nameError)) {
                echo"
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$nameError</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <label class="col-sm-0 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>

            <?php
            if (!empty($emailError)) {
                echo"
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$emailError</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <label class="col-sm-0 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>

            <?php
            if (!empty($phoneError)) {
                echo"
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$phoneError</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <label class="col-sm-0 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>
            </div>

            <?php
            if (!empty($addressError)) {
                echo"
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$addressError</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }
            ?>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
            <div class="col-auto">
                <a class="btn btn-outline-primary" href="listStud.php" role="button">Cancel</a>



</body>

</html>
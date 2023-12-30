<?php
require 'config.php';
//retrives valuues from users input
if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM signup WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or Email Has Already been Taken'); </script>";
    }
    else{
        if ($password == $confirmpassword){
            $query = "INSERT INTO signup VALUES('', '$name','$username', '$email','$password')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Signup successful'); </script>";
        }
        else{
            echo
            "<script> alert('Password Does Not Match'); </script>";
        }
    }
}



?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <!-- linking to the external css -->
    <?php
    $cssPath = 'styles/signup.css';
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $cssPath?>">

</head>
<body>
    <div class="signup-container">
        <h1>Signup</h1>
        <!-- form for user sign up -->
        <form class="" action="" method= "post" autocomplete="off">
            <div class="form-fields">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" required value = "">
            </div>
            <div class="form-fields">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" required value = "">
            </div>
            <div class="form-fields">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required value = "">
            </div>
            <div class="form-fields">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required value = "">
            </div>
            <div class="form-fields">
                <label for="confirmpassword">Confirm password:</label>
                <input type="password" name="confirmpassword" id="confirmpassword" required value = "">
            </div>
            <button type="submit" name="submit">Signup</button>



        </form>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>


















</body>
</html>
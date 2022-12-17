<!DOCTYPE html>
<html lang="en">

<?php include 'database.php' ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register now</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/index.css"> 
</head>

<body>
    <div class="border rounded container">
        <h1 class="fw-semibold text-center">Register Now!</h1>
        <form action="register-action.php" method="post">
            <div class="first-name">
                <h3 class="text-start">First Name</h3>
                <input class="border rounded-pill form-control-lg d-md-flex d-lg-flex d-xl-flex justify-content-md-start justify-content-lg-start justify-content-xl-start" type="text" id="input" placeholder="Your first name" name="firstName" required>
            </div>
            <div>
                <h3 class="text-start">Last Name</h3>
                <input class="border rounded-pill form-control-lg d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-md-start justify-content-lg-start justify-content-xl-start justify-content-xxl-start" type="text" id="input" placeholder="Your last name" name="lastName" required>
            </div>
            <div>
                <h3 class="text-start">Email</h3>
                <input class="border rounded-pill form-control-lg d-md-flex d-lg-flex justify-content-md-start justify-content-lg-start" type="text" id="input" placeholder="example:john@gmail.com" name="email" required>
            </div>
            <div>
                <h3 class="text-start">Username</h3>
                <input class="border rounded-pill form-control-lg d-md-flex d-lg-flex justify-content-md-start justify-content-lg-start" type="text" id="input" placeholder="Create your username" name="username" required>
            </div>
            <div>
                <h3 class="text-start">Password</h3>
                <input class="border rounded-pill form-control-lg d-md-flex d-lg-flex justify-content-md-start justify-content-lg-start" type="password" id="input" placeholder="Enter your password" name="password" required>
            </div>
            <div class="register-btn">
                <input class="btn btn-primary fs-5 border rounded-pill" id="button" type="submit" value="Register">
            </div>
        </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php   
    include 'database.php';
    session_start();

    $username = $_POST['Username'];
    $password = $_POST['password'];

    $username=stripcslashes($username);
    $password = stripcslashes($password);
    $username=mysqli_real_escape_string($conn,$username);
    $password=mysqli_real_escape_string($conn,$password);

    $statement = "select * from customer where username = '$username' and password = '$password'";
    $result =mysqli_query($conn,$statement);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count==1){
        echo"<h1>Login succesful</h1>";
        header("Location: login-succesful.php");
        $_SESSION['username'] = $username;
    }else{
        echo"<h1>Login unsuccesful</h1>";
        header("Location:login.php");
    }

?>
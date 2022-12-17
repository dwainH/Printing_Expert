<?php
    include "database.php";
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $check_username = mysqli_query($conn,"SELECT username FROM customer WHERE username='$username'");
    if(mysqli_num_rows($check_username)>0){
        echo"username already exists";
    }
    else{
        $statement = $conn->prepare("insert into customer(firstname,lastname,email,username,password) values(?,?,?,?,?)");
        $statement->bind_param("sssss",$firstname,$lastname,$email,$username,$password);
        $statement->execute();
        $statement->close();
        header("Location: registration-succesful.php");
        exit();
    }
?>

    
    



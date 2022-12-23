<?php
    session_start();
    include 'database.php';
    $username = $_SESSION['username'];
    $Date = date("Y-m-d");
    $Status="Pending";
    
    $result = mysqli_query($conn,"SELECT employeeid
    FROM orders
    GROUP BY employeeid
    ORDER BY COUNT(*) ASC
    LIMIT 1;");
    $row = mysqli_fetch_row($result);

    $result2 = mysqli_query($conn,"SELECT id
    FROM customer 
    WHERE username = '$username'");
    $row2=mysqli_fetch_row($result2);

    $statement2 = $conn->prepare("insert into orders(date,status,customerid,employeeid) values(?,?,?,?)");
    $statement2->bind_param("ssss",$Date,$Status,$row2[0],$row[0]);
    $statement2->execute();
    $statement2->close();
    header("payment.php");
    exit();
?>
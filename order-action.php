<?php
    include 'database.php';

    $Date = date("Y-m-d");
    $Status="Pending";

    $statement = $conn->prepare("insert into orders(date,status) values(?,?)");
    $statement->bind_param("ss",$Date,$Status);
    $statement->execute();
    $statement->close();
    header("Location: order-details.php");
    exit();
?>
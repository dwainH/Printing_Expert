<?php
    include 'database.php';
    $status = 'Cancelled';
    $dateCurrent = new Datetime(date("Y-m-d"));
    if (isset($_GET['id'])){
        $id = $_GET['id'];

        $sqlCheckDate = "SELECT date FROM orders WHERE orders.id='$id'";
        $resultDate = mysqli_query($conn,$sqlCheckDate);
        $rowDate = mysqli_fetch_row($resultDate);

        $string_dateOrdered = $rowDate[0];
        $timestamp_from_table = strtotime($string_dateOrdered);
        $current_date = time();
        
        $difference = $current_date-$timestamp_from_table;
        if($difference>86400){
            echo "Sorry but the cancel request you have made is unavailable since the order has been for more than a day";
            header("Location:order.php");
        }
        else{
            $sqlCancel = "UPDATE orders SET status = '$status' WHERE id='$id'";

            $resultCancel = mysqli_query($conn,$sqlCancel);
            if($resultCancel){
                echo "Order cancellation is succesful!";
                header("Location:order.php");
            }else{
                echo "Cancellation isn't succesful!";
                
            }
        }
    }



?>
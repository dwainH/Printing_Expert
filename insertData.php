<?php

include ('database.php');
session_start();

if(isset($_POST['submitform'])){
    $username = $_SESSION['username'];

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];

    $query = "SELECT id FROM orders WHERE id = (SELECT MAX(id) FROM orders)";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $orderId = $row['id'];

    $query = "Insert into shipment (firstName,lastName,email,phoneNumber,address,orderId)
    values ('$firstname','$lastname','$email','$phoneNumber','$address','$orderId')";
    $result = mysqli_query($conn, $query);
    
   
        
   $file = $_POST['file'];

   $query1 = "Update order_service SET paymentFile = '$file' WHERE ordersid = '$orderId'";
   $result1 = mysqli_query($conn, $query1);

  if($result1){
      
     $query = "SELECT id FROM customer WHERE username='$username'";
     $result = mysqli_query($conn, $query);
     $row = mysqli_fetch_assoc($result);
     $customerId = $row['id'];

     $query = "SELECT firstname, email FROM customer WHERE id='$customerId'";
     $result = mysqli_query($conn, $query);
     $row = mysqli_fetch_assoc($result);
     $customerName = $row['firstname'];
     $customerEmail = $row['email'];

     $query1 = "SELECT firstname, email FROM shipment WHERE id = (SELECT MAX(id) FROM shipment)";
     $result1 = mysqli_query($conn, $query1);
     $row1 = mysqli_fetch_assoc($result1);
     $shipmentName = $row1['firstname'];
     $shipmentEmail = $row1['email'];
     
     //if shipmentEmail is empty
     if($result1 && empty($row1['email']) ){
     $to_email = $customerEmail;
     $subject = "Your Order Receipt $customerName";
     $body = "Thank you for your order. Please wait for futher processing";
     $headers = "From: bitu3923BITS@gmail.com";
      
        if (mail($to_email, $subject, $body, $headers)) {
            echo "<script>
                alert('Email successfully sent.');
                </script>";
        } else {
            echo "<script>
                alert('Error sending the email.');
                </script>";
        }
    }else if($result1 && !empty($row1['email'])){ // if shipmentEmail have values
     $to_email = $shipmentEmail;
     $subject = "Your Order Receipt $shipmentName" ;
     $body = "Thank you for your order. Please wait for futher processing";
     $headers = "From: bitu3923BITS@gmail.com";
          
        if (mail($to_email, $subject, $body, $headers)) {
            echo "<script>
                alert('Email successfully sent.');
                </script>";
        } else {
            echo "<script>
                alert('Error sending the email.');
                </script>";
        }
    }else{
        echo "<script>
            alert('Error sending the email.');
            </script>";
    }
     header('Location:successPayment.php');
     


   }else{
     echo "<Script> alert('Error'); </Script>";
     die(mysqli_error($conn));
    }
    

}

else{
  echo "<script>
    alert('Please fill all the fields below');
    </script>";
    die(mysqli_error($conn));
}


?>

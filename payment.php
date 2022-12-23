<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
      *{
        margin: 0;
        padding: 0;
      }
    .bg-image{
      background-image: url('https://img.freepik.com/free-photo/creative-flat-lay-photo-workspace-desk_7861-978.jpg?w=1380&t=st=1671271282~exp=1671271882~hmac=bf5d5ed7c8cdbea28057e80bfad2e77108a2c4e5775c81caf49cae42bf65f083');
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
  <body class= "bg-image">
    <div class="container" >
      <div class="py-5 text-center">
        <img class="mb-4-block mx-auto" src="https://img.freepik.com/premium-vector/printing-company-logo-design-with-printer-graphics-colorful-chart-lines-illustration_227744-655.jpg" alt="Printing Expert" width="120" height="120">
        <h4>Checkout Page</h4>
        <p class="lead fs-6"> <?php echo $_SESSION['employeeid']?> Please fill the information regarding the shipment</p>
      </div>


    <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Your cart</span>
              <span class="badge bg-primary rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
              
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Size of Product</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$8</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Quantity</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Total Price</h6>
                </div>
                <span class="text-success">−$5</span>
              </li>
            
            </ul>
            <hr class="my-4">
            <form class="" action="index.php" method="post" enctype="multipart/form-data">
              No acc: 192823883746 (Maybank)
              Please upload the receipt
              <br>
              <input type="file" name="fuResume" value="fuResume">
              <br>
              <br>
              <input class="w-100 btn btn-primary" type="submit" name="submit" value="Click here to submit">
            </form>
          </div>

        <div class="col-md-7 col-lg-8">
         <form class="needs-validation" novalidate>
           <div class="row g-3">
             <div class="col-sm-6">
             <label for="firstName" class="form-label">First name</label>
             <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
             <div class="invalid-feedback">
               Valid first name is required.
             </div>
           </div>

           <div class="col-sm-6">
             <label for="lastName" class="form-label">Last name</label>
             <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
             <div class="invalid-feedback">
               Valid last name is required.
             </div>
           </div>

           <div class="col-sm-6">
             <label for="phoneNumber" class="form-label">Phone Number</label>
             <div class="input-group has-validation">
               <span class="input-group-text">+60</span>
               <input type="text" class="form-control" id="phoneNumber" placeholder="123456789" required>
             <div class="invalid-feedback">
                 Your username is required.
               </div>
             </div>
           </div>

           <div class="col-12">
             <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
             <input type="email" class="form-control" id="email" placeholder="you@example.com">
             <div class="invalid-feedback">
               Please enter a valid email address for shipping updates.
             </div>
           </div>

           <div class="col-12">
             <label for="address" class="form-label">Address</label>
             <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
             <div class="invalid-feedback">
               Please enter your shipping address.
             </div>
           </div>

        

           <div class="col-md-4">
             <label for="state" class="form-label">State</label>
             <select class="form-select" id="state" required>
               <option value="">Choose...</option>
               <option>Selangor</option>
               <option>Kuala Lumpur</option>
               <option>Putrajaya</option>
               <option>Labuan</option>
               <option>Perlis</option>
               <option>Perak</option>
               <option>Kedah</option>
               <option>Kelantan</option>
               <option>Pahang</option>
               <option>Terengganu</option>
               <option>Negeri Sembilan</option>
               <option>Melaka</option>
               <option>Johor</option>
               <option>Sabah</option>
               <option>Sarawak</option>
             </select>
             <div class="invalid-feedback">
               Please provide a valid state.
             </div>
           </div>

           <div class="col-md-3">
             <label for="zipCode" class="form-label">Zipcode</label>
             <input type="text" class="form-control" id="zip" placeholder="" required>
             <div class="invalid-feedback">
               Zip code required.
             </div>
           </div>
         </div>

         <hr class="my-4">


      </div>
    </div>
    </div>
</body>

</html>

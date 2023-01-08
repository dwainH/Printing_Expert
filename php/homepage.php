<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login | Admin </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  
    <p class="text-center p-2 mb-2 bg-light text-dark">Home Page</p>
    <form action="logincode.php" method="POST">
        <section class="vh-90" style="background-color: #508bfc;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5">
                                <h3 class="text-center mb-4">Log In</h3>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                <label class="form-label" for="username">Username:</label>
                                    <input required type="text" id="username" class="form-control" name="username" placeholder="Abc123" required/>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password:</label>
                                    <input required type="password" id="password" class="form-control" name="password" maxlength= "12" required />
                                </div>

                                <!-- Submit button -->
                                <a class="btn btn-primary btn-block mb-4" href="dashboard.php" role="button">Back</a>
                                <button type="submit" name="loginBtn"class="btn btn-primary btn-block mb-4">Log In</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <footer class="bg-info text-center text-lg-start fixed-bottom">
                <!-- Copyright -->
                    <div class="text-center p-2" style="background-color: rgb(37, 35, 35);">
                    <p class="text-white">Copyright &copy; 2022 PrinEx | Printing Expert Web. All right reserved.</p>
                    </div>
                <!-- Copyright -->
                    </div>
            </footer>
        </section>
    </form>
    </body>

</html>
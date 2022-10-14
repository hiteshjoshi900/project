<?php
    session_start();
    if (isset($_POST["log"]))
    {
        $em=$_POST["email"];
        $pass=$_POST["pass"];

        if ($em=='hiteshjoshi900@gmail.com' && $pass=='hiteshjoshi900') 
        {
            echo "<h3 align='center' style='color:green'> You are Login Succsessfully<h3>";
            header("refresh:4,profil.php");
        }
        else
        {
            echo "<h3 align='center' style='color:red'> Your Email Or Password are Incorect<h3>";
            header("refresh:4,login.php");
        }
     
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script  src="assets/js/crt.js"></script>
    <script  src="assets/js/validation.js"></script>
    <!-- validations style -->
    <style>
        #error 
        {
            color: red !important;
        }
    </style>
</head>
<body>
    <!-- login form modal -->
    <div class="modal fade" id="log" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content p-5">
                <h2 class="text-success mt-2">Login Form <i class="bi bi-person"></i> <button class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal">&times;</button> </h2>
                <hr class="border border-2 border-danger">


                <form class="row g-3 needs-validation" novalidate>
                    
                    <div class="col-md-8">
                    
                      <input type="email" class="form-control" id="validationCustom03" required placeholder="Enter Email *">
                      <div class="invalid-feedback">
                        Please provide a email Address.
                      </div>
                    </div>

                    <div class="col-md-8">
                        
                        <input type="password" class="form-control" id="validationCustom03" required  placeholder="Enter Password *">
                        <div class="invalid-feedback">
                          Please provide a Password.
                        </div>
                      </div>
                    <div class="col-12">
                      <button class="btn btn-primary" type="submit">Login</button>
                      <b><a href="register.html">Forget Password</a></b>
                    </div>
                    <div class="form-group mt-2">
                        <b>Don't have an account ? <a href="register.html">Register here</a></b>
                        </div>
                  </form>
            </div>

        </div>
    </div>
</body>
</html>
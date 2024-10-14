<?php
include('nav.php'); 
?>

<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <link href="style8.css" rel="stylesheet" type="text/css">
</head>

<body>


  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
       
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <h2 class="product-category">Log In</h2>
        <form class="mx-1 mx-md-4" action="login2.php" method="post">

<br>

       
            <div class="d-flex flex-row align-items-center mb-4">
              
              <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="form3Example3c"><i class="bi bi-envelope-at-fill"></i> Your Email</label>
                <input type="email" id="form3Example3c" class="form-control form-control-lg py-3" name="username" autocomplete="off" placeholder="Enter your email address" style="border-radius:25px ;" />

              </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
           
              <div class="form-outline flex-fill mb-0">
                <label class="form-label" for="form3Example4c"><i class="bi bi-chat-left-dots-fill"></i> Your Password</label>
                <input type="password" id="form3Example4c" class="form-control form-control-lg py-3" name="password" autocomplete="off" placeholder="Enter your password" style="border-radius:25px ;" />
              </div>
            </div>
            <br><br>
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
            <input type="submit" value="Log In" name="login" class="btn btn-success btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;" style="border-radius:25px ;" />
            </div>
            <p align="center">I don't have any account.<a href="signin.php" class="text-success" style="font-weight:600;text-decoration:none;"> Sign In Here</a></p>
        </form>
        </div>
       
      </div>
    </div>
  </section>













<?php
include('footer.php'); 
?>



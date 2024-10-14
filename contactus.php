<?php
include('nav.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Style1.css">
    <link rel="stylesheet" href="style5.css">
    <title>product</title>



    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- fontawesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
    crossorigin="anonymous">
</head>

<body>
<section class="contact py-5 my-5" id="contact">
          <div class="container ">
              <div class="section_title text-center mb-5">
              <h2 class="product-category">Contact Us</h2>
              </div>
              <div class="row mb-5">
                  <div class="col-md-4 col-12">
                      <div class="border border-success rounded shadow text-center p-3">
                          <div class="mb-4">
                              <i class="fas fa-phone-alt fa-3x"></i>
                          </div>
                          <div>
                              <h3>Let's Talk</h3>
                              <p><b>Phone:</b> <br>+94-716596860</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-12">
                      <div class="border border-success rounded shadow text-center p-3">
                          <div class="mb-4">
                              <i class="fas fa-envelope-open fa-3x"></i>
                          </div>
                          <div>
                              <h3>Drop a Line</h3>
                              <p><b>Email:</b> chamodyanimshan0818@gmail.com</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-12">
                      <div class="border border-success rounded shadow text-center p-3">
                          <div class="mb-4">
                              <i class="far fa-life-ring fa-3x"></i>
                          </div>
                          <div>
                              <h3>24x7 Support</h3>
                              <p><b>Hot-line:</b><br> +94-716596860</p>
                          </div>
                      </div>
                  </div>
              </div><br><br>
              <h5 style="text-align:center;">If you want, you can drop some messages here...</h5>
              <div class="row">
                  <div class="col-md-8 col-10 mx-auto mb-3 my-5 py-5 border shadow">
                  <p class="text-center h2 fw-bold mb-4 mx-1 mx-md-3 mt-3">Form</p>
                      <form action="contact2.php" method="POST" id="form">
                          <div class="form-group">
                              <label><b>Name</b></label>
                              <input name="name" id="name" type="text" placeholder="Enter your name" class="form-control">
                          </div>
                          <div class="form-group">
                              <label><b>Email address</b></label>
                              <input name="email" id="email" type="email" placeholder="Enter your email address " class="form-control">
                          </div>
                          <div class="form-group">
                              <label><b>Message</b></label>
                              <textarea name="msg" id="msg" type="text" class="form-control" placeholder="Drop a message"></textarea>
                          </div>
                          <input type="submit" value="Submit" name="submit" class="btn btn-success btn-lg text-light my-2 py-3" style="width:100% ; border-radius: 30px; font-weight:600;" style="border-radius:25px ;" />
                      </form>
                  </div>
              </div>
          </div>
      </section>









<?php
include('footer.php'); 
?>
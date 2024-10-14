<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="x-icon" href="images\Screenshot (199).png">
  <title>KCN PRODUCTS</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- fontawesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
    crossorigin="anonymous">
    <!--some css parts-->
    
    
    <style>
  .btn-container {  /* Add a class to the parent element */
    text-align: center;
  }
</style>

<style>
  .card-title {
    font-weight: bold;
    text-align: center;
  }
</style>
<style>
  .custom-toggler-icon{
    color: green; /* Change color to your desired color */
  }
  
</style>

</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images\KCN PRODUCTS Logo - Original with Transparent Background - 5000x5000.png" class="img" style="width: 150px; height: 50px;"></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="custom-toggler-icon">☰</span> <!-- Custom icon, you can replace with any other icon or text -->
    </button>

    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Product items
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="gents.php">Gents Products</a></li>
            <li><a class="dropdown-item" href="ladies.php">Ladies Products</a></li>
            <li><a class="dropdown-item" href="babies.php">Babies Products</a></li>
           
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log In</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="find" onkeyup="search()">
        <button class="btn btn-outline-success" type="submit" >Search</button>
      </form>
    </div>
  </div>
</nav>
<br>

<!-- javascript -->
<script type="text/javascript">
function search() {
let filter = document.getElementById('find').value.toUpperCase();
let item = document.querySelectorAll('.product-card');
let l = document.getElementsByTagName('h5');
for(var i = 0;i<=l.length;i++){
let a=item[i].getElementsByTagName('h5')[0];
let value=a.innerHTML || a.innerText || a.textContent;
if(value.toUpperCase().indexOf(filter) > -1) {
item[i].style.display="";
}
else
{
item[i].style.display="none";
}
}
}
</script>
</body>
</html>
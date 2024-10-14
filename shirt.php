<?php
include('nav.php'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="blackshirt.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
}

.small-container {
    max-width: 1000px;
    margin: auto;
    padding-left: 25px;
    padding-right: 20px;
}

.row {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}

.single-product {
    margin-top: 80px;
}

.small-img-row {
    display: flex;
    justify-content: space-around;
}

.col-2 img {
    max-width: 100%;
    padding: 50px 0;
}

.small-img-col {
    flex-basis: 24%;
    cursor: pointer;
}

.single-product .col-2 img {
    padding: 0;
}

.single-product .col-2 {
    padding: 20px;
}

.col-2 {
    flex-basis: 50%;
    min-width: 450px;
}

.col-2 h1 {
    font-size: 50px;
    line-height: 60px;
    margin: 50px 0;
}

.single-product select {
    display: block;
    padding: 10px;
    margin-top: 20px;
}

.single-product h4 {
    margin: 20px 0;
    font-size: 22px;
    font-weight: bold;
}

.single-product input {
    width: 50px;
    height: 40px;
    padding-left: 10px;
    font-size: 20px;
    margin-right: 10px;
    border: 1px solid #ff523b;
}

input:focus {
    outline: none;
}

a {
    text-decoration: none;
    color: #555;
}

.single-product .fa {
    color: #ff523b;
    margin-left: 10px;
}

p {
    color: #555;
}

.btn1{
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: background 0.5s;
}

.btn1:hover {
    background: #563434;
}

</style>


<title>Products details Enjoy Dude</title>
</head>

<body>
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="images/OIP (1).jpeg" width="100%" id="ProductImg">


            <div class="small-img-row">
          
                <div class="small-img-col">
                    <img src="images/OIP (1).jpeg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/OIP (2).jpeg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/OIP (3).jpeg" width="100%" class="small-img">
                </div>
                <div class="small-img-col"> 
                    <img src="images/OIP.jpeg" width="100%" class="small-img">
                </div>
            </div>
        </div>
        <div class="col-2">
          
            <h1 style="font-weight: bold;">T-shirts by enjoy dude.</h1>
            <h3>Product  Details <i class="fa fa-indent"></i></h3>
            <br>
            <p>kvsgkvchdkjvhkhkjh jjhvfjhbvbhjvbjhvfhjhhvj<br>
            hascgg,fhhjhfdhjfhkhfkjhf.fjkf,h</p><br>
            <p style="font-weight: bold; color: green;">kvsgkvchdkjvhkhkjh jjhvfjhbvbhjvbjhvfhjhhvj<br>
   hascgg,fhhjhfdhjfhkhfkjhf.fjkf,h</p>

            <br>          
            <p style="font-weight: bold; font-size: larger;">Copy the product id - 8176</p>

             <br>   
            </select>
            <h4>RS.1000.00</h4>

            <a href="" class="btn1">Buy Now</a>
          
        </div>
    </div>
</div>

<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function() {
        ProductImg.src = SmallImg[0].src;
    }

    SmallImg[1].onclick = function() {
        ProductImg.src = SmallImg[1].src;
    }

    SmallImg[2].onclick = function() {
        ProductImg.src = SmallImg[2].src;
    }

    SmallImg[3].onclick = function() {
        ProductImg.src = SmallImg[3].src;
    }
</script>

</body>
</html>
<br><br><br><br><br><br>
<?php
include('footer.php'); 
?>

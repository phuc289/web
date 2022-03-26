<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/details.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>Details</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="./image/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse"  id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-4">
          <img class="search" src="./image/search.png" alt="">
          <img class="heart" src="./image/heart.png" alt="">
          <img class="cart" src="./image/cart.png" alt="">
        </form>
      </div>
    </div>
  </nav>
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <div class="title">Shop</div>
        <div class="name">
          <li class="breadcrumb-item"><a href="index.php

            ">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop</li>
        </div>
      </ol>
    </nav>
  <div class="container">
    <div class="details">
      <div class="img1"><center><img src="image/product-1.jpg" alt=""></center></div>
      <div class="info">
        <p class="title">Chi Pu Machelin Ok</p>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star-half"></i>
        <p class="price">$5000</p>
        <p class="more"><span>Availability:</span> In Stock</p>
        <p class="more"><span>Brand:</span> Gucci</p>
        <div class="size">
          <p>Size: </p>
          <select class="slsize" name="cbosize">
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
          </select>
          <style>
            .size{
              display:flex;
              padding-bottom:0px;
            }
            .size p{
              margin-right:10px;
            }
          </style>
        </div>
        <div class="quantity">
          <p>Quantity:</p>
          <div class="inp"><input type="text" value="1"></div>
          <div class="bt"><button type="button" name="button">Add to cart</button></div>
        </div>
      </div>
    </div>
    <div class="des">
      <h3>Descriptions:</h3>
      <p>Quần culottes ống rộng suông dài 2 màu đen tím<br>
        <div class="container">
          <p>Thông tin sản phẩm<br>
          🔹 Quần lưng/cạp cao qua rốn_quần cạp thường khách nha không có chun sau lưng ạ. Dây kéo khoá trước<br>
          🔹 Chất vải đẹp, không quá dày tạo độ rũ cho vải..<br>
          #quần_ống_rộng #quần_culottes #quần_ống_rộng_dài  #quần_ống_rộng_vải_mềm #quần_ống_rộng_nữ #quan_ong_rong #quần_ống_rộng_lửng #quần_lửng_ống_rộng #quần_ống_sớ #quần_tây_ống_rộng #quần_culottes_dài #quần_đũi_ống_rộng #quần_ống_suông_nữ #quần_ống_rộng_lưng_cao #quần_jean_nữ_ống_rộng #quần_vải_ống_rộng #quần_short_nữ_ống_rộng #thời_trang_quần_ống_rộng #quần_đũi_nữ_ống_rộng #quần_ống_suông_cạp_cao #mẫu_quần_ống_rộng #quần_suông_ống_rộng #quần_đũi_nữ_ống_suông #quần_rin_ống_rộng #quần_dài_ống_rộng </p>
        </div>
    </div>
    <style>
      .des{
        background-color: rgba(178, 190, 195,0.1);
        margin-top: 50px;
      }
    </style>
  </div>
  <div class="container">
    <?php
      include 'productslider.php';
    ?>
  </div>
</body>
</html>

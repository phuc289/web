<?php
  include("include/connect.inc");
  $pagesize=5;
  $rs= $conn->query("SELECT * FROM tblcategories") or die($conn->error);
  $count= $rs->num_rows;
  $pos= (!isset($_GET['page']))?0:($_GET['page']-1)*$pagesize;
  $rs= $conn->query("SELECT * from tblcategories limit $pos, $pagesize") or die($con->error);
  $i=1;
  $rs1= $conn->query("SELECT * FROM tblbrands") or die($conn->error);
  $id_categorie=null;
  $id_brand=null;
  if(isset($_GET['id_categorie'])){
    $id_categorie=$_GET['id_categorie'];
  }
  if(isset($_GET['id_brand'])){
    $id_brand=$_GET['id_brand'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="css/shop.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>Shop</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="./image/logo.png" alt=""></a>
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
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop</li>
        </div>
      </ol>
    </nav>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="left">
          <div class="container">
            <div class="searchs">
              <input type="text" placeholder="Search...">
              <a href=""><img src="image/search.png" alt=""></a>
            </div>
          </div>
          <div class="container">
            <div class="categories">
              <div class="categori">
                <ul>
                  <li>
                      <div class="one" id="headingOne">
                          <div class="chiadeu" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div>CATEGORIES</div>
                            <i class="fas fa-angle-down"></i>
                          </div>
                      </div>
                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                          <?php while($row = $rs->fetch_assoc()): ?>
                          <div><a href='shop.php?id_categorie=<?=$row['id_categorie']?>&id_brand=<?=$id_brand?>'><?=$row['name_categorie']?></a></div>
                          <?php endwhile; ?>
                      </div>
                  </li>
                  <li>
                    <div class="two" id="headingTwo">
                        <div class="chiadeu" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          <div>BRAND</div>
                          <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                      <?php while($row = $rs1->fetch_assoc()): ?>
                      <div><a href='shop.php?id_brand=<?=$row['id_brand']?>&id_categorie=<?=$id_categorie?>'><?=$row['name_brand']?></a></div>
                      <?php endwhile; ?>
                    </div>
                  </li>
                  <li>
                    <div id="headingThree">
                        <div class="chiadeu" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          <div>FILTER PRICE</div>
                          <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                        <div><a href="">Low To High</a></div>
                        <div><a href="">High To Low</a></div>
                    </div>
                  </li>
                  <li>
                    <div id="headingFour">
                        <div class="chiadeu" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                          <div>PRICE</div>
                          <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                        <div><a href="">$0.00 - $50.00</a></div>
                        <div><a href="">$50.00 - $100.00</a></div>
                        <div><a href="">$100.00+</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="right">
            <div class="row row-cols-2 row-cols-lg-3">
              <?php
                if($id_categorie!=null){
                  if($id_brand!=null){
                    $rs2= $conn->query("SELECT * FROM tblproducts WHERE id_categorie=$id_categorie AND id_brand=$id_brand") or die($conn->error);
                  }else{
                    $rs2= $conn->query("SELECT * FROM tblproducts WHERE id_categorie=$id_categorie") or die($conn->error);
                  }
                }else{
                  if($id_brand!=null){
                    $rs2= $conn->query("SELECT * FROM tblproducts WHERE id_brand=$id_brand") or die($conn->error);
                  }else{
                    $rs2= $conn->query("SELECT * FROM tblproducts") or die($conn->error);
                  }
                }
              ?>
              <?php while($row = $rs2->fetch_assoc()): ?>
              <div class="col mb-4">
                <a href="details2.php?id_product=<?=$row['id_product']?>">
                  <div class="card h-100">
                    <div class="img">
                      <img src="./image/<?=$row['images']?>" class="card-img-top" alt="...">
                    </div>
                    <div class="overplay">
                      <div class="container">
                        <div class="row row-cols-1">
                          <div class="col"><img src="./image/search.png" alt=""></div>
                          <div class="col"><img src="./image/cart.png" alt=""></div>
                          <div class="col"><img src="./image/arrow.jpg" alt=""></div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <p class="card-title"><?=$row['name_product']?></p>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star-half"></i>
                      <p class="price"><?=$row['price']?></p>
                    </div>
                  </div>
                </a>
              </div>
              <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

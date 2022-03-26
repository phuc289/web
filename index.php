<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>Home</title>
</head>
<body>
  <div class="main">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="./image/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
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
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/home1.jpg" class="d-block w-100" alt="...">
          <div class="text">
            <div class="text1">SUMMER COLLECTION</div>
            <div class="text2">Fall - Winter<br>Collections 2020</div>
            <div class="text3">A specialist label creating luxury essentials. Ethically crafted<br>
            with an unwavering commitment to exeptional quality.</div>
            <div class="buttont"><a class="cleara" href="shop.php">EXPLORE</a></div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/home2.jpg" class="d-block w-100" alt="...">
          <div class="text">
            <div class="text1">SUMMER COLLECTION</div>
            <div class="text2">Fall - Winter<br>Collections 2020</div>
            <div class="text3">A specialist label creating luxury essentials. Ethically crafted<br>
            with an unwavering commitment to exeptional quality.</div>
            <div class="buttont"><a class="cleara" href="shop.php">EXPLORE</a></div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="shop">
      <div class="collect">
          <div class="clothing">
            <img src="./image/banner1.png" alt="">
            <div class="text">
              <p class="p1">Clothing<br>Collections 2020</p>
              <p class="p2"><a class="cleara" href="shop.php">EXPLORE</a></p>
            </div>
          </div>
          <div class="shoes">
            <img src="./image/banner3.png" alt="">
            <div class="text">
              <p class="p1">Shoes Collections<br>2020</p>
              <div class="p2"><a class="cleara" href="shop.php">EXPLORE</a></div>
            </div>
          </div>
          <div class="acs">
            <img src="./image/banner2.png" alt="">
            <div class="text">
              <p class="p1">Accessories 2020</p>
              <p class="p2"><a class="cleara" href="shop.php">EXPLORE</a></p>
            </div>
          </div>
        </div>
      <div class="container ctren">
        <div class="trending">
          <div class="title">
              <center><div class="row row-cols-1 row-cols-md-3">
                <div class="col"><a href="">Best Sellers</a></div>
                <div class="col"><a href="">New Arrivals</a></div>
                <div class="col"><a href="">Hot Sales</a></div>
              </div></center>
          </div>
          <div class="container">
            <div class="row row-cols-2 row-cols-md-4">
              <div class="col mb-4">
                <div class="card h-100">
                  <div class="img">
                    <img src="./image/product-1.jpg" class="card-img-top" alt="...">
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
                    <p class="card-title">Chi Pu Machelin Ok</p>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star-half"></i>
                    <p class="price">$5000</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <div class="img">
                    <img src="./image/product-2.jpg" class="card-img-top" alt="...">
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
                    <p class="card-title">Songoku Alaconda</p>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star-half"></i>
                    <p class="price">$5000</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <div class="img">
                    <img src="./image/product-3.jpg" class="card-img-top" alt="...">
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
                    <p class="card-title">Duma Quangzhau</p>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star-half"></i>
                    <p class="price">$5000</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <div class="img">
                    <img src="./image/product-4.jpg" class="card-img-top" alt="...">
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
                    <p class="card-title">Ekko Paris Boy</p>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star-half"></i>
                    <p class="price">$5000</p>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <div class="img">
                    <img src="./image/product-5.jpg" class="card-img-top" alt="...">
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
                    <p class="card-title">Elsa Hot Mlem</p>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star-half"></i>
                    <p class="price">$5000</p>
                  </div>
                </div>
              </div>
          </div>
          </div></div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="sale">
        <div class="selling">
          <div class="title">
            <p>Clothing Hot</p>
            <p>Shoe Collection</p>
            <p class="active">Accessories</p>
          </div>
          <div class="item">
            <img src="./image/sale.png" alt="">
        </div>
        <div class="text">
            <p class="titletxt">DEAL OF THE WEEK</p>
            <p class="name">Multi-pocket Chest<br>BackPack</p>
            <div class="time">
              <p class="timer" id="timer"></p>
              <div class="dhms">
                <p class="days">Days</p>
                <p class="hours">Hours</p>
                <p class="minutes">Minutes</p>
                <p class="seconds">Seconds</p>
              </div>
            </div>
            <button type="button"><a class="cleara" href="shop.php">SHOP NOW</a></button>
          </div>
        </div>
      </div>
    </div>
    <div class="about">
      <div class="big">
        <div class="img">
          <img src="./image/instagram-1.jpg" alt="">
          <img src="./image/instagram-2.jpg" alt="">
          <img src="./image/instagram-3.jpg" alt="">
          <img src="./image/instagram-4.jpg" alt="">
          <img src="./image/instagram-5.jpg" alt="">
          <img src="./image/instagram-6.jpg" alt="">
        </div>
        <div class="text">
          <p class="title">Instagram</p>
          <p class="nd">Follow us Instagram to get the best deal every week.<br>Fantasy place we post every best collection.</p>
          <p class="hashtag">#Male_Fashion</p>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcrumb bc1">
    <div class="contacts">
      <div class="big">
        <div class="little">
          <div class="g1">
            <img src="./image/logo2.png" alt="">
            <p>The customer is at the heart of our<br>unique business model, which includes<br>design.</p>
            <img src="./image/payment.png" alt="">
          </div>
          <div class="g2">
            <p class="title">SHOPPING</p>
            <p class="p">Clothings Store<br>Trending Store<br>Accessories<br>Sale</p>
          </div>
          <div class="g3">
            <p class="title">SHOPPING</p>
            <p class="p">Contacts Us<br>Payment Methods<br>Delivery<br>Return & Exchanges</p>
          </div>
          <div class="g4">
            <p class="title">NEW LETTER</p>
            <p class="p">Be the first to know about new arrivals,<br>look books, sales & promos!</p>
            <input type="text" name="" placeholder="Your Email">
          </div>
        </div>
        <div class="last">
          Copyright © 20202020 All rights reserved by Sơn handsome
        </div>
      </div>
    </div>
  </div>
  <script src="js/script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>lightSlider Demo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet"  href="../src/css/lightslider.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
    	ul{

			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}
        .demo .item{
            margin-bottom: 60px;
        }
		.content-slider li{
		    text-align: center;
		    color: #FFF;
		}
		.content-slider h3 {
		    margin: 0;
		    padding: 70px 0;
		}
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../src/js/lightslider.js"></script>
    <script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                item:6,
                loop:true,
                keyPress:true,
                responsive : [
            {
                breakpoint:1000,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:680,
                settings: {
                    item:2,
                    slideMove:1
                  }
            }
        ]
            });
		});
    </script>
</head>
<body>
  <div class="okla">
    <ul id="content-slider" class="content-slider">
        <li>
              <div class="container">
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
        </li>
        <li>
          <div class="container">
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
        </li>
        <li>
          <div class="container">
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
        </li>
        <li>
          <div class="container">
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
        </li>
        <li>
          <div class="container">
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
        </li>
        <li>
          <div class="container">
            <div class="card h-100">
              <div class="img">
                <img src="./image/product-6.jpg" class="card-img-top" alt="...">
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
        </li>
    </ul>
  </div>


</body>

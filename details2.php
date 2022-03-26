<?php
 include("include/connect.inc");
 session_start();
 $a=1;
 $id_product=$_GET['id_product'];
 $rs= $conn->query("SELECT * FROM tblproducts WHERE id_product='$id_product'") or die($conn->error);
 if(isset($_POST['add_to_cart'])){
   if(isset($_SESSION['cart'])){
     $item_array_id = array_column($_SESSION['cart'],'item_id');
     if(!in_array($_GET['id_product'],$item_array_id)){
       $count= count($_SESSION['cart']);
       $item_array=array(
         'item_id' => $_GET['id_product'],
         'item_name' => $_POST['hidden_name'],
         'item_price' => $_POST['hidden_price'],
         'item_quantity' => $_POST['quantity'],
         'item_images' => $_POST['hidden_images'],
         'item_size' => $_POST['size']
       );
       $_SESSION['cart'][$count] = $item_array;
       echo"<script>alert('them thanh cong.')</script>";
     }else{ // cùng sản phẩm
       for ($i=0;$i<count($_SESSION['cart']);$i++) {
         if($_SESSION['cart'][$i]['item_id']==$_GET['id_product'] and $_SESSION['cart'][$i]['item_size']==$_POST['size']){ // cùng id cùng size
           $_SESSION['cart'][$i]['item_quantity']=$_SESSION['cart'][$i]['item_quantity']+$_POST['quantity'];
           $a=1;
           echo"<script>alert('them thanh cong.')</script>";
           break;
         }else{ // không có cái nào cùng size cái vừa chọn
           $a=0;
        }
       }
       if($a==0){
         $count= count($_SESSION['cart']);
         $item_array=array(
           'item_id' => $_GET['id_product'],
           'item_name' => $_POST['hidden_name'],
           'item_price' => $_POST['hidden_price'],
           'item_quantity' => $_POST['quantity'],
           'item_images' => $_POST['hidden_images'],
           'item_size' => $_POST['size']
         );
         $_SESSION['cart'][$count] = $item_array;
         echo"<script>alert('them thanh cong.')</script>";
       }
     }
   }else{ // chưa chọn cái nào
     $item_array=array(
       'item_id' => $_GET['id_product'],
       'item_name' => $_POST['hidden_name'],
       'item_price' => $_POST['hidden_price'],
       'item_quantity' => $_POST['quantity'],
       'item_images' => $_POST['hidden_images'],
       'item_size' => $_POST['size']
     );
     $_SESSION['cart'][0] = $item_array;
     echo"<script>alert('them thanh cong.')</script>";
   }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="css/details2.css">
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-1.11.0.js" integrity="sha256-zgND4db0iXaO7v4CLBIYHGoIIudWI5hRMQrPB20j0Qw=" crossorigin="anonymous"></script>
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
        <a href="cart.php"><img class="cart" src="./image/cart.png" alt=""></a>
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
   <?php while($row = $rs->fetch_assoc()): ?>
   <div class="container-sm main1">
     <div class="row justify-content-md-center align-items-center">
       <div class="col-sm-auto col-lg-5">
         <img src="image/<?=$row['images']?>" width="100%">
       </div>
       <div class="col-sm-auto col-lg-5">
         <form action="details2.php?id_product=<?=$id_product?>" method="post">
           <div class="info">
             <h1><?=$row['name_product']?></h1>
             <h4>$<?=$row['price']?></h4>
             <input type="hidden" name="hidden_id" value="<?=$row['id_product']?>">
             <input type="hidden" name="hidden_name" value="<?=$row['name_product']?>">
             <input type="hidden" name="hidden_price" value="<?=$row['price']?>">
             <input type="hidden" name="hidden_images" value="<?=$row['images']?>">
             <select name="size" id="size">
               <option value="">Select Size</option>
               <option value="S">S</option>
               <option value="M">M</option>
               <option value="L">L</option>
               <option value="X">X</option>
               <option value="XL">XL</option>
               <option value="XXL">XXL</option>
             </select>
             <div class="bt">
               <input class="inp" type="number" min="1" name="quantity" value="1">
               <div class="ad" onclick="myfunction();"><input type="hidden" name="add_to_cart" value="Add_To_Car"></input>Add To Cart</div>
             </div>
             <h3>Product Details:</h3>
             <p><?=$row['des']?></p>
           </div>
         </form>
       </div>
     </div>
   </div>
   <?php endwhile; ?>
   <div class="container con2">
     <h2>Relate Products:</h2>
     <?php
       include'test/slider.php';
     ?>
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
   <script type="text/javascript">
     function myfunction() {
       a = document.getElementById('size').value;
       if(a==""){
         alert('nhập size vô người anh em.');
       }else{
       document.forms[1].submit();
      }
    }
   </script>
</body>
</html>

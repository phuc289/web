<?php
  include("include/connect.inc");
  session_start();
  if(isset($_GET['action'])){
    if($_GET['action']=='update'){
        if(isset($_POST['upd_quantity'])){
          for($i=0;$i<count($_SESSION['cart']);$i++){
            if($_SESSION['cart'][$i]['item_id']==$_GET['id_product'] and $_SESSION['cart'][$i]['item_size']==$_GET['size']){
              $_SESSION['cart'][$i]['item_quantity'] = $_POST['upd_quantity'];
              break;
            }
          }
        }else{
          echo"ko";
        }
    }
  }
  ?>
  <script>
  window.history.go(-1);
  </script>

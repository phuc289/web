<?php
  include("include/connect.inc");
  session_start();
  if(isset($_GET['action'])){
    if($_GET['action']=='delete'){
      if(count($_SESSION['cart'])>1){
        for($i=0;$i<count($_SESSION['cart']);$i++){
          if($_SESSION['cart'][$i]['item_id']==$_GET['id_product'] and $_SESSION['cart'][$i]['item_size']==$_GET['size']){
            for($j=$i;$j<count($_SESSION['cart'])-1;$j++){
              $_SESSION['cart'][$j]=$_SESSION['cart'][$j+1];
            }
            unset($_SESSION['cart'][count($_SESSION['cart'])-1]);
            echo"<script>alert('xoa thanh cong.')</script>";
            echo"<script>window.location='cart.php'</script>";
            break;
          }
        }
      }else{
        unset($_SESSION['cart']);
        echo"<script>alert('xoa thanh cong.')</script>";
        echo"<script>window.location='cart.php'</script>";
      }
  }
}
?>

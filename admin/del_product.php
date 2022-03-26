<?php
  include("../include/connect.inc");
  include("session.php");
  if(isset($_GET['id'])){
    $image= $_GET['imagename'];
    $id=$_GET['id'];
    $sql="DELETE FROM tblproducts WHERE id_product=$id";
    $result= $conn->query($sql) or die($conn->error);
    if($result){
        unlink("../upload/".$image);
        header("Location: list_products.php");
    }
  }
?>

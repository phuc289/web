<?php
  include("../include/connect.inc");
  include("session.php");
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM tblcategories WHERE id_categorie=$id";
    $result= $conn->query($sql) or die($conn->error);
    $rs=$conn->query("UPDATE tblproducts SET id_categorie=0 WHERE id_categorie=$id") or die($conn->error);
    $sql1="DELETE FROM tblproducts WHERE id_categorie=0 and id_brand=0";
    $resutl1= $conn->query($sql1) or die($conn->error);
    if($result){
      if($resutl1){
        header("Location: list_categories.php");
      }
    }
  }
?>

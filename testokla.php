<?php
  include("include/connect.inc");
  session_start();
  if(isset($_POST['upd_quantity'])){
    $_SESSION['upd_quantity']=$_POST['upd_quantity'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/cart.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-1.11.0.js" integrity="sha256-zgND4db0iXaO7v4CLBIYHGoIIudWI5hRMQrPB20j0Qw=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>Cart</title>
</head>
<body>


  <div class="container">
    <div class="main">
      <div class="left">
        <table class="table text-center">
          <thead>
            <tr>
              <th scope="col">Item</th>
              <th scope="col">Name</th>
              <th scope="col">Size</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $total=0; ?>
            <?php if(isset($_SESSION['cart'])){ ?>
            <?php foreach($_SESSION['cart'] as $keys => $values):
            ?>
            <tr>
              <td><img src="image/<?=$values['item_images']?>" style="width:100px; height:100px;"></td>
              <td class="align-middle"><?=$values['item_name']?></td>
              <td class="align-middle"><?=$values['item_size']?></td>
              <td class="align-middle"><?=$values['item_price']?></td>
              <form id='frm_<?=$values["item_id"]?>'
			  action="upd_cart.php?action=update&id_product=<?=$values["item_id"]?>&size=<?=$values["item_size"]?>"
			  method="post">
                <td class="align-middle"><input type="number" min="1" name="upd_quantity" value="<?=$values['item_quantity']?>"></td>
              </form>
              <td class="align-middle">$<?=$values['item_quantity']*$values['item_price']?></td>
              <td class="align-middle"><a href="javascript:del_confirm('del_cart.php?action=delete&id_product=<?=$values["item_id"]?>&size=<?=$values["item_size"]?>')"><span class="text-danger">Remove</span></a></td>
              <td class="align-middle"><a onclick="a('frm_<?=$values["item_id"]?>')"><span class="text-danger">Update</span></a></td>
            </tr>
            <?php $total=$total+($values['item_quantity']*$values['item_price']); ?>
            <?php endforeach; ?>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="right">
        <table class="table">
          <tbody>
            <tr>
              <td class="align-middle">Total Item:</td>
              <?php $total_item=0; ?>
              <?php
                if(isset($_SESSION['cart'])){
                  foreach($_SESSION['cart'] as $keys => $values){
                    $total_item=$total_item+$values['item_quantity'];
                  }
              ?>
              <?php } ?>
              <td class="text-right"><?=$total_item?></td>
            </tr>
            <tr>
              <td class="align-middle">Shipping:</td>
              <td class="text-right">free</td>
            </tr>
            <tr>
              <td class="align-middle">Sales Tax:</td>
              <td class="text-right">free</td>
            </tr>
            <tr>
              <td class="align-middle">Coupon Code:</td>
              <td class="text-right">free</td>
            </tr>
            <tr>
              <td class="align-middle">Gift Certificate:</td>
              <td class="text-right">free</td>
            </tr>
            <tr>
              <td class="align-middle">Grand Total:</td>
              <td class="text-right">$<?=$total?></td>
            </tr>
          </tbody>
        </table>
        <center><div class="bt">PROCEED TO CHECK OUT</div></center>
      </div>
    </div>
  </div>
  <script>
      function del_confirm(strlink)
        {
          ok = confirm("Xoá thật bỡn?");
          if(ok!=0){
            window.location.href= strlink;
          }
        };
        function upd_confirm(strlink)
          {
            ok = confirm("Sửa thật bỡn?");
            if(ok!=0){
              window.location.href= strlink;
            }
          };
          function a(id) {
			//  document.name.submit();
			document.getElementById(id).submit();
            //  document.forms[0].submit();
          }
  </script>
</body>
</html>

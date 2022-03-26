<?php
  include("include/connect.inc");
  $rs= $conn->query("SELECT * FROM tblproducts") or die($conn->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-1.11.0.js" integrity="sha256-zgND4db0iXaO7v4CLBIYHGoIIudWI5hRMQrPB20j0Qw=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/lightslider.js"></script>
  <link rel="stylesheet" href="css/lightslider.css">
  <link rel="stylesheet" href="css/mainstyle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>Details</title>
</head>
<body>
  <div class="row">
    <div class="container">
      <ul id="lightSlider">
        <?php while($row = $rs->fetch_assoc()): ?>
        <li>
          <div class="ul" style="
            width:260px !important;
            height:260px !important;
            overflow: hidden;
          ">
            <a class="li" href="details2.php?id_product=<?=$row['id_product']?>"><img class="oknha" src="image/<?=$row['images']?>"></a>
          </div>
        </li>
      <?php endwhile; ?>
      </ul>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#lightSlider").lightSlider({
        item:4,
        slideMove:2,
        speed:600,
        loop:true,
        auto:true,
        slideMargin:6,
        responsive : [
            {
                breakpoint:1000,
                settings: {
                    item:3,
                    slideMove:2,
                    slideMargin:60,
                  }
            },
            {
                breakpoint:800,
                settings: {
                    item:2,
                    slideMove:2,
                    slideMargin:6,
                  }
            }
        ]
      });
    });
  </script>
</body>
</html>

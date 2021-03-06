<?php
  include("../include/connect.inc");
  include("session.php");
  $pagesize=5;
  $rs= $conn->query("SELECT * FROM tblproducts") or die($conn->error);
  $count= $rs->num_rows;
  $pos= (!isset($_GET['page']))?0:($_GET['page']-1)*$pagesize;
  $rs= $conn->query("SELECT * from tblproducts tp, tblbrands tb, tblcategories tc WHERE tp.id_categorie=tc.id_categorie AND tp.id_brand=tb.id_brand limit $pos, $pagesize") or die($con->error);
  $i=1;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="main.php">Admin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="../index.php"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>

                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><b class="caret"></b>username
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

              <?php
					include"../include/left_admin.php";
				?>
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Danh m???c san pham</h1>
							<button type="button" class="btn btn-success" style="margin-bottom: 20px" onClick="javascript:window.location.href='insert_product.php'">Th??m san pham</button>

                        </div>

                        <!-- /.col-lg-12 -->
                    </div>

                                   <div class="table-responsive table-bordered">
                                        <table class="table">
                                            <thead>

                                                <tr>
                                                    <th>STT</th>
                                                    <th>Lo???i s???n ph???m</th>
                                                    <th>T??n nh??n hi???u</th>
                                                    <th>T??n san pham</th>
													<th>Gi??</th>
													<th>H??nh</th>
                                                    <th>S???a</th>
                                                    <th>X??a </th>
                                                </tr>
                                                <?php while($row = $rs->fetch_assoc()): ?>
                                                <tr>
                                                  <td><?=$i?></td>
                                                  <td><?php echo $row['name_categorie'] ?></td>
                                                  <td><?php echo $row['name_brand'] ?></td>
                                                  <td><?php echo $row['name_product'] ?></td>
                                                  <td><?php echo $row['price'] ?></td>
                                                  <td><img src="../upload/<?=$row['images']?>" width=100 height=100></td>
                                                  <td><a href='edit_product.php?id=<?=$row["id_product"]?>'>S???a</a></td>
                                                  <td><a href="javascript:del_confirm('del_product.php?id=<?=$row["id_product"]?>&imagename=<?=$row['images']?>')">Xo??</a></td>
                                                </tr>
                                                <?php $i++; ?>
                                                <?php endwhile; ?>
                                                <tr>
                                                  <th colspan="8">
                                                    <?php
                                                      for($i=1;$i<=ceil($count/$pagesize);$i++){
                                                        echo"<a href='list_products.php?page=$i'>".$i."</a> &nbsp";
                                                      }
                                                    ?>
                                                  </th>
                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
        <script>
          function del_confirm(strlink){
            ok = confirm("Xo?? th???t b???n?");
            if(ok!=0){
              window.location.href= strlink;
            }
          }
        </script>
        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>

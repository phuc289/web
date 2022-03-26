<?php
include("../include/connect.inc");
include("session.php");
$rs= $conn->query("SELECT * FROM tblcategories");
$rs1= $conn->query("SELECT * FROM tblbrands");
if(isset($_POST['txttitle'])){
  $dir='../upload';
  $cbosubject=$_POST['cbosubject'];
  $cbobrand=$_POST['cbobrand'];
  $title=$_POST['txttitle'];
  $price=$_POST['txtprice'];
  $image=$_FILES['txtimages']['name'];
  $tmp_name=$_FILES['txtimages']['tmp_name'];
  $txtdes=$_POST['txtdes'];
  $sql="INSERT INTO tblproducts(id_categorie,id_brand,name_product,price,images,des) VALUES ($cbosubject,$cbobrand,'$title','$price','$image','$txtdes')";
  $result=$conn->query($sql) or die($conn->error);
  if($result){
    move_uploaded_file($tmp_name, "../upload/".$image);
    header("Location: list_products.php");
  }else{
    echo $sql;
    exit;
  }
}
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
		<script src="ckeditor/ckeditor.js"></script>
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
                            <h1 class="page-header">Thêm san pham</h1>


                        </div>

                        <!-- /.col-lg-12 -->
                    </div>

					<form name="form" method="post" enctype="multipart/form-data" onsubmit="return a()">
                     <table class="table table-striped table-bordered table-hover" style="width:90%" align="center">

                                            <tbody>
                                                <tr>

                                                    <td>Tên loai san pham:</td>
                                                    <td>
                                                        <select class="form-control" name="cbosubject">
                                                          <?php while($row = $rs->fetch_assoc()): ?>
                                                          <option value="<?=$row['id_categorie']?>"><?=$row['name_categorie']?></option>
                                                          <?php endwhile; ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Tên nhan hieu san pham:</td>
                                                    <td>
                                                        <select class="form-control" name="cbobrand">
                                                          <?php while($row1 = $rs1->fetch_assoc()): ?>
                                                          <option value="<?=$row1['id_brand']?>"><?=$row1['name_brand']?></option>
                                                          <?php endwhile; ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Ten san pham:</td>
                                                    <td><input class="form-control" name="txttitle"></td>
                                                </tr>
                                                <tr>
                                                  <td>Giá:</td>
                                                  <td><input class="form-control" name="txtprice"></td>
                                                </tr>
                                                <tr>
                                                  <td>Hình :</td>
                                                  <td><input type="file" class="form-control" name="txtimages" id="fileField"></td>
                                                </tr>
                                                <tr>
                                                  <td>Mô tả</td>
                                                  <td><textarea name="txtdes" id="txtdes" rows="10" class="form-control"></textarea>	</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td><button type="submit" class="btn btn-primary">Thêm</button><button type="reset" class="btn btn-warning" style="margin-left: 10px">Làm lại</button></td>
                                                </tr>

                                        </table>
						</form>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

    <!-- Replace the with a CKEditor -->

        </div>
        <!-- /#wrapper -->
        <script>
          function a() {
            title = document.form.txttitle.value;
            if(title==""){
              alert("Ten san pham không được trống.");
              document.form.txttitle.focus();
              return false;
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

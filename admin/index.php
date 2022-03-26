<?php
    include("../include/connect.inc");
    session_start();
    if(isset($_POST['txtusername'])){
      $uname=$_POST['txtusername'];
      $pass=$_POST['txtpassword'];

      $sql="SELECT * FROM tblusers WHERE username='$uname' AND pass='$pass'";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
        $_SESSION['user']=$uname;
        header("Location: main.php");
      }else{
        echo '<script>
        alert("wrong username or password");
        window.location.href="index.php";
        </script>';
      }
    }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng nhập admin ecommerce</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<center>
	<form name="frmLogin" method="post" action="index.php">
	<div class="panel panel-primary" style="width: 30%; margin-top: 100px;">
                                <div class="panel-heading">
                                    Đăng nhập
                                </div>
                                <!-- /.panel-heading -->
                                <div>
                                    <div >
                                        <table class="table table-hover">

                                            <tbody>
                                                <tr>
                                                    <td>Tài khoản</td>
                                                    <td><input type="text" class="form-control" id="inputSuccess" name="txtusername"></td>

                                                </tr>
                                                <tr>
                                                    <td>Mật khẩu</td>
                                                    <td><input type="text" class="form-control" id="inputSuccess" name="txtpassword"></td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><button type="submit" class="btn btn-primary" onclick="return a();">Đăng nhập</button>&nbsp;&nbsp;<button type="reset" class="btn btn-warning">Làm lại</button></td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
		</form>
	</center>
  <script>
  function a() {
     uv=document.frmLogin.txtusername.value;
     pv=document.frmLogin.txtpassword.value;
    if(uv==""){
      alert("username shouldn't blank");
      document.frmLogin.txtusername.focus();
      return false;
    }else{
      if(pv==""){
        alert("password shouldn't blank");
        document.frmLogin.txtpassword.focus();
        return false;
      }else{

      }
    }
  }
  </script>
</body>
</html>

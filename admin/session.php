<?php
  session_start();
  if(isset($_SESSION['user'])){

  }else{
    echo '<script>
    alert("Login first bitch!");
    window.location.href="../admin/index.php";
    </script>';
  }
?>

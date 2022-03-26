<?php
  include("connect.inc");
  $rs= $conn->query("SELECT * FROM tblsubject");
  while($row=$rs->fetch_assoc()){
    echo"<li><i><a href=\"show_subject.php?id_subject=".$row['id_subject']."\">".$row['name_subject']."</a></i></li>";
  }
?>

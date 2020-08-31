<?php

  $name = $_GET['name'];
  // do some validation here to ensure id is safe

  $link = mysql_connect("localhost", "root", "");
  mysql_select_db("books");
  $sql = "SELECT photo FROM book_details WHERE name='".$name."'";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['photo'];
?>
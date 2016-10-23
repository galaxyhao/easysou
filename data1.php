<?php
$q = $_GET["q"];
$con = mysql_connect("localhost","root","970214");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("test", $con);
  $result = mysql_query("SELECT * FROM test WHERE name = '$q' ");

while($row = mysql_fetch_array($result))
  {
  echo $row['url'];
  }

mysql_close($con);
?>
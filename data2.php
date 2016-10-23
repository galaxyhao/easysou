<?php
$q1 = $_GET["q1"];
$q2 = $_GET["q2"];
$con = mysql_connect("localhost","root","970214");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("test", $con);
  $result1 = mysql_query("SELECT * FROM test WHERE name = '$q1'");
  $result2 = mysql_query("SELECT * FROM test WHERE name = '$q2'");
  $r1 = mysql_fetch_array($result1)['url'];
  $r2 = mysql_fetch_array($result2)['url'];
  $r = $r1 . "," . $r2;
  echo $r;
mysql_close($con);
?>
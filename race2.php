<?php
$q=$_GET["q"];

$con = mysql_connect("kbayl001.mysql.guardedhost.com","kbayl001_race","5tXT7aq8","kbayl001_RACE");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("kbayl001_RACE", $con);

$sql="SELECT FIRST_NAME, LAST_NAME FROM PARTICIPANT WHERE RACE_NUM = '".$q."'";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>First Name</th>
<th>Last Name</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['FIRST_NAME'] . "</td>";
  echo "<td>" . $row['LAST_NAME'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
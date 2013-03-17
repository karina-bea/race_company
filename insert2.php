<?php
$con=mysqli_connect("kbayl001.mysql.guardedhost.com","kbayl001_race","5tXT7aq8","kbayl001_RACE");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO PARTICIPANT (P_ID, FIRST_NAME, LAST_NAME,EMAIL,ADDRESS,CITY,ZIP,RACE_NUM,CARD_NUM,EX_DATE,S_CODE)
VALUES
('','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[address]','$_POST[city]','$_POST[zip]','$_POST[race_num]','$_POST[card_num]','$_POST[ex_date]','$_POST[s_code]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "Click here to go <a href='race_company.html'>Home</a>";


mysqli_close($con);
?>



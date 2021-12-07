<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

  $mysqli = new mysqli("mysql.eecs.ku.edu", "r817w969", "oosa7ahV", "r817w969");
  /* check connection */
  if ($mysqli->connect_errno){
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();}

  $query = "SELECT * FROM Users";
  echo "<table> <th>User_id</th>";
  if($result = $mysqli->query($query)){
    while($row = $result->fetch_assoc()){
      echo "<tr><td>";
      echo $row["user_id"];
      echo "</td></tr>";
    }
  echo "</table>";

  $result->free();
  /* close connection */
  $mysqli->close();
  }
?>

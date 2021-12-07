<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$name=$_POST["user"];
echo $name;
echo "<br>";

if($name == ''){
  echo "Username was empty";
}
else{
  $mysqli = new mysqli("mysql.eecs.ku.edu", "r817w969", "oosa7ahV", "r817w969");
  /* check connection */
  if ($mysqli->connect_errno){
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();}

$membership = false;

$query = "SELECT * FROM Users";
if($result = $mysqli->query($query)){
  while($row = $result->fetch_assoc()){
    echo $row["user_id"];
    echo "<br>";
  }
}
$result->free();


  /* close connection */
  $mysqli->close();

}
?>

<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$name=$_POST["user"];
$postcontent=$_POST["usermessage"];

if($name == '' || $postcontent == ''){
  echo "Username/Post was empty";
}
else{
  $mysqli = new mysqli("mysql.eecs.ku.edu", "r817w969", "oosa7ahV", "r817w969");
  /* check connection */
  if ($mysqli->connect_errno){
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();}

$query = "SELECT * FROM Users";

if($result = $mysqli->query($query)){
  while($row = $result->fetch_assoc()){
    if($name == $row["user_id"]){

      $adding = "INSERT INTO Posts(author_id, content) VALUES ('$name','$postcontent')";
      $mysqli->query($adding);

      break;
    }
    else{
      echo "User is not part of the database";
      break;
    }
  }
}

$result->free();
/* close connection */
$mysqli->close();

}
?>

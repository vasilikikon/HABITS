<html><?php

$returnvalue = "";
echo $_REQUEST('NAMECAT');
// the values passed in this parameters are:  the host, the user, user password and the database Name
  $con = mysqli_connect('localhost', 'root', '', 'test');
  if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
 $sql = "INSERT INTO testtable(CATEGORY_NAME, HABIT_NAME) VALUES ('" . $_REQUEST['NAMECAT'] . "," . $_REQUEST['NAMEHABIT'] . ";";
if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

 ?>

</html>
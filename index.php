<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" type="text/css" href="habit.css" />

 <title>Check out your Habits</title>
 <?php
$date = date("d.m.y");

?>
 <h1><?php echo $date ?> you need to do </h1>
</head>

<body>
 <?php
  // the values passed in this parameters are:  the host, the user, user password and the database Name
  $con = mysqli_connect('localhost', 'root', '', 'test');
 $sql = "SELECT * FROM testtable;";
 $result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Name: " . $row["NAME"]. " " . $row["AGE"]. "<br>";
  }
} else {
  echo "0 results";
}
 $con->close();
?>
 <table>
  <tr>

   <td>
    <label for="o1">Health</label>
   </td>
   <td>
    <button id="o1" type="button"> <img src="images\open.png" alt="open up"></button>
   </td>
  </tr>
  <tr>
   <td>
    <label for="o2">Kati allo</label>
   </td>
   <td>
    <button id="o2" type="button"> <img src="images\open.png" alt="open up"></button>
   </td>
  </tr>
 </table>

 <br>


 <input id="Add_New_Category" name="ADD_NEW_CATEGORY" type="image"
  onclick="document.location.href='newCategoryForm.php'" src="images\ADD.jpg"
  alt="Click here to add a new Task"></input>

 <input id="Delete_Category" name="DELETE_CATEGORY" onclick="clickDelete();" type="image" src="images\DELETE.jpg"
  alt="Click here to delete a Task"></input>


</body>

<script type="text/javascript" src="habit_maker/functions.js"></script>

</html>
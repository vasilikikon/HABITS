<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="habit.css" />
 <title>Create a new Habit</title>
 <h1>Set up the new Habit :)
 </h1>
</head>

<body>
 <form>
  <table>
   <tr>
    <td>
     <label for="nameCat">Name of the category: </label>
    </td>
    <td>
     <input type="text" id="nameCat" name="NAMECAT" minlength="1">
    </td>
   </tr>
   <tr>
    <td>
     <label for="nameHabit">Name of Habit:</label>
    </td>
    <td>
     <input type="text" id="nameHabit" name="NAMEHABIT" minlength="1" onchange="test()" required>
    </td>
   </tr>
  </table>
  <input type="image" id="SubmitHabit" src="images\submit.png" onclick="saveSubmittedHabit();"
   alt="Submit A Habit"></input>

 </form>

</body>
<script type="text/javascript" src="functions.js"></script>


</html>
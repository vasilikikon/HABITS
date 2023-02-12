<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="habit.css" />
 <title>Sign in to create cool Habbits</title>
 <h1>Create an account to build up new habbits:)
 </h1>
 <h1>Sign in to keep building up your habbits:)
 </h1>
</head>

<body>
 <form action="/Acc_created.php">
  <table>

   <tr>
    <td>
     <label for="signMail">Email: </label>
    </td>
    <td>
     <input type="email" placeholder="Email" id="signMail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\[a-z]{2,4}$"
      title="Please enter a valid Email" name="SIGNMAIL" minlength="1" required>
    </td>
   </tr>

   <tr>
    <td>
     <label for="signPass">Password: </label>
    </td>
    <td>
     <?php 
      // (?=.*[a-z]) ----> At least one lowercase letter(a - z)
// (?=.*[A-Z]) ----> At least one uppercase letter(A - Z)
// (?=.*[0-9]) ----> At least one number(0-9)
// (?=.*[!@#$%^&*_=+-]) ----> At least one special symbol(!@#$%^&*=+-_)
?>
     <input placeholder="Password" type="password" id="signPass" title="Plaese enter a valid pass"
      pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$" name="SIGNPASS" minlength="10"
      maxlength="30" required>
    </td>
   </tr>

   <tr>
    <td>
     <label for="repeatPass">Repeat Password: </label>
    </td>
    <td>
     <input placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$"
      type="password" id="repeatPass" name="REPEATPASS" minlength="1" required>
    </td>
   </tr>
  </table>
  <input type="image" id="signAcc" src="images\submit.png" alt="Sign into Account">
  </input>
  <input type="image" id="createAcc" onclick="pass_same();" src="images\create.png" alt="Create an Account">
  </input>
 </form>

</body>
<script type="text/javascript" src="functions.js"></script>


</html>
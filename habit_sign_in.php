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
 <form>
  <table>

   <tr>
    <td>
     <label for="signMail">Email: </label>
    </td>
    <td>
     <input type="text" id="signMail" name="SIGNMAIL" minlength="1" pattern="Email">
    </td>
   </tr>

   <tr>
    <td>
     <label for="signPass">Passwort: </label>
    </td>
    <td>
     <input type="text" id="signPass" name="SIGNPASS" minlength="1" required>
    </td>
   </tr>

   <tr>
    <td>
     <label for="repeatPass">Repeat Passwort: </label>
    </td>
    <td>
     <input type="text" id="repeatPass" name="REPEATPASS" minlength="1" required>
    </td>
   </tr>
  </table>
  <input type="image" id="signAcc" src="images\submit.png" alt="Sign into Account">
  </input>
  <input type="image" id="createAcc" src="images\create_account.png" alt="Create an Account">
  </input>
 </form>

</body>
<script type="text/javascript" src="functions.js"></script>


</html>
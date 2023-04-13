<?php include 'header.php';?>


<br>
<h3 style="background-color: tomato";> (Note: This page is "problem.php" - retrive & handle data from the login form) </h3>

<?php
// RETRIVE DATA FROM LOGIN FORM
$_SESSION["title"] = $_POST['title'];
$_SESSION["firstName"] = $_POST['firstName'];
$_SESSION["lastName"] = $_POST['lastName'];
$_SESSION["role"] = $_POST['role'];

?>

<h1> 
<?php
// TAILORED WELCOME MESSAGE
echo "Welcome - " . $_SESSION["title"] . ". ",  $_SESSION["firstName"] . ", ", $_SESSION["lastName"] . " (". $_SESSION["role"] .")";
?> </h1>


<?php
   // IF LOGIN AS ADMIN OPTION
   if ($_SESSION["role"]== "Admin") {?>
         <br>
         <h3> "Here are your ADMIN's options: <h3>
         <hr>
         <a href="isnt-working.php"> 1>My computer is not working </a>;
         <br>
         <a href="new-account.php"> 2>Create new account </a>

<?php } 

   // IF LOGIN AS MANAGER OPTION
   elseif ($_SESSION["role"] == "Manager") {?>
      <br>
      <h3> "Here are your MANAGER's options: <h3>
      <hr>
      <a href="isnt-working.php"> 1>My computer is not working </a>;
      <br>
      <a href="lost-password.php"> 2>I have lost my password </a>
 
<?php } 

   // IF LOGIN AS CEO OPTION
   else {?>
      <br>
      <h3> "Here are your CEO's options: <h3>
      <hr>
      <a href="isnt-working.php"> 1>My computer is not working </a>;
      <br>
      <a href="need-help.php"> 2>Reach IT help desk</a>

   <?php } 

?>


<?php include 'footer.php';?>
<?php include 'header.php';?>

<?php
session_unset();
session_destroy();
?>

<br>
<h3 style="background-color: tomato";> (Note: This is "logout.php" page) </h3>

<h1> You have logged out & session is ended. Thank you! </h1>
<hr>
<img src="https://www.shutterstock.com/image-vector/thank-you-hand-drawn-lettering-260nw-1263463690.jpg">
<br>
<a href="index.php"> Click here to get back to IT support's Log-in page! </a>






<?php include 'footer.php';?>
<?php include 'header.php';?>
<br>
<?php
// RETRIVE DATA WHETHER NEW-ACCOUNT OR LOST-PASSWORD WAS SELECTED
$emailType = $_POST['emailType'];
?>


<br>
<h3 style="background-color: tomato";> (Note: This is "send-email.php" page) </h3>
<h1> Send email to IT helpdesk </h1>
<br>


<form method="post" action="email-done.php" class="emailForm">

<div class="subject">
    <label>Subject: </label>

<?php 
// DISPLAY RESPECTIVE TYPE OF EMAIL 
if ($emailType=="lostPassword") {
    echo " LOST PASSWORD recovery"
    ;}

if ($emailType=="newAccount") {
    echo " NEW ACCOUNT setup"
    ;}
?>
</div>
<hr>

<div class="emailAddress">
    <label for="email" class="form-label">Your email:</label>
    <input type="email" name="emailAddress" id="email" class="form-control">
</div>
<br>

<div class="message">
    <label>Message: </label>
    <textarea name="message" rows="6" cols="80"></textarea>
</div>
<input type="submit" name="message" value="Send" class="sendButton">

</form>






<?php include 'footer.php';?>
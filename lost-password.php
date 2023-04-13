<?php include 'header.php';?>

<br>
<h3 style="background-color: tomato";> (Note: This is "lost-password.php" page) </h3>
<h1> Pick option (1) for LOST PASSORD recovery </h1>
<br><br>

<form method="post" action="send-email.php" class="emailForm">
    
    <label><h2> Email types </h2></label>
    <hr>
    <select multiple size="2" name="emailType" id="emailType" class="form-select">
                    <option value="lostPassword">1. Lost password recovery</option>
                    <option value="newAccount">2. New account set up</option>
    </select>
    <hr>
<input type="submit" name="submit" value="Submit" class="sendButton">

</form>






<?php include 'footer.php';?>
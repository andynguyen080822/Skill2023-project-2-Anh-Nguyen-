<?php
include 'header.php';
?>
         <div id="welcomeBox">
              <h1> Welcome To Your IT Support System </h1>
              
            <form method="post" action="problem.php" class="loginForm">

                <select name="title" id="title" class="titleSelect">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Ms">Ms</option>
                    <option value="">Others</option>
                </select>
                <input type="text" name="firstName" id="firstName" class="firstName" placeholder="Your first name">
                <input type="text" name="lastName" id="lastName" class="lastName" placeholder="Your last name">
                   
                <select name="role" id="role" class="roleSelect">
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="CEO">CEO</option>                    
                </select>
                <input type="submit" name="submit" value="Submit" class="submitButton">

            </form>
        </div>
        
    </main>
    
<?php
include 'footer.php';
?>

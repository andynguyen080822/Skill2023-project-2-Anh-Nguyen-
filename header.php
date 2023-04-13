<?php
// START THE SESSION
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css" type="text/css">
    <title>Halifax Canoe and Kayak</title>
</head>
<body>
        <header id="topBanner">
             <a class="middleText"> Halifax Canoe and Kayak </a>
             <img class="leftSide" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" height="40px" alt="menu icon">
             <img class="rightSide" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" height="40px" alt="company logo">
        
            
        </header>
        <div id=logOut>
                    <form method="get" action="logout.php" class="logOutForm">
                        <input type="submit" name="logOut" value="Log Out" class="logOutButton"> 
                    </form>   
              </div>
    <main>




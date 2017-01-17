<?php session_start();?>
<!DOCTYPE html>
<html>
    
<head>
    <title>Current Progress: -10%</title>
    <link rel="stylesheet" href="css/global.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
    <div id="container">
        
        <?php include("resources/header.php"); ?>       
        <script>$(document).ready(function(){ $("#navHome").attr("class","tab active"); });</script>
        
        <div id="content">
            <menu>
                <ul>
                    <a href="geHome.php" ><li id="GiftExchange" class="button">Gift Exchange</li></a>
                    <a href="#" id="navAbout"><li class="button">About</li></a>
                    <a href="#" id="navContact"><li class="button">Contact Us</li></a>
                    <a href="#" id="navUpdates"><li class="button">Updates</li></a>
                    <a href="#" id="navSuggestions"><li class="button">Suggestions</li></a>
                </ul>
            </menu>
        </div>

    </div>

</body>

</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html>

    <head>
        <title>Gift Exchange</title>
        <link rel="stylesheet" href="css/global.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
    </head>

    <body>
        <div id="container">

             <?php include("resources/header.php"); ?>
             <script>$(document).ready(function(){ $("#navGiftExchange").attr("class","tab active"); });</script>

            <menu id="menu">
            <ul>
            <a href="#"><li id="accessGroup" class="button">
                Access Existing Group
            </li>
             </a>
            <a href="#"><li class="button" id="createGroup">
                Create a New Group
           </li> </a>
            </menu>

            <script>
            $(document).ready(function(){
                $("#accessGroup").click(function(){
                    $("#menu").load('accessGroup.html');
                });
            });
        </script>
    </body>
</html>
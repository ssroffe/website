<header>
    <h1>We're Semi-Live!</h1>

    <div id="nav">
        <ul>
            <a href="index.php" ><li id="navHome" class="tab">Home</li></a>
            <a href="geHome.php" ><li id="navGiftExchange" class="tab">Gift Exchange</li></a>
            <a href="#About"><li id="navAbout" class="tab">About</li></a>
            <a href="#ContactUs"><li id="navContact" class="tab">Contact Us</li></a>
            <a href="#Updates"><li id="navUpdates" class="tab">Updates</li></a>
            <a href="#Suggestion"><li id="navSuggestions" class="tab">Suggestions</li></a>
        </ul> 


        <?php 
        if(isset($_SESSION['account']) && !empty($_SESSION['account'])) {
             echo '<ul style="float: right">
                    <a href="#Login"><li id="loginTrack" class="tab">Logged in as: TestUser1</li></a>
                    <a href="php/logout.php"><li id="logout" class="tab">Log Out</li></a>
                    </ul>';
        } else {
            echo '<ul style="float: right">
                    <a href="php/login.php"><li id="navLogin" class="tab">Login</li></a>
                    <a href="#Create"><li id="navCreate" class="tab">Create Account</li></a>
                    </ul>';
        }
        ?>
    </div>
</header>
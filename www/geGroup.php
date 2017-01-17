<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_POST["groupnameInput"] ?></title>
        <link rel="stylesheet" href="css/gestyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>

    <script>
        $(document).ready(function(){
            
            $("#getinfo").hide();

            $("#accessGroup").click(function(){
                    $("#getinfo").show();
                    
            });
        }); 
    </script>

    <body>
        <div id="container">
            <div id="header">
                <?php
                   echo "<h1>" . $_POST["groupnameInput"] . "</h1>";
                ?>
            </div>

            <div id="currentNames">
                <h2> Your current group is:</h2>
                <center><table>
                    <tr><th>Name</th><th>Email</th></tr>

<?php
    global $names;
    $conn = new mysqli("localhost", "root", "", "giftexchange");
    if ($conn -> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

        $tableName = $_POST["groupnameInput"] . substr($_POST["groupkeyInput"], 0, 2);
        $sqlFindTable = "SELECT userName, userEmail FROM $tableName";
        $tableLookup = $conn -> query($sqlFindTable);
        

        if($tableLookup ->num_rows > 0){
            while($row = $tableLookup->fetch_assoc()) {
                echo "<tr><td>" . $row["userName"] . "</td><td>" . $row["userEmail"] . "</td></tr>";
                $names[] = $row["userName"];
                } echo "</table>";
        } else {
            echo "No users currently in this group.";
        }
?>

            </center></div>

            <div id="addMember">
                <h2>Add a Member</h2>
                    <div id="getinfo">
                        <form>
                            <form action = "addMember.php" method="post">
                            Name<br />
                            <input class="dataInput" type="text" name="newNameInput"><br /><br />
                            
                            Email<br />
                            <input class="dataInput" type="text" name="newEmailInput"><br /><br />
                            <input type="submit" value="Submit">
                        </form>
                    </div>
            </div>
            <div id="confirmAndSend">
                <button onclick="Scramble()">Submit</button>
            </div>

            <script>

            function Scramble(){
                <?php

                $namesLength = count($names);
                $intArr = array();
                for ($i = 0; $i<$namesLength; $i++) {
                    array_push($intArr, $i);
                }

                shuffle($intArr);   
                $check = 0;
                do{
                    for($i=0; $i < $namesLength; $i++){
                            if($intArr[$i] == $i){
                                shuffle($intArr);
                                $check=0;
                                break;
                            } else {
                                $check = 1;
                            }
                }
                } while ($check == 0);
                
                for ($i=0; $i < $namesLength; $i++) {
                    $val = $intArr[$i];
                    echo "<h1>". $names[$i] ." buys for ".$names[$val]."</h1><br />";
                }
            ?>
            }
            </script>
        </div>
    </body>

    
</html>
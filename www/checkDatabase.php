<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "giftexchange";
$groupnameSearch = $_POST["groupnameInput"];
$groupkeySearch = $_POST["groupkeyInput"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully.<br />";

$sqlFindGroup = "SELECT groupName, groupKey, confirmed FROM groups WHERE groupName = '$groupnameSearch' and groupKey = '$groupkeySearch'";
$groupLookup = $conn -> query($sqlFindGroup);
if($groupLookup->num_rows > 0){
    $tableName = $groupnameSearch . substr($groupkeySearch, 0, 2);
    $sqlFindTable = "SELECT userName, userEmail FROM $tableName";
    $tableLookup = $conn -> query($sqlFindTable);
    

    if($tableLookup ->num_rows > 0){
        while($row = $tableLookup->fetch_assoc()) {
            $names[] = $row["userName"];
            }
    } else {
        echo "No users currently in this group.";
    }
} else {
        echo "No Group Found with this name.";
    }


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
        echo "<h1>$names[$i] buys for $names[$val]</h1><br />";
    }



$conn->close();
?>
<html>
<body>
<?php
    $names = array("seth","john","leslie");
    $namesLength = count($names);
    $intArr = array();
    for ($i = 0; $i<$namesLength; $i++) {
        array_push($intArr, $i);
    }

    shuffle($intArr);
    for ($i=0; $i < $namesLength; $i++) {
        $val = $intArr[$i];
        echo "$names[$i] buys for $names[$val]<br />";
    }
?>

</body>
<html>
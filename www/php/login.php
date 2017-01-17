<? php
session_start();
$_SESSION['account'] = 10;
?>
<?php
header('Location: ../index.php');
exit;
?>
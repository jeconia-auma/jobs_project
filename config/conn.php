<?php
    require_once('constants.php');
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASS, DBNAME) or die('Failed to connect to the database');
?>
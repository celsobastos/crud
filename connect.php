<?php

$mysqli = new mysqli("localhost", "sage", "@g1l3t3c", "test_php");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}






?>
<?php

include_once "./connect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];



$query = "INSERT INTO test_php.customers VALUES(NULL, '$name', '$email', '$phone', 1);";


if (mysqli_query($mysqli, $query)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
  }

mysqli_close($mysqli);

header("Location: index.php");
exit;

?>
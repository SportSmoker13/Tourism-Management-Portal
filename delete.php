<?php

$connect = mysqli_connect("localhost", "root", "", "tourism");

$id = $_GET['id'];

$q = " DELETE FROM `locations` WHERE id = $id ";

mysqli_query($connect, $q);

header('location:register_admin.php');

?>
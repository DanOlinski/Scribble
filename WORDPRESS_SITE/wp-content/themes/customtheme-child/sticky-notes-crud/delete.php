<?php
include './mydbfile.php';
global $wpdb;
include './wp-load.php';

$id = $_POST['id'];
$sql = "delete from notes where id=".$id."";

// var_dump($sql);

$conn->query($sql);
$conn->close();
// header("location:/my-workout/");
?>

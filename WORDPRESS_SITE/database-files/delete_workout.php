<?php
include './mydbfile.php';
global $wpdb;
include './wp-load.php';

//get current user ID, with default value, if empty
$current_user_id = get_current_user_id();

$id = $_POST['id'];
$sql = "delete from my_workout where id=".$id." and user_id=".$current_user_id;

// var_dump($sql);

$conn->query($sql);
$conn->close();
// header("location:/my-workout/");
?>

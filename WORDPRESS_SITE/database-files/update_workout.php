<?php
include './mydbfile.php';
global $wpdb;
include './wp-load.php';

//get current user ID, with default value, if empty
$current_user_id = get_current_user_id();

$workout_date = $_POST['update_workout_date'];
$activity = $_POST['update_activity'];
$id = $_POST['id'];

$sql = "update my_workout set workout_date='".$workout_date."', activity='".$activity."' where id='".$id."' and user_id='".$current_user_id."'";

$conn->query($sql);
$conn->close();

// var_dump($sql);
// header("location:/my-workout/");
?>
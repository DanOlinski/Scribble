<?php
include './mydbfile.php';
global $wpdb;
include './wp-load.php';

//get current user ID, with default value, if empty
$current_user_id = get_current_user_id();

$new_note = $_POST["update_note"];
//this variable can be used to authenticate a logged in user
$user_id = get_current_user_id();
$id = $_POST['id'];

$sql = "update notes set note='".$new_note."' where id='".$id."'";

$conn->query($sql);
$conn->close();

// var_dump($sql);
// header("location:/my-workout/");
?>
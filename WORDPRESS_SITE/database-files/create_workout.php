<?php
include './mydbfile.php';

$workoutdate = $_POST["workoutdate"];
$activity = $_POST["activity"];
$user_id = $_POST["user_id"];

//next four lines are for debugging, they appear in the top of all pages however you need to add the following code into the functions.php file of the theme you are currently using;  include './database-files/create_workout.php';
//comment them out before publishing the site
// echo "in the create workout file";
// $fields = array(
//     'workoutdate' => $_POST['workoutdate'],
//     'activity' => $_POST['activity'],
//     'user_id' => $_POST['user_id']
// );
// var_dump($fields);

$sql="insert into my_workout (user_id,workout_date,activity) values('$user_id', '$workoutdate','$activity')";

$conn->query($sql);
// var_dump($sql);
$conn->close();
?>

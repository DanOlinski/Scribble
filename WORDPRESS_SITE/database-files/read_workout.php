<?php
include './mydbfile.php';
global $wpdb;
include './wp-load.php';

//get current user ID, with default value, if empty
$current_user_id = get_current_user_id();

$sql = "select * from my_workout where user_id = ".$current_user_id;

$result = $conn->query($sql);

$result_arr = $result->fetch_all();

//next two lines are for debugging, they appear in the php_error.log file
//comment them out before putting into production
// error_log('current_user_id'.$current_user_id);
// error_log('id ='.$_GET['id']);
// var_dump('current_user_id'.$current_user_id);
// var_dump('*****id ='.$_GET['id']);
// var_dump($sql);
// var_dump($result);

//info coming from db using the function; mysqli(...)
// var_dump($result->fetch_assoc()['id']);
// var_dump($result->fetch_assoc()['workout_date']);
// var_dump($result->fetch_assoc()['activity']);
// var_dump($result->fetch_assoc());


//webpage from starts here
echo "<tbody>";

// echo "<tr>";
// echo "<td>Date</td>
//     <td>WORKOUT</td>
//     <td>Update</td>
//     <td>Delete</td>";
// echo "</tr>";

foreach($result_arr as $x){
    echo "<br>";
    // var_dump($x);

    if($x[1]==$current_user_id) {
        echo '
        
        <form method="POST" role="form">
        
        <table border="0">
        
        <td>
        <input type="date" name="update_workout_date" value="' .$x[2] .'">
        </td>

        <td>
        <input type="text" name="update_activity" value="'.$x[3].'">
        </td>

        <td>
        <input type="hidden" name="user_id" value="'.$x[1].'">
        <input type="submit" name="update" value="Update">
        </td>

        <td>
        <input type="hidden" name="id" value="'.$x[0].'">
        <input type="submit" name="deletebtn" value="Delete">
        </td>

        
        </table>
        </form>
        
        ';

    
    }

}

echo"</tbody>";

$conn->close();

?>

<?php
    //include database connection script
    include './mydbfile.php';
    global $wpdb;
    include './wp-load.php';

    //get current user ID, with default value, if empty. This variable is only used when there is a logged system and you only want to display the info that belongs to the logged in user
    $current_user_id = get_current_user_id();

    //garb data from html elements by their names
    $id = $_POST['id'];

    //use the information above to create a query to the database that deletes the specified note
    $sql = "delete from notes where id=".$id."";

    //send query
    $conn->query($sql);
    //close connection with database
    $conn->close();
?>

<?php
    //include database connection script
    include './mydbfile.php';
    global $wpdb;
    include './wp-load.php';

   //save client's IP address in order to display only the notes inserted by the particular user;
   $ip = getenv("REMOTE_ADDR");
   $current_user_id = json_encode($ip);

    //garb data from html elements by their names
    $id = $_POST['id'];

    //use the information above to create a query to the database that deletes the specified note
    $sql = "delete from notes where id=".$id."";

    //send query
    $conn->query($sql);
    //close connection with database
    $conn->close();
?>

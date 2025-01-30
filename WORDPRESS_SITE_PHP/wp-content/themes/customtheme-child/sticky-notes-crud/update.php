<?php
    //include database connection script
    include './mydbfile.php';
    global $wpdb;
    include './wp-load.php';

    //save client's IP address in order to display only the notes inserted by the particular user;
    $ip = getenv("REMOTE_ADDR");
    $current_user_id = json_encode($ip);

    //garb data from html elements by their names
    $new_note = $_POST["update_note"];
    $id = $_POST['id'];

    //use the information above to create a query to the database and save the new information typed into the form
    $sql = "update notes set note='".$new_note."' where id='".$id."'";

    //send query
    $conn->query($sql);
    //close connection with database
    $conn->close();
?>
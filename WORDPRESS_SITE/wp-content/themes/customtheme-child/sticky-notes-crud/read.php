
<?php
    //include database connection script
    include './mydbfile.php';
    global $wpdb;
    include './wp-load.php';

    //get current user ID, with default value, if empty. This variable is only used when there is a logged system and you only want to display the info that belongs to the logged in user
    $current_user_id = get_current_user_id();

    //the 1st commented out query checks for a logged in user in order to only display info from a given user
    // $sql = "select * from notes where user_id = ".$current_user_id;
    $sql = "select * from notes";

    //store data coming from the database as a result of the $sql query
    $result = $conn->query($sql);
    $result_arr = $result->fetch_all();

    //loop through each db item and display it
    foreach($result_arr as $x){
        echo "<br>";
        echo '
            <form method="POST" role="form" class="s-notes-db">
                
                <input type="submit" name="update_note_btn" value="✔" class="s-notes-submit">
                
                <input type="hidden" name="id" value="'.$x[0].'">
                
                <textarea type="text" name="update_note" class="s-notes-input">'.$x[2].'</textarea>
                
                <input type="submit" name="delete_note" value="x" class="s-notes-delete">
                
            </form>
        ';
    }
    
    //close db connection
    $conn->close();
?>

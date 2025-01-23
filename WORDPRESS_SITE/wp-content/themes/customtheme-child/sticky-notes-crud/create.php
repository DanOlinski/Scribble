<?php
    //include database connection script
    include './mydbfile.php';

    // $note = $_POST["new_note"];
    $userid = get_current_user_id();
    
    var_dump("insert into notes (user_id, note) values('$userid', '$note')");

    //check that there is a value typed into the form (select form by name)
    if( strlen($_POST['new_note']) > 0 ){
        
        //garb data from html elements by their names
        $new_note = $_POST["new_note"];
        $user_id = get_current_user_id();
        
        //use the information above to create a query to the database and save the new information typed into the form
        $sql="insert into notes (user_id, note) values('$user_id', 'tt')";
        // $sql="insert into notes (user_id, note) values('$user_id', '$new_note')";
        
         //send query to db
        $conn->query($sql);
        

        //close connection with database
        $conn->close();
    }

?>

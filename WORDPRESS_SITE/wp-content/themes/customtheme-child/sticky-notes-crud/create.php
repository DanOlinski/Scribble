<?php
    //include database connection script
    include './mydbfile.php';
    var_dump(getenv("REMOTE_ADDR"));
    //check that there is a value typed into the form (select form by name)
    if( strlen($_POST['new_note']) > 0 ){
        
        //garb data from html elements by their names
        $new_note = $_POST["new_note"];
        
        //save client's IP address in order to display only the notes inserted by the particular user;
        $user_id = getenv("REMOTE_ADDR");
        
        //use the information above to create a query to the database and save the new information typed into the form
        $sql="insert into notes (user_id, note) values('$user_id', '$new_note')";
        
        var_dump($sql);
        

         //send query to db
        $conn->query($sql);
        

        //close connection with database
        $conn->close();
    }

?>

<?php

include './mydbfile.php';

if( strlen($_POST['new_note']) > 0 ){
    
    
    $new_note = $_POST["new_note"];
    $user_id = get_current_user_id();
    
    
    
    $sql="insert into notes (user_id, note) values('$user_id', '$new_note')";
    
    $conn->query($sql);
    // var_dump($new_note);
    // var_dump($sql);
    // var_dump($conn);
    // var_dump($user_id);
    
    
    $conn->close();
}

?>

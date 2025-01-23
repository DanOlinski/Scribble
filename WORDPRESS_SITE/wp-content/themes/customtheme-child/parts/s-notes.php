<?php
    //include database connection script
    include './mydbfile.php';
    //file below saves new notes to database
    include './wp-content/themes/customtheme-child/sticky-notes-crud/create.php';

    //handle the delete note from db functionality
    if( isset($_POST['delete_note']) ){
        include './wp-content/themes/customtheme-child/sticky-notes-crud/delete.php';
    }

    // handle update from db note functionality
    if( isset($_POST['update_note']) ){
        include './wp-content/themes/customtheme-child/sticky-notes-crud/update.php';
    }

    //these two variables contain values from ACF fields
    $afc_image1 = get_field('image1');
    $afc_image2 = get_field('image2');
?>

<!-- when creating a new note this jQuery function handles the data coming in from the html -->
<script 
src="./javascript/clearNewNoteDiv.js" 
></script>


<div id="s-notes-db-container" class="s-notes-db-container">
    <?php
        echo '
            <img class="afc_images" src="' . $afc_image1 . '">
            <img class="afc_images" src="' . $afc_image2 . '">
        ';
    ?>

    <?php
        //the file below renders all notes within the database
        include './wp-content/themes/customtheme-child/sticky-notes-crud/read.php';
    ?>

    <div id="div">
        <form id="form" class="s-notes" method="POST" role="form">
            <input id="new_note" class="s-notes-submit" type="submit" name="notes_create" value="✔">
            <textarea id="text" class="s-notes-input" name="new_note" required="" value=""></textarea>
        </form>
    </div>
</div>


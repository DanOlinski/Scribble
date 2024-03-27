<?php
    include './mydbfile.php';

    include './wp-content/themes/customtheme-child/sticky-notes-crud/create.php';
    
    $afc_image1 = get_field('image1');
    $afc_image2 = get_field('image2');

?>

<script>
    $(document).ready(function() {

        $('#form').click((event)=>{
            event.preventDefault();

            if($('#text').val()) {

                $.ajax({
                    method: "post",
                    url: "http://localhost:8000/",
                    data: $('#form').serialize(),
                    dataType: "text"
                })

                $('#form').empty();

                $('#form').append($(`
                    
                <input id="new_note" class="s-notes-submit" type="submit" name="notes_create" value="✔"> 
                <textarea id="text" class="s-notes-input" name="new_note" required="" value=""></textarea>
            
                    
                `));

                location.reload();
            }
        })
    });
</script>

<div id="s-notes-db-container" class="s-notes-db-container">
        <?php
        echo '
            <img class="afc_images" src="'.$afc_image1.'">
            <img class="afc_images" src="'.$afc_image2.'">
        ';
        ?>

        <?php
        include './wp-content/themes/customtheme-child/sticky-notes-crud/read.php';
        ?>
        
        
        <div id="div">
        <form id="form" class="s-notes" method="POST" role="form">
            <input id="new_note" class="s-notes-submit" type="submit" name="notes_create" value="✔"> 
            <textarea id="text" class="s-notes-input" name="new_note" required="" value=""></textarea>
            
        </form>
    </div>

    
    </div>



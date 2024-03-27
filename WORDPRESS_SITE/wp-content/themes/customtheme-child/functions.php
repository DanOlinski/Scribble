<?php


    function child_theme_styles() {
        wp_enqueue_style('child_theme', get_template_directory_uri() . 'style.css' );
        wp_enqueue_style( 'main_style', get_theme_file_uri('build/style-index.css') );
    }
 
    
    //workout form processing
    function grab_form_data() {
        
        //create
        //the workoutformbtn is the name of the submit button on the form
        if( isset($_POST['workoutformbtn']) ){
            include './database-files/create_workout.php';

            //after the data is inserted into the database you redirect them back to whatever page you like using the code below
            // wp_safe_redirect('http://localhost:8000');
        }

        //delete
        if( isset($_POST['deletebtn']) ){
            include './database-files/delete_workout.php';
        }
        
        // update
        if( isset($_POST['update']) ){
              include './database-files/update_workout.php';

            //create an array of the form fields to pass to the php file that will handle inserting new data into the database table
            $fields_delete = array(
                'update_workout_date' => $_POST['update_workout_date'],
                'update_activity' => $_POST['update_activity'],
                'user_id' => $_POST['update'],
                'id' => $_POST['delete']
            );
    
            //this calls the php file that will insert the data(coming from fields array) into your database table
            wp_remote_post(
                './database-files/delete_workout.php',
                ['body' => $fields_delete,]
            );
            
            //after the data is inserted into the database you redirect them back to whatever page you like using the code below
            // wp_safe_redirect('http://localhost:8000');
        }

        //these next lines are for debugging, they appear in the top of all pages. for debugging code that contains "include" you'll have to echo something out or use var_dump('...') inside the file you are including
        // include './database-files/read_workout.php';
    }

    function notes_db_crud() {

      
        //delete
        if( isset($_POST['delete_note']) ){
            include './wp-content/themes/customtheme-child/sticky-notes-crud/delete.php';
        }
        
        // update
        if( isset($_POST['update_note']) ){
              include './wp-content/themes/customtheme-child/sticky-notes-crud/update.php';
        }
    }
    
    add_action( 'wp_enqueue_scripts', 'child_theme_styles' );

    add_action('template_redirect', 'grab_form_data', 10);

    add_action('template_redirect', 'notes_db_crud', 10);


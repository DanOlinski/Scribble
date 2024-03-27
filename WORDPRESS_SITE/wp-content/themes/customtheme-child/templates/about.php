<?php

/**
 * Template Name: About
 */

 get_header();
?>
 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./wp-content/themes/customtheme-child/build/style-index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Scribble - About</title>
</head>

<body> -->
    
   
<div class="about_text">
# This app is meant to creates a docker container with a wordpress app and a mysql database server, you should have Docker installed in your PC before running this app
<br>
    - This project has some info built into the interface and other test components, if you want to start a wordpress app from scratch delete all of the files and folders from this project except for the `docker-compose.yml` file
    <br>
# type into the console; `docker-compose up -d` (this will create the images (wp and mysql) and start it up in a container). visit `http://localhost:8000/` to setup your wordpress website (username and password are both set to admin)
<br>
    - to edit your wp page go to `http://localhost:8000/wp-admin/`
    <br>
# to access phpMyAdmin go to `http://localhost:8080/` Username is `root` and password is `password` (these are set in the `docker-compose.yml` file)
<br>
# sass
<br>
    - in order to compile sass stylesheet during development you need to run `npm i` from within the customtheme-child folder to install all necessary dependencies
    <br>
    - run the command; npm run compile (this will open a process that will automatically compile any changes you make in the style.scss file)
</div>

<?php
    get_footer();
?>

<!-- </body>
</html> -->
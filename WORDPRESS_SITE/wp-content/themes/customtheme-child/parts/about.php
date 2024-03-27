
<div class='about_div'>
       
    <div class="about_text">
        <h3>About</h3>
        -This is a presentation wordpress CRUD app
        <br>
        - on the interface you can add notes (these notes are saved to a database, they can be updated and deleted from the user interface)
        <br>
        - There is a fun scribble feature where the user can sketch drawings on the browser
        <br>
        - There are ACFs where an editor with access to the wp-admin can add images that show up below the notes and the editor can also update date of the last update to the site. This info is displayed on the footer
        <br>
        - This app also includes SEO/schema
        <br>
        - This app can also be used to start a WordPress project from scratch that runs on docker. In order to do that, delete all of the files and folders from this project except for the `docker-compose.yml` file. You can use the custom theme and other features as a starting point for creating your own WordPress app.
        <br>

        <h3>Starting up the app</h3>
        -Type into the console; `docker-compose up -d` (this will create the images (wp and mysql) and start it up in a docker container). visit `http://localhost:8000/` to setup your wordpress website (username and password are both set as admin)
        <br>
        -To edit your wp page go to `http://localhost:8000/wp-admin/`    
        <br>
        -To access phpMyAdmin go to `http://localhost:8080/` Username is `root` and password is `password` (these are set in the `docker-compose.yml` file)
        <br>
        
        <h3>Starting up the app</h3>
        -In order to compile sass stylesheet during development you need to run `npm i` from within the `customtheme-child` folder to install all necessary dependencies
        <br>
        -Secondly run the command; `npm run compile` (this will open a process that will automatically compile any changes you make in the `./WORDPRESS_SITE/wp-content/themes/customtheme-child/styles/style.scss` file)
        <br>
    </div>
</div>
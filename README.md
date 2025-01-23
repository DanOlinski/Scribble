*Add instructions on running the app in a linux machine to readme file
-go to themes, activate the theme called custom theme child
-apperance editor/templates/index (click on the screen to the right/add a block, seach for content/select/save)
-activate all plugins
-settings general(this should be setup durint wp install)
+tittle Scribble, email: test@test

!!!-settings/ reading
+static page
+homepage = home

create a new database
name scribble
create table = notes
columns = id(type: bigint 20, under index: PRIMARY, check the A_I(auto increment) button), use_id(type: int 50), notes(type: varchar 500)


*Figure out how to make database work (I'm not managing to capture the note value in the create.php file, but in the edit file I am, mabe its because the page is refreshing)(there is an issue w line 23 on s-notes.php)

*figure a way to clear the database when app is loaded

*Adjust the website to look good in any device

## About
- This is a presentation wordpress CRUD app
- on the interface you can add notes (these notes are saved to a database, they can be updated and deleted from the user interface)
- There is a fun scribble feature where the user can sketch drawings on the browser
- There are ACFs where an editor with access to the wp-admin can add images that show up below the notes.
- This includes SEO/schema
- This app can be used to start a WordPress project from scratch that runs on docker. In order to do that, delete all of the files and folders from this project except for the `docker-compose.yml` file. You can use the custom theme and other features as a starting point for creating your own WordPress app.

!["Screenshot of URLs page"](./WORDPRESS_SITE/wp-content/themes/customtheme-child/assets/Snapshot1.PNG)

## Stack
- php
- WordPress
- WebPack
- SASS
- HTML
- Ajax
- jQuery
- VanilaJavascript
- Docker
- MySQL
- PhpMyAdmin

## Starting up the app
#### Go into your WSL shell terminal (if you are wising WSL), navigate into the folder where the wordpress site is located, run the command `docker-compose up -d` (this will create the images (wp and mysql) and start up a server in a docker container). visit `http://localhost:8000/` to view the website.
- If you are running wordpress in the system por the first time, you'll be prompted with a setup page. enter the requested info.
#### To edit your wp page go to `http://localhost:8000/wp-admin/` username and password are both set as admin.
#### To access phpMyAdmin go to `http://localhost:8080/` Username is `root` and password is `password` (these are set up in the `docker-compose.yml` file)

## Run sass compiler
#### In order to compile sass stylesheet during development you need to run `npm i` from within the `customtheme-child` folder to install all necessary dependencies, using the WSL Shell terminal(if you are using windows).
#### Secondly run the command; `npm run compile` (this will open a process that will automatically compile any changes you make in the `./WORDPRESS_SITE/wp-content/themes/customtheme-child/styles/style.scss` file)

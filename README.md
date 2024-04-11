## About
- This is a presentation wordpress CRUD app
- on the interface you can add notes (these notes are saved to a database, they can be updated and deleted from the user interface)
- There is a fun scribble feature where the user can sketch drawings on the browser
- There are ACFs where an editor with access to the wp-admin can add images that show up below the notes and the editor can also update date of the last update to the site. This info is displayed on the footer
- This app also includes SEO/schema
- This app can also be used to start a WordPress project from scratch that runs on docker. In order to do that, delete all of the files and folders from this project except for the `docker-compose.yml` file. You can use the custom theme and other features as a starting point for creating your own WordPress app.

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

## Starting up the app
#### Type into the console; `docker-compose up -d` (this will create the images (wp and mysql) and start it up in a docker container). visit `http://localhost:8000/` to setup your wordpress website (username and password are both set as admin)
#### To edit your wp page go to `http://localhost:8000/wp-admin/`
#### To access phpMyAdmin go to `http://localhost:8080/` Username is `root` and password is `password` (these are set in the `docker-compose.yml` file)

## Run sass compiler
#### In order to compile sass stylesheet during development you need to run `npm i` from within the `customtheme-child` folder to install all necessary dependencies
#### Secondly run the command; `npm run compile` (this will open a process that will automatically compile any changes you make in the `./WORDPRESS_SITE/wp-content/themes/customtheme-child/styles/style.scss` file)

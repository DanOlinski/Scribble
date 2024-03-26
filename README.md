## This app is meant to creates a docker container with a wordpress app and a mysql database server, you should have Docker installed in your PC before running this app
    - This project has some info built into the interface and other test components, if you want to start a wordpress app from scratch delete all of the files and folders from this project except for the `docker-compose.yml` file

### type into the console; `docker-compose up -d` (this will create the images (wp and mysql) and start it up in a container). visit `http://localhost:8000/` to setup your wordpress website (username and password are both set to admin)
    - to edit your wp page go to `http://localhost:8000/wp-admin/`

### to access phpMyAdmin go to `http://localhost:8080/` Username is `root` and password is `password` (these are set in the `docker-compose.yml` file)

### sass
    - in order to compile sass stylesheet during development you need to run `npm i` from within the customtheme-child folder to install all necessary dependencies
    - run the command; npm run compile (this will open a process that will automatically compile any changes you make in the style.scss file)
# About
A ready to use ExpressJs server template with a Postgres database. This backend server can be used to add a database to any application, making the production of fullstack apps more straight forward and less time consuming. Setting it up is easy due to great documentation and thorough testing.

##Dependencies
- axios: ^1.4.0
- chalk: ^2.4.2
- dotenv: ^2.0.0
- ejs: ^3.1.9
- express: ^4.17.1
- morgan": ^1.9.1
- pg: ^8.5.0
- nodemon: ^3.0.1

## Create the DB
1. Start postgres with the command `sudo -i -u postgres` or `sudo -u postgres psql postgres`(make sure you have postgres installed in the device chosen to run this app)
2. Create a database: from your terminal run the command `psql` then `CREATE ROLE scribble LOGIN PASSWORD 'pass';` then `CRATE DATABASE scribble WITH OWNER = scribble;`. If you want to use a deferent name for your database go to the file .env and change the database to whatever you like. Also in the .env file you can change the postgreSQL password to match what your postgreSQL is currently, as well as the postgreSQL user name.

## Setup
1. Install server dependencies using the `npm install` command.
3. run the command `npm run db:reset` to create the tables and insert data into the database. This command is also used to reset the database back to it's original state.
3. Start the web server using the `npm start` command. The app will be served at <http://localhost:8100/>. To run this app using nodemon use the command: `npm run local`

## Routes
- The home route <http://localhost:8100/> will display a text on the browser with the tittle of this template app

!["Screenshot of main page"](./docs/home-route.PNG)

- The debug route <http://localhost:8100/debug> will display a list of all emails saved in the database

!["Screenshot of main page"](./docs/debug-route.PNG)

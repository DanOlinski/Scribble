-- //This file is used to reset the db, using the command npm run db:reset as per package.json. The files that run when the command is called in the terminal are: bin/resetdb.js, db/schema, db/seeds

--Before running "npm run db:reset" you need to manually create the database(CREATE DATABASE template_db), this is not coded to be done automatically on "npm run db:reset" for safety reasons(avoid a user from using DROP DATABASE from within the code)
DROP TABLE IF EXISTS notes CASCADE;

CREATE TABLE notes (
  id SERIAL PRIMARY KEY NOT NULL,
  user_id VARCHAR(255),
  note VARCHAR(255)
);
<?php

#the code below connects to the database(currently set as scribble), the username(currently set as root) and password(currently set as password) are determined in the docker-compose.yml file

#3306 is the port where the database is served, this port is not specified in the docker-compose.yml file, it is the default port where mysql database is served
$conn = new mysqli("db", "root", "password", "scribble", 3306);

#note: this app has no database schema not seeds files, the database scribble should have a table called notes containing 3 columns; id, user_id, note
?>

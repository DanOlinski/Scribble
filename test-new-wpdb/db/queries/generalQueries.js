const db = require('../connection');

//this is a query to test db access. When visiting the url "http://localhost:8100/debug" you will see all user's emails that are in the database.
const getAllNotes = () => {

  //selecting all columns from users
  const sqlQuery = `
  SELECT *
  FROM notes;
  `;

  return db.query(sqlQuery)
    .then(res => {return res.rows})
    .catch((err) => console.log(err.message))//debug in terminal
};

const addNewNote = (userObj) => {
  //return null if no info is passed in
  if (!userObj.user_id, !userObj.note) {return null}

  const values = [userObj.user_id, userObj.note];
  const sqlQuery = `
    INSERT INTO notes (user_id, note)
    VALUES ($1, $2);
  `;

  return db.query(sqlQuery, values)
      .then(() => {
        return "new note added to database"
      })
      .catch((err) => {console.log(err.message)})//debug in terminal
};

const deleteNote = (userObj) => {
  //return null if no info is passed in
  if (!userObj.id) {return null}

  const values = [userObj.id];
  const sqlQuery = `
    DELETE FROM notes
    WHERE ID = $1;
  `;

  return db.query(sqlQuery, values)
      .then(() => {
        return "new note added to database"
      })
      .catch((err) => {console.log(err.message)})//debug in terminal
};

const updateNote = (userObj) => {
  //return null if no info is passed in
  if (!userObj.id, !userObj.note) {return null}

  const values = [userObj.id, userObj.note];
  const sqlQuery = `
    UPDATE notes
    SET note = $2
    WHERE ID = $1;
  `;

  return db.query(sqlQuery, values)
      .then(() => {
        return "new note added to database"
      })
      .catch((err) => {console.log(err.message)})//debug in terminal
};


module.exports = {
  getAllNotes,
  addNewNote,
  deleteNote,
  updateNote
};
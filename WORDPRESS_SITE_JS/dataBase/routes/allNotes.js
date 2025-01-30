const express = require('express');
const router  = express.Router();
const generalQueries = require('../db/queries/generalQueries');

//This rout displays all emails saved into the database. To visualize these you can either make an API request to this end point or visit the url below using your browser.
//http://localhost:8101/notes
router.get('/', (req, res) => {

  const userIp = req.originalUrl.slice(7)

  generalQueries.getAllNotes(userIp)
  .then((response) => {
    res.json(response)
    // console.log(response)
  })

});


//This rout saves a new note
//http://localhost:8101/notes/new
router.put('/new', (req, res) => {

  //expected object: {user_id: xx, note: xx}
  let obj = req.body
console.log(obj)
  generalQueries.addNewNote(obj)
  .then(() => {
    return res.json("info added to database")
  })
  .catch((error) => {
    return console.log(error.message);
  });
});

//This rout deletes a note
//http://localhost:8101/notes/delete
router.put('/delete', (req, res) => {

  //expected object: {id: xx}
  let obj = req.body

  generalQueries.deleteNote(obj)
  .then(() => {
    return res.json("info removed from database")
  })
  .catch((error) => {
    return console.log(error.message);
  });
});

//This rout updates a note
//http://localhost:8101/notes/update
router.put('/update', (req, res) => {

  //expected object: {id: xx, note: xx}
  let obj = req.body

  generalQueries.updateNote(obj)
  .then(() => {
    return res.json("info updated in database")
  })
  .catch((error) => {
    return console.log(error.message);
  });
});

module.exports = router;


//When appending an element to the dom, the only way to select those elements is by adding a js function in the element that is being appended
//in this case what was don is; this file was loaded in the header.php file in order to make all functions from this file accessible through any other file, then in the renders.js file a <script> tag was added placing this function in each rendered element.




const clickAction = function(id) {
console.log(id)
  $(document).ready(function () {
    // console.log( document.querySelector('.s-notes-db-container'))


    //delete note
    $(document).on("click", `#delete${id}`, function (e) {
      e.preventDefault();

      // console.log(this.id.slice(6))
      // console.log($(this).attr('id'))

      let noteId = this.id.slice(6);
      let noteVal = document.querySelector(`#text${noteId}`).value;

      // console.log(noteVal)

      //complete a delete request to the DB
      $.ajax({
        method: "put",
        data: { id: noteId, note: noteVal },
        // url: "http://localhost:8101/notes/delete",
        url: "http://http://44.204.238.202:8101/notes/delete",
        context: document.body,
        success: function () {

          //remove the note from front end
          $(`#form-container${id}`).empty();

        }
      });

    });

    //update an existing note
    $(document).on("click", `#submit${id}`, function (e) {
      e.preventDefault();

      let noteId = this.id.slice(6);
      let noteVal = document.querySelector(`#text${noteId}`).value;

      //request update to DB
      $.ajax({
        method: "put",
        data: { id: noteId, note: noteVal },
        // url: "http://localhost:8101/notes/update",
        url: "http://44.204.238.202:8101/notes/update",
        context: document.body,
        success: function () {

        }
      });

    });

    // this is for debuggin
    $(document).on("click", `#form${id}`, function (e) {
      e.preventDefault();

      // console.log(this.id.slice(6))
      console.log($(this).attr('id'));

      // console.log(noteVal)


    });

  });

};

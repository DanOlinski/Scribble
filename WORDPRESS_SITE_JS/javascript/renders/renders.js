//The escape function converts html tags to unrecognizable code but when it's posted it is translated back to what it was to be safely viewed. This prevents html malware injections
//to use the function follow the example; src="${escape(listingObject.thumbnail_url)}"
const escape = function(str) {
    let div = document.createElement("div");
    div.appendChild(document.createTextNode(str));
    return div.innerHTML;
  };


const renderNote = (data) => {
    return $(`
        <div id="form-container${escape(data.id)}">
        <form id="form${escape(data.id)}" method="POST" role="form" class="s-notes-db">
                <br>
                <input id="submit${escape(data.id)}" type="submit" name="update_note_btn" value="✔" class="s-notes-submit">
                
                <input id="id${escape(data.id)}" type="hidden" name="id" value=${escape(data.id)}>
                
                <textarea id="text${escape(data.id)}" type="text" name="update_note" class="s-notes-input">${escape(data.note)}</textarea>
                
                <input id="delete${escape(data.id)}" type="submit" name="delete_note" value="x" class="s-notes-delete">
            
            <script>
            
            clickAction(${data.id})
            
            </script>    
            
            </form>
            </div>
        `)
}

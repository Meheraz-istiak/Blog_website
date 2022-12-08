
var loadFile = function(event, showId) {
    var output = document.getElementById(showId);
    console.log("event.target", event.target.files);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};
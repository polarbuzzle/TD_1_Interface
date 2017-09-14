

$(document).ready(function(){
    
    $("#reaction").click(loadReaction);
    $("#general").click(loadGeneral);
    
});

function loadReaction() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("corps").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "FactSage.com - Reaction module.php", true);
  xhttp.send();
}

function loadGeneral() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("corps").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "FactSage.com - Introduction to FactSage.php", true);
  xhttp.send();
}

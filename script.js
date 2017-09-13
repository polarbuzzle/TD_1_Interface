

$(document).ready(function(){
    


    
    $("p.special").click(loadDoc("FactSage.com - Reaction module.php"));

    
    
});

function loadDoc(para1) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("corps").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", para1, true);
  xhttp.send();
}

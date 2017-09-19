

$(document).ready(function(){
    
    $(".inPageLoad").click(function() {
        loadInPage(this.id);
    });

    $(".popup").click(function() {
      //Previent d'ouvrir le lien sur la page actuelle (pour les <a>)
      event.preventDefault();
      window.open($(this).attr("href"), "popupWindow", "width = 1000, height = 600, scrollbars = yes");
    });
    
});

function loadInPage(infoPHP) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("corps").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", infoPHP, true);
  xhttp.send();
}


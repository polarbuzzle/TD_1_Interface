//Fonciton lancee quand le site est totalement charge
$(document).ready(function(){
    
    //Fontoin qui charge un element directement dans la page
    $(".inPageLoad").click(function() {
        loadInPage(this.id);
    });

    //Fonction qui ouvre une nouvelle fenetre qui correspond au lien clique
    $(".popup").click(function() {
      //Previent d'ouvrir le lien sur la page actuelle (pour les <a>)
      event.preventDefault();
      window.open($(this).attr("href"), "popupWindow", "width = 1000, height = 600, scrollbars = yes");
    });
    
});

//Fonction qui utilise Ajax pour charger dans le site l'element envoye par parametre
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


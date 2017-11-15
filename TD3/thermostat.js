/* Extrait les valeurs produites dans la page Web et par le simulateur
 * et déclanche l'affichage des valeurs dans la page
*/

  var var1 = 0;


  
    
  
    /**/
class observerThermo {
    constructor() {
        //this.element = document.getElementById(idHTML);
    }
    update(chambre) {
        var temp = chambre.temperatureInterieure;
        if (temp >= -50 || temp <= 50)
            document.getElementById("barreThermo").style.height = (50 + temp).toString() + "%";
        else if(temp > 50)
            document.getElementById("barreThermo").style.height = "100%";
        else if(temp < -50)
            document.getElementById("barreThermo").style.height = "0%";
            
        /*AJOUTER LE CHIFFRE*/
    }
}

class observerInfo{
    constructor() {
        //on fait rien?
    }
    
    update(chambre) {
        
        if(chambre.chauffage) {
            document.getElementById("etatChauffage").innerHTML = "ACTIF";
            document.getElementById("etatChauffage").style.background = "red";
        }
        else {
            document.getElementById("etatChauffage").innerHTML = "INACTIF";
            document.getElementById("etatChauffage").style.background = "white";
        }
        document.getElementById("tempExt").innerHTML = chambre.temperatureExterieure;
        document.getElementById("thermostat").innerHTML = chambre.temperatureThermostat;
        
    }
    
}
  
  /*Observable : chambre*/
class ObservableChambre {
        constructor(chambre){
            this.chambre = chambre;
            this.observers = [];
        }
        
        notifyAll(){
            chambre.ticTac();
            this.observers.forEach(function(element){
                element.update(chambre);
            });
        }
        
        addObserver(newObserver) {
            this.observers.push(newObserver);
        }
        
}
  
     var chambre = new Chambre();
  var observable = new ObservableChambre(chambre);
  var thermo = new observerThermo();
  var info = new observerInfo();
  observable.addObserver(thermo);
  observable.addObserver(info);
  
       function recursion() {
        //console.log(var1);
        //document.getElementById("test").innerHTML = var1;
        //var1++;
        
        observable.notifyAll();
           
        setTimeout( recursion, 50);
    }

/*Code jquery qui affiche un glisseur dans le conteneur ayant
 *l'identifiant #thermostat, qui initalise sa position et ses valeurs
 *par défaut et qui affiche la valeur sélectionnée dans un conteneur
 *ayant l'identifiant #valeurThermostat
 *
 *Pour démarrer le chauffage, il faut cliquer le curseur de défilement
 */
/*********************Ne pas modifier***********************/
 $(document).ready(function() {
    
  $("#thermostatSlider").slider(
  {
    orientation: 'vertical',
    max: 40 ,
    value:0,
    min: -10 ,
    step: 1
  });
  $("#thermostatSlider").slider({
    change: function(event, ui) {
      $("#tdValeurThermostat").text( ui.value );
    }
  });
  
  
   
  recursion(var1);
  
  /*setInterval(function(){
      console.log(var1);
      document.getElementById("test").innerHTML = var1;
      var1++;
      
}, 2000);*/
  
});
/*********************Ne pas modifier***********************/


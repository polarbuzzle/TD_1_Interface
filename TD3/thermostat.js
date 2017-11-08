/* Extrait les valeurs produites dans la page Web et par le simulateur
 * et déclanche l'affichage des valeurs dans la page
*/
  var var1 = 0;
  
       function recursion() {
        console.log(var1);
        document.getElementById("test").innerHTML = var1;
        var1++;
        setTimeout( recursion, 2000);
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
     
   /*  
  $("#thermostat").slider(
  {
    orientation: 'vertical',
    max: 40 ,
    value:temperatureThermostat,
    min: -10 ,
    step: 1
  });
  $("#thermostat").slider({
    change: function(event, ui) {
      $("#tdValeurThermostat").text( ui.value );
    }
  });
 */
  

 
  recursion(var1);
  
  /*setInterval(function(){
      console.log(var1);
      document.getElementById("test").innerHTML = var1;
      var1++;
      
}, 2000);*/
  
});
/*********************Ne pas modifier***********************/


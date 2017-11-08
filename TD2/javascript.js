
//main?
$(document).ready(function(){
    
    let listeDeNom = [];
    let infoStation = [];
    let monDataTable;
    let lattittude = 45.5016889; 
    let longitude = -73.5672;
    let marker; 
    
        $.getJSON("http://secure.bixi.com/data/stations.json", function(data){
        
        monDataTable = $('#maTable').DataTable();
            
            $.each(data.stations, function(index, station){
                
                let nouvelleStation = {
                    
                    'nom' : station.s,
                    'id' : station.id,
                    'etat' : station.st,
                    'bloquee' : station.b,
                    'suspendue' : station.su,
                    'latitude' : station.la,
                    'longitude' : station.lo,
                    'nbBornes' : station.da,
                   'borneInDispo' : station.dx,
                    'velosDispo' : station.ba,
                    'velosInDispo' : station.bx
                }
                
                monDataTable.row.add([
                    
                    nouvelleStation.id,
                    nouvelleStation.nom,
                    nouvelleStation.velosDispo,
                    nouvelleStation.nbBornes,
                    nouvelleStation.bloquee,
                    nouvelleStation.suspendue                    
                       
                ]).draw();
                
                infoStation[nouvelleStation.nom] = nouvelleStation;
     
                listeDeNom.push(station.s);
                
            });
            
        
    })
        .done(function(){
            
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: lattittude, lng: longitude},
                zoom: 13
                
            });
            
            
          marker = new google.maps.Marker({
                position: {lat: lattittude, lng: longitude},
                map: map
        });
            
                    
        });
    
    $( "#tags" ).autocomplete({
      source: listeDeNom
    });
    
    $("#tags").autocomplete({
        select: function(event, ui){
            
            var station = infoStation[ui.item.value];
            var latleng = new google.maps.LatLng(station.latitude, station.longitude);
            marker.setPosition(latleng);
            map.setCenter(latleng);
            map.setZoom(15);
            
            document.getElementById("choixLocalisation").innerHTML = station.nom;
            
            document.getElementById("IdStation").innerHTML = station.id;
    
            
            if(station.bloquee)
            {
                document.getElementById("Bloquee").innerHTML = "Oui";
                document.getElementById("Bloquee").style.backgroundColor = "#FF5240"; 
            }
            else
            {
                 document.getElementById("Bloquee").innerHTML = "Non";
                 document.getElementById("Bloquee").style.backgroundColor = "#04C078"; 
            }
            
            if(station.suspendue)
            {
                document.getElementById("Suspendue").innerHTML = "Oui";
                document.getElementById("Suspendue").style.backgroundColor = "#FF5240"; 
            }
            else
            {
                 document.getElementById("Suspendue").innerHTML = "Non";
                 document.getElementById("Suspendue").style.backgroundColor = "#04C078"; 
            }
            
             if(!station.etat)
            {
                document.getElementById("HorsService").innerHTML = "Oui";
                document.getElementById("HorsService").style.backgroundColor = "#FF5240"; 
            }
            else
            {
                 document.getElementById("HorsService").innerHTML = "Non";
                 document.getElementById("HorsService").style.backgroundColor = "#04C078"; 
            }
            
            if(station.velosDispo)
            {
                document.getElementById("veloDsiponible").innerHTML = station.velosDispo;
                document.getElementById("veloDsiponible").style.backgroundColor = "#04C078"; 
            }
            else
            {
                 document.getElementById("veloDsiponible").innerHTML = "0";
                 document.getElementById("veloDsiponible").style.backgroundColor = "#FF5240"; 
            }
            
             if(station.nbBornes)
            {
                document.getElementById("borneDisponible").innerHTML = station.nbBornes;
                document.getElementById("borneDisponible").style.backgroundColor = "#04C078"; 
            }
            else
            {
                 document.getElementById("borneDisponible").innerHTML = station.nbBornes;
                 document.getElementById("borneDisponible").style.backgroundColor = "#FF5240"; 
            }
            
            document.getElementById("veloIndispo").innerHTML = station.velosInDispo;
            document.getElementById("borneIndisponible").innerHTML = station.borneInDispo;
            
            
         
                
            
        }
    });
    
});

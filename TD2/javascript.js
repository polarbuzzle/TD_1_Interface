
//main?
$(document).ready(function(){
    
    let listeDeNom = [];
    let infoStation = [];
    let monDataTable;
    
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
                    'velosDispo' : station.ba
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
                center: {lat: 45.5016889, lng: -73.56725599999999},
                zoom: 13
            });
            
                    
        });
    
    $( "#tags" ).autocomplete({
      source: listeDeNom
    });
    
    $("#tags").autocomplete({
        select: function(event, ui){
            
            var station = ui.item.value;
            
            document.getElementById("choixLocalisation").innerHTML = station;
            
            document.getElementById("IdStation").innerHTML = infoStation[station].id
            
        }
    });
    
});


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
            
            console.log("salut");
            
        });
    
    $( "#tags   " ).autocomplete({
      source: listeDeNom
    });
});

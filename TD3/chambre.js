/* Simule les variations de températures dans une pièce
 * @auteur: francois.lemieux@polymtl.ca 2010-07-26
*/
class Chambre {
    constructor(){
        this.facteurChauffage      = 0.01;  // échange calorifique avec le chauffage
        this.facteurIsolation      = 0.01;  // échange calorifique avec l'extérieur
        this.temperatureChauffage  = 70;    // température des calorifères
        this.temperatureExterieure = -50;     // température extérieure
        this.temperatureInterieure = 10;    // température intérieure par défaut
        this.chauffage             = false; // le chauffage n'est pas actif par défaut
        this.temperatureThermostat = 20;       // le chauffage démarre à  moins de 20° par défaut

        this.thermometreMax        =50      // Température maximale affichée par le thermomètre
        this.thermometreMin        =-50     // Température minimale affichée par le thermomètre
        this.intervalleTemps       =1000;   // intervalle en milisecondes de lecture de la température
        this.tailleThermometre     =300;    // Taille du thermomètre en pixels
        this.positionThermometre   =50;     // Position du thermomètre par rapport au haut de la page
    }

    /*Extrait la température réglée par le thermostatr */
    getTemperatureThermostat(){
    return document.getElementById("tdValeurThermostat").innerHTML;
    }

    /* Définit les échanges calorifiques selon les valeurs
    * de la temppérature extérieure, de l'isolation,
    * de la température intérieure, de la température fixée
    * par le thermostat et par l'efficacité du système
    * de chauffage.
    * Un "ticTac" correspond à  un échange calorifique
    */
    ticTac() {
        this.temperatureInterieure += ((this.temperatureExterieure - this.temperatureInterieure) * this.facteurIsolation);

        if (this.chauffage == true) {
            this.temperatureInterieure += ((this.temperatureChauffage - this.temperatureInterieure) * this.facteurChauffage);

            if (this.temperatureInterieure > this.getTemperatureThermostat()) {
            this.chauffage=false;
            }
        } else if (this.temperatureInterieure < this.getTemperatureThermostat()) {
            this.chauffage=true;
        }
        return {};
    }
}

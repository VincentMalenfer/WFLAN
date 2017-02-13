$(function(){

function CompteARebours()
{
var date_actuelle = new Date(); // On déclare la date d'aujourd'hui.

var chrono = new Date(<?= $start['start']?>); // On déclare la date.
var tps_restant = chrono.getTime() - date_actuelle.getTime(); // Temps restant en millisecondes
//============ CONVERSIONS
var s_restantes = tps_restant / 1000; // On convertit en secondes
var i_restantes = s_restantes / 60;// On convertit en minutes
var H_restantes = i_restantes / 60;// On convertit en heures
var d_restants = H_restantes / 24;// On convertit en jours
s_restantes = Math.floor(s_restantes % 60); // Secondesrestantes
i_restantes = Math.floor(i_restantes % 60); // Minutes restantes
H_restantes = Math.floor(H_restantes % 24); // Heures restantes
d_restants = Math.floor(d_restants); // Jours restants


var mois_fr = new Array('Janvier', 'Février', 'Mars', 'Avril',
'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre',
'Novembre', 'Décembre');

var texte = "Prochain événement dans : "+ d_restants+ " jours " +H_restantes+ " heures " +i_restantes+ " minutes "
+s_restantes+" secondes";

$("#affichage").html(texte);
}
setInterval(CompteARebours, 1000); // Rappel de la fonction toutes les 1000 millisecondes (toutes les secondes quoi !).
})

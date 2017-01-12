window.onload = function() {
//var paper = new Raphael(document.getElementById('canvas_france'), 587.5, 550);(constructeur sans le redimensionnement, renommer la div si chgt
var paper = new ScaleRaphael("container", 800, 600);
// Les styles visuels pour tous les departements
var attr = {
fill: "#e5e5e5", /* Couleur de remplissage par defaut */
stroke: "#959595", /* Couleur des bordures par defaut */
"stroke-width": 1,
"stroke-linejoin": "round"
};
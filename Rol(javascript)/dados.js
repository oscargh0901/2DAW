var d6 = [];
var caracteristicas = [];
var bonificadores = [];

function generarD6(){
    caracteristicas.splice(0, caracteristicas.length)
    bonificadores.splice(0,bonificadores.length)
    for(var i=0;i<=5;i++){
        d6.splice(0, d6.length)
        for(var j=0;j<4;j++){
            d6.push(Math.floor(Math.random()*6)+1);
        }
        ordenar(d6);
    }
    generarBon(caracteristicas);
}

function ordenar(arr){
    var suma=0;
    arr.sort();
    arr.shift();
    arr.forEach (function(numero){
        suma += numero;
    });
    caracteristicas.push(suma);
    caracteristicas.sort();
    document.getElementById("Car").innerHTML = "Tus caracteristicas son = " + caracteristicas;
}

function generarChar(){
    document.getElementById("Car").innerHTML =  "Tus caracteristicas son: ";
    generarD6();
    document.getElementById("Suma_Bon").innerHTML = "Tus bonificadores son = " + bonificadores + " = " + sumaBonificadores();
}

function generarBon(char){
    char.forEach (function(numero){
        bonificadores.push(Math.floor((numero/2)-5)); 
    });
}

function sumaBonificadores(){
    var suma =0;
    bonificadores.forEach (function(numero){
        suma += numero;
    });
    return suma
}
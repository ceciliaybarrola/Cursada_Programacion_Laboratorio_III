// Cree una aplicación que muestre, a través de un Array, los nombres de los meses de un
// año y el número al que ese mes corresponde. Utilizar una estructura repetitiva para
// escribir en la consola (console.log()).

var array : any [][] = Array();
array.push(["enero",1], ["febrero",2], ["marzo",3], ["abril",4], ["mayo",5], ["junio",6], ["julio",7], 
           ["agosto",8], ["septiembre",9], ["octubre",10], ["noviembre",11], ["diciembre",12]);
console.log(array.toString());

for(let i=0; i<12; i++)
{       console.log(array[i][i]);

}


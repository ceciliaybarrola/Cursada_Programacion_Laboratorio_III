// 3. Realizar una función que reciba un parámetro requerido de tipo numérico y otro opcional
// de tipo cadena. Si el segundo parámetro es recibido, se mostrará tantas veces por
// consola, como lo indique el primer parámetro. En caso de no recibir el segundo
// parámetro, se mostrará el valor inverso del primer parámetro.

function IterarNumeros(numero : number, cadena ?: string):void
{
    if(cadena)
    {
        for (let i=0; i<numero; i++)
        {
            console.log(cadena);
        }
    }
    else
    {
        console.log(Math.pow(numero, -1));
    }
}

IterarNumeros(7, "cecy");
IterarNumeros(25);

// 4. Realizar una función que reciba un número y que muestre (por consola) un mensaje
// como el siguiente:
// El número 5 es impar, siendo 5 el número recibido como parámetro.

function Par_Impar(numero : number): void
{
    if(numero % 2 ==0)
    {
        console.log("el numero "+ numero + " es par, siendo "+numero+" el numero recibido como parametro")
    }
    else
    {
        console.log("el numero "+ numero + " es impar, siendo "+numero+" el numero recibido como parametro")

    }
}
Par_Impar(15);
Par_Impar(6);

// 5. Guardar su nombre y apellido en dos variables distintas. Dichas variables serán pasadas
// como parámetro de la función MostrarNombreApellido, que mostrará el apellido en
// mayúscula y el nombre solo con la primera letra en mayúsculas y el resto en minúsculas.
// El apellido y el nombre se mostrarán separados por una coma (,).
var nombre: string = "cecILiA";
var apellido: string = "ybarrola";

function MostrarNombreApellido(nombre :string, apellido: string): void
{
    console.log(Capitalizar(nombre)+", "+ Capitalizar(apellido))
}
function Capitalizar(cadena: string):string {

    return cadena.charAt(0).toUpperCase() + cadena.slice(1).toLowerCase();
}

MostrarNombreApellido(nombre, apellido);

// Crear una función que reciba como único parámetro una cadena que contenga el día, mes
// y año de nacimiento de una persona (con formato dd-mm-yyyy). La función mostrará por
// consola a que signo corresponde dicha fecha de nacimiento.
// Nota: Para descomponer la fecha recibida como parámetro utilice la función split.
function ObtenerSignoZodiacal(fecha : string): void
{
    var arrayString : Array<String> = fecha.split("/");
    switch(arrayString[1])
    {
        case "01":
            
            if(parseInt(arrayString[0].toString()) < 21){
                console.log("es capricornio");
            }
            else {
                console.log("es acuario");
            }
            break;
        case "02":
            if(parseInt(arrayString[0].toString()) < 21){
                console.log("es acuario");
            }
            else{
                console.log("es piscis");
            }
            break;
        case "03":
            if(parseInt(arrayString[0].toString()) < 21){
                console.log("es piscis");
            }
            else{
                console.log("es aries");
            }
            break;
        case "04":
            if(parseInt(arrayString[0].toString()) < 21){
                console.log("es aries");
            }
            else{
                console.log("es tauro");
            }
            break;
        case "05":
            if(parseInt(arrayString[0].toString()) < 21){
                console.log("es tauro");
            }
            else{
                console.log("es geminis");
            }            
            break;
        case "06":
            if(parseInt(arrayString[0].toString()) < 21){
                console.log("es geminis");
            }
            else{
                console.log("es cancer");
            }
            break;        
        case "07":
            if(parseInt(arrayString[0].toString()) < 21){
                console.log("es cancer");
            }
            else{
                console.log("es leo");
            }
            break;
        case "08":
            if(parseInt(arrayString[0].toString()) < 21){
                console.log("es leo");
            }
            else{
                console.log("es virgo");
            }
            break;
        case "09":
            if(parseInt(arrayString[0].toString()) < 21){
                console.log("es virgo");
            }
            else{
                console.log("es libra");
            }
            break;
        case "10":
            if(parseInt(arrayString[0].toString()) < 21) {
                console.log("es libra");
            }
            else{
                console.log("es escorpio");
            }
            break;
        case "11":
            if(parseInt(arrayString[0].toString()) < 21){
                console.log("es escorpio");
            }
            else{
                console.log("es sagitario");
            }
            break;
        case "12":
            if(parseInt(arrayString[0].toString()) < 21){
                console.log("es sagitario");
            }
            else{
                console.log("es capricornio");
            }
            break;

    }
}

ObtenerSignoZodiacal("08/07/2001");
ObtenerSignoZodiacal("26/01/2001");
ObtenerSignoZodiacal("5/01/2001");
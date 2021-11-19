/// <reference path="./alumno.ts" />

namespace Manejador{

    export function CrearAlumno() {
        
        let apellido:string = (<HTMLInputElement>document.getElementById("apellido")).value;
        let nombre:string = (<HTMLInputElement>document.getElementById("nombre")).value;
        let legajo:number = (Number) ((<HTMLInputElement>document.getElementById("legajo")).value);

        let alumno:Prueba.Alumno = new Prueba.Alumno(apellido, nombre, legajo);

        console.log(alumno.ToString());

        alert(alumno.ToString());
    }

}
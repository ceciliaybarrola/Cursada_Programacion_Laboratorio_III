/// <reference path="./alumno.ts" />

namespace TestPrueba{

    let alumnos:Array<Prueba.Persona> = new Array<Prueba.Persona>();

    alumnos.push(new Prueba.Alumno("perez", "juan", 123));
    alumnos.push(new Prueba.Alumno("martinez", "gonzalo", 124));
    alumnos.push(new Prueba.Alumno("quintero", "juanfer", 125));
    alumnos.push(new Prueba.Alumno("pratto", "oso", 126));

    alumnos.forEach(MostrarAlumnos);


    function MostrarAlumnos(p:Prueba.Persona) {
        console.log(p.ToString());
    }
}
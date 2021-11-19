"use strict";
var TestPrueba;
(function (TestPrueba) {
    var alumnos = new Array();
    alumnos.push(new Prueba.Alumno("perez", "juan", 123));
    alumnos.push(new Prueba.Alumno("martinez", "gonzalo", 124));
    alumnos.push(new Prueba.Alumno("quintero", "juanfer", 125));
    alumnos.push(new Prueba.Alumno("pratto", "oso", 126));
    alumnos.forEach(MostrarAlumnos);
    function MostrarAlumnos(p) {
        console.log(p.ToString());
    }
})(TestPrueba || (TestPrueba = {}));
//# sourceMappingURL=main.js.map
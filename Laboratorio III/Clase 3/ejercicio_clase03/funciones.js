var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var Prueba;
(function (Prueba) {
    var Persona = /** @class */ (function () {
        function Persona(apellido, nombre) {
            this.apellido = apellido;
            this.nombre = nombre;
        }
        Object.defineProperty(Persona.prototype, "Apellido", {
            get: function () {
                return this.apellido;
            },
            set: function (value) {
                this.apellido = value;
            },
            enumerable: false,
            configurable: true
        });
        Object.defineProperty(Persona.prototype, "Nombre", {
            get: function () {
                return this.nombre;
            },
            set: function (value) {
                this.nombre = value;
            },
            enumerable: false,
            configurable: true
        });
        Persona.prototype.ToString = function () {
            return this.apellido + " - " + this.nombre;
        };
        return Persona;
    }());
    Prueba.Persona = Persona;
})(Prueba || (Prueba = {}));
/// <reference path="./persona.ts" />
var Prueba;
(function (Prueba) {
    var Alumno = /** @class */ (function (_super) {
        __extends(Alumno, _super);
        function Alumno(apellido, nombre, legajo) {
            var _this = _super.call(this, apellido, nombre) || this;
            _this.legajo = legajo;
            return _this;
        }
        Object.defineProperty(Alumno.prototype, "Legajo", {
            get: function () {
                return this.legajo;
            },
            set: function (value) {
                this.legajo = value;
            },
            enumerable: false,
            configurable: true
        });
        Alumno.prototype.ToString = function () {
            return _super.prototype.ToString.call(this) + " - " + this.legajo.toString();
        };
        return Alumno;
    }(Prueba.Persona));
    Prueba.Alumno = Alumno;
})(Prueba || (Prueba = {}));
/// <reference path="./alumno.ts" />
var Manejador;
(function (Manejador) {
    function CrearAlumno() {
        var apellido = document.getElementById("apellido").value;
        var nombre = document.getElementById("nombre").value;
        var legajo = (Number)(document.getElementById("legajo").value);
        var alumno = new Prueba.Alumno(apellido, nombre, legajo);
        console.log(alumno.ToString());
        alert(alumno.ToString());
    }
    Manejador.CrearAlumno = CrearAlumno;
})(Manejador || (Manejador = {}));

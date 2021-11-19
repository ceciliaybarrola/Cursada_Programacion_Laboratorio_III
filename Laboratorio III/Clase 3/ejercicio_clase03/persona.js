"use strict";
var Prueba;
(function (Prueba) {
    var Persona = (function () {
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
//# sourceMappingURL=persona.js.map
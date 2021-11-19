/// <reference path="./persona.ts" />

namespace Prueba{

    export class Alumno extends Persona{

        protected legajo:number;

        public get Legajo():number{
            return this.legajo;
        }

        public set Legajo(value:number){
            this.legajo = value;
        }

        public constructor(apellido:string, nombre:string, legajo:number){
            super(apellido, nombre);
            this.legajo = legajo;
        }

        public ToString():string{
            return super.ToString() + " - " + this.legajo.toString();
        }
    }
}
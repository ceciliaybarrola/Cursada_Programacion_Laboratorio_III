namespace Prueba{

    export class Persona{

        protected apellido:string;
        protected nombre:string

        public get Apellido():string{
            return this.apellido;
        }

        public set Apellido(value:string){
            this.apellido = value;
        }

        public get Nombre():string{
            return this.nombre;
        }

        public set Nombre(value:string){
            this.nombre = value;
        }

        public constructor(apellido:string, nombre:string){
            this.apellido = apellido;
            this.nombre = nombre;
        }

        public ToString():string{
            return this.apellido + " - " + this.nombre;
        }
    }
}
import { Editorial } from "./editorial";
import { TipoProducto } from "./tipo-producto";

export class Producto {
    id?: number;
    id_tipo: TipoProducto['id'];
    id_editorial: Editorial['id'];
    nombre: string;
    descripcion: string;

    constructor(nombre:string, descripcion:string) {
        this.nombre = nombre;
        this.descripcion = descripcion;
    }
}

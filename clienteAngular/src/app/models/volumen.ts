import { Producto } from "./producto";

export class Volumen {
    id?: number;
    id_producto: Producto['id'];
    nombre: string | number;
    cantidad: number;

    constructor(nombre:string |number, cantidad: number) {
        this.nombre = nombre;
        this.cantidad = cantidad;
    }
}


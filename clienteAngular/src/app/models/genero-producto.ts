import { Genero } from "./genero";
import { Producto } from "./producto";

export class GeneroProducto {
    id?: number;
    id_producto: Producto['id'];
    id_genero: Genero['id'];

}

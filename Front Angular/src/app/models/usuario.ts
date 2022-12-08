export class Usuario {
    id?: number;
    username: string;
    password: string;
    email: string;

    constructor(nombreUsuario: string, password: string, email: string) {
        this.username = nombreUsuario;
        this.password = password;
        this.email = email
    }
}

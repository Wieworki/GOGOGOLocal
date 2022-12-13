import { Component } from '@angular/core';
import { Usuario } from 'src/app/models/usuario';
import { UsuarioService } from 'src/app/service/usuario.service';

@Component({
  selector: 'app-lista-usuarios',
  templateUrl: './lista-usuarios.component.html',
  styleUrls: ['./lista-usuarios.component.css']
})
export class ListaUsuariosComponent {
  /*user: Usuario[] = [];

  constructor(private UsuarioService:UsuarioService) { }

  ngOnInit(): void {
  }

  cargarUsuario(): void {
    this.UsuarioService.list().subscribe(data => { this.user = data; })
  }

  deleteUser(id?: number): void {
    if(id != undefined){
      this.UsuarioService.delete(id).subscribe(
        data => {
          this.cargarUsuario();
        }, err => {
          alert("No se pudo borrar");
        }
      )
    }
  }*/
}

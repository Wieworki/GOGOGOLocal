import { Component, OnInit } from '@angular/core';
import { Usuario } from 'src/app/models/usuario';

@Component({
  selector: 'app-nav-bar',
  templateUrl: './nav-bar.component.html',
  styleUrls: ['./nav-bar.component.css']
})
export class NavBarComponent implements OnInit {
  isLogged = false;

  constructor(/*private usuario: Usuario*/) { }

  ngOnInit(): void {
    /*if(this.usuario.list(['username']).find((username: string) => username == this.usuario.username) && this.usuario.list(['password']).find((password: string) => password == this.usuario.username)) {
      this.isLogged = true;
    } else {
      this.isLogged = false;
    }*/
  }
}
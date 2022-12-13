import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Usuario } from '../models/usuario';

@Injectable({
  providedIn: 'root'
})
export class UsuarioService {
  URL = 'https://localhost:8080/usuario';

  constructor(private http: HttpClient) { }

  public list(): Observable<Usuario[]> {
    return this.http.get<Usuario[]>(this.URL+'/lista');
  }

  public detail(id: number): Observable<Usuario> {
    return this.http.get<Usuario>(this.URL+`/detail/${id}`);
  }

  public save(experiencia: Usuario): Observable<any> {
    return this.http.post<any>(this.URL+'/create', experiencia);
  }

  public update(id: number, experiencia: Usuario): Observable<any> {
    return this.http.put<any>(this.URL + `/update/${id}`, experiencia);
  }

  public delete(id: number): Observable<any> {
    return this.http.delete<any>(this.URL + `/delete/${id}`);
  }
}

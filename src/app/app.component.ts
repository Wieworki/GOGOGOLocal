import { Component, Injectable } from '@angular/core';
import { NgForm }   from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

export class AppComponent {
  title = 'gogogolocal';
  onSubmit(form: NgForm){
  	console.log(form.value);
  }
}

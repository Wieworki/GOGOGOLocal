import { DOCUMENT } from '@angular/common';
import { Component, HostListener, Inject, OnInit } from '@angular/core';

@Component({
  selector: 'app-main-page',
  templateUrl: './main-page.component.html',
  styleUrls: ['./main-page.component.css']
})
export class MainPageComponent implements OnInit {
  windowScrolled?: boolean;

  constructor(@Inject(DOCUMENT) private document: Document) {}

  @HostListener("window:scroll", [])
  onWindowScroll() {
      if (window.pageYOffset > 450 && document.documentElement.scrollTop) {
          this.windowScrolled = true;
      } 
     else if (this.windowScrolled && window.pageYOffset < 200 && document.documentElement.scrollTop) {
          this.windowScrolled = false;
      }
  }

  ngOnInit(): void {
  }

}

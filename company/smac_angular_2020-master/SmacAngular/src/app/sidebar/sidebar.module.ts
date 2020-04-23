import { SidebarComponent } from './sidebar.component';
import { RouterModule } from '@angular/router';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';



@NgModule({
  imports: [ RouterModule, CommonModule ],
  declarations: [ SidebarComponent ],
  exports: [ SidebarComponent ]
})
export class SidebarModule { }

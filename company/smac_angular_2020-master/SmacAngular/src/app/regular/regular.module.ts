import { NavbarComponent } from './../shared/navbar/navbar.component';
import { SidebarModule } from './../sidebar/sidebar.module';
import { FooterModule } from './../shared/footer/footer.module';
import { NavbarModule } from './../shared/navbar/navbar.module';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SidebarComponent } from '../sidebar/sidebar.component';
import { FooterComponent } from '../shared/footer/footer.component';



@NgModule({
  declarations: [SidebarComponent, FooterComponent, NavbarComponent],
  imports: [
    CommonModule,
    NavbarModule,
    FooterModule,
    SidebarModule
  ]
})
export class RegularModule { }

import { LayoutRoutes } from './layouts.routing';
import { SidebarModule } from './../sidebar/sidebar.module';
import { NavbarModule } from './../shared/navbar/navbar.module';
import { FooterModule } from './../shared/footer/footer.module';
import { FooterComponent } from './../shared/footer/footer.component';
import { SidebarComponent } from './../sidebar/sidebar.component';
import { RouterModule } from '@angular/router';
import { HomeComponent } from './../home/home.component';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';


@NgModule({
  declarations: [
    HomeComponent,
     SidebarComponent],
  imports: [
    CommonModule,
    RouterModule,
    FormsModule,
    FooterModule,
    NavbarModule,
    SidebarModule,
    RouterModule.forChild(LayoutRoutes)
  ]
})
export class LayoutsModule { }

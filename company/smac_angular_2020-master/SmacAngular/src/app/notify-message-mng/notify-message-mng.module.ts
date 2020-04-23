import { SidebarModule } from './../sidebar/sidebar.module';
import { FooterModule } from './../shared/footer/footer.module';
import { NavbarModule } from './../shared/navbar/navbar.module';
import { NavbarComponent } from './../shared/navbar/navbar.component';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SidebarComponent } from '../sidebar/sidebar.component';
import { FooterComponent } from '../shared/footer/footer.component';
import { CreateNotifyMessageComponent } from './create-notify-message/create-notify-message.component';



@NgModule({
  declarations: [SidebarComponent, FooterComponent, NavbarComponent, CreateNotifyMessageComponent],
  imports: [
    CommonModule,
    NavbarModule,
    FooterModule,
    SidebarModule
  ]
})
export class NotifyMessageMngModule { }

import { CKEditorModule } from 'ng2-ckeditor';
import { SidebarModule } from './../../sidebar/sidebar.module';
import { FooterModule } from './../../shared/footer/footer.module';
import { NavbarModule } from './../../shared/navbar/navbar.module';
import { NavbarComponent } from './../../shared/navbar/navbar.component';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FooterComponent } from 'src/app/shared/footer/footer.component';
import { SidebarComponent } from 'src/app/sidebar/sidebar.component';



@NgModule({
  declarations: [SidebarComponent, FooterComponent, NavbarComponent],
  imports: [
    CommonModule,
    NavbarModule,
    FooterModule,
    SidebarModule,
    CKEditorModule
  ]
})
export class CreateNotifyMessageModule { }

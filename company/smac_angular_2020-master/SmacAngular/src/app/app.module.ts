import { CKEditorModule } from 'ng2-ckeditor';
import { CreateNotifyMessageComponent } from './notify-message-mng/create-notify-message/create-notify-message.component';
import { RouterModule } from '@angular/router';
import { NavbarModule } from './shared/navbar/navbar.module';
import { FooterModule } from './shared/footer/footer.module';
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { LayoutsComponent } from './layouts/layouts.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { FooterComponent } from './shared/footer/footer.component';
import { NavbarComponent } from './shared/navbar/navbar.component';
import { RegularComponent } from './regular/regular.component';
import { NotifyMessageMngComponent } from './notify-message-mng/notify-message-mng.component';
import {HttpClientModule} from '@angular/common/http';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    LayoutsComponent,
    SidebarComponent,
    FooterComponent,
    NavbarComponent,
    RegularComponent,
    NotifyMessageMngComponent,
    CreateNotifyMessageComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    RouterModule,
    NavbarModule,
    FooterModule,
    CKEditorModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

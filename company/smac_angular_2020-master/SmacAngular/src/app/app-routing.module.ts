import { CreateNotifyMessageComponent } from './notify-message-mng/create-notify-message/create-notify-message.component';
import { NotifyMessageMngComponent } from './notify-message-mng/notify-message-mng.component';
import { BrowserModule } from '@angular/platform-browser';
import { CommonModule } from '@angular/common';
import { LayoutsComponent } from './layouts/layouts.component';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { RegularComponent } from './regular/regular.component';


const routes: Routes = [
  { path: '',
    redirectTo: '/home',
    pathMatch: 'full'
  },
  {
    path: 'home',
    component: LayoutsComponent
  },
  {
    path: 'form/regular',
    component: RegularComponent
  },
  {
    path: 'notifyMessage',
    component: NotifyMessageMngComponent
  },
  {
    path: 'createdNotifyMessage',
    component: CreateNotifyMessageComponent
  },
  { path: '**', component: LayoutsComponent }
];

@NgModule({
  imports: [
    CommonModule,
    BrowserModule,
    RouterModule.forRoot(routes)
  ],
  exports: [
  ],
})
export class AppRoutingModule { }

import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { LoginComponent } from './pages/login/login.component';
import { AppRoutingModule } from './app-routing.module';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';
import { MessageHelper } from './pages/helpers/message';
import { ReactiveFormsModule, FormsModule } from '@angular/forms';
import { Ex1Component } from './pages/example/ex1/ex1.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    Ex1Component,
    
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FontAwesomeModule,
    FormsModule,
    ReactiveFormsModule,
  ],
  providers: [
    MessageHelper
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }

import { Component, OnInit } from '@angular/core';
import { faCoffee } from '@fortawesome/free-solid-svg-icons';
import { MessageHelper } from './../helpers/message';
import { NgForm } from '@angular/forms';

@Component({
  selector: 'app-login',
  templateUrl: './login3.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  faCoffee = faCoffee;
  isLoginMode = true;
  isLoading = false;
  error= null;
  isPorfileset: boolean = false;

  constructor( 
    private messageHelper: MessageHelper
    ) { }

  ngOnInit(): void {
  }

  login(){

    this.messageHelper.toastMessage("messageHelper",'error',2000);

  }
  onSwitchMode() {
    this.isLoginMode = !this.isLoginMode;
  }
  onSubmit(form: NgForm) {
    
    form.reset();
  }

}

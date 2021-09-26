import { Component, OnInit } from '@angular/core';
import { faCoffee } from '@fortawesome/free-solid-svg-icons';
import { MessageHelper } from './../helpers/message';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  faCoffee = faCoffee;

  constructor( 
    private messageHelper: MessageHelper
    ) { }

  ngOnInit(): void {
  }

  login(){

    this.messageHelper.toastMessage("messageHelper",'error',2000);

  }

}

import { Injectable } from '@angular/core';
import Swal from 'sweetalert2'

import 'sweetalert2/src/sweetalert2.scss'

declare var $: any;

export type modalTypes = 'success' | 'error' | 'warning' | 'info' | 'question';
export type toastTypes = 'success' | 'error' | 'warning' | 'info' ;
export type toastPosition = 'TopRight' | 'TopCenter' | 'TopLeft'  ;
export type inputTypes = 'text' | 'textarea' ;

@Injectable()
export class MessageHelper 
{
    constructor( ) 
    {
    } 

    public toastMessage(message: string, type:string = "info", duration:number = 3000){


        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: message,
            showConfirmButton: false,
            timer: duration
          })
        // Swal.fire({
        //     position: 'top-end',
        //     icon: 'success',
        //     title: 'Your work has been saved',
        //     showConfirmButton: false,
        //     timer: 1500
        //   })
    }
}
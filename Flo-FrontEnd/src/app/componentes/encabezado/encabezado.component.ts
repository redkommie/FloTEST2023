
import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-encabezado',
  templateUrl: './encabezado.component.html',
  styleUrls: ['./encabezado.component.css']
})
export class EncabezadoComponent  implements OnInit {
  title : string = 'Lista suscriptores';

  constructor(){}
  ngOnInit(): void{}
  
  toggleForm(){ console.log('barra de herramientas');}
}

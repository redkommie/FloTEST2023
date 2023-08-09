import { Component, OnInit , AfterViewInit, VERSION, ViewChild  } from '@angular/core';
import { Router } from '@angular/router';
import { SuscriptoresService } from '../../suscriptores.service';
import { Suscriptor } from 'src/app/suscriptor';
import { NgbModal, NgbModule } from '@ng-bootstrap/ng-bootstrap';

@Component({
  selector: 'app-list-sub',
  templateUrl: './list-sub.component.html',
  styleUrls: ['./list-sub.component.css']
})
export class ListSubComponent implements OnInit  {

       listaSubscriptores:any=[];
       searchInput : String =""; 
      

      constructor(public cs:SuscriptoresService,private router:Router,private modalService: NgbModal) { }
    
      public open(modal: any): void {
        this.modalService.open(modal);
      }
     
      ngOnInit(): void {
        this.loadSuscribers();
      }
       
      loadSuscribers(){
        return this.cs.getSubs().subscribe((data:{})=>{
          console.log(data);
          this.listaSubscriptores=data;
        })
      }
      
      onEdit(suscriptores:Suscriptor){
        console.log(Suscriptor);
        this.cs.selectSub=Object.assign({},suscriptores);
        this.router.navigate(["/add-suscriptor"]);
        
      }

      onDelete(id:number){
        this.cs.deleteSubs(id).subscribe((response)=>{
          this.loadSuscribers();
        })
      }
      


}

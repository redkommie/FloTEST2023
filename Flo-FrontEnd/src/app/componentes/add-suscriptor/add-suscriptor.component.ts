import { Component, OnInit } from '@angular/core';
import { NgForm } from '@angular/forms';
import { Router } from '@angular/router';
import { SuscriptoresService } from '../../suscriptores.service';
import { Suscriptor } from 'src/app/suscriptor';

@Component({
  selector: 'app-add-suscriptor',
  templateUrl: './add-suscriptor.component.html',
  styleUrls: ['./add-suscriptor.component.css']
})
export class AddSuscriptorComponent  implements OnInit{
  constructor(public SuscriptoresService:SuscriptoresService,
    private router:Router) { }
    listaSubscriptores:any=[];
  ngOnInit(): void {
  }
    loadSuscribers(){
      return this.SuscriptoresService.getSubs().subscribe((data:{})=>{
        console.log(data);
        this.listaSubscriptores=data;
      })
    }
  submitForm(fm:NgForm){
    if(fm.value.id==null){
      this.SuscriptoresService.createSubs(fm.value)
      .subscribe((response)=>{
        this.resetForm;
        this.router.navigate([""]);
      });
      this.loadSuscribers();
    }else{
      this.SuscriptoresService.updateSubs(fm.value.id,fm.value)
      .subscribe((response)=>{
        this.router.navigate([""]);
        this.resetForm;
      });
      this.loadSuscribers();
    }
    this.resetForm;
  }
  resetForm(fm:NgForm){
    if(fm!=null){
      fm.reset();
      this.SuscriptoresService.selectSub=new Suscriptor();
    }
  }


}

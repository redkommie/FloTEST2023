import { Injectable } from '@angular/core';
import { Suscriptor } from './suscriptor';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';


@Injectable({
  providedIn: 'root'
})
export class SuscriptoresService {
  url='http://127.0.0.1:80/Flo-Laravel-App/public/api/suscriptores';
  
  selectSub:Suscriptor=new Suscriptor();

  reqHeader=new HttpHeaders({
    'Content-Type':'aplication/json'
  });
  constructor(private http:HttpClient) { }

      getSubs():Observable<Suscriptor>{
        return this.http.get<Suscriptor>(this.url);
      }

      createSubs(suscriptor:Suscriptor):Observable<Suscriptor>{
        return this.http.post(this.url,suscriptor,{headers:this.reqHeader});
      }

      updateSubs(id:number, suscriptor:Suscriptor){
        return this.http.put(this.url+'/'+id+'/',suscriptor,{headers:this.reqHeader});
      }

      deleteSubs(id:number){
        return this.http.delete(this.url+'/'+id);
      }
      


}

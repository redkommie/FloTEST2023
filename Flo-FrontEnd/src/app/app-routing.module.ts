import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ListSubComponent} from './componentes/list-sub/list-sub.component'
import { AddSuscriptorComponent } from './componentes/add-suscriptor/add-suscriptor.component';

const routes: Routes = [
  {path:'',component:ListSubComponent},
  {path:'add-suscriptor',component:AddSuscriptorComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

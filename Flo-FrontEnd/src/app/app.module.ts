import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { EncabezadoComponent } from './componentes/encabezado/encabezado.component';
import { HerramientasComponent } from './componentes/herramientas/herramientas.component';
import { FormsModule }   from '@angular/forms'; /* ADD FORMS AND HTTP MODULES*/
import {HttpClientModule} from '@angular/common/http';
import { SuscriptoresComponent } from './componentes/suscriptores/suscriptores.component';
import { ListSubComponent } from './componentes/list-sub/list-sub.component';
import { AddSuscriptorComponent } from './componentes/add-suscriptor/add-suscriptor.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { DataTablesModule } from "angular-datatables";
import { SearchPipe } from './search.pipe';


@NgModule({
  declarations: [
    AppComponent,
    EncabezadoComponent,
    HerramientasComponent,
    SuscriptoresComponent,
    ListSubComponent,
    AddSuscriptorComponent,
    SearchPipe,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule,
    NgbModule,
    DataTablesModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

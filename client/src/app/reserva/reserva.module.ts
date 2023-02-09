import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ReservaRoutingModule } from './reserva-routing.module';
import { ReservaNewComponent } from './reserva-new/reserva-new.component';
import { ReservaDetailComponent } from './reserva-detail/reserva-detail.component';
import { ReservaEditComponent } from './reserva-edit/reserva-edit.component';

import { SharedModule } from '../shared/shared.module';



@NgModule({
  declarations: [
    ReservaNewComponent,
    ReservaDetailComponent,
    ReservaEditComponent
  ],
  imports: [
    CommonModule,
    ReservaRoutingModule,
    SharedModule
  ]
})
export class ReservaModule { }

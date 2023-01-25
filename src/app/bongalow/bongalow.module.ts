import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { BongalowRoutingModule } from './bongalow-routing.module';
import { BongalowEditComponent } from './bongalow-edit/bongalow-edit.component';
import { BongalowDetailComponent } from './bongalow-detail/bongalow-detail.component';
import { BongalowItemComponent } from './bongalow-item/bongalow-item.component';
import { BongalowNewComponent } from './bongalow-new/bongalow-new.component';


@NgModule({
  declarations: [
    BongalowEditComponent,
    BongalowDetailComponent,
    BongalowItemComponent,
    BongalowNewComponent
  ],
  imports: [
    CommonModule,
    BongalowRoutingModule
  ]
})
export class BongalowModule { }

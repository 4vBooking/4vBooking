import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FooterComponent } from './footer/footer.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';
import { NavarComponent } from './navar/navar.component';



@NgModule({
  declarations: [FooterComponent, NavarComponent],
  imports: [CommonModule, FormsModule, ReactiveFormsModule, RouterModule],
  exports: [
    FooterComponent,
    FormsModule,
    ReactiveFormsModule,
    RouterModule,
    NavarComponent
  ],
})
export class SharedModule { }

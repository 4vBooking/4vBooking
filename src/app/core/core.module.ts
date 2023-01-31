import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';
import { BungalowData } from './bungalow-data';
import { BungalowService } from './bungalow.service';



@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    HttpClientModule,
    InMemoryWebApiModule.forRoot(BungalowData),
  ],
  providers: [BungalowService],
})
export class CoreModule { }

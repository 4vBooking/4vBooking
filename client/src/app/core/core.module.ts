import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';
import { BungalowData } from './bungalow-data';
import { BungalowService } from './bungalow.service';
import { InMemoryWebApiModule } from 'angular-in-memory-web-api';
import { AuthService } from './auth.service';
import { AuthGuard } from './auth.guard';



@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    HttpClientModule,
    
    //InMemoryWebApiModule.forRoot(BungalowData),
  ],
  providers: [BungalowService,AuthService,AuthGuard],
})
export class CoreModule { }

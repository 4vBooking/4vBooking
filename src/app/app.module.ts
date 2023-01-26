import { NgModule } from '@angular/core';
import { ɵInternalFormsSharedModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { SharedModule } from './shared/shared.module';
import { BungalowDetailComponent } from './bungalow-detail/bungalow-detail.component';

@NgModule({
  declarations: [
    AppComponent,
    BungalowDetailComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    SharedModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

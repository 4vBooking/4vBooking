import { NgModule } from '@angular/core';
import { ɵInternalFormsSharedModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';

import { CoreModule } from './core/core.module';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { BungalowModule } from './bungalow/bungalow.module';
import { SharedModule } from './shared/shared.module';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    SharedModule,
    CoreModule,
    BungalowModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BungalowNewComponent } from './bungalow-new/bungalow-new.component';
import { BungalowEditComponent } from './bungalow-edit/bungalow-edit.component';
import { BungalowDetailComponent } from './bungalow-detail/bungalow-detail.component';

const routes: Routes = [
  { path: 'products/:id/new', component: BungalowNewComponent },
  { path: 'products/:componentId', component: BungalowDetailComponent },
  { path: 'products/:id/edit', component: BungalowEditComponent },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class BungalowRoutingModule { }

import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BungalowNewComponent } from './bungalow-new/bungalow-new.component';
import { BungalowEditComponent } from './bungalow-edit/bungalow-edit.component';
import { BungalowDetailComponent } from './bungalow-detail/bungalow-detail.component';
import { AuthGuard } from '../core/auth.guard';

const routes: Routes = [
  { path: 'bungalows/:id/new', component: BungalowNewComponent },
  { path: 'bungalows/:id', component: BungalowDetailComponent },
  { path: 'bungalows/:id/edit', component: BungalowEditComponent },
];
/*
const routes: Routes = [
  { path: 'bungalows/:id/new', component: BungalowNewComponent , canActivate: [AuthGuard] },
  { path: 'bungalows/:id', component: BungalowDetailComponent , canActivate: [AuthGuard] },
  { path: 'bungalows/:id/edit', component: BungalowEditComponent , canActivate: [AuthGuard] },
];**/


@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class BungalowRoutingModule {}

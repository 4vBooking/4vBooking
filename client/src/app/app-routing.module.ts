import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { RegisterComponent } from './register/register.component';

const routes: Routes = [
  { path: '', redirectTo: 'bungalow-list', pathMatch: 'full' },
  {
    path: '',
    loadChildren: () => import('./bungalow-list/bungalow-list.module').then((m) => m.BungalowListModule),
  
  },{path: 'register', component: RegisterComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

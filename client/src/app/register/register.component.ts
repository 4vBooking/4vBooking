import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService } from '../core/auth.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
})
export class RegisterComponent {

  form: FormGroup;

  constructor(
    private fb: FormBuilder,
    private router: Router,
    private authService: AuthService
    ) {

    this.form = this.fb.group({
      username: ['', Validators.required],
      password: ['', Validators.required]
    });
  }

  register() {
    const val = this.form.value;
    if (val.username && val.password) {
      //TODO: Send register message to server
      this.authService.register(val.username,val.password).subscribe(data=>{
        console.log("User is registered");
        this.router.navigateByUrl('/');
      })
    }
  }

}

import { Component } from '@angular/core';
import {
  FormBuilder,
  FormGroup,
  FormControl,
  FormArray,
  Validators,
  FormControlName,
} from '@angular/forms';

import { Reserva } from '../../shared/reserva';
import { ReservaService } from '../../core/reserva.service';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-reserva-new',
  templateUrl: './reserva-new.component.html',
  styleUrls: ['./reserva-new.component.scss']
})
export class ReservaNewComponent {

}

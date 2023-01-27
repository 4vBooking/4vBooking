import { Component } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { BongalowService } from 'src/app/core/bungalow.service';
import { Bungalow } from 'src/app/shared/bungalow';

@Component({
  selector: 'app-bungalow-detail',
  templateUrl: './bungalow-detail.component.html',
  styleUrls: ['./bungalow-detail.component.scss']
})
export class BungalowDetailComponent {
  bungalow: Bungalow = {
    id: 0,
    title: '',
    price: 0,
    rating: 0,
    peopleCantity: 0,
    description: '',
    image: '',
  };
  id: number = 0;

  constructor(
    private activatedroute: ActivatedRoute,
    private router: Router,
    private productService: BongalowService
  ) {}

  ngOnInit() {
    this.id = parseInt(this.activatedroute.snapshot.params['id']);
    this.productService
      .getBungalowById(this.id)
      .subscribe((data: Bungalow) => (this.bungalow = data));
  }
  goEdit(): void {
    this.router.navigate(['/bungalows', this.id, 'edit']);
  }
  onBack(): void {
    this.router.navigate(['']);
  }
}

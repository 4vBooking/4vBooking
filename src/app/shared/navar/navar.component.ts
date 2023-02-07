import { Component, OnInit } from '@angular/core';
import { BungalowService } from '../../core/bungalow.service';
import { Router } from '@angular/router';
@Component({
  selector: 'app-navar',
  templateUrl: './navar.component.html',
  styleUrls: ['./navar.component.scss']
})
export class NavbarComponent implements OnInit {
  id: any;

  constructor(private bungalowService: BungalowService, private router: Router) {}

  ngOnInit() {}

  newBungalow() {
    // Get max product Id from the product list
    this.bungalowService.getMaxBungalowId().subscribe((data) => (this.id = data));
    this.router.navigate(['/bungalows', this.id, 'new']);
  }
}

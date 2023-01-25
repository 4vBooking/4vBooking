import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BongalowDetailComponent } from './bongalow-detail.component';

describe('BongalowDetailComponent', () => {
  let component: BongalowDetailComponent;
  let fixture: ComponentFixture<BongalowDetailComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BongalowDetailComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BongalowDetailComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

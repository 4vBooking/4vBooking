import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BongalowItemComponent } from './bongalow-item.component';

describe('BongalowItemComponent', () => {
  let component: BongalowItemComponent;
  let fixture: ComponentFixture<BongalowItemComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BongalowItemComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BongalowItemComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

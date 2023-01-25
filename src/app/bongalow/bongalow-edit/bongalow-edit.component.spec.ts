import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BongalowEditComponent } from './bongalow-edit.component';

describe('BongalowEditComponent', () => {
  let component: BongalowEditComponent;
  let fixture: ComponentFixture<BongalowEditComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BongalowEditComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BongalowEditComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

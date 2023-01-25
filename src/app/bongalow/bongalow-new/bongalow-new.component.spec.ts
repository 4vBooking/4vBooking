import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BongalowNewComponent } from './bongalow-new.component';

describe('BongalowNewComponent', () => {
  let component: BongalowNewComponent;
  let fixture: ComponentFixture<BongalowNewComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BongalowNewComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BongalowNewComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

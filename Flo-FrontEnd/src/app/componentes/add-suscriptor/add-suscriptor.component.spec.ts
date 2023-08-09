import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddSuscriptorComponent } from './add-suscriptor.component';

describe('AddSuscriptorComponent', () => {
  let component: AddSuscriptorComponent;
  let fixture: ComponentFixture<AddSuscriptorComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [AddSuscriptorComponent]
    });
    fixture = TestBed.createComponent(AddSuscriptorComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

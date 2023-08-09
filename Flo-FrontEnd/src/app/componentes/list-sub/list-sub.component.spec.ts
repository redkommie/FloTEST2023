import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListSubComponent } from './list-sub.component';

describe('ListSubComponent', () => {
  let component: ListSubComponent;
  let fixture: ComponentFixture<ListSubComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [ListSubComponent]
    });
    fixture = TestBed.createComponent(ListSubComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

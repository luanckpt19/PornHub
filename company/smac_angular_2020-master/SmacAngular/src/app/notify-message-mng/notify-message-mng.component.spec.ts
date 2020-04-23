import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NotifyMessageMngComponent } from './notify-message-mng.component';

describe('NotifyMessageMngComponent', () => {
  let component: NotifyMessageMngComponent;
  let fixture: ComponentFixture<NotifyMessageMngComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NotifyMessageMngComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NotifyMessageMngComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

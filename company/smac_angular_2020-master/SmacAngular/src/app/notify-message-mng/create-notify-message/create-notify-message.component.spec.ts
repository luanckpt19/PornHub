import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CreateNotifyMessageComponent } from './create-notify-message.component';

describe('CreateNotifyMessageComponent', () => {
  let component: CreateNotifyMessageComponent;
  let fixture: ComponentFixture<CreateNotifyMessageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CreateNotifyMessageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CreateNotifyMessageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

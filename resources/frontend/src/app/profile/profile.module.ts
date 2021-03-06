import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {RouterModule} from '@angular/router';

import { ProfileComponent } from './profile.component';
import { SharedModule } from '../shared/shared.module';


@NgModule({
  declarations: [ProfileComponent],
  imports: [
    RouterModule,
    CommonModule,
    SharedModule
  ]
})
export class ProfileModule { }

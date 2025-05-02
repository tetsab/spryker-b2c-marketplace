import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CustomerTableComponent } from './CustomerTable/customer-table.component';

@NgModule({
  declarations: [CustomerTableComponent],
  imports: [CommonModule],
  exports: [CustomerTableComponent],
})
export class ComponentsModule {}

import { Component } from '@angular/core';

@Component({
  selector: 'app-customer-table',
  templateUrl: './customer-table.component.html',
})
export class CustomerTableComponent {
  config = {
    url: '/merchant-gateway/customer-list',
    columns: [
      { name: 'Customer ID', prop: 'IdCustomer' },
      { name: 'Name', prop: 'Name' },
      { name: 'Email', prop: 'Email' },
      { name: 'Registration Date', prop: 'CreatedAt' },
    ],
    paging: true,
    ordering: true,
  };
}

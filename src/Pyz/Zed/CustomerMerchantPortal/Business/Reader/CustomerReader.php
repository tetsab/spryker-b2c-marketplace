<?php

namespace Pyz\Zed\CustomerMerchantPortal\Business\Reader;

use Orm\Zed\Customer\Persistence\SpyCustomerQuery;

class CustomerReader
{
    public function getCustomers(): array
    {
        return SpyCustomerQuery::create()
            ->select(['IdCustomer', 'FirstName', 'LastName', 'Email', 'CreatedAt'])
            ->find()
            ->toArray();
    }
}

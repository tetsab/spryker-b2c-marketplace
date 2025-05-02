<?php

namespace Pyz\Zed\CustomerMerchantPortal\Business;

use Pyz\Zed\CustomerMerchantPortal\Business\Reader\CustomerReader;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class CustomerMerchantPortalBusinessFactory extends AbstractBusinessFactory
{
    public function getCustomerReader(): CustomerReader
    {
        return new CustomerReader();
    }
}

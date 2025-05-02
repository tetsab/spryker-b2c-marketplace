<?php

namespace Pyz\Zed\CustomerMerchantPortal\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

class CustomerMerchantPortalFacade extends AbstractFacade implements CustomerMerchantPortalFacadeInterface
{
    public function getCustomerList(): array
    {
        return $this->getFactory()->getCustomerReader()->getCustomers();
    }
}

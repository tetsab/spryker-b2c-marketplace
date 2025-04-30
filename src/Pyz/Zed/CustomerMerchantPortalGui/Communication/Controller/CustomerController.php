<?php

namespace Pyz\Zed\CustomerMerchantPortalGui\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

class CustomerController extends AbstractController
{
    /**
     * Index action.
     *
     * @return array
     */
    public function indexAction(): array
    {
        return $this->viewResponse();
    }
}
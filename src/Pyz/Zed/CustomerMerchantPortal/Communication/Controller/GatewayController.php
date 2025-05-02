<?php

namespace Pyz\Zed\CustomerMerchantPortal\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;
use Symfony\Component\HttpFoundation\JsonResponse;

class GatewayController extends AbstractGatewayController
{
    public function customerListAction(): JsonResponse
    {
        $data = $this->getFacade()->getCustomerList();

        $formatted = array_map(function ($customer) {
            return [
                'IdCustomer' => $customer['IdCustomer'],
                'Name' => $customer['FirstName'] . ' ' . $customer['LastName'],
                'Email' => $customer['Email'],
                'CreatedAt' => $customer['CreatedAt'],
            ];
        }, $data);

        return $this->jsonResponse(['data' => $formatted]);
    }
}

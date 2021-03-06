<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class MakeBlindPayment
{
    /**
     * MakeE3PaymentRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q25:MakePaymentRequest
     *
     * @var MakePaymentRequest
     */
    protected $MakeE3PaymentRequest = null;

    /**
     * @param MakePaymentRequest $makeE3PaymentRequest
     *
     * @return MakeBlindPayment
     */
    public function setMakeE3PaymentRequest(MakePaymentRequest $makeE3PaymentRequest)
    {
        $this->MakeE3PaymentRequest = $makeE3PaymentRequest;

        return $this;
    }

    /**
     * @return MakePaymentRequest
     */
    public function getMakeE3PaymentRequest()
    {
        if (null === $this->MakeE3PaymentRequest) {
            $this->MakeE3PaymentRequest = new MakePaymentRequest();
        }

        return $this->MakeE3PaymentRequest;
    }
}

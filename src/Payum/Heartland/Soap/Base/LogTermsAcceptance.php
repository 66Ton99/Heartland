<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://testing.heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class LogTermsAcceptance
{
    /**
     * LogTermsAcceptanceRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q65:LogTermsAcceptanceRequest
     *
     * @var LogTermsAcceptanceRequest
     */
    protected $LogTermsAcceptanceRequest = null;

    /**
     * @param LogTermsAcceptanceRequest $logTermsAcceptanceRequest
     *
     * @return LogTermsAcceptance
     */
    public function setLogTermsAcceptanceRequest(LogTermsAcceptanceRequest $logTermsAcceptanceRequest)
    {
        $this->LogTermsAcceptanceRequest = $logTermsAcceptanceRequest;

        return $this;
    }

    /**
     * @return LogTermsAcceptanceRequest
     */
    public function getLogTermsAcceptanceRequest()
    {
        if (null === $this->LogTermsAcceptanceRequest) {
            $this->LogTermsAcceptanceRequest = new LogTermsAcceptanceRequest();
        }

        return $this->LogTermsAcceptanceRequest;
    }
}

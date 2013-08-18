<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetSecurePayBillData
{
    /**
     * request
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q41:GetSecurePayBillDataRequest
     *
     * @var GetSecurePayBillDataRequest
     */
    protected $request = null;

    /**
     * Constructor.
     *
     * @param GetSecurePayBillDataRequest $request
     */
    public function __construct(GetSecurePayBillDataRequest $request = null)
    {
        $this->request = $request;
    }

    /**
     * @param GetSecurePayBillDataRequest $request
     *
     * @return GetSecurePayBillData
     */
    public function setRequest(GetSecurePayBillDataRequest $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * @return GetSecurePayBillDataRequest
     */
    public function getRequest()
    {
        if (null === $this->request) {
            $this->request = new GetSecurePayBillDataRequest();
        }
        return $this->request;
    }
}

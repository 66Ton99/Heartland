<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class AddBillRequest extends MerchantRequest
{
    /**
     * Bill
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Bill
     *
     * @var Bill
     */
    protected $Bill = null;

    /**
     * TimeZone
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Timezone
     *
     * @var Timezone
     */
    protected $TimeZone;

    /**
     * @param Bill $bill
     *
     * @return AddBillRequest
     */
    public function setBill(Bill $bill)
    {
        $this->Bill = $bill;

        return $this;
    }

    /**
     * @return Bill
     */
    public function getBill()
    {
        if (null === $this->Bill) {
            $this->Bill = new Bill();
        }

        return $this->Bill;
    }

    /**
     * @param Timezone $timeZone
     *
     * @return AddBillRequest
     */
    public function setTimeZone($timeZone)
    {
        $this->TimeZone = $timeZone;

        return $this;
    }

    /**
     * @return Timezone
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }
}

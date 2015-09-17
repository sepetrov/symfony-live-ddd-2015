<?php

namespace ProductReturns;

class ProductReturn
{
    /**
     * @var ReturnNumber
     */
    private $returnNumber;
    /**
     * @var SKU
     */
    private $sku;
    /**
     * @var Price
     */
    private $price;
    /**
     * @var \DateTimeImmutable
     */
    private $dateReturned;
    /**
     * @var \DateTimeImmutable
     */
    private $datePurchased;
    /**
     * @var Refund
     */
    private $refund;

    /**
     * ProductReturn constructor.
     * @param ReturnNumber $returnNumber
     * @param SKU $sku
     * @param Price $price
     * @param \DateTimeImmutable $dateReturned
     * @param \DateTimeImmutable $datePurchased
     */
    public function __construct(
        ReturnNumber $returnNumber,
        SKU $sku,
        Price $price,
        \DateTimeImmutable $dateReturned,
        \DateTimeImmutable $datePurchased
    ) {
        $this->returnNumber = $returnNumber;
        $this->sku = $sku;
        $this->price = $price;
        $this->dateReturned = $dateReturned;
        $this->datePurchased = $datePurchased;
    }

    /**
     * @return \DateInterval
     */
    public function timeframe()
    {
        return $this->dateReturned->diff($this->datePurchased);
    }

    public function refundForCash()
    {
        $refund = new CashRefund(new \DateTimeImmutable());
        $this->doRefund($refund);
    }

    public function refundViaCredit()
    {
        $refund = new CreditRefund(new \DateTimeImmutable());
        $this->doRefund($refund);
    }

    /**
     * @param Refund $refund
     * @throws \Exception
     */
    private function doRefund(Refund $refund)
    {
        if (!is_null($this->refund)) {
            throw new \Exception('Has already been refunded');
        }
        if (!$refund->isAllowed($this)) {
            throw new \Exception('Cannot refund via this method');
        }
        $this->refund = $refund;
    }

}
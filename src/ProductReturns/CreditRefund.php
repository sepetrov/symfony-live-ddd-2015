<?php


namespace ProductReturns;


class CreditRefund extends Refund
{
    function isAllowed(ProductReturn $return)
    {
        return true;
    }

}
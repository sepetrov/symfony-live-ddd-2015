<?php


namespace ProductReturns;


class CashRefund extends Refund
{
    function isAllowed(ProductReturn $return)
    {
        if ($return->timeframe()->days > 30) {
            return false;
        }
        return true;
    }

}
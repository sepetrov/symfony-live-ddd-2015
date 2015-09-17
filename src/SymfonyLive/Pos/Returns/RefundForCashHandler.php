<?php

namespace SymfonyLive\Pos\Returns;

class RefundForCashHandler
{
    public function __construct(Returns $returns)
    {
        $this->returns = $returns;
    }

    public function canHandle($command)
    {
        return $command instanceof RefundForCash;
    }

    public function handle(RefundForCash $command)
    {
        /* @var ProductReturn $return */
        $return = $this->returns->find($command->returnNumber());
        $return->refundForCash();
    }
}

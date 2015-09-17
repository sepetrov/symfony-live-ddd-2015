<?php

use ProductReturns\ProductReturn;

require '../vendor/autoload.php';

$return = new ProductReturn(
    new \ProductReturns\ReturnNumber('1234'),
    new \ProductReturns\SKU('ABC1'),
    new \ProductReturns\Price(1000),
    new DateTimeImmutable(),
    new DateTimeImmutable('-31 days')
);

echo "Refund for cash\n";
try {
    $return->refundForCash();
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

echo "Refund for credit 1\n";
try {
    $return->refundViaCredit();
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

echo "Refund for credit 2\n";
try {
    $return->refundViaCredit();
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}

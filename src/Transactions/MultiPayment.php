<?php

declare(strict_types=1);

/*
 * This file is part of Ark PHP Crypto.
 *
 * (c) Ark Ecosystem <info@ark.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ArkEcosystem\Crypto\Transactions;

use ArkEcosystem\Crypto\Enums\TransactionTypes;

/**
 * This is the multi payment transaction class.
 *
 * @author Brian Faust <brian@ark.io>
 */
class MultiPayment extends Transaction
{
    /**
     * Create a new multi payment transaction instance.
     */
    public function __construct()
    {
        parent::__construct();

        $this->data->type = TransactionTypes::MULTI_PAYMENT;
        $this->data->fee  = TransactionFees::MULTI_PAYMENT;
    }
}

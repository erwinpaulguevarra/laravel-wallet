<?php

declare(strict_types=1);

namespace Bavix\Wallet\Contracts;

interface BookkeeperInterface
{
    /** @retrun int|float|string */
    public function balance(string $purseId): string;

    /** @param float|int|string $amount */
    public function sync(string $purseId, $amount): bool;

    /** @param float|int|string $amount */
    public function increase(string $purseId, $amount): string;
}

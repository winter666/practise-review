<?php

declare(strict_types=1);

namespace App\Delivery\Infrastructure\Provider;

use App\Delivery\Application\Provider\DeliveryProviderInterface;

class DhlProvider implements DeliveryProviderInterface
{

    public function calculateDeliveryFee(float $weight, string $zipcode): float
    {
        // TODO: Implement calculateDeliveryFee() method.
        return 120.0;
    }
}
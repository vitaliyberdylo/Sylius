<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Core\Checker;

use Sylius\Component\Core\Model\OrderInterface;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
final class OrderPaymentMethodSelectionRequirementChecker implements OrderPaymentMethodSelectionRequirementCheckerInterface
{
    /**
     * {@inheritdoc}
     */
    public function isPaymentMethodSelectionRequired(OrderInterface $order)
    {
        return 0 < $order->getTotal();
    }
}

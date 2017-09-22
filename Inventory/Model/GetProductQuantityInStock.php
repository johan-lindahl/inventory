<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Inventory\Model;

use Magento\Inventory\Model\Stock\Command\GetProductQuantityInterface;
use Magento\InventoryApi\Api\GetProductQuantityInStockInterface;

/**
 * Return Quantity of product available to be sold by Product SKU and Stock Id
 *
 * @see \Magento\InventoryApi\Api\GetProductQuantityInStockInterface
 * @api
 */
class GetProductQuantityInStock implements GetProductQuantityInStockInterface
{
    /**
     * @var GetProductQuantityInterface
     */
    private $commandGetProductQuantity;

    /**
     * GetProductQuantityInStock constructor.
     *
     * @param StockItemQuantity $stockItemQty
     * @param ReservationQuantity $reservationQty
     */
    public function __construct(
        GetProductQuantityInterface $commandGetProductQuantity
    ) {
        $this->commandGetProductQuantity = $commandGetProductQuantity;
    }

    /**
     * @inheritdoc
     */
    public function execute(string $sku, int $stockId): float
    {
        return $this->commandGetProductQuantity->execute($sku, $stockId);
    }
}

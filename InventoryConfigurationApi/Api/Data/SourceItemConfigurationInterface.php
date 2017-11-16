<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventoryConfigurationApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Represents a configuration object.
 *
 * Used fully qualified namespaces in annotations for proper work of WebApi request parser
 *
 * @api
 */
interface SourceItemConfigurationInterface extends ExtensibleDataInterface
{
    /**
     * Constant for fields in data array.
     */
    const SOURCE_ITEM_ID = 'source_item_id';
    const INVENTORY_NOTIFY_QTY = 'notify_stock_qty';

    /**
     * Get source item id.
     *
     * @return int|null
     */
    public function getSourceItemId();

    /**
     * Set source item id.
     *
     * @param int $sourceItemId
     * @return void
     */
    public function setSourceItemId(int $sourceItemId);

    /**
     * Get the configuration for source items.
     *
     * @return float
     */
    public function getNotifyStockQty();

    /**
     * Set the notify quantity.
     *
     * @param float $quantity
     * @return void
     */
    public function setNotifyStockQty($quantity);
}
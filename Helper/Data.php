<?php
/**
 * @category   Mageefy
 * @package    Mageefy_OrderStatusColor
 * @author     Mageefy Extension Team
 * @copyright  Copyright (c) Mageefy ( https://www.mageefy.com )
 * @license    https://www.mageefy.com/license-agreement
 */

namespace Mageefy\OrderStatusColor\Helper;

use Magento\Framework\App\Helper\Context;

/**
 * Class Data
 * @package Mageefy\OrderStatusColor\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * @var \Magento\Sales\Model\ResourceModel\Order\Status\Collection
     */
    protected $collection;

    /**
     * @var mixed
     */
    protected $statusColor;

    /**
     * Data constructor.
     * @param Context $context
     * @param \Magento\Sales\Model\ResourceModel\Order\Status\Collection $collection
     */
    public function __construct(
        Context $context,
        \Magento\Sales\Model\ResourceModel\Order\Status\Collection $collection
    ) {
        parent::__construct($context);
        $this->collection = $collection;
    }

    /**
     * @param $status
     * @return string
     */
    public function getStatusColor($status)
    {
        $statues = $this->getColorStatuses();
        return (isset($statues[$status])) ? $statues[$status] : '';
    }

    /**
     * @return mixed
     */
    public function getColorStatuses()
    {
        if (!isset($this->statusColor)) {
            foreach ($this->collection->getItems() as $item) {
                $this->statusColor[$item->getStatus()] = $item->getColor();
            }
        }
        return $this->statusColor;
    }

}
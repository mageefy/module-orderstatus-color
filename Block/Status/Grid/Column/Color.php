<?php
/**
 * @category   Mageefy
 * @package    Mageefy_OrderStatusColor
 * @author     Mageefy Extension Team
 * @copyright  Copyright (c) Mageefy ( https://www.mageefy.com )
 * @license    https://www.mageefy.com/license-agreement
 */

namespace Mageefy\OrderStatusColor\Block\Status\Grid\Column;

/**
 * Class Color
 * @package Mageefy\OrderStatusColor\Block\Status\Grid\Column
 */
class Color extends \Magento\Backend\Block\Widget\Grid\Column
{
    /**
     * Add decorated action to column
     *
     * @return array
     */
    public function getFrameCallback()
    {
        return [$this, 'decorateAction'];
    }

    /**
     * Decorate values to column
     *
     * @param string $value
     * @param \Magento\Sales\Model\Order\Status $row
     * @param \Magento\Backend\Block\Widget\Grid\Column $column
     * @param bool $isExport
     * @return string
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function decorateAction($value, $row, $column, $isExport)
    {
        $cell = '';
        $state = $row->getState();
        if (!empty($state)) {

            if($row->getColor()) {
                $cell = '<span style="width:40px;height:15px;margin-left:5px;display: inline-block;background: '.$row->getColor().'">&nbsp;</span>';
            }
        }

        return $cell;
    }

}

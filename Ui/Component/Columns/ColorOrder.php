<?php
/**
 * @category   Mageefy
 * @package    Mageefy_OrderStatusColor
 * @author     Mageefy Extension Team
 * @copyright  Copyright (c) Mageefy ( https://www.mageefy.com )
 * @license    https://www.mageefy.com/license-agreement
 */

namespace Mageefy\OrderStatusColor\Ui\Component\Columns;

use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\UiComponentInterface;
use Magento\Ui\Component\Listing\Columns\Column;

/**
 * Class ColorOrder
 * @package Mageefy\OrderStatusColor\Ui\Component\Columns
 */
class ColorOrder extends Column
{

    /**
     * @var mixed
     */
    protected $_helper;

    /**
     * Constructor
     *
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param array $components
     * @param array $data
     */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    )
    {
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }
    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                if (isset($item['status']) && !empty($item['status'])) {
                    $item['color_order'] = $this->getColor($item['status']);
                }
            }
        }
        return $dataSource;
    }

    /**
     * @param $status
     * @return string
     */
    protected function getColor($status)
    {
        if(!$this->_helper)
            $this->_helper =  \Magento\Framework\App\ObjectManager::getInstance()
                ->get(\Mageefy\OrderStatusColor\Helper\Data::class);
        return   $this->_helper->getStatusColor($status);
    }
}
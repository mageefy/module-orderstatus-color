<?php
/**
 * @category   Mageefy
 * @package    Mageefy_OrderStatusColor
 * @author     Mageefy Extension Team
 * @copyright  Copyright (c) Mageefy ( https://www.mageefy.com )
 * @license    https://www.mageefy.com/license-agreement
 */

namespace Mageefy\OrderStatusColor\Block\System\Config\Form\Field;

use Magento\Framework\Data\Form\Element\CollectionFactory;
use Magento\Framework\Data\Form\Element\Factory;
use Magento\Framework\Escaper;

/**
 * Class Colors
 * @package Mageefy\SubCategories\Block\System\Config\Form\Field
 */
class Color extends  \Magento\Framework\Data\Form\Element\Text {

    public function __construct(
        Factory $factoryElement,
        CollectionFactory $factoryCollection,
        Escaper $escaper,
        array $data = []
    ) {
        parent::__construct($factoryElement, $factoryCollection, $escaper, $data);
        $this->setType('color');
    }

    /**
     * Get the HTML
     *
     * @return mixed
     */
    public function getHtml()
    {
        if ($this->getRequired()) {
            $this->addClass('required-entry _required');
        }
        if ($this->_renderer) {
            $html = $this->_renderer->render($this);
        } else {
            $html = $this->getDefaultHtml();
        }

        return $html;
    }
}
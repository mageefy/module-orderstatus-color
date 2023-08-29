<?php
/**
 * @category   Mageefy
 * @package    Mageefy_OrderStatusColor
 * @author     Mageefy Extension Team
 * @copyright  Copyright (c) Mageefy ( https://www.mageefy.com )
 * @license    https://www.mageefy.com/license-agreement
 */

namespace Mageefy\OrderStatusColor\Observer;

use Magento\Framework\Event\ObserverInterface;

/**
 * Class EditStatusFormBeforeHtml
 * @package Mageefy\OrderStatusColor\Observer
 */
class EditStatusFormBeforeHtml implements ObserverInterface {

    /**
     * @var \Magento\Framework\App\RequestInterface
     */
    protected $request;

    /**
     * @var \Mageefy\OrderStatusColor\Helper\Data
     */
    protected $helper;

    /**
     * AssignFormBeforeHtml constructor.
     * @param \Magento\Framework\App\RequestInterface $request
     */
    public function __construct(
        \Magento\Framework\App\RequestInterface $request,
        \Mageefy\OrderStatusColor\Helper\Data $helper
    )
    {
        $this->request = $request;
        $this->helper = $helper;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
         $block =  $observer->getEvent()->getBlock();
         if($block->getId() == 'new_order_status') {

             /** @var \Magento\Framework\Data\Form $form */
             $form = $block->getForm();
             $fieldset = $form->addFieldset('base_fieldset_color', ['legend' => __('Customize')]);

             $fieldset->addType('color',
                 \Mageefy\OrderStatusColor\Block\System\Config\Form\Field\Color::class);

             $status = $this->request->getParam('status');

             $fieldset->addField(
                 'color',
                 'color',
                 [
                     'name' => 'color',
                     'label' => __('Color'),
                     'required' => false,
                     'value'=>$this->helper->getStatusColor($status)
                 ]
             );
         }
    }
}
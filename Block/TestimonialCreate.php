<?php
namespace Ahromets\Testimonials\Block;

class TestimonialCreate extends \Magento\Framework\View\Element\Template
{
    public function _prepareLayout()
    {
        return parent::_prepareLayout(); // TODO: Change the autogenerated stub
    }

    public function getCustomerId() {
        $om = \Magento\Framework\App\ObjectManager::getInstance();
        $session = $om->get('Magento\Customer\Model\Session')->getCustomerId();
        //$customerId = $session->getId();
        return $session;
    }
}
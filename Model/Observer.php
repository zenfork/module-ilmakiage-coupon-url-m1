<?php
class Ilmakiage_Coupon_Model_Observer
{
    /**
     * @param Varien_Event_Observer $observer
     *
     * @return void
     */
    public function applyCoupon($observer)
    {
        $couponCode = Mage::app()->getRequest()->getParam('cpn');
        if ($couponCode) {
            // Only latin letters and numbers are allowed
            $couponCode = preg_replace('/[^a-zA-Z0-9]/', '', $couponCode);
            if (strlen($couponCode) > 0) {
                $quote = $observer->getQuote();
                $quote->setCouponCode($couponCode)->save();
            }
        }
    }
}

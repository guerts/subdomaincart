<?php

class shopSubdomaincart extends shopPlugin
{	
	public function cartAdd($item) {
	    $settings = wa()->getPlugin('subdomaincart')->getSettings();
	    setCookie('shop_cart', $item['code'], time() + 30 * 86400, '/', $settings['main_domain']);
    }
}
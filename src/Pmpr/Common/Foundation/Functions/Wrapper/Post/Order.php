<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053ea9b9ccc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Post; use WC_Order; use WC_Order_Refund; class Order extends Common { public function get($umwqusowiqmyseom) { return $this->call('wc_get_order', false, $umwqusowiqmyseom); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { return (array) $this->call('wc_get_orders', [], $ywmkwiwkosakssii); } public function gyioegyiayowaesm($igqsaukqcqscimok) : ?string { return $this->call('wc_get_order_id_by_order_item_id', 0, $igqsaukqcqscimok); } public function isamiwuouuqooysq($iueymcwwscwqkiyq) : string { return $this->call('wc_get_order_status_name', '', $iueymcwwscwqkiyq); } public function iecigqwyyuacokqs($aokagokqyuysuksm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis = '') { return $this->call('wc_update_order_item_meta', false, $aokagokqyuysuksm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis); } public function ikumaaakccaekcmq($aokagokqyuysuksm, $uusmaiomayssaecw, bool $cuyooiakswegosog = true) { return $this->call('wc_get_order_item_meta', false, $aokagokqyuysuksm, $uusmaiomayssaecw, $cuyooiakswegosog); } }

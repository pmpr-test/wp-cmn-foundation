<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6f78e9d0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Automattic\WooCommerce\Utilities\OrderUtil; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; use WC_Order; use WC_Order_Item_Product; class Order extends Common { public function get($umwqusowiqmyseom) { if (is_numeric($umwqusowiqmyseom) && $umwqusowiqmyseom) { $umwqusowiqmyseom = $this->uwkmaywceaaaigwo()->mmmcswscsiecscwg()->get($umwqusowiqmyseom); } if (!$umwqusowiqmyseom instanceof WC_Order) { $umwqusowiqmyseom = null; } return $umwqusowiqmyseom; } public function igawqaomowicuayw($uusmaiomayssaecw, $umwqusowiqmyseom) { $ugugimquukqwogge = null; $umwqusowiqmyseom = $this->get($umwqusowiqmyseom); if ($umwqusowiqmyseom) { $ugugimquukqwogge = $umwqusowiqmyseom->get_meta($uusmaiomayssaecw); } return $ugugimquukqwogge; } public function iyowqkwcwiuccgag($umwqusowiqmyseom) { $qkswkageiqguoeuw = 0; if ($umwqusowiqmyseom = $this->get($umwqusowiqmyseom)) { $qkswkageiqguoeuw = $this->igawqaomowicuayw('_order_number_formatted', $umwqusowiqmyseom); if (!$qkswkageiqguoeuw) { $qkswkageiqguoeuw = $this->igawqaomowicuayw('_order_number', $umwqusowiqmyseom); } if (!$qkswkageiqguoeuw) { $qkswkageiqguoeuw = $umwqusowiqmyseom->get_order_number(); } } return $qkswkageiqguoeuw; } public function kuswmimkgmyuymiu($umwqusowiqmyseom) { $miowmmgaiagcuyoo = 0; $umwqusowiqmyseom = $this->get($umwqusowiqmyseom); if ($umwqusowiqmyseom) { $miowmmgaiagcuyoo = is_callable([$umwqusowiqmyseom, 'get_user_id']) ? $umwqusowiqmyseom->get_user_id() : $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($umwqusowiqmyseom, 'user_id'); } return $miowmmgaiagcuyoo; } public function gyiiseamqaqmymog($umwqusowiqmyseom) : string { $iaqesuwueueiqigq = ''; $umwqusowiqmyseom = $this->get($umwqusowiqmyseom); if ($umwqusowiqmyseom) { $iaqesuwueueiqigq = $umwqusowiqmyseom->get_shipping_method(); } return $iaqesuwueueiqigq; } public function sequoogokooiekma($umwqusowiqmyseom) : string { $aacgiamwycisuaoe = ''; $umwqusowiqmyseom = $this->get($umwqusowiqmyseom); if ($umwqusowiqmyseom) { $aacgiamwycisuaoe = $umwqusowiqmyseom->get_payment_method_title(); } return $aacgiamwycisuaoe; } public function ucgsmqmcwaeyieeg($umwqusowiqmyseom) : string { $osuouiigoeukicyy = ''; $umwqusowiqmyseom = $this->get($umwqusowiqmyseom); if ($umwqusowiqmyseom) { $osuouiigoeukicyy = $umwqusowiqmyseom->get_formatted_shipping_address(); } return $osuouiigoeukicyy; } public function gweagiaayiawoymg($umwqusowiqmyseom) : string { $osuouiigoeukicyy = ''; $umwqusowiqmyseom = $this->get($umwqusowiqmyseom); if ($umwqusowiqmyseom) { $osuouiigoeukicyy = $umwqusowiqmyseom->get_billing_phone(); } return $osuouiigoeukicyy; } public function gawoymkqiuigasuo($umwqusowiqmyseom) : string { $osuouiigoeukicyy = ''; $umwqusowiqmyseom = $this->get($umwqusowiqmyseom); if ($umwqusowiqmyseom) { $osuouiigoeukicyy = $umwqusowiqmyseom->get_billing_email(); } return $osuouiigoeukicyy; } public function ocgueeyoaeumuewk($umwqusowiqmyseom) : string { $osuouiigoeukicyy = ''; $umwqusowiqmyseom = $this->get($umwqusowiqmyseom); if ($umwqusowiqmyseom) { $osuouiigoeukicyy = $umwqusowiqmyseom->get_formatted_billing_address(); } return $osuouiigoeukicyy; } public function yucssmcwiiugkscy($umwqusowiqmyseom) { $uugwciggccmwyges = []; $umwqusowiqmyseom = $this->get($umwqusowiqmyseom); if ($umwqusowiqmyseom) { $uugwciggccmwyges = is_callable([$umwqusowiqmyseom, 'get_customer_note']) ? $umwqusowiqmyseom->get_customer_note() : $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($umwqusowiqmyseom, 'customer_note', []); } return $uugwciggccmwyges; } public function wasgwsogmuquqeaa($umwqusowiqmyseom = null) : array { $oammesyieqmwuwyi = []; if ($umwqusowiqmyseom = $this->get($umwqusowiqmyseom)) { $oammesyieqmwuwyi = $this->ygwimyogyaqgumam($umwqusowiqmyseom, Constants::qwumqqyuasyskkkc); } if (!$oammesyieqmwuwyi) { $oammesyieqmwuwyi = $this->caokeucsksukesyo()->wikusamwomuogoau()->ygywcicqqwcumoku(); } return $oammesyieqmwuwyi; } public function uymqeymoecokewmk($product, $scwmkmciyywokcug) : array { global $wpdb; $yuwymayicwwqiske = $wpdb->prefix; $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product); $oqseeekuqisekiwy = array_map('esc_sql', $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->ouqoeawmueswmksm()); return $this->caokeucsksukesyo()->skckwsgymkimyuwo()->imeeqegecykawmmi("\n\t\t\tSELECT ois.order_id\n\t\t\tFROM {$yuwymayicwwqiske}woocommerce_order_items as ois\n\t\t\tLEFT JOIN {$yuwymayicwwqiske}woocommerce_order_itemmeta as oim ON ois.order_item_id = oim.order_item_id\n\t\t\tLEFT JOIN {$wpdb->posts} AS p ON ois.order_id = p.ID\n\t\t\tLEFT JOIN {$wpdb->postmeta} AS pm ON ois.order_id = pm.meta_id\n\t\t\tWHERE p.post_type = 'shop_order'\n\t\t\tAND p.post_status IN ( 'wc-" . implode("', 'wc-", $oqseeekuqisekiwy) . "' )\n\t\t\tAND ois.order_item_type = 'line_item'\n\t\t\tAND oim.meta_key = '_product_id'\n\t\t\tAND oim.meta_value = '{$product}'\n\t\t\tAND pm.meta_key = '_customer_user'\n\t\t\tAND pm.meta_value = '{$scwmkmciyywokcug}'\n    \t"); } public function ygwimyogyaqgumam($umwqusowiqmyseom, string $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->ygwimyogyaqgumam($this->get($umwqusowiqmyseom), $aiowsaccomcoikus, $ggauoeuaesiymgee, ...$ywmkwiwkosakssii); } public function ckaoccekyymkyeeo($product, string $aiowsaccomcoikus, $ggauoeuaesiymgee = null) { return $this->ygwimyogyaqgumam($product, "billing_{$aiowsaccomcoikus}", $ggauoeuaesiymgee); } public function iooowgsqoyqseyuu($umwqusowiqmyseom) { $aokagokqyuysuksm = $this->ygwimyogyaqgumam($umwqusowiqmyseom, 'id', $umwqusowiqmyseom); if (!is_numeric($aokagokqyuysuksm)) { $aokagokqyuysuksm = 0; } return $aokagokqyuysuksm; } public function sgmwueyyuciacmye($umwqusowiqmyseom) { return $this->ygwimyogyaqgumam($umwqusowiqmyseom, 'date_created'); } public function ucwmcwqmqwaymkkc($umwqusowiqmyseom, string $aqykuigiuwmmcieu = Constants::NAME) : string { $iueymcwwscwqkiyq = $this->ygwimyogyaqgumam($umwqusowiqmyseom, Constants::ciywsqoeiymemsys, ''); if (Constants::NAME === $aqykuigiuwmmcieu) { $iueymcwwscwqkiyq = $this->uwkmaywceaaaigwo()->mmmcswscsiecscwg()->isamiwuouuqooysq($iueymcwwscwqkiyq); } return $iueymcwwscwqkiyq; } public function acsiqgcoegqimogy($umwqusowiqmyseom) : string { $qsegigkmaaskiaeo = ''; if ($umwqusowiqmyseom = $this->get($umwqusowiqmyseom)) { $miemcogcecyqwsea = $this->ckaoccekyymkyeeo($umwqusowiqmyseom, Constants::kagqiwogmiguosiw); $eqmqoaiqqsgwqgcs = $this->ckaoccekyymkyeeo($umwqusowiqmyseom, Constants::scagkwwiiquocimc); if ($miemcogcecyqwsea || $eqmqoaiqqsgwqgcs) { $qsegigkmaaskiaeo = sprintf("%s %s", $miemcogcecyqwsea, $eqmqoaiqqsgwqgcs); } else { if ($gmoeogsuymscawwa = $this->ckaoccekyymkyeeo($umwqusowiqmyseom, 'company')) { $qsegigkmaaskiaeo = $gmoeogsuymscawwa; } else { if ($mkucggyaiaukqoce = $this->ygwimyogyaqgumam($umwqusowiqmyseom, 'customer_id')) { $qsegigkmaaskiaeo = $this->caokeucsksukesyo()->issssuygyewuaswa()->ygwimyogyaqgumam($mkucggyaiaukqoce, Constants::cuyqkgecokgmcwqu, true); } } } } return trim($qsegigkmaaskiaeo); } public function uikgwcuascgeissw($umwqusowiqmyseom) : ?string { $pkyyagewkiyckmwy = null; $umwqusowiqmyseom = $this->get($umwqusowiqmyseom); if ($umwqusowiqmyseom) { $pkyyagewkiyckmwy = sprintf("#%s %s", $this->iooowgsqoyqseyuu($umwqusowiqmyseom), $this->acsiqgcoegqimogy($umwqusowiqmyseom)); } return $pkyyagewkiyckmwy; } public function gosiwswmowcsewmw($umwqusowiqmyseom) : string { return $this->ygwimyogyaqgumam($umwqusowiqmyseom, 'edit_order_url'); } public function scwwywwaeuumakiq($cawesmkieccckaae) { $product = null; if ($cawesmkieccckaae instanceof WC_Order_Item_Product) { $product = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->ygwimyogyaqgumam($cawesmkieccckaae, Constants::woicooamkeqiaemo); } else { if (is_array($cawesmkieccckaae)) { $product = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($cawesmkieccckaae, Constants::woicooamkeqiaemo, 0); } } return $product; } public function igiwycommqemseky($igqsaukqcqscimok) { return $this->get($this->uwkmaywceaaaigwo()->mmmcswscsiecscwg()->gyioegyiayowaesm($igqsaukqcqscimok)); } public function mscqqcmmkkiqwcua($uamcoiueqaamsqma, $uyaimqisayeqocig = null, bool $qiqoegoiusmwmise = false, bool $smeiwuqcygegquew = false) : int { $ksaameoqigiaoigg = 0; if ($uyaimqisayeqocig) { if ($umwqusowiqmyseom = $this->get($uyaimqisayeqocig)) { $ksaameoqigiaoigg = $umwqusowiqmyseom->add_order_note($uamcoiueqaamsqma, $qiqoegoiusmwmise, $smeiwuqcygegquew); } else { if ($uyaimqisayeqocig instanceof Container) { $uyaimqisayeqocig->caokeucsksukesyo()->mskuyeumceaigegs()->info($uamcoiueqaamsqma, ['added_by_user' => $smeiwuqcygegquew, 'is_customer_note' => $qiqoegoiusmwmise]); } } } return $ksaameoqigiaoigg; } public function sayeeewgsiaaskww($umwqusowiqmyseom) { $ocogsiouoiuuguym = ''; $gkkgcoiwayaccqgm = $this->iooowgsqoyqseyuu($umwqusowiqmyseom); if ($gkkgcoiwayaccqgm) { $ocogsiouoiuuguym = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw('_completed_date', $gkkgcoiwayaccqgm); } return $ocogsiouoiuuguym; } public function gyuamceykaukkaqs($umwqusowiqmyseom) : string { $iwywmkygwewiamwm = ''; if ($umwqusowiqmyseom = $this->get($umwqusowiqmyseom)) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::qescuiwgsyuikume => $this->uikgwcuascgeissw($umwqusowiqmyseom), Constants::ogigqueukwysusii => $this->gosiwswmowcsewmw($umwqusowiqmyseom)]); } return $iwywmkygwewiamwm; } public function uwmcaycoowcecicq() : bool { return class_exists("Automattic\\WooCommerce\\Utilities\\OrderUtil") && OrderUtil::custom_orders_table_usage_is_enabled(); } }

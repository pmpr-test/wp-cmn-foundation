<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecaf054ce9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Plugin; use Pmpr\Common\Foundation\Interfaces\Constants; use WC_Order; use WC_Order_Refund; use WooCommerce as WC; class Woocommerce extends Common { public function ceigmcuwmccesick() : ?WC { return $this->call('WC', null); } public function yiyqecawioyosoaw(string $qqscaoyqikuyeoaw, array $ywmkwiwkosakssii = [], string $mkomwsiykqigmqca = '', string $qaskqyyemwwcwuas = '') { $this->call('wc_get_template', false, $qqscaoyqikuyeoaw, $ywmkwiwkosakssii, $mkomwsiykqigmqca, $qaskqyyemwwcwuas); } public function qawsmigsyysqwmeq($gygawogosumsgmme) { return $this->call('wc_clean', $gygawogosumsgmme, $gygawogosumsgmme); } public function qaumqeeagueuqkcg($gygawogosumsgmme, $ggauoeuaesiymgee = null) { return $this->call('wc_get_var', $ggauoeuaesiymgee, $gygawogosumsgmme, $ggauoeuaesiymgee); } public function eokekmciswqwymmq($auucmikeiywsskqa) : string { return $this->call('wc_help_tip', '', $auucmikeiywsskqa); } public function gokeemeoiggmwymu(bool $ksaameoqigiaoigg = false) : ?string { return $this->call('wc_print_notices', null, $ksaameoqigiaoigg); } public function awacsmgimwaqmuga($aokagokqyuysuksm, $uusmaiomayssaecw, bool $cuyooiakswegosog = true) { return $this->call('wc_get_order_item_meta', false, $aokagokqyuysuksm, $uusmaiomayssaecw, $cuyooiakswegosog); } public function uykacsesekwcammu() : bool { return $this->call('wc_tax_enabled', false); } public function ysiiygsouakkcaos() : bool { return $this->call('wc_prices_include_tax', false); } public function kamgouysgcgiaosw() { return $this->call('wc_get_account_menu_items', []); } public function qogqigmumcwsuuoo($qiouiwasaauyaaue, $icwicymcioeyeyek = null) { $this->call('woocommerce_update_options', null, $qiouiwasaauyaaue, $icwicymcioeyeyek); } public function quiocgkecyewioqa($kgccggmwkeukkkci) { return $this->call('wc_get_account_endpoint_url', [], $kgccggmwkeukkkci); } public function ouqoeawmueswmksm() : array { return $this->call('wc_get_is_paid_statuses', []); } public function eeqeqgakemisueqc() : ?string { return $this->call('wc_logout_url', ''); } public function mqsqiyqiceqasokq() : array { return $this->call('wc_get_attribute_taxonomies', []); } public function gmeusukogwcamcyc($ymkomoccmymcoiea) : string { return $this->call('wc_variation_attribute_name', false, $ymkomoccmymcoiea); } public function scemgqiggsykoisk($ymkomoccmymcoiea) : string { return $this->call('wc_attribute_taxonomy_name', $ymkomoccmymcoiea, $ymkomoccmymcoiea); } public function wayckuoqggqsuiys() : bool { return $this->call('is_shop'); } public function wwgwoqsqqmseioea() : bool { return $this->call('is_woocommerce'); } public function useawgqusasoukqm() : string { return $this->call('get_woocommerce_currency', ''); } public function aagmgmqomiqekaai() { $this->call('woocommerce_checkout_payment'); } public function yeqkkocmmiiqoaem() { $this->call('woocommerce_checkout_login_form'); } public function ysecaicuygsaqcuc() { $this->call('woocommerce_checkout_coupon_form'); } public function piywwigcsuccogca() { $this->call('woocommerce_show_product_loop_sale_flash'); } public function aigymewywackewkc() { $this->call('woocommerce_template_loop_rating'); } public function ggcsaqumsyeigyks() { $this->call('woocommerce_template_single_excerpt'); } public function iygyyoququiseciy() { $this->call('woocommerce_template_loop_price'); } public function wmqwkwyuqwksiiqk() : bool { return $this->call('is_cart'); } public function mgmwqcceikcwyuey($suaemuyiacqyugsm) : int { return $this->call('wc_get_page_id', 0, $suaemuyiacqyugsm); } public function yyauwmoecaeskcae($suaemuyiacqyugsm, $cwugquwaukuuosaw = null) : string { return $this->call('wc_get_page_permalink', null, $suaemuyiacqyugsm, $cwugquwaukuuosaw); } public function gqoskmoekogyqwsc() : bool { return $this->call('is_checkout'); } public function syiaeomuueoymkuw() : bool { return $this->call('is_order_received_page'); } public function eywqaumgkccycyau($ywmkwiwkosakssii = []) { $this->call('woocommerce_wp_text_input', false, $ywmkwiwkosakssii); } public function ckeyeaouokcgeqeq() : bool { return $this->call('is_account_page', false); } public function aumscagymwyyicag($aumscagymwyyicag, $ywmkwiwkosakssii = []) : string { return $this->call('wc_price', '', $aumscagymwyyicag, $ywmkwiwkosakssii); } public function soqyyosiiqwwucga($wwigiesyquoeawog = '') : string { return $this->call('get_woocommerce_currency_symbol', '', $wwigiesyquoeawog); } public function qysciqmmoqsaqmqk($ymqmyyeuycgmigyo, $product = '') : string { return $this->call('wc_attribute_label', '', $ymqmyyeuycgmigyo, $product); } public function yiggueaiwiygoiyi($uamcoiueqaamsqma, string $sqeykgyoooqysmca = Constants::ckcawaoawwioqecq, array $icwicymcioeyeyek = []) { $this->call('wc_add_notice', false, $uamcoiueqaamsqma, $sqeykgyoooqysmca, $icwicymcioeyeyek); } public function omokkmkaioyoikks(string $sqeykgyoooqysmca = Constants::ecioqysekgaasegg) : int { return (int) $this->call('wc_notice_count', 0, $sqeykgyoooqysmca); } public function gmkeeackegqamuga(string $sqeykgyoooqysmca = '') : array { return (array) $this->call('wc_get_notices', [], $sqeykgyoooqysmca); } public function uauicwgqqogawesc() : ?string { return $this->call('wc_empty_cart'); } public function geoemsmuouqcqmei() : ?string { return $this->call('wc_get_cart_url'); } public function aoqkwiysueqqwigk() : ?string { return $this->call('wc_get_checkout_url'); } public function ewswusimyeosaogm() : array { return (array) $this->call('wc_get_permalink_structure', []); } public function eokiemeewccmcaqo($ocogsiouoiuuguym, string $saqmwwmqiwmkiwaa = '') : string { return (string) $this->call('wc_format_datetime', '', $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1666776f24             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Post; use stdClass; class Product extends Common { public function get($aokagokqyuysuksm = null) { return $this->call('wc_get_product', null, $aokagokqyuysuksm); } public function kmymkocwcawgeccm() : bool { return $this->call('is_product'); } public function weescwwgqgiyumyw($product, $kesssewsiegssiya, array $ywmkwiwkosakssii = []) : array { return $this->call('wc_get_product_terms', false, $product, $kesssewsiegssiya, $ywmkwiwkosakssii); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) { return $this->call('wc_get_products', [], $ywmkwiwkosakssii); } public function gucosgmwouaweasy() : ?array { return $this->call('wc_get_product_ids_on_sale', []); } public function igsamyaamscucooe(string $ymqmyyeuycgmigyo) : bool { return $this->call('taxonomy_is_product_attribute', false, $ymqmyyeuycgmigyo); } public function eyysaeaoikgmcamm() : array { return $this->call('wc_get_product_visibility_term_ids', []); } public function oeiymaksaoqaeqkk($product, array $ywmkwiwkosakssii = []) { return $this->call('wc_get_price_including_tax', '', $product, $ywmkwiwkosakssii); } public function uewkmqiiguwwscwy($product, array $ywmkwiwkosakssii = []) { return $this->call('wc_get_price_excluding_tax', '', $product, $ywmkwiwkosakssii); } public function hsaqyygkgkawoeso() { $this->call('woocommerce_product_description_tab'); } }

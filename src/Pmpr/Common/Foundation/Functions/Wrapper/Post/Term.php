<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abcde521502             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Term; class Term extends Common { public function ygmcsmegcysyeoss($ywmkwiwkosakssii = []) { return wp_count_terms($ywmkwiwkosakssii); } public function get($iwewcwusemqaiggk = null, string $kesssewsiegssiya = '', string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym, string $tsuauommsquiesmk = "\x72\x61\167") { return get_term($iwewcwusemqaiggk, $kesssewsiegssiya, $aqykuigiuwmmcieu, $tsuauommsquiesmk); } public function woimamkkeyoyauoa(string $aiowsaccomcoikus, $eqgoocgaqwqcimie, string $kesssewsiegssiya = '', string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym, string $tsuauommsquiesmk = "\x72\x61\167") { return get_term_by($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kesssewsiegssiya, $aqykuigiuwmmcieu, $tsuauommsquiesmk); } public function ciugwooasaqcywas($ywmkwiwkosakssii = []) { return get_terms($ywmkwiwkosakssii); } public function insert($iwewcwusemqaiggk, $kesssewsiegssiya, $ywmkwiwkosakssii = []) { return wp_insert_term($iwewcwusemqaiggk, $kesssewsiegssiya, $ywmkwiwkosakssii); } public function igawqaomowicuayw($iwewcwusemqaiggk, string $uusmaiomayssaecw = '', bool $cuyooiakswegosog = false) { return get_term_meta($iwewcwusemqaiggk, $uusmaiomayssaecw, $cuyooiakswegosog); } public function giwmekimakcaawsq($iwewcwusemqaiggk, string $uusmaiomayssaecw, $eqgoocgaqwqcimie, bool $omasqoksqewuwwkq = false) { return add_term_meta($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function ksmqawcowkmegigw($iwewcwusemqaiggk, string $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis = '') { return update_term_meta($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis); } public function smqukgcyacswysqa($iwewcwusemqaiggk, string $uusmaiomayssaecw, $eqgoocgaqwqcimie = '') : bool { return delete_term_meta($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function meqceykmywmqgoym($iwewcwusemqaiggk = 0) : string { return term_description($iwewcwusemqaiggk); } public function qmgcisuuikgmqcsu($iwewcwusemqaiggk, string $kesssewsiegssiya = '') { return get_term_link($iwewcwusemqaiggk, $kesssewsiegssiya); } public function yyykkcyiksewsoqy($iwewcwusemqaiggk, string $kesssewsiegssiya = '', string $sqeykgyoooqysmca = '') : ?string { return get_edit_term_link($iwewcwusemqaiggk, $kesssewsiegssiya, $sqeykgyoooqysmca); } public function exists($iwewcwusemqaiggk, $kesssewsiegssiya = '', $omwmuycmeqcqokom = null) { return term_exists((int) $iwewcwusemqaiggk, $kesssewsiegssiya, $omwmuycmeqcqokom); } }

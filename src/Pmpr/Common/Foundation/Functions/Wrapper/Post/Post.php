<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6de30612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use stdClass; use WP_Error; use WP_Post; use WP_Term; class Post extends Common { public function mgoyskiomyyqmyao() : bool { return have_posts(); } public function iooowgsqoyqseyuu() { return get_the_ID(); } public function ciugwooasaqcywas($ywmkwiwkosakssii = []) : array { return get_posts($ywmkwiwkosakssii); } public function wugecumwuwwwqyoe($post) { return wp_trash_post($post); } public function uiwesgekcwiicksy($post) { return wp_is_post_revision($post); } public function somkqoqeimmeemuq($post) { return wp_is_post_autosave($post); } public function ugcgywasgqgaysek($post = null) { return post_password_required($post); } public function ckoygqywcuqasqea($post, $beuoaqwyyugcgeas = false) { return get_attached_file($post, $beuoaqwyyugcgeas); } public function oyeigcesikakqqqi($useksmwkuswkwcqg) : string { return get_private_posts_cap_sql($useksmwkuswkwcqg); } public function smyaggwyeweiqiie($iwewcwusemqaiggk = '', $kesssewsiegssiya = '', $post = null) : bool { return has_term($iwewcwusemqaiggk, $kesssewsiegssiya, $post); } public function gueasuouwqysmomu($post) { return get_post_type($post); } public function update($eaceuwkosygcyqks) { return wp_update_post($eaceuwkosygcyqks); } public function yyykkcyiksewsoqy($post) : ?string { return get_edit_post_link($post); } public function insert(array $ywmkwiwkosakssii = []) { return wp_insert_post($ywmkwiwkosakssii); } public function ymeakeisquceukse($aokagokqyuysuksm) { return wp_delete_post_revision($aokagokqyuysuksm); } public function usieywkaugusugwm($post = null) { return get_post_thumbnail_id($post); } public function qcgakseyaikigqco($post = null) : ?string { return get_the_title($post); } public function seewsasmyoyciiee($post = null) : bool { return has_excerpt($post); } public function masoymaamekuykso($post = null) : string { return get_the_excerpt($post); } public function delete($post, $cwwowqyuwccuykom = false) { $eysyeukyagaoqqcy = false; if (!($post && is_numeric($post))) { goto rkqioecyciickiga; } $eysyeukyagaoqqcy = wp_delete_post($post, $cwwowqyuwccuykom); rkqioecyciickiga: return $eysyeukyagaoqqcy; } public function ymgsgecsiqeegseg($post = null) { return get_comment_count($post); } public function qmegicmsiwuuwysa($post = null) { return get_comments_number($post); } public function oaqimsyggeyyceig($post = null) : bool { return has_post_thumbnail($post); } public function get($post, $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { return get_post($post, $aqykuigiuwmmcieu); } public function weescwwgqgiyumyw($post, $kesssewsiegssiya, $ywmkwiwkosakssii = []) { return wp_get_post_terms($post, $kesssewsiegssiya, $ywmkwiwkosakssii); } public function weamamgeawqmwoui($gwiwsycaaqgwmewg) : bool { return delete_post_meta_by_key($gwiwsycaaqgwmewg); } public function smqukgcyacswysqa($post, $uusmaiomayssaecw = '', $eqgoocgaqwqcimie = '') : bool { return delete_post_meta($post, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ymuqsscwmcumcama($ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { return wp_get_recent_posts($ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function giwmekimakcaawsq($post, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq = false) { return add_post_meta($post, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function igawqaomowicuayw($post, $uusmaiomayssaecw = '', bool $cuyooiakswegosog = true) { return get_post_meta($post, $uusmaiomayssaecw, $cuyooiakswegosog); } public function ksmqawcowkmegigw($post, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse = '') { return update_post_meta($post, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse); } public function ygwimyogyaqgumam($aiowsaccomcoikus, $post = null, string $mgkceomocowocqyo = Constants::qoawsacmmgmimqaw) { return get_post_field($aiowsaccomcoikus, $post, $mgkceomocowocqyo); } public function ycqquoiyyuesegsy($post = null, bool $eoocgqsqmwuegiae = false) { return get_permalink($post, $eoocgqsqmwuegiae); } public function iimmeiugygssweyc($post) : array { return get_post_ancestors($post); } public function wowuoqqaosuecgaw(bool $euiwgoaiosimquiu = false, $keieyseucgmsicwg = '', bool $awqociesscimyymk = true, string $kesssewsiegssiya = Constants::qgciomgukmcwscqw) { return get_adjacent_post($euiwgoaiosimquiu, $keieyseucgmsicwg, $awqociesscimyymk, $kesssewsiegssiya); } public function uamasysiccecccmw($post = null, $oiegiwogmwmawkeo = "\x70\x6f\163\164\55\164\x68\165\155\x62\x6e\x61\x69\154") { return get_the_post_thumbnail_url($post, $oiegiwogmwmawkeo); } public function smwweookeqkiiygs($post, $oiegiwogmwmawkeo = "\x70\157\163\x74\x2d\164\150\x75\155\142\x6e\x61\151\x6c", $wisgiwskwawciiee = []) : string { return get_the_post_thumbnail($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee); } public function souwykwwmyygqyqi($post = null, $yauwwygqkmsmamik = '', $ecckicuukiesgaig = '') : string { return get_the_content($yauwwygqkmsmamik, $ecckicuukiesgaig, $post); } public function qamwegcyimgcqksw($aaokuekaimigoyue, $sqeykgyoooqysmca = Constants::mswoacegomcucaik, string $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym) { return get_page_by_path($aaokuekaimigoyue, $aqykuigiuwmmcieu, $sqeykgyoooqysmca); } public function ssacaeeassumyuws(?string $migiiksoiymissge) : int { return url_to_postid($migiiksoiymissge); } public function kugamkssceycoyaq($saqmwwmqiwmkiwaa = "\x55", $sowwqkgqsmguquke = '', $post = '', $mcmaiqckgiuqayau = false) { return get_post_time($saqmwwmqiwmkiwaa, $sowwqkgqsmguquke, $post, $mcmaiqckgiuqayau); } public function kkkiiqssauymiqsk($saqmwwmqiwmkiwaa = "\125", $eqwyacwmcqusmwoq = false, $post = null, $mcmaiqckgiuqayau = false) { return get_post_modified_time($saqmwwmqiwmkiwaa, $eqwyacwmcqusmwoq, $post, $mcmaiqckgiuqayau); } public function qkyaousweiegggas($gcqseksiskwueksc, $kesssewsiegssiya, $caacssaumiqeaoaw, $wyeyeaaekyoyimqu, $miisqgccsqqcscia) { return get_the_term_list($gcqseksiskwueksc, $kesssewsiegssiya, $caacssaumiqeaoaw, $wyeyeaaekyoyimqu, $miisqgccsqqcscia); } public function mmwqkgoeywcqkkoa($post = false, $eoocgqsqmwuegiae = false, $cgqscqgaukewiaeg = false) { return get_page_link($post, $eoocgqsqmwuegiae, $cgqscqgaukewiaeg); } public function ygmcsmegcysyeoss(string $sqeykgyoooqysmca = Constants::mswoacegomcucaik, string $ceisuqkayuuaoqso = '') : stdClass { return wp_count_posts($sqeykgyoooqysmca, $ceisuqkayuuaoqso); } }

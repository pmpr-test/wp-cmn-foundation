<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6791524c10e10             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Taxonomy; class Taxonomy extends Common { public function get($kesssewsiegssiya) { return get_taxonomy($kesssewsiegssiya); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::emgcgiseaoouacge, string $cackiyicawmkyqqg = Constants::weaykmmocuacwekg) : array { return get_taxonomies($ywmkwiwkosakssii, $aqykuigiuwmmcieu, $cackiyicawmkyqqg); } public function qgckgkwskmsomoqs($mksyucucyswaukig, string $aqykuigiuwmmcieu = Constants::emgcgiseaoouacge) : array { return get_object_taxonomies($mksyucucyswaukig, $aqykuigiuwmmcieu); } public function myagqecycsaiyqsk(string $kesssewsiegssiya) : bool { return taxonomy_exists($kesssewsiegssiya); } public function register($kesssewsiegssiya, $mqyaskyaekmkegmg, $ywmkwiwkosakssii = []) { return register_taxonomy($kesssewsiegssiya, $mqyaskyaekmkegmg, $ywmkwiwkosakssii); } public function unregister($kesssewsiegssiya) { return unregister_taxonomy($kesssewsiegssiya); } public function ycewygugskisecuo($kesssewsiegssiya, $mqyaskyaekmkegmg) : bool { return register_taxonomy_for_object_type($kesssewsiegssiya, $mqyaskyaekmkegmg); } public function aewcsqigycuaekym($kesssewsiegssiya) : bool { return is_taxonomy_hierarchical($kesssewsiegssiya); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b645383f9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Post_Type; class PostType extends Common { public function myagqecycsaiyqsk(string $sqeykgyoooqysmca) : bool { return post_type_exists($sqeykgyoooqysmca); } public function register($ymqmyyeuycgmigyo, $ywmkwiwkosakssii = []) { return register_post_type($ymqmyyeuycgmigyo, $ywmkwiwkosakssii); } public function myagyqumwekameww($useksmwkuswkwcqg) { return get_post_type_archive_link($useksmwkuswkwcqg); } public function imgymusqgccqsqqq(?string $sqeykgyoooqysmca) : ?WP_Post_Type { return get_post_type_object($sqeykgyoooqysmca); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = Constants::emgcgiseaoouacge) : array { return get_post_types($ywmkwiwkosakssii, $aqykuigiuwmmcieu); } public function akwkkemsqyaykueg(string $sqeykgyoooqysmca, string $wiwcgykokegmceyk) : bool { return post_type_supports($sqeykgyoooqysmca, $wiwcgykokegmceyk); } public function musuokisgmmamoua(string $sqeykgyoooqysmca, $wiwcgykokegmceyk, ...$ywmkwiwkosakssii) { add_post_type_support($sqeykgyoooqysmca, $wiwcgykokegmceyk, ...$ywmkwiwkosakssii); } public function gsocgyykkkimquku($sqeykgyoooqysmca, string $kqqoowikisucgqgy = '') { return get_post_type_archive_feed_link($sqeykgyoooqysmca, $kqqoowikisucgqgy); } }

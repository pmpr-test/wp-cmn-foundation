<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4037d1e2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Screen; use WP_Term; use WP_Theme; use WP_Widget; class Theme extends Common { public function csumkumkamiuyags($mwwsoasauceiwsmk) : ?object { return wp_setup_nav_menu_item($mwwsoasauceiwsmk); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = 'query_themes') { if (!function_exists('themes_api')) { include_once ABSPATH . 'wp-admin/includes/theme.php'; } return themes_api($aiamqeawckcsuaou, $ywmkwiwkosakssii); } public function nwioaegiaeeskaiw() { return $this->call('wp_get_document_title', ''); } public function qwkcakacwsyqmyyq($gcgsqcoqciockquc) : array { return get_column_headers($gcgsqcoqciockquc); } public function oequuauskyumwyau() : ?WP_Screen { return $this->call('get_current_screen', null); } public function wyucwisgamaqoiey(string $iiaeaqeesosyaiwy) : ?WP_Screen { return $this->call('convert_to_screen', null, $iiaeaqeesosyaiwy); } public function wewicgosooacoayq($ywmkwiwkosakssii) { return paginate_links($ywmkwiwkosakssii); } public function gqesusmmigggsqai() : bool { return is_rtl(); } public function sqiwaoiciieomeyo($assameyusgwogmce) { $this->call('register_widget', false, $assameyusgwogmce); } public function ycgmicmqesqeymuw($gssymikmqawqwuqe = 1, bool $sekkmwqwqwcayiwg = true) : string { return get_pagenum_link($gssymikmqawqwuqe, $sekkmwqwqwcayiwg); } public function ewgquygaowykwacc($aiamqeawckcsuaou = -1, string $ymqmyyeuycgmigyo = '_wpnonce', bool $emaumsqyoyqcimcm = true, bool $koaqeegoeiaiccse = true) : string { return (string) $this->call('wp_nonce_field', '', $aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm, $koaqeegoeiaiccse); } public function ewcokmoyomeywmkg($ycoeoaakqyskgykq = 0, string $mkomwsiykqigmqca = '', string $aaceqemaqqeckueq = Constants::zmmsyimwiiaweocw) : string { return $this->call('get_dashboard_url', '', $ycoeoaakqyskgykq, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function ooksqgokuwcmoqcu($momcykaoccoymeig) : bool { return $this->call('is_active_sidebar', false, $momcykaoccoymeig); } public function esuiacmywcmmsmao($momcykaoccoymeig) : bool { return $this->call('dynamic_sidebar', false, $momcykaoccoymeig); } public function ymaywccaiscsmsik(array $ywmkwiwkosakssii = []) : string { return $this->call('register_sidebar', false, $ywmkwiwkosakssii); } public function amqggwqseogkecwg($assameyusgwogmce, $owgumcsyqsamiemg = [], array $ywmkwiwkosakssii = []) { $this->call('the_widget', false, $assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii); } public function giuogmweiymywgus() { $this->call('_wp_render_title_tag'); } public function oqeqieqigwskaoks($ymqmyyeuycgmigyo) { return wp_create_nav_menu($ymqmyyeuycgmigyo); } public function kkawimmeccgmcawk($ewuukoycimkekouc) { return wp_get_nav_menu_object($ewuukoycimkekouc); } public function syeuyeikogukksam() : string { return get_the_archive_title(); } public function ucwagioskkwqgkmq() : string { return get_index_template(); } public function eocmoukyueksgeuk() : array { return get_nav_menu_locations(); } public function cwymaemaosauskko() : string { return category_description(); } public function sgqgswskkowaiqeq() : string { return tag_description(); } public function oykyuqgcqyasgeuw(bool $kugsomueokogcawo = true, string $yuwymayicwwqiske = '') : string { return single_cat_title($yuwymayicwwqiske, $kugsomueokogcawo); } public function ciiwwmaoykeuooma(bool $kugsomueokogcawo = true, string $yuwymayicwwqiske = '') : string { return single_tag_title($yuwymayicwwqiske, $kugsomueokogcawo); } public function musuokisgmmamoua($wiwcgykokegmceyk, ...$ywmkwiwkosakssii) { return add_theme_support($wiwcgykokegmceyk, ...$ywmkwiwkosakssii); } public function wieoiwogwmcwukom() : string { return get_the_archive_description(); } public function gkyiimkoysuawmuq(string $eomymqcmcwieomke) { return remove_menu_page($eomymqcmcwieomke); } public function mokkauciousseuge($smaiamkswqkisawm) : bool { return register_theme_directory($smaiamkswqkisawm); } public function yegcgmiiagikeqqy(string $qogsmwakwacwqogk = '') : string { return get_theme_file_path($qogsmwakwacwqogk); } public function ygokeyuugqiciuiu($wiwcgykokegmceyk, ...$ywmkwiwkosakssii) : bool { return current_theme_supports($wiwcgykokegmceyk, ...$ywmkwiwkosakssii); } public function uoieieeqeeowieyy(string $igscmsiuisqaqwkk, string $ukwokcuqauuosmoo) { register_nav_menu($igscmsiuisqaqwkk, $ukwokcuqauuosmoo); } public function ogciwyoqgciosgcw(string $uccyimuwqccawaaq = '', string $wcukkasieyuwiqwo = '') : WP_Theme { return wp_get_theme($uccyimuwqccawaaq, $wcukkasieyuwiqwo); } public function gskomckeekemaake(string $eomymqcmcwieomke, string $gcquyecwuesyqgqm) { return remove_submenu_page($eomymqcmcwieomke, $gcquyecwuesyqgqm); } public function mmkeekwmoemcwgew($cmwygeyygwqaemaq = '', $sqeykgyoooqysmca = 'primary large', $ymqmyyeuycgmigyo = 'submit', $yacouuuguuuegggc = true, $siquossayskcwkea = '') : string { return get_submit_button($cmwygeyygwqaemaq, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $yacouuuguuuegggc, $siquossayskcwkea); } public function mesaqgkuiqquyoaq($ywmkwiwkosakssii = []) : string { return wp_dropdown_categories($ywmkwiwkosakssii); } public function iyaokukyeukqokqe($cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim = '', $oeggggyoyacueimi = '', $kuuiuigeacouwmaa = null) : string { return add_menu_page($cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim, $oeggggyoyacueimi, $kuuiuigeacouwmaa); } public function qokeeagcgucqmgco($wgaiuiysuegayseo, $cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim = '', $kuuiuigeacouwmaa = null) : string { return add_submenu_page($wgaiuiysuegayseo, $cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim, $kuuiuigeacouwmaa); } public function kcqimgkamkyscsey($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $suaemuyiacqyugsm, $awcmekyiwwkeyisq = 'default', $ywmkwiwkosakssii = []) { add_settings_field($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $suaemuyiacqyugsm, $awcmekyiwwkeyisq, $ywmkwiwkosakssii); } public function sikqggwmmykuiymy(string $aokagokqyuysuksm, string $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $gcgsqcoqciockquc = null, string $mgkceomocowocqyo = Constants::ycusscwsoggmuweq, string $sqqewmoeaekuyyas = Constants::wikgqsqysyuoykse, array $eykyyaaomkcqyiyq = []) { add_meta_box($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $gcgsqcoqciockquc, $mgkceomocowocqyo, $sqqewmoeaekuyyas, $eykyyaaomkcqyiyq); } public function iaekyqikwgmkcsok(string $aokagokqyuysuksm, $gcgsqcoqciockquc = null, string $mgkceomocowocqyo = Constants::ycusscwsoggmuweq) { remove_meta_box($aokagokqyuysuksm, $gcgsqcoqciockquc, $mgkceomocowocqyo); } public function qggoeuwkeacoeksm(array $ywmkwiwkosakssii = []) : ?string { return get_search_form($ywmkwiwkosakssii); } public function wmakaaiqyiaemasw() : string { return wp_referer_field(false); } }

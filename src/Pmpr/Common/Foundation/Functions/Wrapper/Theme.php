<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705a37ba6a79             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Screen; use WP_Term; use WP_Theme; use WP_Widget; class Theme extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\161\x75\145\162\x79\x5f\164\150\x65\x6d\145\163") { if (!function_exists("\x74\150\145\x6d\145\163\137\141\160\x69")) { include_once ABSPATH . "\x77\x70\x2d\x61\144\155\151\x6e\57\151\x6e\143\x6c\x75\144\x65\163\57\x74\150\x65\x6d\x65\x2e\x70\150\x70"; } return themes_api($aiamqeawckcsuaou, $ywmkwiwkosakssii); } public function qwkcakacwsyqmyyq($gcgsqcoqciockquc) : array { return get_column_headers($gcgsqcoqciockquc); } public function oequuauskyumwyau() : ?WP_Screen { return $this->call("\x67\145\164\137\143\x75\162\x72\x65\x6e\x74\x5f\163\143\162\145\x65\156", null); } public function wyucwisgamaqoiey(string $iiaeaqeesosyaiwy) : ?WP_Screen { return $this->call("\x63\157\x6e\166\x65\162\164\137\164\x6f\x5f\x73\143\x72\145\145\x6e", null, $iiaeaqeesosyaiwy); } public function wewicgosooacoayq($ywmkwiwkosakssii) { return paginate_links($ywmkwiwkosakssii); } public function gqesusmmigggsqai() : bool { return is_rtl(); } public function sqiwaoiciieomeyo($assameyusgwogmce) { $this->call("\x72\145\147\x69\x73\x74\145\x72\x5f\x77\151\144\x67\145\x74", false, $assameyusgwogmce); } public function ycgmicmqesqeymuw($gssymikmqawqwuqe = 1, bool $sekkmwqwqwcayiwg = true) : string { return get_pagenum_link($gssymikmqawqwuqe, $sekkmwqwqwcayiwg); } public function ewgquygaowykwacc($aiamqeawckcsuaou = -1, string $ymqmyyeuycgmigyo = "\137\167\160\x6e\157\156\x63\x65", bool $emaumsqyoyqcimcm = true, bool $koaqeegoeiaiccse = true) : string { return (string) $this->call("\167\160\x5f\x6e\x6f\156\143\x65\137\146\x69\145\154\x64", '', $aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm, $koaqeegoeiaiccse); } public function ewcokmoyomeywmkg($ycoeoaakqyskgykq = 0, string $mkomwsiykqigmqca = '', string $aaceqemaqqeckueq = Constants::zmmsyimwiiaweocw) : string { return $this->call("\x67\145\x74\137\x64\141\163\x68\142\157\141\162\x64\137\x75\x72\x6c", '', $ycoeoaakqyskgykq, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function ooksqgokuwcmoqcu($momcykaoccoymeig) : bool { return $this->call("\x69\163\x5f\141\143\x74\151\x76\145\x5f\163\151\144\x65\142\x61\162", false, $momcykaoccoymeig); } public function esuiacmywcmmsmao($momcykaoccoymeig) : bool { return $this->call("\x64\171\x6e\141\x6d\151\x63\x5f\163\x69\x64\145\142\x61\162", false, $momcykaoccoymeig); } public function ymaywccaiscsmsik(array $ywmkwiwkosakssii = []) : string { return $this->call("\x72\x65\147\x69\x73\164\145\x72\137\163\151\144\x65\142\x61\x72", false, $ywmkwiwkosakssii); } public function amqggwqseogkecwg($assameyusgwogmce, $owgumcsyqsamiemg = [], array $ywmkwiwkosakssii = []) { $this->call("\164\x68\145\137\x77\x69\x64\x67\x65\164", false, $assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii); } public function giuogmweiymywgus() { $this->call("\x5f\x77\160\x5f\x72\145\x6e\144\145\x72\137\164\x69\x74\x6c\x65\137\x74\141\147"); } public function oqeqieqigwskaoks($ymqmyyeuycgmigyo) { return wp_create_nav_menu($ymqmyyeuycgmigyo); } public function kkawimmeccgmcawk($ewuukoycimkekouc) { return wp_get_nav_menu_object($ewuukoycimkekouc); } public function syeuyeikogukksam() : string { return get_the_archive_title(); } public function ucwagioskkwqgkmq() : string { return get_index_template(); } public function eocmoukyueksgeuk() : array { return get_nav_menu_locations(); } public function cwymaemaosauskko() : string { return category_description(); } public function sgqgswskkowaiqeq() : string { return tag_description(); } public function oykyuqgcqyasgeuw(bool $kugsomueokogcawo = true, string $yuwymayicwwqiske = '') : string { return single_cat_title($yuwymayicwwqiske, $kugsomueokogcawo); } public function ciiwwmaoykeuooma(bool $kugsomueokogcawo = true, string $yuwymayicwwqiske = '') : string { return single_tag_title($yuwymayicwwqiske, $kugsomueokogcawo); } public function musuokisgmmamoua($wiwcgykokegmceyk, ...$ywmkwiwkosakssii) { return add_theme_support($wiwcgykokegmceyk, ...$ywmkwiwkosakssii); } public function wieoiwogwmcwukom() : string { return get_the_archive_description(); } public function gkyiimkoysuawmuq(string $eomymqcmcwieomke) { return remove_menu_page($eomymqcmcwieomke); } public function mokkauciousseuge($smaiamkswqkisawm) : bool { return register_theme_directory($smaiamkswqkisawm); } public function yegcgmiiagikeqqy(string $qogsmwakwacwqogk = '') : string { return get_theme_file_path($qogsmwakwacwqogk); } public function ygokeyuugqiciuiu($wiwcgykokegmceyk, ...$ywmkwiwkosakssii) : bool { return current_theme_supports($wiwcgykokegmceyk, ...$ywmkwiwkosakssii); } public function uoieieeqeeowieyy(string $igscmsiuisqaqwkk, string $ukwokcuqauuosmoo) { register_nav_menu($igscmsiuisqaqwkk, $ukwokcuqauuosmoo); } public function ogciwyoqgciosgcw(string $uccyimuwqccawaaq = '', string $wcukkasieyuwiqwo = '') : WP_Theme { return wp_get_theme($uccyimuwqccawaaq, $wcukkasieyuwiqwo); } public function gskomckeekemaake(string $eomymqcmcwieomke, string $gcquyecwuesyqgqm) { return remove_submenu_page($eomymqcmcwieomke, $gcquyecwuesyqgqm); } public function mmkeekwmoemcwgew($cmwygeyygwqaemaq = '', $sqeykgyoooqysmca = "\x70\x72\151\x6d\x61\x72\171\40\x6c\141\x72\147\145", $ymqmyyeuycgmigyo = "\x73\165\x62\155\151\164", $yacouuuguuuegggc = true, $siquossayskcwkea = '') : string { return get_submit_button($cmwygeyygwqaemaq, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $yacouuuguuuegggc, $siquossayskcwkea); } public function mesaqgkuiqquyoaq($ywmkwiwkosakssii = []) : string { return wp_dropdown_categories($ywmkwiwkosakssii); } public function iyaokukyeukqokqe($cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim = '', $oeggggyoyacueimi = '', $kuuiuigeacouwmaa = null) : string { return add_menu_page($cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim, $oeggggyoyacueimi, $kuuiuigeacouwmaa); } public function qokeeagcgucqmgco($wgaiuiysuegayseo, $cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim = '', $kuuiuigeacouwmaa = null) : string { return add_submenu_page($wgaiuiysuegayseo, $cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim, $kuuiuigeacouwmaa); } public function kcqimgkamkyscsey($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $suaemuyiacqyugsm, $awcmekyiwwkeyisq = "\144\x65\x66\141\x75\x6c\164", $ywmkwiwkosakssii = []) { add_settings_field($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $suaemuyiacqyugsm, $awcmekyiwwkeyisq, $ywmkwiwkosakssii); } public function sikqggwmmykuiymy(string $aokagokqyuysuksm, string $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $gcgsqcoqciockquc = null, string $mgkceomocowocqyo = Constants::ycusscwsoggmuweq, string $sqqewmoeaekuyyas = Constants::wikgqsqysyuoykse, array $eykyyaaomkcqyiyq = []) { add_meta_box($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $gcgsqcoqciockquc, $mgkceomocowocqyo, $sqqewmoeaekuyyas, $eykyyaaomkcqyiyq); } public function iaekyqikwgmkcsok(string $aokagokqyuysuksm, $gcgsqcoqciockquc = null, string $mgkceomocowocqyo = Constants::ycusscwsoggmuweq) { remove_meta_box($aokagokqyuysuksm, $gcgsqcoqciockquc, $mgkceomocowocqyo); } public function qggoeuwkeacoeksm(array $ywmkwiwkosakssii = []) : ?string { return get_search_form($ywmkwiwkosakssii); } public function wmakaaiqyiaemasw() : string { return wp_referer_field(false); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ec0c0505             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Screen; use WP_Term; use WP_Theme; use WP_Widget; class Theme extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\x71\165\145\x72\x79\137\x74\150\145\x6d\x65\163") { if (!function_exists("\x74\x68\145\155\x65\x73\137\141\160\151")) { include_once ABSPATH . "\167\x70\x2d\x61\144\155\x69\x6e\x2f\x69\x6e\x63\x6c\165\x64\145\x73\57\x74\150\145\155\145\x2e\x70\150\x70"; } return themes_api($aiamqeawckcsuaou, $ywmkwiwkosakssii); } public function oequuauskyumwyau() : ?WP_Screen { return $this->call("\147\145\164\137\x63\x75\x72\x72\145\x6e\164\x5f\x73\x63\x72\x65\x65\x6e", null); } public function wyucwisgamaqoiey(string $iiaeaqeesosyaiwy) : ?WP_Screen { return $this->call("\143\157\x6e\166\x65\162\x74\x5f\x74\x6f\137\x73\x63\162\145\x65\156", null, $iiaeaqeesosyaiwy); } public function wewicgosooacoayq($ywmkwiwkosakssii) { return paginate_links($ywmkwiwkosakssii); } public function gqesusmmigggsqai() : bool { return is_rtl(); } public function sqiwaoiciieomeyo($assameyusgwogmce) { $this->call("\162\x65\147\x69\163\164\x65\x72\137\x77\x69\144\x67\145\164", false, $assameyusgwogmce); } public function ycgmicmqesqeymuw($gssymikmqawqwuqe = 1, bool $sekkmwqwqwcayiwg = true) : string { return get_pagenum_link($gssymikmqawqwuqe, $sekkmwqwqwcayiwg); } public function ewgquygaowykwacc($aiamqeawckcsuaou = -1, string $ymqmyyeuycgmigyo = "\137\x77\160\x6e\157\x6e\143\x65", bool $emaumsqyoyqcimcm = true, bool $koaqeegoeiaiccse = true) : string { return (string) $this->call("\167\x70\x5f\x6e\x6f\156\x63\145\137\x66\x69\x65\x6c\144", '', $aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm, $koaqeegoeiaiccse); } public function ewcokmoyomeywmkg($ycoeoaakqyskgykq = 0, string $mkomwsiykqigmqca = '', string $aaceqemaqqeckueq = Constants::zmmsyimwiiaweocw) : string { return $this->call("\x67\145\164\x5f\144\141\163\150\x62\157\x61\162\x64\x5f\165\162\x6c", '', $ycoeoaakqyskgykq, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function ooksqgokuwcmoqcu($momcykaoccoymeig) : bool { return $this->call("\151\x73\137\141\x63\164\x69\166\145\137\163\151\x64\x65\x62\x61\x72", false, $momcykaoccoymeig); } public function esuiacmywcmmsmao($momcykaoccoymeig) : bool { return $this->call("\x64\171\x6e\x61\x6d\151\143\137\x73\151\x64\x65\142\x61\x72", false, $momcykaoccoymeig); } public function ymaywccaiscsmsik(array $ywmkwiwkosakssii = []) : string { return $this->call("\162\x65\147\151\x73\x74\x65\x72\137\x73\151\144\145\x62\x61\x72", false, $ywmkwiwkosakssii); } public function amqggwqseogkecwg($assameyusgwogmce, $owgumcsyqsamiemg = [], array $ywmkwiwkosakssii = []) { $this->call("\x74\150\x65\x5f\167\x69\144\147\145\x74", false, $assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii); } public function giuogmweiymywgus() { $this->call("\137\167\x70\x5f\x72\145\156\x64\x65\162\x5f\x74\x69\164\x6c\145\137\164\x61\x67"); } public function oqeqieqigwskaoks($ymqmyyeuycgmigyo) { return wp_create_nav_menu($ymqmyyeuycgmigyo); } public function kkawimmeccgmcawk($ewuukoycimkekouc) { return wp_get_nav_menu_object($ewuukoycimkekouc); } public function syeuyeikogukksam() : string { return get_the_archive_title(); } public function ucwagioskkwqgkmq() : string { return get_index_template(); } public function eocmoukyueksgeuk() : array { return get_nav_menu_locations(); } public function cwymaemaosauskko() : string { return category_description(); } public function sgqgswskkowaiqeq() : string { return tag_description(); } public function oykyuqgcqyasgeuw(bool $kugsomueokogcawo = true, string $yuwymayicwwqiske = '') : string { return single_cat_title($yuwymayicwwqiske, $kugsomueokogcawo); } public function ciiwwmaoykeuooma(bool $kugsomueokogcawo = true, string $yuwymayicwwqiske = '') : string { return single_tag_title($yuwymayicwwqiske, $kugsomueokogcawo); } public function musuokisgmmamoua($wiwcgykokegmceyk, ...$ywmkwiwkosakssii) { return add_theme_support($wiwcgykokegmceyk, ...$ywmkwiwkosakssii); } public function wieoiwogwmcwukom() : string { return get_the_archive_description(); } public function gkyiimkoysuawmuq(string $eomymqcmcwieomke) { return remove_menu_page($eomymqcmcwieomke); } public function mokkauciousseuge($smaiamkswqkisawm) : bool { return register_theme_directory($smaiamkswqkisawm); } public function yegcgmiiagikeqqy(string $qogsmwakwacwqogk = '') : string { return get_theme_file_path($qogsmwakwacwqogk); } public function ygokeyuugqiciuiu($wiwcgykokegmceyk, ...$ywmkwiwkosakssii) : bool { return current_theme_supports($wiwcgykokegmceyk, ...$ywmkwiwkosakssii); } public function uoieieeqeeowieyy(string $igscmsiuisqaqwkk, string $ukwokcuqauuosmoo) { register_nav_menu($igscmsiuisqaqwkk, $ukwokcuqauuosmoo); } public function ogciwyoqgciosgcw(string $uccyimuwqccawaaq = '', string $wcukkasieyuwiqwo = '') : WP_Theme { return wp_get_theme($uccyimuwqccawaaq, $wcukkasieyuwiqwo); } public function gskomckeekemaake(string $eomymqcmcwieomke, string $gcquyecwuesyqgqm) { return remove_submenu_page($eomymqcmcwieomke, $gcquyecwuesyqgqm); } public function mmkeekwmoemcwgew($cmwygeyygwqaemaq = '', $sqeykgyoooqysmca = "\x70\162\151\155\141\x72\171\x20\154\141\x72\147\x65", $ymqmyyeuycgmigyo = "\163\x75\x62\x6d\x69\x74", $yacouuuguuuegggc = true, $siquossayskcwkea = '') : string { return get_submit_button($cmwygeyygwqaemaq, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $yacouuuguuuegggc, $siquossayskcwkea); } public function mesaqgkuiqquyoaq($ywmkwiwkosakssii = []) : string { return wp_dropdown_categories($ywmkwiwkosakssii); } public function iyaokukyeukqokqe($cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim = '', $oeggggyoyacueimi = '', $kuuiuigeacouwmaa = null) : string { return add_menu_page($cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim, $oeggggyoyacueimi, $kuuiuigeacouwmaa); } public function qokeeagcgucqmgco($wgaiuiysuegayseo, $cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim = '', $kuuiuigeacouwmaa = null) : string { return add_submenu_page($wgaiuiysuegayseo, $cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim, $kuuiuigeacouwmaa); } public function kcqimgkamkyscsey($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $suaemuyiacqyugsm, $awcmekyiwwkeyisq = "\144\145\x66\x61\x75\154\x74", $ywmkwiwkosakssii = []) { add_settings_field($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $suaemuyiacqyugsm, $awcmekyiwwkeyisq, $ywmkwiwkosakssii); } public function sikqggwmmykuiymy(string $aokagokqyuysuksm, string $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $gcgsqcoqciockquc = null, string $mgkceomocowocqyo = Constants::ycusscwsoggmuweq, string $sqqewmoeaekuyyas = Constants::wikgqsqysyuoykse, array $eykyyaaomkcqyiyq = []) { add_meta_box($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $gcgsqcoqciockquc, $mgkceomocowocqyo, $sqqewmoeaekuyyas, $eykyyaaomkcqyiyq); } public function iaekyqikwgmkcsok(string $aokagokqyuysuksm, $gcgsqcoqciockquc = null, string $mgkceomocowocqyo = Constants::ycusscwsoggmuweq) { remove_meta_box($aokagokqyuysuksm, $gcgsqcoqciockquc, $mgkceomocowocqyo); } public function qggoeuwkeacoeksm(array $ywmkwiwkosakssii = []) : ?string { return get_search_form($ywmkwiwkosakssii); } public function wmakaaiqyiaemasw() : string { return wp_referer_field(false); } }

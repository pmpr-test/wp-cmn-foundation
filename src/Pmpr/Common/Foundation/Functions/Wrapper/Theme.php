<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1810bd5408             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Screen; use WP_Term; use WP_Theme; use WP_Widget; class Theme extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = "\x71\x75\x65\162\171\x5f\x74\x68\x65\x6d\145\163") { if (!function_exists("\164\x68\x65\155\145\x73\137\x61\x70\151")) { include_once ABSPATH . "\167\160\55\141\x64\x6d\151\x6e\57\x69\156\x63\154\165\x64\x65\163\x2f\164\x68\145\x6d\x65\56\x70\x68\x70"; } return themes_api($aiamqeawckcsuaou, $ywmkwiwkosakssii); } public function oequuauskyumwyau() : ?WP_Screen { return $this->call("\x67\x65\x74\x5f\x63\x75\162\x72\145\x6e\164\x5f\163\143\162\x65\145\156", null); } public function wyucwisgamaqoiey(string $iiaeaqeesosyaiwy) : ?WP_Screen { return $this->call("\x63\157\156\x76\145\162\x74\x5f\x74\x6f\137\x73\143\x72\x65\x65\x6e", null, $iiaeaqeesosyaiwy); } public function wewicgosooacoayq($ywmkwiwkosakssii) { return paginate_links($ywmkwiwkosakssii); } public function gqesusmmigggsqai() : bool { return is_rtl(); } public function sqiwaoiciieomeyo($assameyusgwogmce) { $this->call("\x72\x65\x67\x69\x73\x74\x65\x72\137\167\x69\x64\147\145\164", false, $assameyusgwogmce); } public function ycgmicmqesqeymuw($gssymikmqawqwuqe = 1, bool $sekkmwqwqwcayiwg = true) : string { return get_pagenum_link($gssymikmqawqwuqe, $sekkmwqwqwcayiwg); } public function ewgquygaowykwacc($aiamqeawckcsuaou = -1, string $ymqmyyeuycgmigyo = "\x5f\x77\x70\156\x6f\156\x63\145", bool $emaumsqyoyqcimcm = true, bool $koaqeegoeiaiccse = true) : string { return (string) $this->call("\167\x70\137\156\x6f\156\143\145\137\x66\151\x65\x6c\x64", '', $aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm, $koaqeegoeiaiccse); } public function ewcokmoyomeywmkg($ycoeoaakqyskgykq = 0, string $mkomwsiykqigmqca = '', string $aaceqemaqqeckueq = Constants::zmmsyimwiiaweocw) : string { return $this->call("\x67\x65\x74\x5f\x64\141\163\x68\x62\x6f\141\162\144\x5f\165\162\154", '', $ycoeoaakqyskgykq, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function ooksqgokuwcmoqcu($momcykaoccoymeig) : bool { return $this->call("\x69\163\x5f\141\x63\x74\x69\x76\x65\137\163\151\144\145\x62\x61\x72", false, $momcykaoccoymeig); } public function esuiacmywcmmsmao($momcykaoccoymeig) : bool { return $this->call("\144\x79\x6e\141\155\x69\x63\137\163\151\x64\x65\x62\x61\162", false, $momcykaoccoymeig); } public function ymaywccaiscsmsik(array $ywmkwiwkosakssii = []) : string { return $this->call("\x72\x65\x67\x69\163\x74\x65\x72\x5f\163\x69\144\x65\142\141\x72", false, $ywmkwiwkosakssii); } public function amqggwqseogkecwg($assameyusgwogmce, $owgumcsyqsamiemg = [], array $ywmkwiwkosakssii = []) { $this->call("\164\x68\x65\137\x77\x69\144\x67\x65\x74", false, $assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii); } public function giuogmweiymywgus() { $this->call("\x5f\167\160\137\162\x65\x6e\144\145\162\137\x74\151\164\x6c\x65\137\164\x61\x67"); } public function oqeqieqigwskaoks($ymqmyyeuycgmigyo) { return wp_create_nav_menu($ymqmyyeuycgmigyo); } public function kkawimmeccgmcawk($ewuukoycimkekouc) { return wp_get_nav_menu_object($ewuukoycimkekouc); } public function syeuyeikogukksam() : string { return get_the_archive_title(); } public function ucwagioskkwqgkmq() : string { return get_index_template(); } public function eocmoukyueksgeuk() : array { return get_nav_menu_locations(); } public function cwymaemaosauskko() : string { return category_description(); } public function sgqgswskkowaiqeq() : string { return tag_description(); } public function oykyuqgcqyasgeuw(bool $kugsomueokogcawo = true, string $yuwymayicwwqiske = '') : string { return single_cat_title($yuwymayicwwqiske, $kugsomueokogcawo); } public function ciiwwmaoykeuooma(bool $kugsomueokogcawo = true, string $yuwymayicwwqiske = '') : string { return single_tag_title($yuwymayicwwqiske, $kugsomueokogcawo); } public function musuokisgmmamoua($wiwcgykokegmceyk, ...$ywmkwiwkosakssii) { return add_theme_support($wiwcgykokegmceyk, ...$ywmkwiwkosakssii); } public function wieoiwogwmcwukom() : string { return get_the_archive_description(); } public function gkyiimkoysuawmuq(string $eomymqcmcwieomke) { return remove_menu_page($eomymqcmcwieomke); } public function mokkauciousseuge($smaiamkswqkisawm) : bool { return register_theme_directory($smaiamkswqkisawm); } public function yegcgmiiagikeqqy(string $qogsmwakwacwqogk = '') : string { return get_theme_file_path($qogsmwakwacwqogk); } public function ygokeyuugqiciuiu($wiwcgykokegmceyk, ...$ywmkwiwkosakssii) : bool { return current_theme_supports($wiwcgykokegmceyk, ...$ywmkwiwkosakssii); } public function uoieieeqeeowieyy(string $igscmsiuisqaqwkk, string $ukwokcuqauuosmoo) { register_nav_menu($igscmsiuisqaqwkk, $ukwokcuqauuosmoo); } public function ogciwyoqgciosgcw(string $uccyimuwqccawaaq = '', string $wcukkasieyuwiqwo = '') : WP_Theme { return wp_get_theme($uccyimuwqccawaaq, $wcukkasieyuwiqwo); } public function gskomckeekemaake(string $eomymqcmcwieomke, string $gcquyecwuesyqgqm) { return remove_submenu_page($eomymqcmcwieomke, $gcquyecwuesyqgqm); } public function mmkeekwmoemcwgew($cmwygeyygwqaemaq = '', $sqeykgyoooqysmca = "\160\x72\x69\x6d\141\x72\x79\x20\x6c\141\x72\147\x65", $ymqmyyeuycgmigyo = "\163\x75\142\x6d\151\164", $yacouuuguuuegggc = true, $siquossayskcwkea = '') : string { return get_submit_button($cmwygeyygwqaemaq, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $yacouuuguuuegggc, $siquossayskcwkea); } public function mesaqgkuiqquyoaq($ywmkwiwkosakssii = []) : string { return wp_dropdown_categories($ywmkwiwkosakssii); } public function iyaokukyeukqokqe($cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim = '', $oeggggyoyacueimi = '', $kuuiuigeacouwmaa = null) : string { return add_menu_page($cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim, $oeggggyoyacueimi, $kuuiuigeacouwmaa); } public function qokeeagcgucqmgco($wgaiuiysuegayseo, $cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim = '', $kuuiuigeacouwmaa = null) : string { return add_submenu_page($wgaiuiysuegayseo, $cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $akemggqscawwikim, $kuuiuigeacouwmaa); } public function kcqimgkamkyscsey($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $suaemuyiacqyugsm, $awcmekyiwwkeyisq = "\x64\145\x66\141\x75\154\164", $ywmkwiwkosakssii = []) { add_settings_field($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $suaemuyiacqyugsm, $awcmekyiwwkeyisq, $ywmkwiwkosakssii); } public function sikqggwmmykuiymy(string $aokagokqyuysuksm, string $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $gcgsqcoqciockquc = null, string $mgkceomocowocqyo = Constants::ycusscwsoggmuweq, string $sqqewmoeaekuyyas = Constants::wikgqsqysyuoykse, array $eykyyaaomkcqyiyq = []) { add_meta_box($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $gcgsqcoqciockquc, $mgkceomocowocqyo, $sqqewmoeaekuyyas, $eykyyaaomkcqyiyq); } public function iaekyqikwgmkcsok(string $aokagokqyuysuksm, $gcgsqcoqciockquc = null, string $mgkceomocowocqyo = Constants::ycusscwsoggmuweq) { remove_meta_box($aokagokqyuysuksm, $gcgsqcoqciockquc, $mgkceomocowocqyo); } public function qggoeuwkeacoeksm(array $ywmkwiwkosakssii = []) : ?string { return get_search_form($ywmkwiwkosakssii); } }

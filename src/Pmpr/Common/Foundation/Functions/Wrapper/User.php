<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d17086e3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_Role; use WP_Roles; use WP_User; class User extends Common { public function qguyekasycmwomao() { wp_clear_auth_cookie(); } public function sisqmmikmeuogcou($mkucggyaiaukqoce) { return get_password_reset_key($mkucggyaiaukqoce); } public function uyoiiusukoigeusy(string $owaiikyuwwwmswgc) { return email_exists($owaiikyuwwwmswgc); } public function wskwomgayscmiwqy(string $yewiaiaauukwsgku) { return username_exists($yewiaiaauukwsgku); } public function sqaoqqooqowugmcw($mkucggyaiaukqoce, $ieaqqakymecswcsu) { reset_password($mkucggyaiaukqoce, $ieaqqakymecswcsu); } public function gesyeyeaqmiskuoo(string $yewiaiaauukwsgku, string $qqwegysogaocgeww, string $owaiikyuwwwmswgc = '') { return wp_create_user($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); } public function hmisgsqkawsgmqou(array $yimossqeoaoowsoy = [], $ayqkakqucqqgiemy = '') { return wp_signon($yimossqeoaoowsoy, $ayqkakqucqqgiemy); } public function aiamgkiewwakoegy() { wp_logout(); } public function kkkuqwaqakeaykmo($aokagokqyuysuksm, string $ymqmyyeuycgmigyo = '') : WP_User { return wp_set_current_user($aokagokqyuysuksm, $ymqmyyeuycgmigyo); } public function qsgmugaqymqgqayy($ycoeoaakqyskgykq, $occoggmsikycewqg = false, $bwiggowuuukmwoam = '', $mgegoogckgsumooq = '') { wp_set_auth_cookie($ycoeoaakqyskgykq, $occoggmsikycewqg, $bwiggowuuukmwoam, $mgegoogckgsumooq); } public function qykgecyqwasqwoek($ymqmyyeuycgmigyo, string $mokawwccycoiqeka = Constants::wikgqsqysyuoykse) : ?string { return translate_user_role($ymqmyyeuycgmigyo, $mokawwccycoiqeka); } public function myuiaumaacseywog(int $ykiwomimkkuiigoq = 12, bool $mkikcagmuauoykau = true, bool $iksaqkycekkouqus = false) { return wp_generate_password($ykiwomimkkuiigoq, $mkikcagmuauoykau, $iksaqkycekkouqus); } public function ygmcsmegcysyeoss(?string $ykeeyqcewuccwkeo = Constants::kyakumqgcsaskweq, $gciiwqigweskkmgs = null) : array { return count_users($ykeeyqcewuccwkeo, $gciiwqigweskkmgs); } public function ogueawoqwakkosau($ycoeoaakqyskgykq, $sciomagaqmgggsiu = Constants::mswoacegomcucaik, bool $acuaaumqecywosgs = false) : string { return count_user_posts($ycoeoaakqyskgykq, $sciomagaqmgggsiu, $acuaaumqecywosgs); } public function secqmksoyausymio(string $oeucsuyqysaciasy, string $meqocwsecsywiiqs, array $sksmomeiauyqaomi = []) : ?WP_Role { return add_role($oeucsuyqysaciasy, $meqocwsecsywiiqs, $sksmomeiauyqaomi); } public function gcegsuoqiicquosg(string $oeucsuyqysaciasy) { remove_role($oeucsuyqysaciasy); } public function ksgkoukcicwkkaum() : bool { if (!function_exists('is_user_logged_in')) { include_once ABSPATH . 'wp-includes/pluggable.php'; } return is_user_logged_in(); } public function update($icwicymcioeyeyek) { return wp_update_user($icwicymcioeyeyek); } public function woimamkkeyoyauoa($aiowsaccomcoikus, $eqgoocgaqwqcimie) { return get_user_by($aiowsaccomcoikus, $eqgoocgaqwqcimie); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { return get_users($ywmkwiwkosakssii); } public function kccaogemggeogags() : bool { return user_can_richedit(); } public function iyouigcsiacgwksc($mkucggyaiaukqoce = null) : string { return get_user_locale($mkucggyaiaukqoce); } public function yyykkcyiksewsoqy($mkucggyaiaukqoce) : ?string { return get_edit_user_link($mkucggyaiaukqoce); } public function ekqiayaoseqcygmo($mkucggyaiaukqoce) : ?string { return get_edit_profile_url($mkucggyaiaukqoce); } public function ogcwgigqwycqswms($sqwmoeogqwooeukc, $oiegiwogmwmawkeo = 64, $ggauoeuaesiymgee = '', $gkykacccamuwowwc = '', $ywmkwiwkosakssii = []) { return get_avatar($sqwmoeogqwooeukc, $oiegiwogmwmawkeo, $ggauoeuaesiymgee, $gkykacccamuwowwc, $ywmkwiwkosakssii); } public function qyeguewwsmosqcwc() : int { return get_current_user_id(); } public function immcwcemcmyosyoo() : ?WP_User { return wp_get_current_user(); } public function seyyiqmgwymyumoq($ycoeoaakqyskgykq) { return get_userdata($ycoeoaakqyskgykq); } public function smqukgcyacswysqa($uusmaiomayssaecw, $mkucggyaiaukqoce = null, $eqgoocgaqwqcimie = '') { return delete_user_meta($mkucggyaiaukqoce, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce = null, $cuyooiakswegosog = true) { return get_user_meta($mkucggyaiaukqoce, $uusmaiomayssaecw, $cuyooiakswegosog); } public function aeymcyaqkmmukomc($mkucggyaiaukqoce = null, $ywmkwiwkosakssii = []) { return get_avatar_url($mkucggyaiaukqoce, $ywmkwiwkosakssii); } public function giiuwsmyumqwwiyq($omkysikckkcieckq, $mkucggyaiaukqoce = 0) { return get_user_option($omkysikckkcieckq, $mkucggyaiaukqoce); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mkucggyaiaukqoce = null, $omasqoksqewuwwkq = true) { return add_user_meta($mkucggyaiaukqoce, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq); } public function ksmqawcowkmegigw($uusmaiomayssaecw = null, $eqgoocgaqwqcimie = '', $mkucggyaiaukqoce = null, $swwmymiaiosiyqis = '') { return update_user_meta($mkucggyaiaukqoce, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis); } public function scmcyesmmikkucie(string $eogowigeyucaauig = Constants::gewmeskawiqikkoc, ...$ywmkwiwkosakssii) : bool { return current_user_can($eogowigeyucaauig, ...$ywmkwiwkosakssii); } public function yciaosuiyeieceug($mkucggyaiaukqoce = null, string $eogowigeyucaauig = Constants::gewmeskawiqikkoc, ...$ywmkwiwkosakssii) : bool { return user_can($mkucggyaiaukqoce, $eogowigeyucaauig, ...$ywmkwiwkosakssii); } public function gesoiqwieuaqaaqw() : string { return wp_login_url(); } public function oqguicgeicwmikuy() : string { return wp_registration_url(); } public function aqciiewawiwecoou(string $oeucsuyqysaciasy) : ?WP_Role { return get_role($oeucsuyqysaciasy); } public function yksywgmucwascgwk() : WP_Roles { return wp_roles(); } public function eeqeqgakemisueqc(?string $gwqgmkqcgwwmweom = '') : string { return wp_logout_url($gwqgmkqcgwwmweom); } public function eueweuyekeeaacgs($oeaigciskewsiiec) { return wp_insert_user($oeaigciskewsiiec); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c8341d2d030             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Response; class Server extends Common { public function yiqagusumqeyaegq($gwgqcsmomamyqsmy, $aiamqeawckcsuaou) { return wp_verify_nonce($gwgqcsmomamyqsmy, $aiamqeawckcsuaou); } public function wymyeyweagqomiim() : string { return $this->call('is_ssl', false); } public function ikkqcccaweckukug($aiamqeawckcsuaou = -1) { return wp_create_nonce($aiamqeawckcsuaou); } public function keguiwkaiweywekc() { return $this->call('wp_get_referer', false); } public function ymsasggoakmgguqk() : string { return (string) $this->call('rest_get_url_prefix', 'wp-json'); } public function iauaguqyycgacmks(string $aiieyweysaukqemc, string $cociqcumeacycoeq, array $ywmkwiwkosakssii = array(), bool $egomoiciasmiesww = false) : bool { return (bool) $this->call('register_rest_route', false, $aiieyweysaukqemc, $cociqcumeacycoeq, $ywmkwiwkosakssii, $egomoiciasmiesww); } public function mwqqckqokawmwoau($keccaugmemegoimu) { return $this->call('rest_ensure_response', new WP_Error(), $keccaugmemegoimu); } public function acewksgasymgwmcy(string $mkomwsiykqigmqca = '', string $aaceqemaqqeckueq = Constants::zmmsyimwiiaweocw) : string { return $this->call('admin_url', false, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function gsaomcwyacqcumaa() : bool { return $this->call('is_multisite', false); } public function gmigwwwmwemyaayy(string $mkomwsiykqigmqca = '', ?string $aaceqemaqqeckueq = null) : string { return $this->call('home_url', '', $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function auksikwsewaywikq(?int $usmowgaawqgacwgc = null, string $mkomwsiykqigmqca = '', ?string $aaceqemaqqeckueq = null) : string { return $this->call('get_home_url', '', $usmowgaawqgacwgc, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function ieokeoyugcmwuumq(string $mkomwsiykqigmqca = '', ?string $aaceqemaqqeckueq = null) : string { return $this->call('site_url', '', $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function imaeaskagikouuey(string $gqgemcmoicmgaqie = '') : string { return $this->call('get_search_link', '', $gqgemcmoicmgaqie); } public function qasciyckimeascmg(?int $usmowgaawqgacwgc = null, string $mkomwsiykqigmqca = '', ?string $aaceqemaqqeckueq = null) : string { return $this->call('get_site_url', '', $usmowgaawqgacwgc, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function emwgumwwmcegmusi() { return $this->call('apache_request_headers', false); } public function sqymqmaaoyguqqsq(string $eeamcawaiqocomwy, ?string $aaqqkgyougeiueyq = null) : string { return $this->call('set_url_scheme', $eeamcawaiqocomwy, $eeamcawaiqocomwy, $aaqqkgyougeiueyq); } public function gwqgmkqcgwwmweom(string $igscmsiuisqaqwkk, int $iueymcwwscwqkiyq = 302, string $ecosyeewseoaqcsq = 'WordPress') : bool { return $this->call('wp_redirect', false, $igscmsiuisqaqwkk, $iueymcwwscwqkiyq, $ecosyeewseoaqcsq); } public function cquikcuwossiessu(string $igscmsiuisqaqwkk, int $iueymcwwscwqkiyq = 302, string $ecosyeewseoaqcsq = 'WordPress') : bool { return $this->call('wp_safe_redirect', false, $igscmsiuisqaqwkk, $iueymcwwscwqkiyq, $ecosyeewseoaqcsq); } public function osiemwwsiacmicwk(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_get($eeamcawaiqocomwy, $ywmkwiwkosakssii); } public function awemwqyugsqgcsyu(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_safe_remote_get($eeamcawaiqocomwy, $ywmkwiwkosakssii); } public function iyysycaqqccsmysy(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_post($eeamcawaiqocomwy, $ywmkwiwkosakssii); } public function ykmyiouokskyomii($keccaugmemegoimu) : string { return wp_remote_retrieve_body($keccaugmemegoimu); } public function aywwmqkqawocceuc($keccaugmemegoimu) { return wp_remote_retrieve_response_code($keccaugmemegoimu); } public function mquqkouuagswyuuk($aiamqeawckcsuaou, string $seauiwyeoycowegg = Constants::icwieiwoqeocywss, bool $gqgoqaeswmcwagoi = false) { return check_ajax_referer($aiamqeawckcsuaou, $seauiwyeoycowegg, $gqgoqaeswmcwagoi); } public function ymwisceuuaiccayq($aiamqeawckcsuaou, string $seauiwyeoycowegg = Constants::icwieiwoqeocywss) { return check_admin_referer($aiamqeawckcsuaou, $seauiwyeoycowegg); } public function ycwuiqwgoquwcioq($icwicymcioeyeyek = null, $suaeicueywgcooag = null, int $qiouiwasaauyaaue = 0) { wp_send_json_success($icwicymcioeyeyek, $suaeicueywgcooag, $qiouiwasaauyaaue); } public function gsmogeawssggkqcg($icwicymcioeyeyek = null, $suaeicueywgcooag = null, int $qiouiwasaauyaaue = 0) { wp_send_json_error($icwicymcioeyeyek, $suaeicueywgcooag, $qiouiwasaauyaaue); } }

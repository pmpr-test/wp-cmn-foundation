<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671248edea456             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Response; class Server extends Common { public function yiqagusumqeyaegq($gwgqcsmomamyqsmy, $aiamqeawckcsuaou) { return wp_verify_nonce($gwgqcsmomamyqsmy, $aiamqeawckcsuaou); } public function wymyeyweagqomiim() : string { return $this->call("\x69\x73\137\163\163\x6c", false); } public function ikkqcccaweckukug($aiamqeawckcsuaou = -1) { return wp_create_nonce($aiamqeawckcsuaou); } public function keguiwkaiweywekc() { return $this->call("\x77\160\137\x67\x65\164\x5f\x72\x65\146\145\162\145\x72", false); } public function ymsasggoakmgguqk() : string { return (string) $this->call("\162\145\x73\x74\137\147\145\164\x5f\165\162\x6c\137\x70\162\x65\146\x69\170", "\167\160\55\152\x73\x6f\x6e"); } public function iauaguqyycgacmks(string $aiieyweysaukqemc, string $cociqcumeacycoeq, array $ywmkwiwkosakssii = array(), bool $egomoiciasmiesww = false) : bool { return (bool) $this->call("\x72\x65\x67\x69\x73\x74\x65\162\137\162\145\x73\164\137\162\x6f\x75\x74\145", false, $aiieyweysaukqemc, $cociqcumeacycoeq, $ywmkwiwkosakssii, $egomoiciasmiesww); } public function mwqqckqokawmwoau($keccaugmemegoimu) { return $this->call("\162\145\x73\x74\x5f\x65\x6e\163\x75\x72\x65\x5f\162\x65\163\x70\x6f\156\x73\x65", new WP_Error(), $keccaugmemegoimu); } public function acewksgasymgwmcy(string $mkomwsiykqigmqca = '', string $aaceqemaqqeckueq = Constants::zmmsyimwiiaweocw) : string { return $this->call("\141\144\155\x69\156\x5f\165\162\154", false, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function gsaomcwyacqcumaa() : bool { return $this->call("\151\163\137\x6d\165\x6c\164\151\x73\151\x74\145", false); } public function gmigwwwmwemyaayy(string $mkomwsiykqigmqca = '', ?string $aaceqemaqqeckueq = null) : string { return $this->call("\150\x6f\155\x65\137\x75\162\x6c", '', $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function auksikwsewaywikq(?int $usmowgaawqgacwgc = null, string $mkomwsiykqigmqca = '', ?string $aaceqemaqqeckueq = null) : string { return $this->call("\147\145\x74\x5f\x68\x6f\x6d\x65\137\x75\162\x6c", '', $usmowgaawqgacwgc, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function ieokeoyugcmwuumq(string $mkomwsiykqigmqca = '', ?string $aaceqemaqqeckueq = null) : string { return $this->call("\x73\x69\164\x65\137\165\x72\154", '', $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function qasciyckimeascmg(?int $usmowgaawqgacwgc = null, string $mkomwsiykqigmqca = '', ?string $aaceqemaqqeckueq = null) : string { return $this->call("\x67\145\164\137\x73\x69\x74\x65\137\165\162\154", '', $usmowgaawqgacwgc, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function emwgumwwmcegmusi() { return $this->call("\141\x70\141\x63\x68\145\x5f\x72\x65\161\x75\145\163\164\x5f\x68\x65\x61\144\x65\x72\x73", false); } public function sqymqmaaoyguqqsq(string $eeamcawaiqocomwy, ?string $aaqqkgyougeiueyq = null) : string { return $this->call("\x73\145\x74\137\x75\x72\154\x5f\x73\x63\x68\x65\155\x65", $eeamcawaiqocomwy, $eeamcawaiqocomwy, $aaqqkgyougeiueyq); } public function gwqgmkqcgwwmweom(string $igscmsiuisqaqwkk, int $iueymcwwscwqkiyq = 302, string $ecosyeewseoaqcsq = "\127\x6f\162\144\120\162\145\163\x73") : bool { return $this->call("\167\x70\x5f\162\145\x64\x69\x72\x65\143\164", false, $igscmsiuisqaqwkk, $iueymcwwscwqkiyq, $ecosyeewseoaqcsq); } public function cquikcuwossiessu(string $igscmsiuisqaqwkk, int $iueymcwwscwqkiyq = 302, string $ecosyeewseoaqcsq = "\x57\x6f\x72\144\120\x72\145\163\x73") : bool { return $this->call("\167\x70\137\163\x61\x66\x65\x5f\x72\x65\x64\151\162\145\143\x74", false, $igscmsiuisqaqwkk, $iueymcwwscwqkiyq, $ecosyeewseoaqcsq); } public function osiemwwsiacmicwk(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_get($eeamcawaiqocomwy, $ywmkwiwkosakssii); } public function awemwqyugsqgcsyu(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_safe_remote_get($eeamcawaiqocomwy, $ywmkwiwkosakssii); } public function iyysycaqqccsmysy(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_post($eeamcawaiqocomwy, $ywmkwiwkosakssii); } public function ykmyiouokskyomii($keccaugmemegoimu) : string { return wp_remote_retrieve_body($keccaugmemegoimu); } public function aywwmqkqawocceuc($keccaugmemegoimu) { return wp_remote_retrieve_response_code($keccaugmemegoimu); } public function mquqkouuagswyuuk($aiamqeawckcsuaou, string $seauiwyeoycowegg = Constants::icwieiwoqeocywss, bool $gqgoqaeswmcwagoi = false) { return check_ajax_referer($aiamqeawckcsuaou, $seauiwyeoycowegg, $gqgoqaeswmcwagoi); } public function ymwisceuuaiccayq($aiamqeawckcsuaou, string $seauiwyeoycowegg = Constants::icwieiwoqeocywss) { return check_admin_referer($aiamqeawckcsuaou, $seauiwyeoycowegg); } public function ycwuiqwgoquwcioq($icwicymcioeyeyek = null, $suaeicueywgcooag = null, int $qiouiwasaauyaaue = 0) { wp_send_json_success($icwicymcioeyeyek, $suaeicueywgcooag, $qiouiwasaauyaaue); } public function gsmogeawssggkqcg($icwicymcioeyeyek = null, $suaeicueywgcooag = null, int $qiouiwasaauyaaue = 0) { wp_send_json_error($icwicymcioeyeyek, $suaeicueywgcooag, $qiouiwasaauyaaue); } }

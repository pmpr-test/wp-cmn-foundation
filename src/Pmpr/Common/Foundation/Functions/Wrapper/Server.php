<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67051cac7bda7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; use WP_HTTP_Response; use WP_REST_Response; class Server extends Common { public function yiqagusumqeyaegq($gwgqcsmomamyqsmy, $aiamqeawckcsuaou) { return wp_verify_nonce($gwgqcsmomamyqsmy, $aiamqeawckcsuaou); } public function wymyeyweagqomiim() : string { return $this->call("\151\163\137\x73\x73\154", false); } public function ikkqcccaweckukug($aiamqeawckcsuaou = -1) { return wp_create_nonce($aiamqeawckcsuaou); } public function keguiwkaiweywekc() { return $this->call("\x77\x70\137\147\x65\x74\x5f\162\145\146\145\x72\145\162", false); } public function ymsasggoakmgguqk() : string { return (string) $this->call("\162\145\x73\x74\137\x67\145\x74\137\x75\162\x6c\x5f\160\162\x65\x66\x69\170", "\x77\x70\55\152\163\157\156"); } public function iauaguqyycgacmks(string $aiieyweysaukqemc, string $cociqcumeacycoeq, array $ywmkwiwkosakssii = array(), bool $egomoiciasmiesww = false) : bool { return (bool) $this->call("\162\x65\x67\x69\x73\164\145\162\137\x72\x65\x73\164\x5f\162\x6f\x75\x74\145", false, $aiieyweysaukqemc, $cociqcumeacycoeq, $ywmkwiwkosakssii, $egomoiciasmiesww); } public function mwqqckqokawmwoau($keccaugmemegoimu) { return $this->call("\162\145\x73\164\x5f\x65\156\x73\x75\162\145\x5f\162\145\163\x70\x6f\156\x73\x65", new WP_Error(), $keccaugmemegoimu); } public function acewksgasymgwmcy(string $mkomwsiykqigmqca = '', string $aaceqemaqqeckueq = Constants::zmmsyimwiiaweocw) : string { return $this->call("\141\144\155\151\156\137\165\x72\154", false, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function gsaomcwyacqcumaa() : bool { return $this->call("\151\163\137\x6d\x75\154\x74\151\163\x69\164\145", false); } public function gmigwwwmwemyaayy(string $mkomwsiykqigmqca = '', ?string $aaceqemaqqeckueq = null) : string { return $this->call("\x68\x6f\x6d\x65\137\x75\162\x6c", '', $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function auksikwsewaywikq(?int $usmowgaawqgacwgc = null, string $mkomwsiykqigmqca = '', ?string $aaceqemaqqeckueq = null) : string { return $this->call("\147\145\x74\137\x68\x6f\x6d\x65\137\165\162\154", '', $usmowgaawqgacwgc, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function ieokeoyugcmwuumq(string $mkomwsiykqigmqca = '', ?string $aaceqemaqqeckueq = null) : string { return $this->call("\x73\x69\164\x65\137\165\x72\154", '', $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function qasciyckimeascmg(?int $usmowgaawqgacwgc = null, string $mkomwsiykqigmqca = '', ?string $aaceqemaqqeckueq = null) : string { return $this->call("\x67\x65\x74\x5f\163\x69\x74\145\x5f\165\162\154", '', $usmowgaawqgacwgc, $mkomwsiykqigmqca, $aaceqemaqqeckueq); } public function emwgumwwmcegmusi() { return $this->call("\x61\160\141\143\150\x65\137\x72\x65\x71\165\145\x73\164\137\x68\145\141\x64\x65\162\x73", false); } public function sqymqmaaoyguqqsq(string $eeamcawaiqocomwy, ?string $aaqqkgyougeiueyq = null) : string { return $this->call("\163\x65\164\x5f\165\x72\x6c\137\x73\x63\x68\145\x6d\145", $eeamcawaiqocomwy, $eeamcawaiqocomwy, $aaqqkgyougeiueyq); } public function gwqgmkqcgwwmweom(string $igscmsiuisqaqwkk, int $iueymcwwscwqkiyq = 302, string $ecosyeewseoaqcsq = "\127\157\162\144\x50\x72\145\163\163") : bool { return $this->call("\167\160\137\162\145\144\151\162\145\143\x74", false, $igscmsiuisqaqwkk, $iueymcwwscwqkiyq, $ecosyeewseoaqcsq); } public function cquikcuwossiessu(string $igscmsiuisqaqwkk, int $iueymcwwscwqkiyq = 302, string $ecosyeewseoaqcsq = "\x57\157\162\144\x50\162\145\163\x73") : bool { return $this->call("\167\160\x5f\x73\x61\146\x65\x5f\x72\x65\x64\x69\162\x65\143\x74", false, $igscmsiuisqaqwkk, $iueymcwwscwqkiyq, $ecosyeewseoaqcsq); } public function osiemwwsiacmicwk(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_get($eeamcawaiqocomwy, $ywmkwiwkosakssii); } public function awemwqyugsqgcsyu(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_safe_remote_get($eeamcawaiqocomwy, $ywmkwiwkosakssii); } public function iyysycaqqccsmysy(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_post($eeamcawaiqocomwy, $ywmkwiwkosakssii); } public function ykmyiouokskyomii($keccaugmemegoimu) : string { return wp_remote_retrieve_body($keccaugmemegoimu); } public function aywwmqkqawocceuc($keccaugmemegoimu) { return wp_remote_retrieve_response_code($keccaugmemegoimu); } public function mquqkouuagswyuuk($aiamqeawckcsuaou, string $seauiwyeoycowegg = Constants::icwieiwoqeocywss, bool $gqgoqaeswmcwagoi = false) { return check_ajax_referer($aiamqeawckcsuaou, $seauiwyeoycowegg, $gqgoqaeswmcwagoi); } public function ymwisceuuaiccayq($aiamqeawckcsuaou, string $seauiwyeoycowegg = Constants::icwieiwoqeocywss) { return check_admin_referer($aiamqeawckcsuaou, $seauiwyeoycowegg); } public function ycwuiqwgoquwcioq($icwicymcioeyeyek = null, $suaeicueywgcooag = null, int $qiouiwasaauyaaue = 0) { wp_send_json_success($icwicymcioeyeyek, $suaeicueywgcooag, $qiouiwasaauyaaue); } public function gsmogeawssggkqcg($icwicymcioeyeyek = null, $suaeicueywgcooag = null, int $qiouiwasaauyaaue = 0) { wp_send_json_error($icwicymcioeyeyek, $suaeicueywgcooag, $qiouiwasaauyaaue); } }

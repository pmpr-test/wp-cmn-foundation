<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d0192bbd7b2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; abstract class Common extends Container { protected string $name = ''; public function __construct() { if (!$this->aakmagwggmkoiiyu()) { $this->name = $this->caokeucsksukesyo()->owgcciayoweymuws()->sggauymmqugqouay($this); } parent::__construct(); } public function aakmagwggmkoiiyu() : string { return $this->name; } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("pr_admin_get_{$this->aakmagwggmkoiiyu()}", [$this, 'ymsusowmeoqesoqq']); } public final function ymsusowmeoqesoqq() { $icwicymcioeyeyek = $this->cikaumomcgwkmsey(); try { $sogksuscggsicmac = $this->maewiqmcygmeuaso($icwicymcioeyeyek); } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } $sogksuscggsicmac = $this->ocksiywmkyaqseou("ajax_get_{$this->aakmagwggmkoiiyu()}_result", $sogksuscggsicmac, $icwicymcioeyeyek); $this->imkyucqsciqykkee($this->caqiimmagsussgeq($sogksuscggsicmac)); } public final function imkyucqsciqykkee($qeiakyocuggicwsy = []) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (is_array($qeiakyocuggicwsy)) { $uuyoeicyoayimaoa = $this->omkaowmygoqwsywq(); $suaemuyiacqyugsm = absint($eiicaiwgqkgsekce->ayueggmoqeeukqmq(Constants::imywcsggckkcywgk, 1)); $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1); $gaeqamemwmwsyukm = count($qeiakyocuggicwsy); $keccaugmemegoimu = ['results' => $qeiakyocuggicwsy, 'more_results' => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq]; } else { $keccaugmemegoimu = $qeiakyocuggicwsy; } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu); } public final function eqawqeqeguyuiage($igqsaukqcqscimok) : array { $icwicymcioeyeyek = $this->ooyiwkyooyaiqumk($igqsaukqcqscimok); $icwicymcioeyeyek[Constants::ssmskyqgcmeiayco] = $this->uyyawwaqygsagymg($igqsaukqcqscimok); return [Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::TEXT => $this->keaewwiqiewaaigy($igqsaukqcqscimok), Constants::ciyoccqkiamemcmm => $this->muycisweeuoquemg($igqsaukqcqscimok)]; } public final function caqiimmagsussgeq(array $oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $sogksuscggsicmac[$this->muycisweeuoquemg($igqsaukqcqscimok)] = $this->eqawqeqeguyuiage($igqsaukqcqscimok); } return $sogksuscggsicmac; } public function ooyiwkyooyaiqumk($igqsaukqcqscimok) : array { return $this->ocksiywmkyaqseou("ajax_admin_get_{$this->aakmagwggmkoiiyu()}_extra_data", [], $igqsaukqcqscimok); } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::gouqcwikiiygyasc, ''); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, ''); } public function uyyawwaqygsagymg($igqsaukqcqscimok) : string { $qqscaoyqikuyeoaw = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uwceyikaaaqgkkee, Constants::gawckqioqeowggww); return $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu() . "/{$qqscaoyqikuyeoaw}", $this->rsysgcucogueguuk($igqsaukqcqscimok, $qqscaoyqikuyeoaw)); } public function omkaowmygoqwsywq() : int { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { return (array) $igqsaukqcqscimok; } public final function cikaumomcgwkmsey() : array { $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($_POST, [Constants::squoamkioomemiyi => [], Constants::meieskyuuegwwcsy => [], Constants::ciyoccqkiamemcmm => false, Constants::yayciqueeakqwese => '', Constants::kicoscymgmgqeqgy => false, Constants::uwceyikaaaqgkkee => Constants::gawckqioqeowggww]); $gqgemcmoicmgaqie = $icwicymcioeyeyek[Constants::meieskyuuegwwcsy]; if (is_string($gqgemcmoicmgaqie)) { $gqgemcmoicmgaqie = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($gqgemcmoicmgaqie); } if (!is_array($gqgemcmoicmgaqie)) { $gqgemcmoicmgaqie = []; } $icwicymcioeyeyek[Constants::meieskyuuegwwcsy] = $gqgemcmoicmgaqie; if (is_string($icwicymcioeyeyek[Constants::ciyoccqkiamemcmm])) { $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = [$icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]]; } return $icwicymcioeyeyek; } public abstract function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array; }

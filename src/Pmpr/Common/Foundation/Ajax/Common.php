<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6796bb8ecec23             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; abstract class Common extends Container { protected string $name = ''; public function __construct() { if (!$this->aakmagwggmkoiiyu()) { $this->name = $this->caokeucsksukesyo()->owgcciayoweymuws()->sggauymmqugqouay($this); } parent::__construct(); } public function aakmagwggmkoiiyu() : string { return $this->name; } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\160\x72\137\x61\144\155\x69\x6e\137\x67\x65\x74\137{$this->aakmagwggmkoiiyu()}", [$this, "\171\x6d\163\165\x73\x6f\167\155\x65\157\x71\145\163\157\161\161"]); } public final function ymsusowmeoqesoqq() { $icwicymcioeyeyek = $this->cikaumomcgwkmsey(); try { $sogksuscggsicmac = $this->maewiqmcygmeuaso($icwicymcioeyeyek); } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } $sogksuscggsicmac = $this->ocksiywmkyaqseou("\x61\152\x61\170\x5f\147\x65\164\137{$this->aakmagwggmkoiiyu()}\x5f\162\x65\163\165\x6c\164", $sogksuscggsicmac, $icwicymcioeyeyek); $this->imkyucqsciqykkee($this->caqiimmagsussgeq($sogksuscggsicmac)); } public final function imkyucqsciqykkee(array $qeiakyocuggicwsy = []) { $uuyoeicyoayimaoa = $this->omkaowmygoqwsywq(); $suaemuyiacqyugsm = absint($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::imywcsggckkcywgk, 1)); $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1); $gaeqamemwmwsyukm = count($qeiakyocuggicwsy); $icwicymcioeyeyek = ["\x72\x65\x73\165\154\x74\x73" => $qeiakyocuggicwsy, "\155\x6f\162\x65\x5f\x72\x65\x73\x75\x6c\164\163" => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq]; $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uaggqsoeugksgooc($icwicymcioeyeyek); } public final function eqawqeqeguyuiage($igqsaukqcqscimok) : array { $icwicymcioeyeyek = $this->ooyiwkyooyaiqumk($igqsaukqcqscimok); $icwicymcioeyeyek[Constants::ssmskyqgcmeiayco] = $this->uyyawwaqygsagymg($igqsaukqcqscimok); return [Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::TEXT => $this->keaewwiqiewaaigy($igqsaukqcqscimok), Constants::ciyoccqkiamemcmm => $this->muycisweeuoquemg($igqsaukqcqscimok)]; } public final function caqiimmagsussgeq(array $oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $sogksuscggsicmac[$this->muycisweeuoquemg($igqsaukqcqscimok)] = $this->eqawqeqeguyuiage($igqsaukqcqscimok); } return $sogksuscggsicmac; } public function ooyiwkyooyaiqumk($igqsaukqcqscimok) : array { return $this->ocksiywmkyaqseou("\x61\152\141\170\137\x61\144\155\x69\x6e\x5f\x67\145\164\137{$this->aakmagwggmkoiiyu()}\x5f\145\x78\x74\162\141\x5f\144\141\164\141", [], $igqsaukqcqscimok); } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::gouqcwikiiygyasc, ''); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, ''); } public function uyyawwaqygsagymg($igqsaukqcqscimok) : string { $qqscaoyqikuyeoaw = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uwceyikaaaqgkkee, Constants::gawckqioqeowggww); if (!in_array($qqscaoyqikuyeoaw, [Constants::gawckqioqeowggww, Constants::yksmaomyamsakwow], true)) { $qqscaoyqikuyeoaw = Constants::gawckqioqeowggww; } return $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu() . "\x2f{$qqscaoyqikuyeoaw}", $this->rsysgcucogueguuk($igqsaukqcqscimok, $qqscaoyqikuyeoaw)); } public function omkaowmygoqwsywq() : int { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { return (array) $igqsaukqcqscimok; } public final function cikaumomcgwkmsey() : array { $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($_POST, [Constants::squoamkioomemiyi => [], Constants::meieskyuuegwwcsy => [], Constants::ciyoccqkiamemcmm => false, Constants::yayciqueeakqwese => '', Constants::kicoscymgmgqeqgy => false, Constants::uwceyikaaaqgkkee => Constants::gawckqioqeowggww]); $gqgemcmoicmgaqie = $icwicymcioeyeyek[Constants::meieskyuuegwwcsy]; if (is_string($gqgemcmoicmgaqie)) { $gqgemcmoicmgaqie = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($gqgemcmoicmgaqie); } if (!is_array($gqgemcmoicmgaqie)) { $gqgemcmoicmgaqie = []; } $icwicymcioeyeyek[Constants::meieskyuuegwwcsy] = $gqgemcmoicmgaqie; if (is_string($icwicymcioeyeyek[Constants::ciyoccqkiamemcmm])) { $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = [$icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]]; } return $icwicymcioeyeyek; } public abstract function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array; }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf5417a8d7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; abstract class Common extends Container { protected string $name = ''; public function __construct() { if ($this->aakmagwggmkoiiyu()) { goto eisakkewoaeqqeqi; } $this->name = $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->ugwmakayykcmcmqa()); eisakkewoaeqqeqi: parent::__construct(); } public function aakmagwggmkoiiyu() : string { return $this->name; } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\x70\x72\137\x61\144\155\151\x6e\137\x67\x65\x74\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\x79\x6d\163\x75\163\x6f\x77\155\145\x6f\x71\145\163\157\x71\x71"]); } public final function ymsusowmeoqesoqq() { $icwicymcioeyeyek = $this->cikaumomcgwkmsey(); try { $sogksuscggsicmac = $this->maewiqmcygmeuaso($icwicymcioeyeyek); } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } $sogksuscggsicmac = $this->ocksiywmkyaqseou("\x61\x6a\141\170\x5f\147\x65\164\x5f{$this->aakmagwggmkoiiyu()}\x5f\x72\x65\x73\x75\x6c\164", $sogksuscggsicmac, $icwicymcioeyeyek); $this->imkyucqsciqykkee($this->caqiimmagsussgeq($sogksuscggsicmac)); } public final function imkyucqsciqykkee(array $qeiakyocuggicwsy = []) { $uuyoeicyoayimaoa = $this->omkaowmygoqwsywq(); $suaemuyiacqyugsm = absint($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::imywcsggckkcywgk, 1)); $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1); $gaeqamemwmwsyukm = count($qeiakyocuggicwsy); $icwicymcioeyeyek = ["\x72\145\x73\x75\x6c\164\x73" => $qeiakyocuggicwsy, "\155\157\162\x65\137\162\145\163\x75\x6c\x74\x73" => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq]; $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uaggqsoeugksgooc($icwicymcioeyeyek); } public final function eqawqeqeguyuiage($igqsaukqcqscimok) : array { $icwicymcioeyeyek = $this->ooyiwkyooyaiqumk($igqsaukqcqscimok); $icwicymcioeyeyek[Constants::ssmskyqgcmeiayco] = $this->uyyawwaqygsagymg($igqsaukqcqscimok); return [Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::TEXT => $this->keaewwiqiewaaigy($igqsaukqcqscimok), Constants::ciyoccqkiamemcmm => $this->muycisweeuoquemg($igqsaukqcqscimok)]; } public final function caqiimmagsussgeq(array $oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $sogksuscggsicmac[$this->muycisweeuoquemg($igqsaukqcqscimok)] = $this->eqawqeqeguyuiage($igqsaukqcqscimok); koyswyqcemwusuku: } mqckeqywkyewukku: return $sogksuscggsicmac; } public function ooyiwkyooyaiqumk($igqsaukqcqscimok) : array { return $this->ocksiywmkyaqseou("\141\x6a\141\x78\137\141\144\155\x69\156\x5f\147\x65\x74\x5f{$this->aakmagwggmkoiiyu()}\x5f\145\170\x74\162\x61\137\x64\141\x74\x61", [], $igqsaukqcqscimok); } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::gouqcwikiiygyasc, ''); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, ''); } public function uyyawwaqygsagymg($igqsaukqcqscimok) : string { $qqscaoyqikuyeoaw = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uwceyikaaaqgkkee, Constants::gawckqioqeowggww); if (in_array($qqscaoyqikuyeoaw, [Constants::gawckqioqeowggww, Constants::yksmaomyamsakwow], true)) { goto mqaemqqgquyscwgg; } $qqscaoyqikuyeoaw = Constants::gawckqioqeowggww; mqaemqqgquyscwgg: return $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu() . "\x2f{$qqscaoyqikuyeoaw}", $this->rsysgcucogueguuk($igqsaukqcqscimok, $qqscaoyqikuyeoaw)); } public function omkaowmygoqwsywq() : int { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { return (array) $igqsaukqcqscimok; } public final function cikaumomcgwkmsey() : array { $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($_POST, [Constants::squoamkioomemiyi => [], Constants::meieskyuuegwwcsy => [], Constants::ciyoccqkiamemcmm => false, Constants::yayciqueeakqwese => '', Constants::kicoscymgmgqeqgy => false, Constants::uwceyikaaaqgkkee => Constants::gawckqioqeowggww]); if (!is_string($icwicymcioeyeyek[Constants::meieskyuuegwwcsy])) { goto aisciyiooggegcwa; } $icwicymcioeyeyek[Constants::meieskyuuegwwcsy] = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($icwicymcioeyeyek[Constants::meieskyuuegwwcsy]); aisciyiooggegcwa: if (!is_string($icwicymcioeyeyek[Constants::ciyoccqkiamemcmm])) { goto cymkyayecqkecsso; } $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = [$icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]]; cymkyayecqkecsso: return $icwicymcioeyeyek; } public abstract function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array; }

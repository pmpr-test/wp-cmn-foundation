<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76ba63557             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; abstract class Common extends Container { protected string $name = ''; public function __construct() { if ($this->aakmagwggmkoiiyu()) { goto wwwsqwyegoowkmik; } $this->name = $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->ugwmakayykcmcmqa()); wwwsqwyegoowkmik: parent::__construct(); } public function aakmagwggmkoiiyu() : string { return $this->name; } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\x70\x72\137\x61\x64\x6d\x69\x6e\137\x67\145\164\137{$this->aakmagwggmkoiiyu()}", [$this, "\171\155\x73\165\163\x6f\x77\x6d\x65\x6f\161\x65\163\157\161\161"]); } public final function ymsusowmeoqesoqq() { $icwicymcioeyeyek = $this->cikaumomcgwkmsey(); try { $sogksuscggsicmac = $this->maewiqmcygmeuaso($icwicymcioeyeyek); } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } $sogksuscggsicmac = $this->ocksiywmkyaqseou("\141\152\x61\170\x5f\x67\145\x74\x5f{$this->aakmagwggmkoiiyu()}\x5f\x72\x65\x73\165\x6c\164", $sogksuscggsicmac, $icwicymcioeyeyek); $this->imkyucqsciqykkee($this->caqiimmagsussgeq($sogksuscggsicmac)); } public final function imkyucqsciqykkee(array $qeiakyocuggicwsy = []) { $uuyoeicyoayimaoa = $this->omkaowmygoqwsywq(); $suaemuyiacqyugsm = absint($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::imywcsggckkcywgk, 1)); $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1); $gaeqamemwmwsyukm = count($qeiakyocuggicwsy); $icwicymcioeyeyek = ["\x72\x65\x73\x75\x6c\x74\x73" => $qeiakyocuggicwsy, "\x6d\157\162\x65\x5f\x72\x65\x73\x75\154\x74\163" => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq]; $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uaggqsoeugksgooc($icwicymcioeyeyek); } public final function eqawqeqeguyuiage($igqsaukqcqscimok) : array { $icwicymcioeyeyek = $this->ooyiwkyooyaiqumk($igqsaukqcqscimok); $icwicymcioeyeyek[Constants::ssmskyqgcmeiayco] = $this->uyyawwaqygsagymg($igqsaukqcqscimok); return [Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::TEXT => $this->keaewwiqiewaaigy($igqsaukqcqscimok), Constants::ciyoccqkiamemcmm => $this->muycisweeuoquemg($igqsaukqcqscimok)]; } public final function caqiimmagsussgeq(array $oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $sogksuscggsicmac[$this->muycisweeuoquemg($igqsaukqcqscimok)] = $this->eqawqeqeguyuiage($igqsaukqcqscimok); qicikuqekgkawwqo: } igygkagcaiiiumqo: return $sogksuscggsicmac; } public function ooyiwkyooyaiqumk($igqsaukqcqscimok) : array { return $this->ocksiywmkyaqseou("\141\152\x61\x78\137\x61\144\155\x69\x6e\137\147\145\x74\137{$this->aakmagwggmkoiiyu()}\x5f\145\170\164\162\141\x5f\144\x61\164\141", [], $igqsaukqcqscimok); } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::gouqcwikiiygyasc, ''); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, ''); } public function uyyawwaqygsagymg($igqsaukqcqscimok) : string { $qqscaoyqikuyeoaw = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uwceyikaaaqgkkee, Constants::gawckqioqeowggww); if (in_array($qqscaoyqikuyeoaw, [Constants::gawckqioqeowggww, Constants::yksmaomyamsakwow], true)) { goto ommomcekkekaceme; } $qqscaoyqikuyeoaw = Constants::gawckqioqeowggww; ommomcekkekaceme: return $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu() . "\57{$qqscaoyqikuyeoaw}", $this->rsysgcucogueguuk($igqsaukqcqscimok, $qqscaoyqikuyeoaw)); } public function omkaowmygoqwsywq() : int { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { return (array) $igqsaukqcqscimok; } public final function cikaumomcgwkmsey() : array { $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($_POST, [Constants::squoamkioomemiyi => [], Constants::meieskyuuegwwcsy => [], Constants::ciyoccqkiamemcmm => false, Constants::yayciqueeakqwese => '', Constants::kicoscymgmgqeqgy => false, Constants::uwceyikaaaqgkkee => Constants::gawckqioqeowggww]); $gqgemcmoicmgaqie = $icwicymcioeyeyek[Constants::meieskyuuegwwcsy]; if (!is_string($gqgemcmoicmgaqie)) { goto ugguwkkgqoyseuma; } $gqgemcmoicmgaqie = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($gqgemcmoicmgaqie); ugguwkkgqoyseuma: if (is_array($gqgemcmoicmgaqie)) { goto qmiugaqisqiwooio; } $gqgemcmoicmgaqie = []; qmiugaqisqiwooio: $icwicymcioeyeyek[Constants::meieskyuuegwwcsy] = $gqgemcmoicmgaqie; if (!is_string($icwicymcioeyeyek[Constants::ciyoccqkiamemcmm])) { goto usgcuuuscucqesug; } $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = [$icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]]; usgcuuuscucqesug: return $icwicymcioeyeyek; } public abstract function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array; }

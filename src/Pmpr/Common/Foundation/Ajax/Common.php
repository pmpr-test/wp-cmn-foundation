<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d2ce2062a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Container; abstract class Common extends Container { protected string $name = ''; public function __construct() { if ($this->aakmagwggmkoiiyu()) { goto yyicwymeasmimggy; } $this->name = $this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->ugwmakayykcmcmqa()); yyicwymeasmimggy: parent::__construct(); } public function aakmagwggmkoiiyu() : string { return $this->name; } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\160\x72\137\x61\x64\x6d\151\x6e\x5f\147\145\164\137{$this->aakmagwggmkoiiyu()}", [$this, "\171\155\163\165\163\x6f\x77\x6d\x65\x6f\x71\x65\x73\157\161\x71"]); } public final function ymsusowmeoqesoqq() { $icwicymcioeyeyek = $this->cikaumomcgwkmsey(); try { $sogksuscggsicmac = $this->maewiqmcygmeuaso($icwicymcioeyeyek); } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = []; } $sogksuscggsicmac = $this->ocksiywmkyaqseou("\141\152\141\x78\x5f\147\145\x74\137{$this->aakmagwggmkoiiyu()}\x5f\162\x65\163\165\x6c\x74", $sogksuscggsicmac, $icwicymcioeyeyek); $this->imkyucqsciqykkee($this->caqiimmagsussgeq($sogksuscggsicmac)); } public final function imkyucqsciqykkee(array $qeiakyocuggicwsy = []) { $uuyoeicyoayimaoa = $this->omkaowmygoqwsywq(); $suaemuyiacqyugsm = absint($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::imywcsggckkcywgk, 1)); $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1); $gaeqamemwmwsyukm = count($qeiakyocuggicwsy); $icwicymcioeyeyek = ["\162\x65\163\x75\154\x74\x73" => $qeiakyocuggicwsy, "\x6d\x6f\x72\145\x5f\x72\x65\163\165\x6c\x74\x73" => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq]; $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uaggqsoeugksgooc($icwicymcioeyeyek); } public final function eqawqeqeguyuiage($igqsaukqcqscimok) : array { $icwicymcioeyeyek = $this->ooyiwkyooyaiqumk($igqsaukqcqscimok); $icwicymcioeyeyek[Constants::ssmskyqgcmeiayco] = $this->uyyawwaqygsagymg($igqsaukqcqscimok); return [Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek, Constants::TEXT => $this->keaewwiqiewaaigy($igqsaukqcqscimok), Constants::ciyoccqkiamemcmm => $this->muycisweeuoquemg($igqsaukqcqscimok)]; } public final function caqiimmagsussgeq(array $oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $sogksuscggsicmac[$this->muycisweeuoquemg($igqsaukqcqscimok)] = $this->eqawqeqeguyuiage($igqsaukqcqscimok); ekkswyasyksokemg: } oyoiceikawwqskai: return $sogksuscggsicmac; } public function ooyiwkyooyaiqumk($igqsaukqcqscimok) : array { return $this->ocksiywmkyaqseou("\x61\x6a\141\x78\137\141\144\155\x69\156\x5f\147\x65\x74\x5f{$this->aakmagwggmkoiiyu()}\x5f\x65\x78\164\162\x61\137\x64\x61\x74\x61", [], $igqsaukqcqscimok); } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::gouqcwikiiygyasc, ''); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, ''); } public function uyyawwaqygsagymg($igqsaukqcqscimok) : string { $qqscaoyqikuyeoaw = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uwceyikaaaqgkkee, Constants::gawckqioqeowggww); if (in_array($qqscaoyqikuyeoaw, [Constants::gawckqioqeowggww, Constants::yksmaomyamsakwow], true)) { goto mqsoccawiacgogca; } $qqscaoyqikuyeoaw = Constants::gawckqioqeowggww; mqsoccawiacgogca: return $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu() . "\57{$qqscaoyqikuyeoaw}", $this->rsysgcucogueguuk($igqsaukqcqscimok, $qqscaoyqikuyeoaw)); } public function omkaowmygoqwsywq() : int { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { return (array) $igqsaukqcqscimok; } public final function cikaumomcgwkmsey() : array { $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($_POST, [Constants::squoamkioomemiyi => [], Constants::meieskyuuegwwcsy => [], Constants::ciyoccqkiamemcmm => false, Constants::yayciqueeakqwese => '', Constants::kicoscymgmgqeqgy => false, Constants::uwceyikaaaqgkkee => Constants::gawckqioqeowggww]); if (!is_string($icwicymcioeyeyek[Constants::meieskyuuegwwcsy])) { goto muoeugawocmikiua; } $icwicymcioeyeyek[Constants::meieskyuuegwwcsy] = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->ukiweowwwwkiaqgo($icwicymcioeyeyek[Constants::meieskyuuegwwcsy]); muoeugawocmikiua: if (!is_string($icwicymcioeyeyek[Constants::ciyoccqkiamemcmm])) { goto bgwomyaccmauskgm; } $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = [$icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]]; bgwomyaccmauskgm: return $icwicymcioeyeyek; } public abstract function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array; }

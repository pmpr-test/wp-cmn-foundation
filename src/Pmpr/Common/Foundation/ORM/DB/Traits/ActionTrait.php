<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec08edec3b9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model; trait ActionTrait { protected array $viewActions = []; private function sqgeouqsaemqsaoc($qqomumygoacsmsie = null, $mksyucucyswaukig = null) : array { $ccowyogiqwikkkie = $this->viewActions; if (!$qqomumygoacsmsie) { goto eaisogogsygugsqi; } $ccowyogiqwikkkie = $ccowyogiqwikkkie[$qqomumygoacsmsie] ?? []; if (!$ccowyogiqwikkkie) { goto qsgagomkgqcmscyu; } foreach ($ccowyogiqwikkkie as $uusmaiomayssaecw => $aiamqeawckcsuaou) { if (!is_callable($aiamqeawckcsuaou)) { goto iiceuymgyemuaciy; } $aiamqeawckcsuaou = $aiamqeawckcsuaou($mksyucucyswaukig, $qqomumygoacsmsie); iiceuymgyemuaciy: $ccowyogiqwikkkie[$uusmaiomayssaecw] = $aiamqeawckcsuaou; qmqsgkwueccwgsqa: } qiekksmyigmwmiws: qsgagomkgqcmscyu: eaisogogsygugsqi: return $ccowyogiqwikkkie; } public function wqaqomooqiiaeoew() : array { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->sqgeouqsaemqsaoc(), Constants::ukwaycqmyyuekwqg, []); } public function oecasaciwaammwsa($qqomumygoacsmsie, string $uusmaiomayssaecw, $aiamqeawckcsuaou = '') : self { if (is_array($qqomumygoacsmsie)) { goto ieewmicwgqaigeqi; } $this->viewActions[$qqomumygoacsmsie][$uusmaiomayssaecw] = $aiamqeawckcsuaou; goto ouokmaemueykkiqq; ieewmicwgqaigeqi: foreach ($qqomumygoacsmsie as $mokouoooiwsmcmiu) { $this->oecasaciwaammwsa($mokouoooiwsmcmiu, $uusmaiomayssaecw, $aiamqeawckcsuaou); omaswaiucwamaywi: } usiqksiiiqgokuaq: ouokmaemueykkiqq: return $this; } public function kecqycomykimqiim(string $uusmaiomayssaecw, $aiamqeawckcsuaou = '') : self { return $this->oecasaciwaammwsa(Constants::ukwaycqmyyuekwqg, $uusmaiomayssaecw, $aiamqeawckcsuaou); } public function eaccsioyemcakcss($mksyucucyswaukig = null) : array { return $this->sqgeouqsaemqsaoc(Constants::ciukcewkikysayqc, $mksyucucyswaukig); } public function ggcmuysgqumueqwk(string $uusmaiomayssaecw, $aiamqeawckcsuaou = '') : self { return $this->oecasaciwaammwsa(Constants::ciukcewkikysayqc, $uusmaiomayssaecw, $aiamqeawckcsuaou); } public function igosuocmowawmwyq($mksyucucyswaukig = null) : array { return $this->sqgeouqsaemqsaoc(Constants::ygkiecqqagmekskm, $mksyucucyswaukig); } public function swamsekqigskaemg(string $uusmaiomayssaecw, $aiamqeawckcsuaou = '') : self { return $this->oecasaciwaammwsa(Constants::ygkiecqqagmekskm, $uusmaiomayssaecw, $aiamqeawckcsuaou); } public function easkmgsoqaqeyayo() : array { return $this->sqgeouqsaemqsaoc(Constants::weiosaewqequuyuq); } public function icyamyikwyaaoqya(string $uusmaiomayssaecw, $aiamqeawckcsuaou = '') : self { if (!is_array($aiamqeawckcsuaou)) { goto mgiykamgwsemmiio; } $aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($aiamqeawckcsuaou[Constants::ysskgssgwuwmqwym] ?? [], "\143\x6c\141\x73\163", "\x70\x61\147\145\55\x74\x69\164\x6c\145\x2d\x61\x63\164\x69\157\156"); mgiykamgwsemmiio: return $this->oecasaciwaammwsa(Constants::weiosaewqequuyuq, $uusmaiomayssaecw, $aiamqeawckcsuaou); } public function nwuqkwkgugcqsgyq($mksyucucyswaukig = null) : array { return $this->sqgeouqsaemqsaoc(Constants::awysmmukegasimmq); } public function qeiuscikgegousks(string $uusmaiomayssaecw, $aiamqeawckcsuaou = '') : self { return $this->oecasaciwaammwsa(Constants::awysmmukegasimmq, $uusmaiomayssaecw, $aiamqeawckcsuaou); } public function gsuymmgcmsuewowe($mksyucucyswaukig = null) : array { return $this->sqgeouqsaemqsaoc(Constants::ieioeisgwcgysukw, $mksyucucyswaukig); } public function gkmcymygmuyykuwg(string $uusmaiomayssaecw, $aiamqeawckcsuaou = '') : self { return $this->oecasaciwaammwsa(Constants::ieioeisgwcgysukw, $uusmaiomayssaecw, $aiamqeawckcsuaou); } }

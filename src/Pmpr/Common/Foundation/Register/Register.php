<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6714d8c9bc679             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Register; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\LabelsTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; abstract class Register { use HelperTrait, WrapperTrait, ToArrayTrait, LabelsTrait; protected $rewrite = true; protected $queryVar = true; protected ?string $name = ''; protected $restBase = false; protected $showInMenu = null; protected bool $public = false; protected bool $showUI = false; protected bool $_builtin = false; protected ?string $plural = ''; protected ?string $singular = ''; protected bool $showInRest = true; protected $restControllerClass = false; protected bool $hierarchical = false; protected ?array $capabilities = []; protected ?string $description = ''; protected ?bool $showInNavMenus = null; protected bool $publiclyQueryable = false; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function qeeuwmmksmqiuywg() : ?string { return $this->plural; } public function muuwuqssqkaieqge(?string $kcumookcwskcyqak) : self { $this->plural = $kcumookcwskcyqak; return $this; } public function giiayuqckuiecosm() : ?string { return $this->singular; } public function guiaswksukmgageq(?string $sisssumicskyceeg) : self { $this->singular = $sisssumicskyceeg; return $this; } public function kaukkswwacssmugg(?bool $sycugcsamausokky) : void { $this->showInNavMenus = $sycugcsamausokky; } public function eosmogyiwwkyqyek(bool $wkscusiqqyeeyuqw) : self { $this->hierarchical = $wkscusiqqyeeyuqw; return $this; } public function aewcsqigycuaekym() : bool { return $this->hierarchical; } public function swwukuywuokaeeoa(bool $ewyaegmkqgqcyuiu) : self { $this->publiclyQueryable = $ewyaegmkqgqcyuiu; return $this; } public function uwaascqoguwkwiaw() : bool { return $this->showUI; } public function soeowumgcwuiaica(bool $ciooooeuokmogsaq) : self { $this->showUI = $ciooooeuokmogsaq; return $this; } public function wiskakymeaywyeuw($cyiwaggmwimigmcc) : self { $this->showInMenu = $cyiwaggmwimigmcc; $this->soeowumgcwuiaica(true); return $this; } public function egockcwgmeocqeqc() { return $this->showInMenu; } public function wsekoqmcyeuyegam() : self { $this->zmqimouwawekqymc(true); $this->ckwgqocyuaysggma("\x66\x65\145\144\163", true); $this->ckwgqocyuaysggma("\x70\141\147\x65\x73", true); return $this->ckwgqocyuaysggma("\167\x69\164\x68\x5f\146\162\157\x6e\x74", false); } public function myysgyqcumekoueo() : self { return $this->zmqimouwawekqymc(false); } public function iimaygsyckkaemwo(bool $ogicwiwywaocosag) : self { $this->public = $ogicwiwywaocosag; return $this; } public function zmqimouwawekqymc(bool $ioqywyyeioqywogw) : self { $this->iimaygsyckkaemwo($ioqywyyeioqywogw)->ooeieggkeaaqggki($ioqywyyeioqywogw)->kkioqygoooqkgaok($ioqywyyeioqywogw)->kaukkswwacssmugg($ioqywyyeioqywogw); return $this->swwukuywuokaeeoa($ioqywyyeioqywogw); } public function meqceykmywmqgoym() : ?string { return $this->description; } public function gucwmccyimoagwcm(string $ukwokcuqauuosmoo) : self { $this->description = $ukwokcuqauuosmoo; return $this; } public function cekoogweeooasayu() : bool { return $this->public; } public function iwooyissgqockkka(string $uusmaiomayssaecw, string $eqgoocgaqwqcimie) : self { $this->labels[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function aciuwyaykiaeaske(array $iwkyyocymeukcceu) : self { foreach ($iwkyyocymeukcceu as $uusmaiomayssaecw => $pkyyagewkiyckmwy) { $this->iwooyissgqockkka($uusmaiomayssaecw, $pkyyagewkiyckmwy); } return $this; } public function uikgwcuascgeissw(string $uusmaiomayssaecw) : ?string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->eoemoqciaweskqkk(), $uusmaiomayssaecw, ''); } public function eoemoqciaweskqkk() : ?array { if (!$this->labels) { $this->jsgkawekewookomk(); } return $this->labels; } public function iqoguoscqueomqsk(array $sksmomeiauyqaomi) : self { foreach ($sksmomeiauyqaomi as $uusmaiomayssaecw => $eogowigeyucaauig) { $this->ockgcoiccyiuuwue($uusmaiomayssaecw, $eogowigeyucaauig); } return $this; } public function ggqekkkocygywmoy() : ?array { if (!$this->capabilities) { $this->ockgcoiccyiuuwue("\x6d\141\x6e\141\147\145\x5f\x6f\x70\x74\x69\157\156\163"); } return $this->capabilities; } public function gwaeeegmgggawiyi(string $uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->ggqekkkocygywmoy(), $uusmaiomayssaecw); } public function ockgcoiccyiuuwue(?string $uusmaiomayssaecw = null, string $eogowigeyucaauig = '') : self { if ($uusmaiomayssaecw) { $this->capabilities[$uusmaiomayssaecw] = $eogowigeyucaauig; } else { $this->capabilities[] = $eogowigeyucaauig; } return $this; } public function ckwgqocyuaysggma(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { if (!is_array($this->rewrite)) { $this->rewrite = []; } $this->rewrite[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function wqmmmaeygqosciii() { return $this->rewrite; } public function kuggecgwaickowwu(string $uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->wqmmmaeygqosciii(), $uusmaiomayssaecw); } public function iosciegmiqwoaauk(array $yesgcwqgyogqwkum) { foreach ($yesgcwqgyogqwkum as $uusmaiomayssaecw => $squgkkgwywimowua) { $this->ckwgqocyuaysggma($uusmaiomayssaecw, $squgkkgwywimowua); } return $this; } public function ooeieggkeaaqggki($emmugacswycqccku) { $this->queryVar = $emmugacswycqccku; return $this; } public function kkioqygoooqkgaok(bool $eqmuoqmkmeuwkeao) { $this->showInRest = $eqmuoqmkmeuwkeao; return $this; } public function aaomioeysokikemq() : ?bool { return $this->showInRest; } public function beuwymyyokugmqyq($wqqqeaseeukusmwc) { $this->restBase = $wqqqeaseeukusmwc; return $this; } public function swimamwaquqowaaq(bool $sqeeuuwcgyoesuqg) : self { $this->_builtin = $sqeeuuwcgyoesuqg; return $this; } public function sogsiwqoswoceqwg() : ?string { return $this->restControllerClass; } public function mmsigymicuckcewc(string $comiiykswskquwmg) : self { $this->restControllerClass = $comiiykswskquwmg; return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!$this->kuggecgwaickowwu(Constants::ouywiegeiyuaaawo)) { $this->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, $this->aakmagwggmkoiiyu()); } $this->jsgkawekewookomk(); } }

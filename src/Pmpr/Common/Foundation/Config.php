<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf5417a8d7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class Config extends Container { public function __construct() { parent::__construct(); $this->ouimoyiiwukygcgu(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\162\x6f\x62\x6f\164\x73\x5f\x74\x78\x74", [$this, "\x6f\x77\x6d\x79\x77\x77\157\147\x6b\171\141\x63\x75\167\x79\165"]); } public function ouimoyiiwukygcgu() { if (!($oegoegssokkyiqam = $this->awuiuaccmkiqougw())) { goto mkeuieqqyqegogsq; } $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\x66\x75\156\x63\x74\x69\x6f\156\x73\x2e\x70\150\160"; if (!$iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { goto usoowaiwsaiesgem; } require_once $esaqeawoigqgagum; usoowaiwsaiesgem: iyqmssemqiauuqqc: } yauqmogucwsigqeq: mkeuieqqyqegogsq: } public function owmywwogkyacuwyu($ewgwqamkygiqaawc) { if (!($oegoegssokkyiqam = $this->awuiuaccmkiqougw())) { goto ksuqymwomimwkqyw; } $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\162\x6f\142\x6f\x74\x73\x2e\164\x78\164"; if (!$iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { goto oocciiqymkucsegu; } $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); goto cqquqgcesyumsseu; oocciiqymkucsegu: qasmomuqokkmywyk: } cqquqgcesyumsseu: ksuqymwomimwkqyw: return $ewgwqamkygiqaawc; } private function awuiuaccmkiqougw() : array { $oegoegssokkyiqam = []; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew, false) && ($wyocmuqcwyskkcyo = $eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::mcqosyscuoekcugy)))) { goto wewsckyqeeoeewmu; } $yckucuyiaykemqea = trailingslashit($wyocmuqcwyskkcyo) . "\x63\x6f\x6e\146\151\147"; $cegmoiksuamkayee = trailingslashit($yckucuyiaykemqea) . $eiicaiwgqkgsekce->akoiqeemqgmakecu(); $oegoegssokkyiqam = [$cegmoiksuamkayee, $yckucuyiaykemqea]; wewsckyqeeoeewmu: return $oegoegssokkyiqam; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c1476eb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class Config extends Container { public function __construct() { parent::__construct(); $this->ouimoyiiwukygcgu(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\x6f\142\x6f\164\x73\x5f\164\170\164", [$this, "\157\167\155\x79\167\x77\157\x67\153\171\x61\143\165\x77\x79\x75"]); } public function ouimoyiiwukygcgu() { if (!($oegoegssokkyiqam = $this->awuiuaccmkiqougw())) { goto mskkcyugwccmgmue; } $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\x66\165\x6e\143\x74\151\x6f\x6e\163\56\160\150\x70"; if (!$iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { goto wigkaokkwyecekic; } require_once $esaqeawoigqgagum; wigkaokkwyecekic: uumwyacekksycmcy: } ssuagkigqokwaekc: mskkcyugwccmgmue: } public function owmywwogkyacuwyu($ewgwqamkygiqaawc) { if (!($oegoegssokkyiqam = $this->awuiuaccmkiqougw())) { goto iukwaymqsaukgucc; } $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\162\157\142\x6f\164\x73\x2e\164\170\x74"; if (!$iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { goto cwqecoyeuseoiyee; } $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); goto usuaqaeacooqoqeg; cwqecoyeuseoiyee: icaaymowyygqqwsa: } usuaqaeacooqoqeg: iukwaymqsaukgucc: return $ewgwqamkygiqaawc; } private function awuiuaccmkiqougw() : array { $oegoegssokkyiqam = []; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew, false) && ($wyocmuqcwyskkcyo = $eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::mcqosyscuoekcugy)))) { goto oukcgieuakaagsaw; } $yckucuyiaykemqea = trailingslashit($wyocmuqcwyskkcyo) . "\143\157\x6e\x66\151\147"; $cegmoiksuamkayee = trailingslashit($yckucuyiaykemqea) . $eiicaiwgqkgsekce->akoiqeemqgmakecu(); $oegoegssokkyiqam = [$cegmoiksuamkayee, $yckucuyiaykemqea]; oukcgieuakaagsaw: return $oegoegssokkyiqam; } }

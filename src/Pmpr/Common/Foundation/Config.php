<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705d720531f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class Config extends Container { public function __construct() { parent::__construct(); $this->ouimoyiiwukygcgu(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\157\x62\157\164\x73\x5f\x74\170\164", [$this, "\157\x77\x6d\x79\x77\167\x6f\x67\x6b\x79\x61\143\165\x77\x79\165"]); } public function ouimoyiiwukygcgu() { if ($oegoegssokkyiqam = $this->awuiuaccmkiqougw()) { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\146\165\156\x63\164\x69\x6f\156\163\x2e\x70\x68\x70"; if ($iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { include_once $esaqeawoigqgagum; } } } } public function owmywwogkyacuwyu($ewgwqamkygiqaawc) { if ($oegoegssokkyiqam = $this->awuiuaccmkiqougw()) { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\162\157\x62\157\x74\x73\x2e\x74\170\x74"; if ($iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); break; } } } return $ewgwqamkygiqaawc; } private function awuiuaccmkiqougw() : array { $oegoegssokkyiqam = []; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew, false) && ($wyocmuqcwyskkcyo = $eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::mcqosyscuoekcugy))) { $yckucuyiaykemqea = trailingslashit($wyocmuqcwyskkcyo) . "\143\x6f\156\146\151\147"; $cegmoiksuamkayee = trailingslashit($yckucuyiaykemqea) . $eiicaiwgqkgsekce->akoiqeemqgmakecu(); $oegoegssokkyiqam = [$cegmoiksuamkayee, $yckucuyiaykemqea]; } return $oegoegssokkyiqam; } }

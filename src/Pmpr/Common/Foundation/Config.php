<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3c8774d14             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class Config extends Container { public function __construct() { parent::__construct(); $this->ouimoyiiwukygcgu(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\x6f\142\157\x74\x73\137\x74\x78\164", [$this, "\157\x77\x6d\171\167\167\x6f\x67\x6b\171\x61\x63\x75\167\x79\x75"]); } public function ouimoyiiwukygcgu() { if ($oegoegssokkyiqam = $this->awuiuaccmkiqougw()) { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\146\x75\x6e\x63\x74\151\157\156\163\56\x70\x68\160"; if ($iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { include_once $esaqeawoigqgagum; } } } } public function owmywwogkyacuwyu($ewgwqamkygiqaawc) { if ($oegoegssokkyiqam = $this->awuiuaccmkiqougw()) { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\162\157\x62\157\164\163\x2e\x74\170\164"; if ($iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); break; } } } return $ewgwqamkygiqaawc; } private function awuiuaccmkiqougw() : array { $oegoegssokkyiqam = []; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew, false) && ($wyocmuqcwyskkcyo = $eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::mcqosyscuoekcugy))) { $yckucuyiaykemqea = trailingslashit($wyocmuqcwyskkcyo) . "\143\x6f\x6e\x66\151\147"; $cegmoiksuamkayee = trailingslashit($yckucuyiaykemqea) . $eiicaiwgqkgsekce->akoiqeemqgmakecu(); $oegoegssokkyiqam = [$cegmoiksuamkayee, $yckucuyiaykemqea]; } return $oegoegssokkyiqam; } }

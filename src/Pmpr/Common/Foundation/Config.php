<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ff7768f0b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class Config extends Container { public function __construct() { parent::__construct(); $this->ouimoyiiwukygcgu(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x72\x6f\x62\x6f\164\x73\137\x74\x78\x74", [$this, "\157\167\x6d\171\x77\x77\x6f\x67\x6b\171\x61\143\165\x77\x79\x75"]); } public function ouimoyiiwukygcgu() { if ($oegoegssokkyiqam = $this->awuiuaccmkiqougw()) { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\146\165\x6e\x63\164\151\x6f\156\x73\56\x70\x68\x70"; if ($iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { include_once $esaqeawoigqgagum; } } } } public function owmywwogkyacuwyu($ewgwqamkygiqaawc) { if ($oegoegssokkyiqam = $this->awuiuaccmkiqougw()) { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\x72\x6f\x62\x6f\x74\x73\56\164\170\164"; if ($iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); break; } } } return $ewgwqamkygiqaawc; } private function awuiuaccmkiqougw() : array { $oegoegssokkyiqam = []; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew, false) && ($wyocmuqcwyskkcyo = $eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::mcqosyscuoekcugy))) { $yckucuyiaykemqea = trailingslashit($wyocmuqcwyskkcyo) . "\143\157\156\146\151\x67"; $cegmoiksuamkayee = trailingslashit($yckucuyiaykemqea) . $eiicaiwgqkgsekce->akoiqeemqgmakecu(); $oegoegssokkyiqam = [$cegmoiksuamkayee, $yckucuyiaykemqea]; } return $oegoegssokkyiqam; } }

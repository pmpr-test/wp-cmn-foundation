<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678030d5e04d8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class Config extends Container { public function __construct() { parent::__construct(); $this->ouimoyiiwukygcgu(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\162\157\x62\x6f\x74\x73\137\164\x78\x74", [$this, "\157\167\155\171\167\167\157\x67\153\x79\x61\143\165\167\x79\165"]); } public function ouimoyiiwukygcgu() { if ($oegoegssokkyiqam = $this->awuiuaccmkiqougw()) { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\146\165\156\143\x74\x69\x6f\x6e\163\56\160\x68\160"; if ($iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { include_once $esaqeawoigqgagum; } } } } public function owmywwogkyacuwyu($ewgwqamkygiqaawc) { if ($oegoegssokkyiqam = $this->awuiuaccmkiqougw()) { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\x72\157\x62\157\164\x73\x2e\164\170\x74"; if ($iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); break; } } } return $ewgwqamkygiqaawc; } private function awuiuaccmkiqougw() : array { $oegoegssokkyiqam = []; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew, false) && ($wyocmuqcwyskkcyo = $eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::mcqosyscuoekcugy))) { $yckucuyiaykemqea = trailingslashit($wyocmuqcwyskkcyo) . "\x63\x6f\x6e\146\151\147"; $cegmoiksuamkayee = trailingslashit($yckucuyiaykemqea) . $eiicaiwgqkgsekce->akoiqeemqgmakecu(); $oegoegssokkyiqam = [$cegmoiksuamkayee, $yckucuyiaykemqea]; } return $oegoegssokkyiqam; } }

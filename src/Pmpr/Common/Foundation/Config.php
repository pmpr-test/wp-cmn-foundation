<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d9f11bf9d9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; class Config extends Container { public function __construct() { parent::__construct(); $this->ouimoyiiwukygcgu(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\162\157\142\x6f\164\x73\x5f\164\170\164", [$this, "\x6f\167\x6d\171\x77\167\157\147\x6b\x79\x61\143\165\x77\171\x75"]); } public function ouimoyiiwukygcgu() { if ($oegoegssokkyiqam = $this->awuiuaccmkiqougw()) { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\146\x75\x6e\143\x74\x69\157\156\x73\56\160\x68\x70"; if ($iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { include_once $esaqeawoigqgagum; } } } } public function owmywwogkyacuwyu($ewgwqamkygiqaawc) { if ($oegoegssokkyiqam = $this->awuiuaccmkiqougw()) { $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); foreach ($oegoegssokkyiqam as $mkomwsiykqigmqca) { $esaqeawoigqgagum = trailingslashit($mkomwsiykqigmqca) . "\x72\x6f\x62\157\x74\x73\x2e\164\170\164"; if ($iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) { $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum); break; } } } return $ewgwqamkygiqaawc; } private function awuiuaccmkiqougw() : array { $oegoegssokkyiqam = []; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::weqimaiuiuksuiew, false) && ($wyocmuqcwyskkcyo = $eiicaiwgqkgsekce->cmaecekuqkwmemms(Constants::mcqosyscuoekcugy))) { $yckucuyiaykemqea = trailingslashit($wyocmuqcwyskkcyo) . "\143\157\156\x66\x69\x67"; $cegmoiksuamkayee = trailingslashit($yckucuyiaykemqea) . $eiicaiwgqkgsekce->akoiqeemqgmakecu(); $oegoegssokkyiqam = [$cegmoiksuamkayee, $yckucuyiaykemqea]; } return $oegoegssokkyiqam; } }

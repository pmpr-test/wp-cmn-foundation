<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd8540fef             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; trait ToArrayTrait { public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { } public final function sacmkccceuywoqsq(bool $tsuauommsquiesmk = false, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::skgoiqckokigcmug => true]); $this->qgsieamsswkgysow($ywmkwiwkosakssii); $kkeqqkkkqwkocsyu = get_object_vars($this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); foreach ($kkeqqkkkqwkocsyu as $uusmaiomayssaecw => $gygawogosumsgmme) { if ($ywmkwiwkosakssii[Constants::skgoiqckokigcmug] && $cgwqqcukiasoicmi->myagqecycsaiyqsk($gygawogosumsgmme, "\x74\157\101\162\162\x61\171") && $cgwqqcukiasoicmi->myagqecycsaiyqsk($gygawogosumsgmme, "\141\146\x74\145\162\x54\x6f\x41\162\x72\x61\x79") && $cgwqqcukiasoicmi->myagqecycsaiyqsk($gygawogosumsgmme, "\142\x65\146\x6f\162\x65\x54\157\x41\x72\162\x61\171")) { $kkeqqkkkqwkocsyu[$uusmaiomayssaecw] = $gygawogosumsgmme->sacmkccceuywoqsq($tsuauommsquiesmk, $ywmkwiwkosakssii); } $gaoqiuwsaoayggsa = $yyauwyaeewsickwk->kwuyaykukcmaqggg($uusmaiomayssaecw); if ($gaoqiuwsaoayggsa !== $uusmaiomayssaecw) { $kkeqqkkkqwkocsyu[$gaoqiuwsaoayggsa] = $gkyciwoiiisgywcs->unset($kkeqqkkkqwkocsyu, $uusmaiomayssaecw); } } $kkeqqkkkqwkocsyu = $this->uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); if ($tsuauommsquiesmk) { $kkeqqkkkqwkocsyu = array_filter($kkeqqkkkqwkocsyu); } return $kkeqqkkkqwkocsyu; } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { return $kkeqqkkkqwkocsyu; } }

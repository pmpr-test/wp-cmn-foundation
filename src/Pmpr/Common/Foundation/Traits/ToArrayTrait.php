<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b58eab716             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; trait ToArrayTrait { public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { } public final function sacmkccceuywoqsq(bool $tsuauommsquiesmk = false, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::skgoiqckokigcmug => true]); $this->qgsieamsswkgysow($ywmkwiwkosakssii); $kkeqqkkkqwkocsyu = get_object_vars($this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); foreach ($kkeqqkkkqwkocsyu as $uusmaiomayssaecw => $gygawogosumsgmme) { if ($ywmkwiwkosakssii[Constants::skgoiqckokigcmug] && $cgwqqcukiasoicmi->myagqecycsaiyqsk($gygawogosumsgmme, "\x74\x6f\x41\162\162\141\x79") && $cgwqqcukiasoicmi->myagqecycsaiyqsk($gygawogosumsgmme, "\141\146\x74\x65\x72\124\x6f\x41\x72\162\141\x79") && $cgwqqcukiasoicmi->myagqecycsaiyqsk($gygawogosumsgmme, "\x62\145\x66\x6f\x72\x65\x54\157\101\162\162\141\171")) { $kkeqqkkkqwkocsyu[$uusmaiomayssaecw] = $gygawogosumsgmme->sacmkccceuywoqsq($tsuauommsquiesmk, $ywmkwiwkosakssii); } $gaoqiuwsaoayggsa = $yyauwyaeewsickwk->kwuyaykukcmaqggg($uusmaiomayssaecw); if ($gaoqiuwsaoayggsa !== $uusmaiomayssaecw) { $kkeqqkkkqwkocsyu[$gaoqiuwsaoayggsa] = $gkyciwoiiisgywcs->unset($kkeqqkkkqwkocsyu, $uusmaiomayssaecw); } } $kkeqqkkkqwkocsyu = $this->uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); if ($tsuauommsquiesmk) { $kkeqqkkkqwkocsyu = array_filter($kkeqqkkkqwkocsyu); } return $kkeqqkkkqwkocsyu; } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { return $kkeqqkkkqwkocsyu; } }

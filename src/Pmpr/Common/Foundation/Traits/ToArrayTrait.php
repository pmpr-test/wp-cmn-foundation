<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e853d170784             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; trait ToArrayTrait { public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { } public final function sacmkccceuywoqsq(bool $tsuauommsquiesmk = false, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::uowmiwoiaoekusui => [], Constants::skgoiqckokigcmug => true]); $this->qgsieamsswkgysow($ywmkwiwkosakssii); $kkeqqkkkqwkocsyu = get_object_vars($this); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); $aowmesqseaiqimyu = $ywmkwiwkosakssii[Constants::uowmiwoiaoekusui] ?? []; foreach ($kkeqqkkkqwkocsyu as $uusmaiomayssaecw => $gygawogosumsgmme) { if ($aowmesqseaiqimyu && in_array($uusmaiomayssaecw, $aowmesqseaiqimyu, true)) { unset($kkeqqkkkqwkocsyu[$uusmaiomayssaecw]); continue; } if ($ywmkwiwkosakssii[Constants::skgoiqckokigcmug] && $cgwqqcukiasoicmi->myagqecycsaiyqsk($gygawogosumsgmme, 'toArray')) { $kkeqqkkkqwkocsyu[$uusmaiomayssaecw] = $gygawogosumsgmme->sacmkccceuywoqsq($tsuauommsquiesmk, $ywmkwiwkosakssii); } $gaoqiuwsaoayggsa = $yyauwyaeewsickwk->kwuyaykukcmaqggg($uusmaiomayssaecw); if ($gaoqiuwsaoayggsa !== $uusmaiomayssaecw) { $kkeqqkkkqwkocsyu[$gaoqiuwsaoayggsa] = $kkeqqkkkqwkocsyu[$uusmaiomayssaecw]; unset($kkeqqkkkqwkocsyu[$uusmaiomayssaecw]); } } $kkeqqkkkqwkocsyu = $this->uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); if ($tsuauommsquiesmk) { $kkeqqkkkqwkocsyu = array_filter($kkeqqkkkqwkocsyu); } return $kkeqqkkkqwkocsyu; } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { return $kkeqqkkkqwkocsyu; } }

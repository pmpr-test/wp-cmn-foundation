<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671269d6639fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; class Format extends Common { public function unserialize($icwicymcioeyeyek) { if (!empty($icwicymcioeyeyek)) { if (is_string($icwicymcioeyeyek)) { $ycqsugugqomewkke = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($icwicymcioeyeyek); if (!empty($ycqsugugqomewkke)) { $icwicymcioeyeyek = $ycqsugugqomewkke; } } else { if (is_array($icwicymcioeyeyek)) { foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $icwicymcioeyeyek[$uusmaiomayssaecw] = $this->unserialize($eqgoocgaqwqcimie); } } } } return $icwicymcioeyeyek; } public function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return !$this->eqieqemcascqscig($eqgoocgaqwqcimie); } public function ogomcyeyumwiqekm(string $uusmaiomayssaecw, $gcyiwacqwwqauegq, bool $cakygmaigwkcacyc = false) : bool { if (!is_array($gcyiwacqwwqauegq)) { $gcyiwacqwwqauegq = (array) $gcyiwacqwwqauegq; } if (empty($gcyiwacqwwqauegq)) { return false; } foreach ($gcyiwacqwwqauegq as $cksyqkosaoycogqe) { if ($cakygmaigwkcacyc) { return $uusmaiomayssaecw === $cksyqkosaoycogqe; } if (strpos($uusmaiomayssaecw, $cksyqkosaoycogqe) !== false) { return true; } } return false; } public function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return empty($eqgoocgaqwqcimie) || in_array($eqgoocgaqwqcimie, [Constants::OFF, Constants::ioyokcgwaowoqskk, 0, "\x30", false, "\x66\141\x6c\x73\145"], true); } public function wmcwegoisyeeosqu($eeamcawaiqocomwy) : bool { $eouekqmooogkoqoo = "\x2f\50\150\164\x74\160\174\x66\x74\x70\174\x68\164\x74\x70\163\51\72\134\57\x5c\57\x28\x5b\x5c\167\137\x2d\135\53\x28\x3f\x3a\x28\x3f\x3a\134\56\133\x5c\167\137\x2d\x5d\x2b\51\x2b\51\x29\50\133\x5c\167\56\54\100\x3f\x5e\x3d\x25\x26\72\134\x2f\x7e\53\x23\55\x5d\x2a\133\x5c\x77\100\77\x5e\75\x25\x26\134\x2f\x7e\53\43\55\x5d\51\x2f"; return is_string($eeamcawaiqocomwy) && filter_var($eeamcawaiqocomwy, FILTER_VALIDATE_URL) && preg_match($eouekqmooogkoqoo, $eeamcawaiqocomwy); } public function qawecuimqqcqwgsw($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\151\162\141\x6e") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\151\162\x61\156": return preg_match("\x2f\136\x28\134\x2b\71\70\x7c\60\x29\77\x39\134\x64\173\x39\175\44\57", $euueacigmgoqkimu); default: return $this->uqomuowmcuauuikc($euueacigmgoqkimu, null); } } public function uqomuowmcuauuikc($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\x69\x72\x61\x6e") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\151\x72\x61\x6e": return preg_match("\x2f\136\x30\133\61\x2d\70\135\173\62\54\175\x5b\x30\55\x39\x5d\x7b\70\54\175\x24\57", $euueacigmgoqkimu); default: $eomsgokgyssmwmai = strlen($euueacigmgoqkimu); return $eomsgokgyssmwmai <= 12 && $eomsgokgyssmwmai >= 10 && preg_match("\x2f\x5e\133\x2b\135\x2a\133\50\135\173\60\54\x31\175\133\60\x2d\71\x5d\173\61\54\64\175\x5b\51\135\173\60\54\61\175\x5b\x2d\x5c\x73\56\x30\55\71\x5d\x2a\x24\57", $euueacigmgoqkimu); } } public function wsggsqigawogiwky($sociqikgoyemqaac) : bool { if (function_exists("\155\142\x5f\x73\164\162\x70\157\x73")) { $ksaameoqigiaoigg = 0 === mb_strpos($sociqikgoyemqaac, "\x1f" . "\x8b" . "\10"); } else { $ksaameoqigiaoigg = 0 === strpos($sociqikgoyemqaac, "\37" . "\x8b" . "\10"); } return $ksaameoqigiaoigg; } public function qeegmakycwwycmcm($sociqikgoyemqaac) : bool { return strlen($sociqikgoyemqaac) === strlen(utf8_decode($sociqikgoyemqaac)); } public function aoaeiwswyagmesku($eeamcawaiqocomwy) : bool { $ooggiaqasyawsuks = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $egsumesakcaaukem = $qcsieyqqegaoocks->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $ccamueccusigaaio = $qcsieyqqegaoocks->gooqqcmsyseiaikc($eeamcawaiqocomwy); $wkwsmsgmkcmugoya = $ooggiaqasyawsuks->get($egsumesakcaaukem, "\x68\157\x73\x74"); $yukwwaakiyeueawg = $ooggiaqasyawsuks->get($ccamueccusigaaio, "\150\x6f\163\x74"); return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0; } public function gwckaecmqskyysui(array $auwuoyyagaiegwae = []) { $ucccueqywigcukcc = ''; if ($auwuoyyagaiegwae) { $gmigwwwmwemyaayy = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if ($eeamcawaiqocomwy = $yyauwyaeewsickwk->wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy)) { $auwuoyyagaiegwae[$momcykaoccoymeig] = preg_quote($eeamcawaiqocomwy, "\x2f"); } } $ucccueqywigcukcc = $yyauwyaeewsickwk->csqkegwecgkgyaqe($auwuoyyagaiegwae); } return $ucccueqywigcukcc; } public function gmccggksyyimcukm($eeamcawaiqocomwy) : string { $sogksuscggsicmac = ''; $ymkqyawksmqcgsei = explode("\x3f", $eeamcawaiqocomwy); $gaeqamemwmwsyukm = count($ymkqyawksmqcgsei); if ($gaeqamemwmwsyukm > 1) { if ($gaeqamemwmwsyukm === 2) { $sogksuscggsicmac = $ymkqyawksmqcgsei[1]; } else { $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy, PHP_URL_QUERY); } } if (!is_string($sogksuscggsicmac)) { $sogksuscggsicmac = ''; } return $sogksuscggsicmac; } public function iyooiokaaaqgesue(&$eeamcawaiqocomwy) : string { $agoaugssmsiumiym = $this->gmccggksyyimcukm($eeamcawaiqocomwy); if ($agoaugssmsiumiym) { $agoaugssmsiumiym = "\77{$agoaugssmsiumiym}"; $eeamcawaiqocomwy = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc($agoaugssmsiumiym, '', $eeamcawaiqocomwy); } return $agoaugssmsiumiym; } public function iuceiykuqcqkwsoa($euueacigmgoqkimu) : bool { $kuuugksiksqcaaaa = false; if (preg_match("\57\136\x5c\x64\173\61\60\x7d\x24\57", $euueacigmgoqkimu)) { $gioggcykgoikcwiy = (int) $euueacigmgoqkimu[9]; $qsmaqqyoggcuyukq = array_sum(array_map(static function ($iegmsyuiekaayqqy) use($euueacigmgoqkimu) { return (int) $euueacigmgoqkimu[$iegmsyuiekaayqqy] * (10 - $iegmsyuiekaayqqy); }, range(0, 8))) % 11; $kuuugksiksqcaaaa = $qsmaqqyoggcuyukq < 2 && $gioggcykgoikcwiy == $qsmaqqyoggcuyukq || $qsmaqqyoggcuyukq >= 2 && $gioggcykgoikcwiy + $qsmaqqyoggcuyukq == 11; } return $kuuugksiksqcaaaa; } public function qmyusgwkaqieouwi($sociqikgoyemqaac, $kqywgoqsmuswammk = null) : bool { $uuksaskqamgouosy = is_string($sociqikgoyemqaac) && $sociqikgoyemqaac && $sociqikgoyemqaac !== strip_tags($sociqikgoyemqaac); if ($uuksaskqamgouosy && $kqywgoqsmuswammk) { $uuksaskqamgouosy = $this->caokeucsksukesyo()->gkksucgseqqemesc()->has($sociqikgoyemqaac, $kqywgoqsmuswammk); } return $uuksaskqamgouosy; } public function miskwwyaikcioysg($icwicymcioeyeyek) { if (is_array($icwicymcioeyeyek) || is_object($icwicymcioeyeyek)) { array_walk($icwicymcioeyeyek, function (&$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->miskwwyaikcioysg($eqgoocgaqwqcimie); }); } else { if (is_string($icwicymcioeyeyek)) { $icwicymcioeyeyek = (int) $icwicymcioeyeyek; } } return $icwicymcioeyeyek; } public function okwemgucuqkiwiau($ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : object { return (object) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function ckscqqquyskscaaw(array $ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : array { return (array) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function mkcmkkskeeaskowy(string $eeamcawaiqocomwy = '') : string { return (string) str_replace(["\x68\x74\x74\x70\x3a\57\57", "\x68\x74\164\x70\x73\x3a\x2f\57", "\146\164\x70\x3a\x2f\x2f", "\57\x2f"], '', $eeamcawaiqocomwy); } public function aiwgeammgaegccoc(string $eeamcawaiqocomwy = '') : string { return (string) str_replace($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } public function yugsmaqmkekysqmu(string $eeamcawaiqocomwy, string $cgmsicimocaeggqg = '') : string { if (!$cgmsicimocaeggqg) { $cgmsicimocaeggqg = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim() ? "\x68\x74\x74\160\163" : "\x68\x74\164\160"; } if ($yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy)) { if (!isset($yiasugywggckywoa["\163\143\150\x65\155\141"])) { $eeamcawaiqocomwy = "{$cgmsicimocaeggqg}\72\57\57{$eeamcawaiqocomwy}"; } } return $eeamcawaiqocomwy; } }

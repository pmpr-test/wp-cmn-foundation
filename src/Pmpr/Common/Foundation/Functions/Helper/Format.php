<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4df75a3df             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; class Format extends Common { public function unserialize($icwicymcioeyeyek) { if (!empty($icwicymcioeyeyek)) { if (is_string($icwicymcioeyeyek)) { $ycqsugugqomewkke = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($icwicymcioeyeyek); if (!empty($ycqsugugqomewkke)) { $icwicymcioeyeyek = $ycqsugugqomewkke; } } else { if (is_array($icwicymcioeyeyek)) { foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $icwicymcioeyeyek[$uusmaiomayssaecw] = $this->unserialize($eqgoocgaqwqcimie); } } } } return $icwicymcioeyeyek; } public function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return !$this->eqieqemcascqscig($eqgoocgaqwqcimie); } public function ogomcyeyumwiqekm(string $uusmaiomayssaecw, $gcyiwacqwwqauegq, bool $cakygmaigwkcacyc = false) : bool { if (!is_array($gcyiwacqwwqauegq)) { $gcyiwacqwwqauegq = (array) $gcyiwacqwwqauegq; } if (empty($gcyiwacqwwqauegq)) { return false; } foreach ($gcyiwacqwwqauegq as $cksyqkosaoycogqe) { if ($cakygmaigwkcacyc) { return $uusmaiomayssaecw === $cksyqkosaoycogqe; } if (strpos($uusmaiomayssaecw, $cksyqkosaoycogqe) !== false) { return true; } } return false; } public function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return empty($eqgoocgaqwqcimie) || in_array($eqgoocgaqwqcimie, [Constants::OFF, Constants::ioyokcgwaowoqskk, 0, "\x30", false, "\146\x61\154\163\x65"], true); } public function wmcwegoisyeeosqu($eeamcawaiqocomwy) : bool { $eouekqmooogkoqoo = "\x2f\50\x68\x74\x74\x70\174\146\x74\x70\x7c\x68\164\x74\x70\163\x29\x3a\x5c\57\x5c\57\50\133\x5c\x77\137\55\135\53\50\77\72\x28\x3f\72\x5c\56\x5b\x5c\x77\137\55\x5d\53\51\x2b\51\x29\50\133\134\x77\x2e\54\100\x3f\x5e\x3d\x25\46\x3a\134\57\176\x2b\43\55\x5d\52\x5b\x5c\x77\100\x3f\x5e\x3d\x25\46\x5c\x2f\x7e\x2b\43\x2d\x5d\51\57"; return is_string($eeamcawaiqocomwy) && filter_var($eeamcawaiqocomwy, FILTER_VALIDATE_URL) && preg_match($eouekqmooogkoqoo, $eeamcawaiqocomwy); } public function qawecuimqqcqwgsw($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\x69\162\x61\x6e") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\151\162\x61\x6e": return preg_match("\57\136\50\134\x2b\71\70\x7c\60\x29\x3f\71\x5c\144\173\71\175\44\57", $euueacigmgoqkimu); default: return $this->uqomuowmcuauuikc($euueacigmgoqkimu, null); } } public function uqomuowmcuauuikc($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\151\162\x61\x6e") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\x69\x72\141\156": return preg_match("\57\x5e\x30\133\61\55\70\135\x7b\62\54\x7d\x5b\60\x2d\71\135\173\70\54\175\x24\57", $euueacigmgoqkimu); default: $eomsgokgyssmwmai = strlen($euueacigmgoqkimu); return $eomsgokgyssmwmai <= 12 && $eomsgokgyssmwmai >= 10 && preg_match("\57\x5e\133\53\135\52\133\50\135\x7b\x30\x2c\x31\175\133\x30\55\71\x5d\173\x31\54\x34\x7d\133\x29\x5d\x7b\60\54\61\x7d\133\x2d\x5c\x73\56\x30\55\x39\x5d\52\44\x2f", $euueacigmgoqkimu); } } public function wsggsqigawogiwky($sociqikgoyemqaac) : bool { if (function_exists("\x6d\x62\x5f\163\x74\x72\x70\157\163")) { $ksaameoqigiaoigg = 0 === mb_strpos($sociqikgoyemqaac, "\37" . "\x8b" . "\10"); } else { $ksaameoqigiaoigg = 0 === strpos($sociqikgoyemqaac, "\x1f" . "\x8b" . "\10"); } return $ksaameoqigiaoigg; } public function qeegmakycwwycmcm($sociqikgoyemqaac) : bool { return strlen($sociqikgoyemqaac) === strlen(utf8_decode($sociqikgoyemqaac)); } public function aoaeiwswyagmesku($eeamcawaiqocomwy) : bool { $ooggiaqasyawsuks = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $egsumesakcaaukem = $qcsieyqqegaoocks->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $ccamueccusigaaio = $qcsieyqqegaoocks->gooqqcmsyseiaikc($eeamcawaiqocomwy); $wkwsmsgmkcmugoya = $ooggiaqasyawsuks->get($egsumesakcaaukem, "\x68\x6f\x73\x74"); $yukwwaakiyeueawg = $ooggiaqasyawsuks->get($ccamueccusigaaio, "\x68\x6f\x73\x74"); return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0; } public function gwckaecmqskyysui(array $auwuoyyagaiegwae = []) { $ucccueqywigcukcc = ''; if ($auwuoyyagaiegwae) { $gmigwwwmwemyaayy = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if ($eeamcawaiqocomwy = $yyauwyaeewsickwk->wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy)) { $auwuoyyagaiegwae[$momcykaoccoymeig] = preg_quote($eeamcawaiqocomwy, "\x2f"); } } $ucccueqywigcukcc = $yyauwyaeewsickwk->csqkegwecgkgyaqe($auwuoyyagaiegwae); } return $ucccueqywigcukcc; } public function gmccggksyyimcukm($eeamcawaiqocomwy) : string { $sogksuscggsicmac = ''; $ymkqyawksmqcgsei = explode("\x3f", $eeamcawaiqocomwy); $gaeqamemwmwsyukm = count($ymkqyawksmqcgsei); if ($gaeqamemwmwsyukm > 1) { if ($gaeqamemwmwsyukm === 2) { $sogksuscggsicmac = $ymkqyawksmqcgsei[1]; } else { $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy, PHP_URL_QUERY); } } if (!is_string($sogksuscggsicmac)) { $sogksuscggsicmac = ''; } return $sogksuscggsicmac; } public function iyooiokaaaqgesue(&$eeamcawaiqocomwy) : string { $agoaugssmsiumiym = $this->gmccggksyyimcukm($eeamcawaiqocomwy); if ($agoaugssmsiumiym) { $agoaugssmsiumiym = "\77{$agoaugssmsiumiym}"; $eeamcawaiqocomwy = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc($agoaugssmsiumiym, '', $eeamcawaiqocomwy); } return $agoaugssmsiumiym; } public function iuceiykuqcqkwsoa($euueacigmgoqkimu) : bool { $kuuugksiksqcaaaa = false; if (preg_match("\x2f\136\134\144\173\61\60\x7d\44\57", $euueacigmgoqkimu)) { $gioggcykgoikcwiy = (int) $euueacigmgoqkimu[9]; $qsmaqqyoggcuyukq = array_sum(array_map(static function ($iegmsyuiekaayqqy) use($euueacigmgoqkimu) { return (int) $euueacigmgoqkimu[$iegmsyuiekaayqqy] * (10 - $iegmsyuiekaayqqy); }, range(0, 8))) % 11; $kuuugksiksqcaaaa = $qsmaqqyoggcuyukq < 2 && $gioggcykgoikcwiy == $qsmaqqyoggcuyukq || $qsmaqqyoggcuyukq >= 2 && $gioggcykgoikcwiy + $qsmaqqyoggcuyukq == 11; } return $kuuugksiksqcaaaa; } public function qmyusgwkaqieouwi($sociqikgoyemqaac, $kqywgoqsmuswammk = null) : bool { $uuksaskqamgouosy = is_string($sociqikgoyemqaac) && $sociqikgoyemqaac && $sociqikgoyemqaac !== strip_tags($sociqikgoyemqaac); if ($uuksaskqamgouosy && $kqywgoqsmuswammk) { $uuksaskqamgouosy = $this->caokeucsksukesyo()->gkksucgseqqemesc()->has($sociqikgoyemqaac, $kqywgoqsmuswammk); } return $uuksaskqamgouosy; } public function miskwwyaikcioysg($icwicymcioeyeyek) { if (is_array($icwicymcioeyeyek) || is_object($icwicymcioeyeyek)) { array_walk($icwicymcioeyeyek, function (&$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->miskwwyaikcioysg($eqgoocgaqwqcimie); }); } else { if (is_string($icwicymcioeyeyek)) { $icwicymcioeyeyek = (int) $icwicymcioeyeyek; } } return $icwicymcioeyeyek; } public function okwemgucuqkiwiau($ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : object { return (object) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function ckscqqquyskscaaw(array $ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : array { return (array) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function mkcmkkskeeaskowy(string $eeamcawaiqocomwy = '') : string { return (string) str_replace(["\x68\164\x74\x70\x3a\x2f\57", "\150\x74\164\x70\163\72\57\x2f", "\146\164\x70\x3a\57\57", "\57\57"], '', $eeamcawaiqocomwy); } public function aiwgeammgaegccoc(string $eeamcawaiqocomwy = '') : string { return (string) str_replace($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } public function yugsmaqmkekysqmu(string $eeamcawaiqocomwy, string $cgmsicimocaeggqg = '') : string { if (!$cgmsicimocaeggqg) { $cgmsicimocaeggqg = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim() ? "\x68\164\x74\160\x73" : "\150\x74\x74\x70"; } if ($yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy)) { if (!isset($yiasugywggckywoa["\x73\x63\x68\x65\155\141"])) { $eeamcawaiqocomwy = "{$cgmsicimocaeggqg}\72\x2f\x2f{$eeamcawaiqocomwy}"; } } return $eeamcawaiqocomwy; } }

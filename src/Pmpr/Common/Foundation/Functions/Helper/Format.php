<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; class Format extends Common { public function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return !$this->eqieqemcascqscig($eqgoocgaqwqcimie); } public function ogomcyeyumwiqekm(string $uusmaiomayssaecw, $gcyiwacqwwqauegq, bool $cakygmaigwkcacyc = false) : bool { if (is_array($gcyiwacqwwqauegq)) { goto yemqwgwwogceuekc; } $gcyiwacqwwqauegq = (array) $gcyiwacqwwqauegq; yemqwgwwogceuekc: if (!empty($gcyiwacqwwqauegq)) { goto bowssiaeccamuiiq; } return false; bowssiaeccamuiiq: foreach ($gcyiwacqwwqauegq as $cksyqkosaoycogqe) { if (!$cakygmaigwkcacyc) { goto mgqumoaokymooyou; } return $uusmaiomayssaecw === $cksyqkosaoycogqe; mgqumoaokymooyou: if (!(strpos($uusmaiomayssaecw, $cksyqkosaoycogqe) !== false)) { goto gooymcgycisyuowi; } return true; gooymcgycisyuowi: ieiwswkoqcqaykik: } awgqqokeqkaaqsko: return false; } public function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return empty($eqgoocgaqwqcimie) || in_array($eqgoocgaqwqcimie, [Constants::OFF, Constants::ioyokcgwaowoqskk, 0, "\x30", false, "\146\x61\x6c\163\x65"], true); } public function wmcwegoisyeeosqu($eeamcawaiqocomwy) : bool { $eouekqmooogkoqoo = "\x2f\50\150\x74\x74\x70\x7c\x66\164\x70\174\x68\164\x74\160\163\51\72\x5c\57\134\x2f\50\133\x5c\x77\x5f\55\x5d\x2b\50\x3f\72\x28\77\x3a\134\56\x5b\x5c\167\137\55\135\x2b\x29\53\x29\51\x28\x5b\x5c\x77\56\54\100\77\136\75\x25\x26\72\134\x2f\x7e\x2b\43\x2d\x5d\52\x5b\x5c\167\x40\77\136\x3d\x25\46\x5c\x2f\176\53\x23\55\135\51\57"; return is_string($eeamcawaiqocomwy) && filter_var($eeamcawaiqocomwy, FILTER_VALIDATE_URL) && preg_match($eouekqmooogkoqoo, $eeamcawaiqocomwy); } public function qawecuimqqcqwgsw($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\x69\162\141\x6e") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\x69\x72\141\156": return preg_match("\57\136\50\134\53\x39\x38\174\x30\51\x3f\x39\x5c\144\x7b\71\175\44\57", $euueacigmgoqkimu); default: return $this->uqomuowmcuauuikc($euueacigmgoqkimu, null); } imciyymqukkwemqa: ikekioqaccggcwko: } public function uqomuowmcuauuikc($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\x69\162\x61\x6e") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\151\162\x61\x6e": return preg_match("\57\x5e\60\x5b\61\55\70\135\x7b\x32\x2c\x7d\133\x30\x2d\x39\135\x7b\70\54\x7d\44\57", $euueacigmgoqkimu); default: $eomsgokgyssmwmai = strlen($euueacigmgoqkimu); return $eomsgokgyssmwmai <= 12 && $eomsgokgyssmwmai >= 10 && preg_match("\x2f\x5e\133\53\135\x2a\x5b\x28\x5d\173\x30\x2c\x31\x7d\133\60\55\x39\135\173\61\54\64\x7d\x5b\x29\135\x7b\60\54\61\x7d\133\55\134\163\56\60\55\71\135\52\44\57", $euueacigmgoqkimu); } oqwiceqiyckwgqkw: muakuckcsywcyuao: } public function wsggsqigawogiwky($sociqikgoyemqaac) : bool { if (function_exists("\155\x62\137\x73\164\x72\160\x6f\163")) { goto ukwkqeoyuoageuwg; } $ksaameoqigiaoigg = 0 === strpos($sociqikgoyemqaac, "\37" . "\213" . "\x8"); goto saosiwmguyawuouy; ukwkqeoyuoageuwg: $ksaameoqigiaoigg = 0 === mb_strpos($sociqikgoyemqaac, "\37" . "\x8b" . "\x8"); saosiwmguyawuouy: return $ksaameoqigiaoigg; } public function qeegmakycwwycmcm($sociqikgoyemqaac) : bool { return strlen($sociqikgoyemqaac) === strlen(utf8_decode($sociqikgoyemqaac)); } public function aoaeiwswyagmesku($eeamcawaiqocomwy) : bool { $ooggiaqasyawsuks = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $egsumesakcaaukem = $qcsieyqqegaoocks->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $ccamueccusigaaio = $qcsieyqqegaoocks->gooqqcmsyseiaikc($eeamcawaiqocomwy); $wkwsmsgmkcmugoya = $ooggiaqasyawsuks->get($egsumesakcaaukem, "\150\x6f\163\x74"); $yukwwaakiyeueawg = $ooggiaqasyawsuks->get($ccamueccusigaaio, "\150\157\163\x74"); return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0; } public function gwckaecmqskyysui(array $auwuoyyagaiegwae = []) { $ucccueqywigcukcc = ''; if (!$auwuoyyagaiegwae) { goto wkceacsqeyiimcus; } $gmigwwwmwemyaayy = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if (!($eeamcawaiqocomwy = $yyauwyaeewsickwk->wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy))) { goto qgwcisoeysiwakak; } $auwuoyyagaiegwae[$momcykaoccoymeig] = preg_quote($eeamcawaiqocomwy, "\57"); qgwcisoeysiwakak: ukeyisqesuoscwke: } wwsasogecmwwikws: $ucccueqywigcukcc = $yyauwyaeewsickwk->csqkegwecgkgyaqe($auwuoyyagaiegwae); wkceacsqeyiimcus: return $ucccueqywigcukcc; } public function gmccggksyyimcukm($eeamcawaiqocomwy) : string { $sogksuscggsicmac = ''; $ymkqyawksmqcgsei = explode("\77", $eeamcawaiqocomwy); $gaeqamemwmwsyukm = count($ymkqyawksmqcgsei); if (!($gaeqamemwmwsyukm > 1)) { goto icqkceioeysykgua; } if ($gaeqamemwmwsyukm === 2) { goto acycwqqmgeygymkw; } $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy, PHP_URL_QUERY); goto qiayggmakgsuwwsm; acycwqqmgeygymkw: $sogksuscggsicmac = $ymkqyawksmqcgsei[1]; qiayggmakgsuwwsm: icqkceioeysykgua: if (is_string($sogksuscggsicmac)) { goto kqkgwqkwqeokgagk; } $sogksuscggsicmac = ''; kqkgwqkwqeokgagk: return $sogksuscggsicmac; } public function iyooiokaaaqgesue(&$eeamcawaiqocomwy) : string { $agoaugssmsiumiym = $this->gmccggksyyimcukm($eeamcawaiqocomwy); if (!$agoaugssmsiumiym) { goto yaqgciyuusquaeea; } $agoaugssmsiumiym = "\x3f{$agoaugssmsiumiym}"; $eeamcawaiqocomwy = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc($agoaugssmsiumiym, '', $eeamcawaiqocomwy); yaqgciyuusquaeea: return $agoaugssmsiumiym; } public function iuceiykuqcqkwsoa($euueacigmgoqkimu) : bool { $kuuugksiksqcaaaa = false; if (!preg_match("\57\136\x5c\144\x7b\x31\x30\175\44\x2f", $euueacigmgoqkimu)) { goto cewamoymcqkmsswi; } $gioggcykgoikcwiy = (int) $euueacigmgoqkimu[9]; $qsmaqqyoggcuyukq = array_sum(array_map(static function ($iegmsyuiekaayqqy) use($euueacigmgoqkimu) { return (int) $euueacigmgoqkimu[$iegmsyuiekaayqqy] * (10 - $iegmsyuiekaayqqy); }, range(0, 8))) % 11; $kuuugksiksqcaaaa = $qsmaqqyoggcuyukq < 2 && $gioggcykgoikcwiy == $qsmaqqyoggcuyukq || $qsmaqqyoggcuyukq >= 2 && $gioggcykgoikcwiy + $qsmaqqyoggcuyukq == 11; cewamoymcqkmsswi: return $kuuugksiksqcaaaa; } public function qmyusgwkaqieouwi($sociqikgoyemqaac, $kqywgoqsmuswammk = null) : bool { $uuksaskqamgouosy = is_string($sociqikgoyemqaac) && $sociqikgoyemqaac && $sociqikgoyemqaac !== strip_tags($sociqikgoyemqaac); if (!($uuksaskqamgouosy && $kqywgoqsmuswammk)) { goto gaagyegguueymiec; } $uuksaskqamgouosy = $this->caokeucsksukesyo()->gkksucgseqqemesc()->has($sociqikgoyemqaac, $kqywgoqsmuswammk); gaagyegguueymiec: return $uuksaskqamgouosy; } public function miskwwyaikcioysg($icwicymcioeyeyek) { if (is_array($icwicymcioeyeyek) || is_object($icwicymcioeyeyek)) { goto gwwyoyaqosoggkcu; } if (!is_string($icwicymcioeyeyek)) { goto sosqqwiqmeqkwcsm; } $icwicymcioeyeyek = (int) $icwicymcioeyeyek; sosqqwiqmeqkwcsm: goto wwwkcwcigkeqiqwo; gwwyoyaqosoggkcu: array_walk($icwicymcioeyeyek, function (&$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->miskwwyaikcioysg($eqgoocgaqwqcimie); }); wwwkcwcigkeqiqwo: return $icwicymcioeyeyek; } public function okwemgucuqkiwiau($ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : object { return (object) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function ckscqqquyskscaaw(array $ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : array { return (array) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function mkcmkkskeeaskowy(string $eeamcawaiqocomwy = '') : string { return (string) str_replace(["\150\164\164\x70\72\x2f\57", "\150\x74\164\160\x73\72\57\x2f", "\x66\x74\160\x3a\57\x2f", "\x2f\57"], '', $eeamcawaiqocomwy); } public function aiwgeammgaegccoc(string $eeamcawaiqocomwy = '') : string { return (string) str_replace($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } public function yugsmaqmkekysqmu(string $eeamcawaiqocomwy, string $cgmsicimocaeggqg = '') : string { if ($cgmsicimocaeggqg) { goto kkmeaociiyukweka; } $cgmsicimocaeggqg = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim() ? "\150\x74\x74\160\x73" : "\150\164\164\160"; kkmeaociiyukweka: if (!($yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy))) { goto cecsiuuukuegaqgq; } if (isset($yiasugywggckywoa["\163\143\x68\x65\155\x61"])) { goto cuoskwammceoauak; } $eeamcawaiqocomwy = "{$cgmsicimocaeggqg}\x3a\x2f\x2f{$eeamcawaiqocomwy}"; cuoskwammceoauak: cecsiuuukuegaqgq: return $eeamcawaiqocomwy; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e176fddf2d5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; class Format extends Common { public function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return !$this->eqieqemcascqscig($eqgoocgaqwqcimie); } public function ogomcyeyumwiqekm(string $uusmaiomayssaecw, $gcyiwacqwwqauegq, bool $cakygmaigwkcacyc = false) : bool { if (is_array($gcyiwacqwwqauegq)) { goto qgoaooycwyiyycoa; } $gcyiwacqwwqauegq = (array) $gcyiwacqwwqauegq; qgoaooycwyiyycoa: if (!empty($gcyiwacqwwqauegq)) { goto okacwwwygceucqsg; } return false; okacwwwygceucqsg: foreach ($gcyiwacqwwqauegq as $cksyqkosaoycogqe) { if (!$cakygmaigwkcacyc) { goto swkeqqkqioecmgia; } return $uusmaiomayssaecw === $cksyqkosaoycogqe; swkeqqkqioecmgia: if (!(strpos($uusmaiomayssaecw, $cksyqkosaoycogqe) !== false)) { goto yomuicigicmugscy; } return true; yomuicigicmugscy: gcykaeaisuqiqyqi: } igosooeimygcmois: return false; } public function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return empty($eqgoocgaqwqcimie) || in_array($eqgoocgaqwqcimie, [Constants::OFF, Constants::ioyokcgwaowoqskk], true); } public function wmcwegoisyeeosqu($eeamcawaiqocomwy) : bool { $eouekqmooogkoqoo = "\57\50\150\164\x74\x70\x7c\146\164\x70\x7c\150\x74\164\160\163\x29\x3a\134\x2f\134\57\50\x5b\x5c\167\x5f\x2d\x5d\x2b\x28\x3f\72\50\77\x3a\x5c\56\x5b\134\x77\137\x2d\x5d\x2b\51\x2b\x29\x29\50\x5b\x5c\x77\56\54\100\x3f\x5e\x3d\x25\46\72\x5c\x2f\176\53\43\55\x5d\52\133\x5c\x77\x40\77\x5e\x3d\45\x26\x5c\x2f\176\53\x23\55\x5d\x29\57"; return is_string($eeamcawaiqocomwy) && filter_var($eeamcawaiqocomwy, FILTER_VALIDATE_URL) && preg_match($eouekqmooogkoqoo, $eeamcawaiqocomwy); } public function qawecuimqqcqwgsw($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\x69\162\x61\x6e") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\151\162\141\156": return preg_match("\x2f\x5e\50\x5c\x2b\x39\70\174\60\x29\x3f\x39\134\144\x7b\71\x7d\x24\57", $euueacigmgoqkimu); default: return $this->uqomuowmcuauuikc($euueacigmgoqkimu, null); } geqwascicmuguaom: cyssqgqaoaasmogc: } public function uqomuowmcuauuikc($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\151\162\141\x6e") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\151\x72\x61\x6e": return preg_match("\57\x5e\60\133\61\x2d\70\x5d\173\62\x2c\175\x5b\x30\x2d\71\135\173\70\x2c\175\44\57", $euueacigmgoqkimu); default: $eomsgokgyssmwmai = strlen($euueacigmgoqkimu); return $eomsgokgyssmwmai <= 12 && $eomsgokgyssmwmai >= 10 && preg_match("\x2f\x5e\x5b\53\x5d\52\x5b\50\135\173\60\54\x31\175\133\x30\55\x39\135\173\61\x2c\x34\175\133\x29\x5d\x7b\x30\54\x31\x7d\133\x2d\x5c\x73\56\x30\55\71\x5d\x2a\44\57", $euueacigmgoqkimu); } yoeqaicysswwgkmm: qgyeyyagaeyoequw: } public function wsggsqigawogiwky($sociqikgoyemqaac) : bool { if (function_exists("\x6d\x62\x5f\163\x74\162\x70\157\x73")) { goto okaiokeeaqccisaq; } $ksaameoqigiaoigg = 0 === strpos($sociqikgoyemqaac, "\37" . "\x8b" . "\x8"); goto ugseakwywkuwgyug; okaiokeeaqccisaq: $ksaameoqigiaoigg = 0 === mb_strpos($sociqikgoyemqaac, "\37" . "\213" . "\10"); ugseakwywkuwgyug: return $ksaameoqigiaoigg; } public function qeegmakycwwycmcm($sociqikgoyemqaac) : bool { return strlen($sociqikgoyemqaac) === strlen(utf8_decode($sociqikgoyemqaac)); } public function aoaeiwswyagmesku($eeamcawaiqocomwy) : bool { $ooggiaqasyawsuks = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $egsumesakcaaukem = $qcsieyqqegaoocks->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $ccamueccusigaaio = $qcsieyqqegaoocks->gooqqcmsyseiaikc($eeamcawaiqocomwy); $wkwsmsgmkcmugoya = $ooggiaqasyawsuks->get($egsumesakcaaukem, "\150\157\x73\164"); $yukwwaakiyeueawg = $ooggiaqasyawsuks->get($ccamueccusigaaio, "\x68\157\x73\164"); return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0; } public function gwckaecmqskyysui(array $auwuoyyagaiegwae = []) { $ucccueqywigcukcc = ''; if (!$auwuoyyagaiegwae) { goto kwcyggeukmgacqsy; } $gmigwwwmwemyaayy = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if (!($eeamcawaiqocomwy = $yyauwyaeewsickwk->wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy))) { goto mumeawggkmqsowae; } $auwuoyyagaiegwae[$momcykaoccoymeig] = preg_quote($eeamcawaiqocomwy, "\57"); mumeawggkmqsowae: ckaggwgwsyowuuem: } eecyiiwsqomoggmq: $ucccueqywigcukcc = $yyauwyaeewsickwk->csqkegwecgkgyaqe($auwuoyyagaiegwae); kwcyggeukmgacqsy: return $ucccueqywigcukcc; } public function gmccggksyyimcukm($eeamcawaiqocomwy) : string { $sogksuscggsicmac = ''; $ymkqyawksmqcgsei = explode("\77", $eeamcawaiqocomwy); $gaeqamemwmwsyukm = count($ymkqyawksmqcgsei); if (!($gaeqamemwmwsyukm > 1)) { goto yeiawaisoceoysau; } if ($gaeqamemwmwsyukm === 2) { goto isqokqgukyemmqcg; } $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy, PHP_URL_QUERY); goto gemuuqmegqkkgeua; isqokqgukyemmqcg: $sogksuscggsicmac = $ymkqyawksmqcgsei[1]; gemuuqmegqkkgeua: yeiawaisoceoysau: if (is_string($sogksuscggsicmac)) { goto kyiewmuguyyccsca; } $sogksuscggsicmac = ''; kyiewmuguyyccsca: return $sogksuscggsicmac; } public function iyooiokaaaqgesue(&$eeamcawaiqocomwy) : string { $agoaugssmsiumiym = $this->gmccggksyyimcukm($eeamcawaiqocomwy); if (!$agoaugssmsiumiym) { goto ecimugmwcawqmyaa; } $agoaugssmsiumiym = "\77{$agoaugssmsiumiym}"; $eeamcawaiqocomwy = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc($agoaugssmsiumiym, '', $eeamcawaiqocomwy); ecimugmwcawqmyaa: return $agoaugssmsiumiym; } public function iuceiykuqcqkwsoa($euueacigmgoqkimu) : bool { $kuuugksiksqcaaaa = false; if (!preg_match("\x2f\136\134\x64\173\61\60\175\44\57", $euueacigmgoqkimu)) { goto msieagoikksumcwa; } $gioggcykgoikcwiy = (int) $euueacigmgoqkimu[9]; $qsmaqqyoggcuyukq = array_sum(array_map(static function ($iegmsyuiekaayqqy) use($euueacigmgoqkimu) { return (int) $euueacigmgoqkimu[$iegmsyuiekaayqqy] * (10 - $iegmsyuiekaayqqy); }, range(0, 8))) % 11; $kuuugksiksqcaaaa = $qsmaqqyoggcuyukq < 2 && $gioggcykgoikcwiy == $qsmaqqyoggcuyukq || $qsmaqqyoggcuyukq >= 2 && $gioggcykgoikcwiy + $qsmaqqyoggcuyukq == 11; msieagoikksumcwa: return $kuuugksiksqcaaaa; } public function qmyusgwkaqieouwi($sociqikgoyemqaac, $kqywgoqsmuswammk = null) : bool { $uuksaskqamgouosy = is_string($sociqikgoyemqaac) && $sociqikgoyemqaac && $sociqikgoyemqaac !== strip_tags($sociqikgoyemqaac); if (!($uuksaskqamgouosy && $kqywgoqsmuswammk)) { goto ygywowuyoygiiqaq; } $uuksaskqamgouosy = $this->caokeucsksukesyo()->gkksucgseqqemesc()->has($sociqikgoyemqaac, $kqywgoqsmuswammk); ygywowuyoygiiqaq: return $uuksaskqamgouosy; } public function miskwwyaikcioysg($icwicymcioeyeyek) { if (is_array($icwicymcioeyeyek) || is_object($icwicymcioeyeyek)) { goto uooisauooikkciom; } if (!is_string($icwicymcioeyeyek)) { goto imwcikaiagkakiic; } $icwicymcioeyeyek = (int) $icwicymcioeyeyek; imwcikaiagkakiic: goto ymkoykouaqiusygo; uooisauooikkciom: array_walk($icwicymcioeyeyek, function (&$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->miskwwyaikcioysg($eqgoocgaqwqcimie); }); ymkoykouaqiusygo: return $icwicymcioeyeyek; } public function okwemgucuqkiwiau($ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : object { return (object) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function ckscqqquyskscaaw(array $ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : array { return (array) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function mkcmkkskeeaskowy(string $eeamcawaiqocomwy = '') : string { return (string) str_replace(["\x68\164\164\x70\72\x2f\x2f", "\150\164\x74\160\163\72\57\x2f", "\146\x74\160\72\x2f\x2f", "\x2f\x2f"], '', $eeamcawaiqocomwy); } public function aiwgeammgaegccoc(string $eeamcawaiqocomwy = '') : string { return (string) str_replace($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } public function yugsmaqmkekysqmu(string $eeamcawaiqocomwy, string $cgmsicimocaeggqg = '') : string { if ($cgmsicimocaeggqg) { goto eeoiyiuccooeigmk; } $cgmsicimocaeggqg = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim() ? "\150\164\164\x70\x73" : "\x68\x74\164\160"; eeoiyiuccooeigmk: if (!($yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy))) { goto wqyymgoekecmskmm; } if (isset($yiasugywggckywoa["\x73\143\150\145\x6d\x61"])) { goto owkyiywsooiwewgw; } $eeamcawaiqocomwy = "{$cgmsicimocaeggqg}\72\57\x2f{$eeamcawaiqocomwy}"; owkyiywsooiwewgw: wqyymgoekecmskmm: return $eeamcawaiqocomwy; } }

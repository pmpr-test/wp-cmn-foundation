<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670520dfc3785             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; class Format extends Common { public function unserialize($icwicymcioeyeyek) { if (empty($icwicymcioeyeyek)) { goto iyeswqeqcsmsoueq; } if (is_string($icwicymcioeyeyek)) { goto msuyygiskkumokec; } if (!is_array($icwicymcioeyeyek)) { goto mowauiysyiciqaaa; } foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $icwicymcioeyeyek[$uusmaiomayssaecw] = $this->unserialize($eqgoocgaqwqcimie); wiiyageyqowkmmko: } ayggiggmcqckqwom: mowauiysyiciqaaa: goto ggkgseywksemuogc; msuyygiskkumokec: $ycqsugugqomewkke = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($icwicymcioeyeyek); if (empty($ycqsugugqomewkke)) { goto ogywsgmqcgioaoqk; } $icwicymcioeyeyek = $ycqsugugqomewkke; ogywsgmqcgioaoqk: ggkgseywksemuogc: iyeswqeqcsmsoueq: return $icwicymcioeyeyek; } public function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return !$this->eqieqemcascqscig($eqgoocgaqwqcimie); } public function ogomcyeyumwiqekm(string $uusmaiomayssaecw, $gcyiwacqwwqauegq, bool $cakygmaigwkcacyc = false) : bool { if (is_array($gcyiwacqwwqauegq)) { goto eiekcqosmyqmwqag; } $gcyiwacqwwqauegq = (array) $gcyiwacqwwqauegq; eiekcqosmyqmwqag: if (!empty($gcyiwacqwwqauegq)) { goto mgscyaiwekksacco; } return false; mgscyaiwekksacco: foreach ($gcyiwacqwwqauegq as $cksyqkosaoycogqe) { if (!$cakygmaigwkcacyc) { goto ggoquyyseekiwukq; } return $uusmaiomayssaecw === $cksyqkosaoycogqe; ggoquyyseekiwukq: if (!(strpos($uusmaiomayssaecw, $cksyqkosaoycogqe) !== false)) { goto dwciioycickkwawq; } return true; dwciioycickkwawq: keiciayiyqsemsys: } sykwygmouoikuyws: return false; } public function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return empty($eqgoocgaqwqcimie) || in_array($eqgoocgaqwqcimie, [Constants::OFF, Constants::ioyokcgwaowoqskk, 0, "\x30", false, "\146\141\x6c\x73\x65"], true); } public function wmcwegoisyeeosqu($eeamcawaiqocomwy) : bool { $eouekqmooogkoqoo = "\x2f\50\150\x74\x74\x70\174\146\164\160\x7c\x68\164\164\x70\x73\x29\x3a\x5c\57\x5c\x2f\50\133\x5c\x77\137\55\135\x2b\x28\77\x3a\x28\77\x3a\134\56\x5b\x5c\167\x5f\55\135\x2b\x29\x2b\x29\x29\50\133\x5c\167\56\x2c\x40\x3f\x5e\75\45\46\x3a\x5c\57\176\x2b\43\x2d\135\52\133\x5c\x77\100\77\136\75\45\x26\x5c\57\176\53\43\55\135\x29\57"; return is_string($eeamcawaiqocomwy) && filter_var($eeamcawaiqocomwy, FILTER_VALIDATE_URL) && preg_match($eouekqmooogkoqoo, $eeamcawaiqocomwy); } public function qawecuimqqcqwgsw($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\151\x72\141\156") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\x69\162\x61\156": return preg_match("\57\x5e\x28\x5c\53\x39\70\174\x30\x29\x3f\71\134\144\x7b\x39\175\44\x2f", $euueacigmgoqkimu); default: return $this->uqomuowmcuauuikc($euueacigmgoqkimu, null); } ysiuiuqawkaaamus: yoociieskmuucgms: } public function uqomuowmcuauuikc($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\x69\x72\141\156") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\x69\162\x61\x6e": return preg_match("\x2f\136\x30\133\x31\55\x38\135\173\62\54\x7d\133\60\55\x39\x5d\x7b\70\x2c\x7d\44\57", $euueacigmgoqkimu); default: $eomsgokgyssmwmai = strlen($euueacigmgoqkimu); return $eomsgokgyssmwmai <= 12 && $eomsgokgyssmwmai >= 10 && preg_match("\x2f\136\133\x2b\x5d\x2a\x5b\x28\135\173\60\x2c\61\x7d\x5b\x30\x2d\x39\135\x7b\61\x2c\x34\x7d\x5b\51\x5d\173\x30\x2c\61\x7d\x5b\55\x5c\x73\x2e\60\55\x39\x5d\x2a\44\x2f", $euueacigmgoqkimu); } okceyucmoigyokyy: qooykiaywemimcke: } public function wsggsqigawogiwky($sociqikgoyemqaac) : bool { if (function_exists("\x6d\142\x5f\x73\x74\162\x70\x6f\163")) { goto uecmkggsueeiyawk; } $ksaameoqigiaoigg = 0 === strpos($sociqikgoyemqaac, "\37" . "\x8b" . "\10"); goto iyakeemwaiqeueme; uecmkggsueeiyawk: $ksaameoqigiaoigg = 0 === mb_strpos($sociqikgoyemqaac, "\37" . "\x8b" . "\10"); iyakeemwaiqeueme: return $ksaameoqigiaoigg; } public function qeegmakycwwycmcm($sociqikgoyemqaac) : bool { return strlen($sociqikgoyemqaac) === strlen(utf8_decode($sociqikgoyemqaac)); } public function aoaeiwswyagmesku($eeamcawaiqocomwy) : bool { $ooggiaqasyawsuks = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $egsumesakcaaukem = $qcsieyqqegaoocks->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $ccamueccusigaaio = $qcsieyqqegaoocks->gooqqcmsyseiaikc($eeamcawaiqocomwy); $wkwsmsgmkcmugoya = $ooggiaqasyawsuks->get($egsumesakcaaukem, "\x68\157\163\x74"); $yukwwaakiyeueawg = $ooggiaqasyawsuks->get($ccamueccusigaaio, "\150\157\163\x74"); return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0; } public function gwckaecmqskyysui(array $auwuoyyagaiegwae = []) { $ucccueqywigcukcc = ''; if (!$auwuoyyagaiegwae) { goto wimggeysyugwwkca; } $gmigwwwmwemyaayy = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if (!($eeamcawaiqocomwy = $yyauwyaeewsickwk->wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy))) { goto iekesyeicomwcuas; } $auwuoyyagaiegwae[$momcykaoccoymeig] = preg_quote($eeamcawaiqocomwy, "\57"); iekesyeicomwcuas: jgaoqcmiqagoiuko: } ouuuacyewgmocwsc: $ucccueqywigcukcc = $yyauwyaeewsickwk->csqkegwecgkgyaqe($auwuoyyagaiegwae); wimggeysyugwwkca: return $ucccueqywigcukcc; } public function gmccggksyyimcukm($eeamcawaiqocomwy) : string { $sogksuscggsicmac = ''; $ymkqyawksmqcgsei = explode("\77", $eeamcawaiqocomwy); $gaeqamemwmwsyukm = count($ymkqyawksmqcgsei); if (!($gaeqamemwmwsyukm > 1)) { goto iyekgiaayeasoggw; } if ($gaeqamemwmwsyukm === 2) { goto oycikycyewimcaew; } $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy, PHP_URL_QUERY); goto sqokyowsuawgkusy; oycikycyewimcaew: $sogksuscggsicmac = $ymkqyawksmqcgsei[1]; sqokyowsuawgkusy: iyekgiaayeasoggw: if (is_string($sogksuscggsicmac)) { goto cwsgieeaugwciiwu; } $sogksuscggsicmac = ''; cwsgieeaugwciiwu: return $sogksuscggsicmac; } public function iyooiokaaaqgesue(&$eeamcawaiqocomwy) : string { $agoaugssmsiumiym = $this->gmccggksyyimcukm($eeamcawaiqocomwy); if (!$agoaugssmsiumiym) { goto wiigoqowismumcsm; } $agoaugssmsiumiym = "\77{$agoaugssmsiumiym}"; $eeamcawaiqocomwy = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc($agoaugssmsiumiym, '', $eeamcawaiqocomwy); wiigoqowismumcsm: return $agoaugssmsiumiym; } public function iuceiykuqcqkwsoa($euueacigmgoqkimu) : bool { $kuuugksiksqcaaaa = false; if (!preg_match("\57\x5e\134\x64\x7b\x31\x30\x7d\44\x2f", $euueacigmgoqkimu)) { goto mwkcmgksoyycumos; } $gioggcykgoikcwiy = (int) $euueacigmgoqkimu[9]; $qsmaqqyoggcuyukq = array_sum(array_map(static function ($iegmsyuiekaayqqy) use($euueacigmgoqkimu) { return (int) $euueacigmgoqkimu[$iegmsyuiekaayqqy] * (10 - $iegmsyuiekaayqqy); }, range(0, 8))) % 11; $kuuugksiksqcaaaa = $qsmaqqyoggcuyukq < 2 && $gioggcykgoikcwiy == $qsmaqqyoggcuyukq || $qsmaqqyoggcuyukq >= 2 && $gioggcykgoikcwiy + $qsmaqqyoggcuyukq == 11; mwkcmgksoyycumos: return $kuuugksiksqcaaaa; } public function qmyusgwkaqieouwi($sociqikgoyemqaac, $kqywgoqsmuswammk = null) : bool { $uuksaskqamgouosy = is_string($sociqikgoyemqaac) && $sociqikgoyemqaac && $sociqikgoyemqaac !== strip_tags($sociqikgoyemqaac); if (!($uuksaskqamgouosy && $kqywgoqsmuswammk)) { goto aikukgimkamkgwsu; } $uuksaskqamgouosy = $this->caokeucsksukesyo()->gkksucgseqqemesc()->has($sociqikgoyemqaac, $kqywgoqsmuswammk); aikukgimkamkgwsu: return $uuksaskqamgouosy; } public function miskwwyaikcioysg($icwicymcioeyeyek) { if (is_array($icwicymcioeyeyek) || is_object($icwicymcioeyeyek)) { goto caskqicqwmyuugku; } if (!is_string($icwicymcioeyeyek)) { goto ukcukckucsyaggmw; } $icwicymcioeyeyek = (int) $icwicymcioeyeyek; ukcukckucsyaggmw: goto assyuumuuuocycyy; caskqicqwmyuugku: array_walk($icwicymcioeyeyek, function (&$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->miskwwyaikcioysg($eqgoocgaqwqcimie); }); assyuumuuuocycyy: return $icwicymcioeyeyek; } public function okwemgucuqkiwiau($ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : object { return (object) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function ckscqqquyskscaaw(array $ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : array { return (array) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function mkcmkkskeeaskowy(string $eeamcawaiqocomwy = '') : string { return (string) str_replace(["\x68\x74\x74\x70\72\57\x2f", "\150\164\164\x70\x73\72\x2f\x2f", "\146\x74\160\72\57\x2f", "\x2f\x2f"], '', $eeamcawaiqocomwy); } public function aiwgeammgaegccoc(string $eeamcawaiqocomwy = '') : string { return (string) str_replace($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } public function yugsmaqmkekysqmu(string $eeamcawaiqocomwy, string $cgmsicimocaeggqg = '') : string { if ($cgmsicimocaeggqg) { goto oiueawimuggcqgky; } $cgmsicimocaeggqg = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim() ? "\150\x74\x74\160\163" : "\x68\164\x74\x70"; oiueawimuggcqgky: if (!($yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy))) { goto wgcuewwyieoqaoek; } if (isset($yiasugywggckywoa["\163\x63\x68\145\x6d\141"])) { goto qqiwcikkcgmmakow; } $eeamcawaiqocomwy = "{$cgmsicimocaeggqg}\x3a\57\x2f{$eeamcawaiqocomwy}"; qqiwcikkcgmmakow: wgcuewwyieoqaoek: return $eeamcawaiqocomwy; } }

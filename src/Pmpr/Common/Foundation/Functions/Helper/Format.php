<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7da680f9db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; class Format extends Common { public function unserialize($icwicymcioeyeyek) { if (empty($icwicymcioeyeyek)) { goto omeukkwiesseygwy; } if (is_string($icwicymcioeyeyek)) { goto qqkqiioqwkekqsoq; } if (!is_array($icwicymcioeyeyek)) { goto iqsoeqgwemgyiimg; } foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $icwicymcioeyeyek[$uusmaiomayssaecw] = $this->unserialize($eqgoocgaqwqcimie); umasasgawwamkisc: } ooqqyyewioyccuww: iqsoeqgwemgyiimg: goto ckugukmoqamgcwci; qqkqiioqwkekqsoq: $ycqsugugqomewkke = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($icwicymcioeyeyek); if (empty($ycqsugugqomewkke)) { goto ugwyeeockousskag; } $icwicymcioeyeyek = $ycqsugugqomewkke; ugwyeeockousskag: ckugukmoqamgcwci: omeukkwiesseygwy: return $icwicymcioeyeyek; } public function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return !$this->eqieqemcascqscig($eqgoocgaqwqcimie); } public function ogomcyeyumwiqekm(string $uusmaiomayssaecw, $gcyiwacqwwqauegq, bool $cakygmaigwkcacyc = false) : bool { if (is_array($gcyiwacqwwqauegq)) { goto gewecumqwgcuwikk; } $gcyiwacqwwqauegq = (array) $gcyiwacqwwqauegq; gewecumqwgcuwikk: if (!empty($gcyiwacqwwqauegq)) { goto aewqyqksisqayska; } return false; aewqyqksisqayska: foreach ($gcyiwacqwwqauegq as $cksyqkosaoycogqe) { if (!$cakygmaigwkcacyc) { goto muooqqykkmuismwk; } return $uusmaiomayssaecw === $cksyqkosaoycogqe; muooqqykkmuismwk: if (!(strpos($uusmaiomayssaecw, $cksyqkosaoycogqe) !== false)) { goto auucmoqsmsouecag; } return true; auucmoqsmsouecag: scqwioawomamygwa: } ayegqigqcsuoqess: return false; } public function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return empty($eqgoocgaqwqcimie) || in_array($eqgoocgaqwqcimie, [Constants::OFF, Constants::ioyokcgwaowoqskk, 0, "\x30", false, "\x66\x61\154\x73\145"], true); } public function wmcwegoisyeeosqu($eeamcawaiqocomwy) : bool { $eouekqmooogkoqoo = "\57\50\150\x74\x74\160\x7c\x66\164\160\x7c\x68\164\x74\x70\163\51\72\134\x2f\x5c\57\50\x5b\x5c\x77\137\55\135\x2b\50\77\72\x28\x3f\72\x5c\x2e\133\x5c\x77\x5f\55\135\x2b\51\x2b\51\x29\x28\x5b\x5c\167\56\x2c\100\x3f\x5e\75\x25\x26\x3a\134\57\176\53\43\x2d\x5d\x2a\x5b\x5c\x77\x40\x3f\x5e\75\45\x26\x5c\57\x7e\53\x23\55\x5d\x29\x2f"; return is_string($eeamcawaiqocomwy) && filter_var($eeamcawaiqocomwy, FILTER_VALIDATE_URL) && preg_match($eouekqmooogkoqoo, $eeamcawaiqocomwy); } public function qawecuimqqcqwgsw($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\x69\162\141\156") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\x69\162\x61\156": return preg_match("\57\136\50\134\x2b\x39\x38\174\x30\x29\77\71\x5c\x64\x7b\x39\175\44\57", $euueacigmgoqkimu); default: return $this->uqomuowmcuauuikc($euueacigmgoqkimu, null); } qywgscciuywgmaia: euiiaygickweagiw: } public function uqomuowmcuauuikc($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\151\x72\x61\156") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\151\162\x61\x6e": return preg_match("\57\136\60\x5b\x31\x2d\x38\x5d\173\x32\x2c\175\133\60\x2d\x39\135\173\x38\54\x7d\x24\57", $euueacigmgoqkimu); default: $eomsgokgyssmwmai = strlen($euueacigmgoqkimu); return $eomsgokgyssmwmai <= 12 && $eomsgokgyssmwmai >= 10 && preg_match("\57\136\133\53\135\x2a\x5b\x28\135\x7b\x30\54\x31\175\x5b\60\x2d\x39\x5d\173\x31\x2c\64\x7d\x5b\51\x5d\x7b\x30\x2c\x31\x7d\133\x2d\134\x73\x2e\60\55\71\x5d\52\x24\x2f", $euueacigmgoqkimu); } kaewigguiigmcsoe: wiqmoimycyeesqse: } public function wsggsqigawogiwky($sociqikgoyemqaac) : bool { if (function_exists("\x6d\142\137\163\x74\162\x70\157\x73")) { goto wmoqoeyuaikokayu; } $ksaameoqigiaoigg = 0 === strpos($sociqikgoyemqaac, "\x1f" . "\213" . "\x8"); goto ucwwsgoweeagukyq; wmoqoeyuaikokayu: $ksaameoqigiaoigg = 0 === mb_strpos($sociqikgoyemqaac, "\37" . "\x8b" . "\x8"); ucwwsgoweeagukyq: return $ksaameoqigiaoigg; } public function qeegmakycwwycmcm($sociqikgoyemqaac) : bool { return strlen($sociqikgoyemqaac) === strlen(utf8_decode($sociqikgoyemqaac)); } public function aoaeiwswyagmesku($eeamcawaiqocomwy) : bool { $ooggiaqasyawsuks = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $egsumesakcaaukem = $qcsieyqqegaoocks->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $ccamueccusigaaio = $qcsieyqqegaoocks->gooqqcmsyseiaikc($eeamcawaiqocomwy); $wkwsmsgmkcmugoya = $ooggiaqasyawsuks->get($egsumesakcaaukem, "\150\157\x73\164"); $yukwwaakiyeueawg = $ooggiaqasyawsuks->get($ccamueccusigaaio, "\x68\x6f\x73\164"); return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0; } public function gwckaecmqskyysui(array $auwuoyyagaiegwae = []) { $ucccueqywigcukcc = ''; if (!$auwuoyyagaiegwae) { goto qgiscekgegqwemgs; } $gmigwwwmwemyaayy = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if (!($eeamcawaiqocomwy = $yyauwyaeewsickwk->wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy))) { goto euaikwmkiyegwqae; } $auwuoyyagaiegwae[$momcykaoccoymeig] = preg_quote($eeamcawaiqocomwy, "\x2f"); euaikwmkiyegwqae: gecscumwugkogmyq: } yaiwoisswowiyski: $ucccueqywigcukcc = $yyauwyaeewsickwk->csqkegwecgkgyaqe($auwuoyyagaiegwae); qgiscekgegqwemgs: return $ucccueqywigcukcc; } public function gmccggksyyimcukm($eeamcawaiqocomwy) : string { $sogksuscggsicmac = ''; $ymkqyawksmqcgsei = explode("\77", $eeamcawaiqocomwy); $gaeqamemwmwsyukm = count($ymkqyawksmqcgsei); if (!($gaeqamemwmwsyukm > 1)) { goto soyqsccuokmyuagk; } if ($gaeqamemwmwsyukm === 2) { goto iiwessuyuisaawek; } $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy, PHP_URL_QUERY); goto yqukoacecemgkkay; iiwessuyuisaawek: $sogksuscggsicmac = $ymkqyawksmqcgsei[1]; yqukoacecemgkkay: soyqsccuokmyuagk: if (is_string($sogksuscggsicmac)) { goto owsgmougoacgokmi; } $sogksuscggsicmac = ''; owsgmougoacgokmi: return $sogksuscggsicmac; } public function iyooiokaaaqgesue(&$eeamcawaiqocomwy) : string { $agoaugssmsiumiym = $this->gmccggksyyimcukm($eeamcawaiqocomwy); if (!$agoaugssmsiumiym) { goto iaqyisoeeygqwcym; } $agoaugssmsiumiym = "\x3f{$agoaugssmsiumiym}"; $eeamcawaiqocomwy = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc($agoaugssmsiumiym, '', $eeamcawaiqocomwy); iaqyisoeeygqwcym: return $agoaugssmsiumiym; } public function iuceiykuqcqkwsoa($euueacigmgoqkimu) : bool { $kuuugksiksqcaaaa = false; if (!preg_match("\57\136\134\144\x7b\61\x30\x7d\44\57", $euueacigmgoqkimu)) { goto qokakquaeuigqcwy; } $gioggcykgoikcwiy = (int) $euueacigmgoqkimu[9]; $qsmaqqyoggcuyukq = array_sum(array_map(static function ($iegmsyuiekaayqqy) use($euueacigmgoqkimu) { return (int) $euueacigmgoqkimu[$iegmsyuiekaayqqy] * (10 - $iegmsyuiekaayqqy); }, range(0, 8))) % 11; $kuuugksiksqcaaaa = $qsmaqqyoggcuyukq < 2 && $gioggcykgoikcwiy == $qsmaqqyoggcuyukq || $qsmaqqyoggcuyukq >= 2 && $gioggcykgoikcwiy + $qsmaqqyoggcuyukq == 11; qokakquaeuigqcwy: return $kuuugksiksqcaaaa; } public function qmyusgwkaqieouwi($sociqikgoyemqaac, $kqywgoqsmuswammk = null) : bool { $uuksaskqamgouosy = is_string($sociqikgoyemqaac) && $sociqikgoyemqaac && $sociqikgoyemqaac !== strip_tags($sociqikgoyemqaac); if (!($uuksaskqamgouosy && $kqywgoqsmuswammk)) { goto cymigkmkskowwcei; } $uuksaskqamgouosy = $this->caokeucsksukesyo()->gkksucgseqqemesc()->has($sociqikgoyemqaac, $kqywgoqsmuswammk); cymigkmkskowwcei: return $uuksaskqamgouosy; } public function miskwwyaikcioysg($icwicymcioeyeyek) { if (is_array($icwicymcioeyeyek) || is_object($icwicymcioeyeyek)) { goto wcyawmskokoagwqq; } if (!is_string($icwicymcioeyeyek)) { goto ukecesmaioggmyoc; } $icwicymcioeyeyek = (int) $icwicymcioeyeyek; ukecesmaioggmyoc: goto yseoucmemeekwkig; wcyawmskokoagwqq: array_walk($icwicymcioeyeyek, function (&$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->miskwwyaikcioysg($eqgoocgaqwqcimie); }); yseoucmemeekwkig: return $icwicymcioeyeyek; } public function okwemgucuqkiwiau($ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : object { return (object) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function ckscqqquyskscaaw(array $ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : array { return (array) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function mkcmkkskeeaskowy(string $eeamcawaiqocomwy = '') : string { return (string) str_replace(["\x68\164\164\160\72\57\57", "\150\164\x74\160\163\72\57\x2f", "\146\x74\x70\72\57\x2f", "\x2f\57"], '', $eeamcawaiqocomwy); } public function aiwgeammgaegccoc(string $eeamcawaiqocomwy = '') : string { return (string) str_replace($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } public function yugsmaqmkekysqmu(string $eeamcawaiqocomwy, string $cgmsicimocaeggqg = '') : string { if ($cgmsicimocaeggqg) { goto suggiaqykiwgkkey; } $cgmsicimocaeggqg = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim() ? "\x68\164\x74\160\163" : "\x68\x74\x74\x70"; suggiaqykiwgkkey: if (!($yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy))) { goto uogakawoeucgocym; } if (isset($yiasugywggckywoa["\x73\x63\150\145\x6d\x61"])) { goto igoseisickgqeaog; } $eeamcawaiqocomwy = "{$cgmsicimocaeggqg}\72\x2f\x2f{$eeamcawaiqocomwy}"; igoseisickgqeaog: uogakawoeucgocym: return $eeamcawaiqocomwy; } }

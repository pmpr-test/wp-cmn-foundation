<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a408a2b74             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; class Format extends Common { public function unserialize($icwicymcioeyeyek) { if (empty($icwicymcioeyeyek)) { goto oqksakqyecmsuscq; } if (is_string($icwicymcioeyeyek)) { goto agcugqouiqgiskcq; } if (!is_array($icwicymcioeyeyek)) { goto uwkuasmeoueseaou; } foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $icwicymcioeyeyek[$uusmaiomayssaecw] = $this->unserialize($eqgoocgaqwqcimie); ugcquuakimgkmeqc: } cmcawyswoeumueys: uwkuasmeoueseaou: goto msaugmwuooqkmwus; agcugqouiqgiskcq: $ycqsugugqomewkke = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($icwicymcioeyeyek); if (empty($ycqsugugqomewkke)) { goto eoeomqmkgaogkome; } $icwicymcioeyeyek = $ycqsugugqomewkke; eoeomqmkgaogkome: msaugmwuooqkmwus: oqksakqyecmsuscq: return $icwicymcioeyeyek; } public function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return !$this->eqieqemcascqscig($eqgoocgaqwqcimie); } public function ogomcyeyumwiqekm(string $uusmaiomayssaecw, $gcyiwacqwwqauegq, bool $cakygmaigwkcacyc = false) : bool { if (is_array($gcyiwacqwwqauegq)) { goto sumiomammkayeqis; } $gcyiwacqwwqauegq = (array) $gcyiwacqwwqauegq; sumiomammkayeqis: if (!empty($gcyiwacqwwqauegq)) { goto ueeuassqywswigaq; } return false; ueeuassqywswigaq: foreach ($gcyiwacqwwqauegq as $cksyqkosaoycogqe) { if (!$cakygmaigwkcacyc) { goto syokeusmqogkicks; } return $uusmaiomayssaecw === $cksyqkosaoycogqe; syokeusmqogkicks: if (!(strpos($uusmaiomayssaecw, $cksyqkosaoycogqe) !== false)) { goto oqkqaggagwswaaqi; } return true; oqkqaggagwswaaqi: kyuewcuomwmweguq: } ugkqimokoeicsyqm: return false; } public function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return empty($eqgoocgaqwqcimie) || in_array($eqgoocgaqwqcimie, [Constants::OFF, Constants::ioyokcgwaowoqskk, 0, "\x30", false, "\x66\141\154\x73\145"], true); } public function wmcwegoisyeeosqu($eeamcawaiqocomwy) : bool { $eouekqmooogkoqoo = "\57\x28\150\x74\164\x70\174\146\x74\x70\x7c\x68\x74\x74\x70\163\x29\x3a\x5c\57\134\x2f\50\x5b\x5c\167\x5f\55\135\x2b\x28\77\x3a\x28\x3f\x3a\134\x2e\133\134\167\137\x2d\135\53\51\53\x29\x29\50\133\x5c\x77\x2e\54\x40\x3f\136\x3d\45\x26\72\x5c\x2f\176\x2b\x23\55\x5d\x2a\133\x5c\167\x40\x3f\x5e\x3d\x25\x26\134\57\x7e\53\43\x2d\135\51\57"; return is_string($eeamcawaiqocomwy) && filter_var($eeamcawaiqocomwy, FILTER_VALIDATE_URL) && preg_match($eouekqmooogkoqoo, $eeamcawaiqocomwy); } public function qawecuimqqcqwgsw($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\x69\162\141\x6e") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\151\162\141\156": return preg_match("\57\136\x28\x5c\x2b\x39\x38\x7c\60\x29\77\71\134\144\173\x39\175\44\x2f", $euueacigmgoqkimu); default: return $this->uqomuowmcuauuikc($euueacigmgoqkimu, null); } ekkkweoucuyuqwik: qiiwgkcyqweecqoa: } public function uqomuowmcuauuikc($euueacigmgoqkimu, ?string $cmmgwyogwccaqaaw = "\x69\162\141\156") : bool { $euueacigmgoqkimu = trim($euueacigmgoqkimu); switch ($cmmgwyogwccaqaaw) { case "\151\162\x61\x6e": return preg_match("\x2f\136\x30\133\61\x2d\70\135\173\x32\54\x7d\133\60\55\x39\x5d\173\70\x2c\175\x24\57", $euueacigmgoqkimu); default: $eomsgokgyssmwmai = strlen($euueacigmgoqkimu); return $eomsgokgyssmwmai <= 12 && $eomsgokgyssmwmai >= 10 && preg_match("\57\136\133\x2b\x5d\52\133\50\x5d\x7b\60\54\x31\x7d\x5b\x30\55\x39\135\x7b\61\54\x34\175\x5b\x29\135\x7b\60\54\61\x7d\x5b\x2d\x5c\x73\56\60\x2d\71\x5d\52\44\x2f", $euueacigmgoqkimu); } uyugkucyiqymcuus: mkosooeggqemyqqy: } public function wsggsqigawogiwky($sociqikgoyemqaac) : bool { if (function_exists("\x6d\x62\x5f\163\164\x72\160\x6f\x73")) { goto kokkacggmoaagiae; } $ksaameoqigiaoigg = 0 === strpos($sociqikgoyemqaac, "\37" . "\x8b" . "\x8"); goto iweickamaucqgysq; kokkacggmoaagiae: $ksaameoqigiaoigg = 0 === mb_strpos($sociqikgoyemqaac, "\x1f" . "\213" . "\x8"); iweickamaucqgysq: return $ksaameoqigiaoigg; } public function qeegmakycwwycmcm($sociqikgoyemqaac) : bool { return strlen($sociqikgoyemqaac) === strlen(utf8_decode($sociqikgoyemqaac)); } public function aoaeiwswyagmesku($eeamcawaiqocomwy) : bool { $ooggiaqasyawsuks = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qcsieyqqegaoocks = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $egsumesakcaaukem = $qcsieyqqegaoocks->gooqqcmsyseiaikc($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $ccamueccusigaaio = $qcsieyqqegaoocks->gooqqcmsyseiaikc($eeamcawaiqocomwy); $wkwsmsgmkcmugoya = $ooggiaqasyawsuks->get($egsumesakcaaukem, "\x68\x6f\163\x74"); $yukwwaakiyeueawg = $ooggiaqasyawsuks->get($ccamueccusigaaio, "\150\x6f\x73\x74"); return $egsumesakcaaukem && $wkwsmsgmkcmugoya && $ccamueccusigaaio && $yukwwaakiyeueawg && strcasecmp($yukwwaakiyeueawg, $wkwsmsgmkcmugoya) !== 0; } public function gwckaecmqskyysui(array $auwuoyyagaiegwae = []) { $ucccueqywigcukcc = ''; if (!$auwuoyyagaiegwae) { goto umawcakyaoykccao; } $gmigwwwmwemyaayy = untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach ($auwuoyyagaiegwae as $momcykaoccoymeig => $eeamcawaiqocomwy) { if (!($eeamcawaiqocomwy = $yyauwyaeewsickwk->wiecmkiugmyyqiqc($gmigwwwmwemyaayy, '', $eeamcawaiqocomwy))) { goto uiqaoucyoiwykywa; } $auwuoyyagaiegwae[$momcykaoccoymeig] = preg_quote($eeamcawaiqocomwy, "\57"); uiqaoucyoiwykywa: oekmoqcqwyauiaeg: } aecamacaoskqmccs: $ucccueqywigcukcc = $yyauwyaeewsickwk->csqkegwecgkgyaqe($auwuoyyagaiegwae); umawcakyaoykccao: return $ucccueqywigcukcc; } public function gmccggksyyimcukm($eeamcawaiqocomwy) : string { $sogksuscggsicmac = ''; $ymkqyawksmqcgsei = explode("\x3f", $eeamcawaiqocomwy); $gaeqamemwmwsyukm = count($ymkqyawksmqcgsei); if (!($gaeqamemwmwsyukm > 1)) { goto ugwyeeockousskag; } if ($gaeqamemwmwsyukm === 2) { goto wwmscmqgasawkkwa; } $sogksuscggsicmac = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy, PHP_URL_QUERY); goto aksogeackceaeays; wwmscmqgasawkkwa: $sogksuscggsicmac = $ymkqyawksmqcgsei[1]; aksogeackceaeays: ugwyeeockousskag: if (is_string($sogksuscggsicmac)) { goto ooqqyyewioyccuww; } $sogksuscggsicmac = ''; ooqqyyewioyccuww: return $sogksuscggsicmac; } public function iyooiokaaaqgesue(&$eeamcawaiqocomwy) : string { $agoaugssmsiumiym = $this->gmccggksyyimcukm($eeamcawaiqocomwy); if (!$agoaugssmsiumiym) { goto umasasgawwamkisc; } $agoaugssmsiumiym = "\x3f{$agoaugssmsiumiym}"; $eeamcawaiqocomwy = $this->caokeucsksukesyo()->owgcciayoweymuws()->aimgkskucmymyquc($agoaugssmsiumiym, '', $eeamcawaiqocomwy); umasasgawwamkisc: return $agoaugssmsiumiym; } public function iuceiykuqcqkwsoa($euueacigmgoqkimu) : bool { $kuuugksiksqcaaaa = false; if (!preg_match("\x2f\136\134\x64\x7b\61\x30\175\x24\x2f", $euueacigmgoqkimu)) { goto iqsoeqgwemgyiimg; } $gioggcykgoikcwiy = (int) $euueacigmgoqkimu[9]; $qsmaqqyoggcuyukq = array_sum(array_map(static function ($iegmsyuiekaayqqy) use($euueacigmgoqkimu) { return (int) $euueacigmgoqkimu[$iegmsyuiekaayqqy] * (10 - $iegmsyuiekaayqqy); }, range(0, 8))) % 11; $kuuugksiksqcaaaa = $qsmaqqyoggcuyukq < 2 && $gioggcykgoikcwiy == $qsmaqqyoggcuyukq || $qsmaqqyoggcuyukq >= 2 && $gioggcykgoikcwiy + $qsmaqqyoggcuyukq == 11; iqsoeqgwemgyiimg: return $kuuugksiksqcaaaa; } public function qmyusgwkaqieouwi($sociqikgoyemqaac, $kqywgoqsmuswammk = null) : bool { $uuksaskqamgouosy = is_string($sociqikgoyemqaac) && $sociqikgoyemqaac && $sociqikgoyemqaac !== strip_tags($sociqikgoyemqaac); if (!($uuksaskqamgouosy && $kqywgoqsmuswammk)) { goto qqkqiioqwkekqsoq; } $uuksaskqamgouosy = $this->caokeucsksukesyo()->gkksucgseqqemesc()->has($sociqikgoyemqaac, $kqywgoqsmuswammk); qqkqiioqwkekqsoq: return $uuksaskqamgouosy; } public function miskwwyaikcioysg($icwicymcioeyeyek) { if (is_array($icwicymcioeyeyek) || is_object($icwicymcioeyeyek)) { goto omeukkwiesseygwy; } if (!is_string($icwicymcioeyeyek)) { goto ckugukmoqamgcwci; } $icwicymcioeyeyek = (int) $icwicymcioeyeyek; ckugukmoqamgcwci: goto gewecumqwgcuwikk; omeukkwiesseygwy: array_walk($icwicymcioeyeyek, function (&$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->miskwwyaikcioysg($eqgoocgaqwqcimie); }); gewecumqwgcuwikk: return $icwicymcioeyeyek; } public function okwemgucuqkiwiau($ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : object { return (object) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function ckscqqquyskscaaw(array $ywmkwiwkosakssii, array $ycmguuqqaiisymgg = []) : array { return (array) $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg); } public function mkcmkkskeeaskowy(string $eeamcawaiqocomwy = '') : string { return (string) str_replace(["\x68\164\x74\x70\x3a\x2f\x2f", "\150\x74\164\x70\x73\x3a\57\x2f", "\x66\164\x70\x3a\x2f\57", "\57\57"], '', $eeamcawaiqocomwy); } public function aiwgeammgaegccoc(string $eeamcawaiqocomwy = '') : string { return (string) str_replace($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), '', $eeamcawaiqocomwy); } public function yugsmaqmkekysqmu(string $eeamcawaiqocomwy, string $cgmsicimocaeggqg = '') : string { if ($cgmsicimocaeggqg) { goto aewqyqksisqayska; } $cgmsicimocaeggqg = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->wymyeyweagqomiim() ? "\x68\164\x74\x70\x73" : "\x68\164\x74\160"; aewqyqksisqayska: if (!($yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($eeamcawaiqocomwy))) { goto scqwioawomamygwa; } if (isset($yiasugywggckywoa["\x73\x63\150\145\x6d\141"])) { goto ayegqigqcsuoqess; } $eeamcawaiqocomwy = "{$cgmsicimocaeggqg}\x3a\x2f\x2f{$eeamcawaiqocomwy}"; ayegqigqcsuoqess: scqwioawomamygwa: return $eeamcawaiqocomwy; } }

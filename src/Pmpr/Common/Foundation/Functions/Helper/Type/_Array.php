<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae192c055a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Pmpr\Common\Foundation\Interfaces\Constants; class _Array extends Common { public function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = []) { if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto umkuoiowcowgywug; } foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) { if (is_array($esquqsuaumgwoewu)) { goto yyckoawemeecakki; } if ($xkqaigkogigocask) { goto weoyykiwcagymoms; } $sogksuscggsicmac[] = $esquqsuaumgwoewu; goto koksqyyscgosmgua; weoyykiwcagymoms: $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu; koksqyyscgosmgua: goto qyisaqamyeauiyws; yyckoawemeecakki: $sogksuscggsicmac = $this->kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac); qyisaqamyeauiyws: iciwkuugsssieams: } sqsawqgiyogosigw: umkuoiowcowgywug: return $sogksuscggsicmac; } public function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array { $giqggecqqikcysgq = 0; $uiymkeeaukcyqqik = null; $aqeywoskqiugcmye = null; foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { if (array_key_exists($momcykaoccoymeig, $couiucmsqaieciue)) { goto ugckgwumakkmewem; } if (!is_object($eqgoocgaqwqcimie)) { goto ckgwkegaqysuugsa; } $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok}; ckgwkegaqysuugsa: if (!is_string($eqgoocgaqwqcimie)) { goto egooqaeyqemyyueq; } $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie); if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) { goto waqycyookeekysyw; } $giqggecqqikcysgq = $ykiwomimkkuiigoq; $uiymkeeaukcyqqik = $eqgoocgaqwqcimie; $aqeywoskqiugcmye = $momcykaoccoymeig; waqycyookeekysyw: egooqaeyqemyyueq: ugckgwumakkmewem: iycmcucyyqgqaiwa: } qsoeqiaiaaksgcik: return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik]; } public function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $umeowkomuuewqksk = true) { $sogksuscggsicmac = $ggauoeuaesiymgee; if (!(is_string($uusmaiomayssaecw) || is_numeric($uusmaiomayssaecw))) { goto awewuysgsucyuiqu; } if (is_array($oaiciiqoawkamweo)) { goto beesceygkkecsask; } if (!(is_object($oaiciiqoawkamweo) && isset($oaiciiqoawkamweo->{$uusmaiomayssaecw}))) { goto eqcwgomkucsikows; } $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw}; eqcwgomkucsikows: goto wayyaaaewkgkyayk; beesceygkkecsask: if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) { goto kkcgaqkugmqqeyka; } $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw]; kkcgaqkugmqqeyka: wayyaaaewkgkyayk: if (!($umeowkomuuewqksk && !$sogksuscggsicmac)) { goto ameikuoiuqcsucgo; } $sogksuscggsicmac = $ggauoeuaesiymgee; ameikuoiuqcsucgo: awewuysgsucyuiqu: return $sogksuscggsicmac; } public function find(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, string $aqykuigiuwmmcieu = Constants::weiosaewqequuyuq) { $sogksuscggsicmac = false; foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $esoaccosseymguso = $this->qamwegcyimgcqksw($eqgoocgaqwqcimie, $mkomwsiykqigmqca); if (!($esoaccosseymguso == $qwcmueausqgiwigy)) { goto siaaikmageayqqsu; } if (Constants::weiosaewqequuyuq === $aqykuigiuwmmcieu) { goto oykgoscoqcimcsqg; } $sogksuscggsicmac = $eqgoocgaqwqcimie; goto cqwcweokuiayeicq; oykgoscoqcimcsqg: $sogksuscggsicmac = $uusmaiomayssaecw; cqwcweokuiayeicq: goto gqiuuyygewuqosqe; siaaikmageayqqsu: egieyaugcwckokym: } gqiuuyygewuqosqe: return $sogksuscggsicmac; } public function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, bool $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array { $sogksuscggsicmac = []; if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) { goto ecooysegquiascci; } $ggauoeuaesiymgee = ''; foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) { if (is_numeric($ewyuweyoskiagksm)) { goto aymooygqycguekai; } $uusmaiomayssaecw = $ewyuweyoskiagksm; $ggauoeuaesiymgee = $uauoccoqcsaeggui; goto sweakucgmumqsakg; aymooygqycguekai: $uusmaiomayssaecw = $uauoccoqcsaeggui; sweakucgmumqsakg: $eqgoocgaqwqcimie = $this->get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!is_callable($ekiuyucoiagmscgy)) { goto scuegucswagswcio; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee); scuegucswagswcio: if ($mywqgwsimwoeoawk) { goto wiumcqqogqsqyaqo; } $sogksuscggsicmac[] = $eqgoocgaqwqcimie; goto amyuqgaegykwgcgk; wiumcqqogqsqyaqo: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; amyuqgaegykwgcgk: wqwoeeeqwccksawi: } uckeiuaoqmigcksq: ecooysegquiascci: return $sogksuscggsicmac; } public function set($oaiciiqoawkamweo, $uwomkgseoiegeume = []) { if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) { goto meeeuaakuscgcomc; } $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo); $awqscowmskeuymeu = is_object($oaiciiqoawkamweo); foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if ($casemmqcsgmemwyg) { goto swysacsiqeaqkeik; } if (!$awqscowmskeuymeu) { goto quyumosiyumgeqao; } $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; quyumosiyumgeqao: goto muiuuoeuoqqqqycq; swysacsiqeaqkeik: $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; muiuuoeuoqqqqycq: wekosqocigkegwgq: } smgwweikoueukkom: meeeuaakuscgcomc: return $oaiciiqoawkamweo; } public function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null) { $yygmoeguaqyumuui = explode("\56", $mkomwsiykqigmqca); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (is_array($uomewyckeuqoqocu)) { goto wmgwiaksugguumki; } if (is_object($uomewyckeuqoqocu)) { goto wwsimimccosesome; } $uomewyckeuqoqocu = null; goto goemgwueaswqayue; goto ikccqyauagueyquo; wwsimimccosesome: if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) { goto mwqgcamgeuigkmag; } if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) { goto yakgkywayukuuoeo; } $uomewyckeuqoqocu = null; goto goemgwueaswqayue; goto gkiswiyesyseqgyi; yakgkywayukuuoeo: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}; gkiswiyesyseqgyi: goto psgawyoyqymeaqmg; mwqgcamgeuigkmag: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}(); psgawyoyqymeaqmg: ikccqyauagueyquo: goto eiwsqkiauqoseceu; wmgwiaksugguumki: if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto uymqegkssemcqegk; } $uomewyckeuqoqocu = null; goto goemgwueaswqayue; goto mmmaegqwqsqomcso; uymqegkssemcqegk: $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw]; mmmaegqwqsqomcso: eiwsqkiauqoseceu: quecaykkiwwgqoay: } goemgwueaswqayue: if ($uomewyckeuqoqocu) { goto meuauqksicgeyqci; } $uomewyckeuqoqocu = $ggauoeuaesiymgee; meuauqksicgeyqci: return $uomewyckeuqoqocu; } public function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw) { $eqgoocgaqwqcimie = null; if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) { goto iimgquoiiseikqug; } if (is_array($uusmaiomayssaecw)) { goto emcwccgymecyuwog; } if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto ycwuaycumimegeaw; } $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw]; unset($uomewyckeuqoqocu[$uusmaiomayssaecw]); ycwuaycumimegeaw: goto qcmugwqioeggciuq; emcwccgymecyuwog: $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw)); qcmugwqioeggciuq: iimgquoiiseikqug: return $eqgoocgaqwqcimie; } public function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie) { if (is_array($eqgoocgaqwqcimie)) { goto gcsessaokiukkyig; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; gcsessaokiukkyig: $qcgkuqesqqymcuui = false; foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) { $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu, true); if (!($uusmaiomayssaecw !== false)) { goto acmmiiqmeggwcuis; } $qcgkuqesqqymcuui = $this->unset($uomewyckeuqoqocu, $uusmaiomayssaecw); acmmiiqmeggwcuis: okywiecqsoykqemk: } cyomuwaeeaimesos: return $qcgkuqesqqymcuui; } public static function rswuscuqiwycaoym($uomewyckeuqoqocu) : bool { $wuoqgcwmkicakygs = false; if (!$uomewyckeuqoqocu) { goto ksugksoayiigqake; } $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1); ksugksoayiigqake: return $wuoqgcwmkicakygs; } public function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool { $ksaameoqigiaoigg = false; if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) { goto guuosmqayokicema; } foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if ($this->get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) { goto kqwoqegwcaycwyou; } $ksaameoqigiaoigg = true; goto mukqaqueesywqsuq; kqwoqegwcaycwyou: gguissygssokqwso: } mukqaqueesywqsuq: guuosmqayokicema: return $ksaameoqigiaoigg; } public function ooaaysmsqgsqmaqu(array $coyyecywycscckmw, array $oeoqckygmmkmsuky, bool $qkwmeayoakeoawya = true) : bool { $wwuukgmueeqciiqs = false; if (!(count($coyyecywycscckmw) === count($oeoqckygmmkmsuky))) { goto cwcoqyuoyckuuios; } if (!$qkwmeayoakeoawya) { goto cagiyomyssauaquc; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $wwuukgmueeqciiqs = $yyauwyaeewsickwk->wegeuqkaeuusoike($coyyecywycscckmw) === $yyauwyaeewsickwk->wegeuqkaeuusoike($oeoqckygmmkmsuky); goto ayqwqcgquogagmsc; cagiyomyssauaquc: $wwuukgmueeqciiqs = empty(array_diff_assoc($coyyecywycscckmw, $oeoqckygmmkmsuky)); ayqwqcgquogagmsc: cwcoqyuoyckuuios: return $wwuukgmueeqciiqs; } public function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool { return count($uomewyckeuqoqocu) !== count($uomewyckeuqoqocu, 1); } public function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array { if (!is_array($uomewyckeuqoqocu)) { goto ikiwqgmciageamia; } uasort($uomewyckeuqoqocu, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) { return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw]; }); if (!($uuyoeicyoayimaoa > 0)) { goto umgmikwiqagosokm; } $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true); umgmikwiqagosokm: ikiwqgmciageamia: return $uomewyckeuqoqocu; } public function yaeiiwwyckwugsem($uomewyckeuqoqocu, string $igaagwuyasawwqms = Constants::iuqumwggccmcuyem) { if (!is_array($uomewyckeuqoqocu)) { goto uegaqgayeaugeoim; } $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms, $cgwqqcukiasoicmi) { $uiuykcweuosgmwki = false; if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) { goto gqqeucaekwcskwqm; } if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) { goto micgaswksmmkmgkq; } $uiuykcweuosgmwki = $this->get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> $this->get($csougakqegqiqsgi, $igaagwuyasawwqms); micgaswksmmkmgkq: goto ikaweoguqucoaegy; gqqeucaekwcskwqm: if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) { goto ukkkayewayqiekce; } $aaqigycaeeeceqme = $cgwqqcukiasoicmi->myagqecycsaiyqsk($mmeioagwmyscwumo, $igaagwuyasawwqms); $uywmwywieegcwmqe = $cgwqqcukiasoicmi->myagqecycsaiyqsk($csougakqegqiqsgi, $igaagwuyasawwqms); if (!($aaqigycaeeeceqme && $uywmwywieegcwmqe)) { goto syaimiaogoukoqaa; } $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$aaqigycaeeeceqme}() <=> $csougakqegqiqsgi->{$uywmwywieegcwmqe}(); syaimiaogoukoqaa: goto smuqqgosmeymscwo; ukkkayewayqiekce: $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}; smuqqgosmeymscwo: ikaweoguqucoaegy: return (int) $uiuykcweuosgmwki; }); uegaqgayeaugeoim: return $uomewyckeuqoqocu; } public function merge($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { return array_merge((array) $sysgmomuyiiawwcm, (array) $gcegymooyemmaysk); } public function sggceaqggqqsqaoo(array $uomewyckeuqoqocu, array $igqsaukqcqscimok, int $kuuiuigeacouwmaa = 0) : array { return array_slice($uomewyckeuqoqocu, 0, $kuuiuigeacouwmaa, true) + $igqsaukqcqscimok + array_slice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, count($uomewyckeuqoqocu) - 1, true); } public function ggkqgwsekcwaaawa(array $oammesyieqmwuwyi = []) : array { if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto zsscgecwckmocwqa; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $igqsaukqcqscimok = array_filter($igqsaukqcqscimok); if ($this->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm)) { goto miocgmmkkkksmisy; } $oammesyieqmwuwyi[$momcykaoccoymeig][Constants::ascagqcquwgmygkm] = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); miocgmmkkkksmisy: ukgemiyqimumoyoa: } gyyuyqcmmcsoemkc: zsscgecwckmocwqa: return $oammesyieqmwuwyi; } public function skauuuoqcaiseuks(array $uomewyckeuqoqocu = [], string $geqcesmqwkeayoiu = "\54") : string { $sociqikgoyemqaac = ''; if (!(is_array($uomewyckeuqoqocu) && is_string($geqcesmqwkeayoiu))) { goto weyuusiimkuykwca; } $sociqikgoyemqaac = rtrim(implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu), $geqcesmqwkeayoiu); weyuusiimkuykwca: return $sociqikgoyemqaac; } public function giwoasoewgaqiuis($uomewyckeuqoqocu) { if (!is_array($uomewyckeuqoqocu)) { goto eggowcqiawiuwski; } $uomewyckeuqoqocu = array_unique(array_filter($uomewyckeuqoqocu)); eggowcqiawiuwski: return $uomewyckeuqoqocu; } public function ygwimyogyaqgumam($vaksuumyyeikuuco, $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!$vaksuumyyeikuuco) { goto waiwugiowecgeeww; } $qgciuiagkkguykgs = "\x67\x65\164\137{$aiowsaccomcoikus}"; if (method_exists($vaksuumyyeikuuco, $qgciuiagkkguykgs)) { goto qaaymsuwqmigcoea; } if (method_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto awgyiumgyeockqoa; } if (!property_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto igkameomykgywamu; } $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}; igkameomykgywamu: goto ouqgocoygmaiamou; awgyiumgyeockqoa: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}(...$ywmkwiwkosakssii); ouqgocoygmaiamou: goto qkgoiusmuuaqwywu; qaaymsuwqmigcoea: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); qkgoiusmuuaqwywu: waiwugiowecgeeww: return $ksaameoqigiaoigg; } public function gymccqywkegiqiiw(array $uomewyckeuqoqocu) : int { return $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->owsaaggskwmeemog(0, count($uomewyckeuqoqocu) - 1); } public function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok) : void { if (is_int($kuuiuigeacouwmaa)) { goto oaoggiyikquikqmg; } $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu), true); $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy)); goto awcqsekwccegiugq; oaoggiyikquikqmg: array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok); awcqsekwccegiugq: } public function wkoiuauiogwgeyeo(array $uomewyckeuqoqocu, array $yygmoeguaqyumuui = []) : array { return array_intersect_key($uomewyckeuqoqocu, array_flip($yygmoeguaqyumuui)); } }

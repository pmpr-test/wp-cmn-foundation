<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c4949867             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Pmpr\Common\Foundation\Interfaces\Constants; class _Array extends Common { public function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = []) { if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto qsoeqiaiaaksgcik; } foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) { if (is_array($esquqsuaumgwoewu)) { goto qyisaqamyeauiyws; } if ($xkqaigkogigocask) { goto koksqyyscgosmgua; } $sogksuscggsicmac[] = $esquqsuaumgwoewu; goto yyckoawemeecakki; koksqyyscgosmgua: $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu; yyckoawemeecakki: goto umkuoiowcowgywug; qyisaqamyeauiyws: $sogksuscggsicmac = $this->kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac); umkuoiowcowgywug: weoyykiwcagymoms: } iciwkuugsssieams: qsoeqiaiaaksgcik: return $sogksuscggsicmac; } public function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array { $giqggecqqikcysgq = 0; $uiymkeeaukcyqqik = null; $aqeywoskqiugcmye = null; foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { if (array_key_exists($momcykaoccoymeig, $couiucmsqaieciue)) { goto kkcgaqkugmqqeyka; } if (!is_object($eqgoocgaqwqcimie)) { goto waqycyookeekysyw; } $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok}; waqycyookeekysyw: if (!is_string($eqgoocgaqwqcimie)) { goto ugckgwumakkmewem; } $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie); if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) { goto egooqaeyqemyyueq; } $giqggecqqikcysgq = $ykiwomimkkuiigoq; $uiymkeeaukcyqqik = $eqgoocgaqwqcimie; $aqeywoskqiugcmye = $momcykaoccoymeig; egooqaeyqemyyueq: ugckgwumakkmewem: kkcgaqkugmqqeyka: ckgwkegaqysuugsa: } iycmcucyyqgqaiwa: return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik]; } public function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $umeowkomuuewqksk = true) { $sogksuscggsicmac = $ggauoeuaesiymgee; if (!(is_string($uusmaiomayssaecw) || is_numeric($uusmaiomayssaecw))) { goto gqiuuyygewuqosqe; } if (is_array($oaiciiqoawkamweo)) { goto wayyaaaewkgkyayk; } if (!(is_object($oaiciiqoawkamweo) && isset($oaiciiqoawkamweo->{$uusmaiomayssaecw}))) { goto beesceygkkecsask; } $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw}; beesceygkkecsask: goto ameikuoiuqcsucgo; wayyaaaewkgkyayk: if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) { goto eqcwgomkucsikows; } $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw]; eqcwgomkucsikows: ameikuoiuqcsucgo: if (!($umeowkomuuewqksk && !$sogksuscggsicmac)) { goto awewuysgsucyuiqu; } $sogksuscggsicmac = $ggauoeuaesiymgee; awewuysgsucyuiqu: gqiuuyygewuqosqe: return $sogksuscggsicmac; } public function find(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, string $aqykuigiuwmmcieu = Constants::weiosaewqequuyuq) { $sogksuscggsicmac = false; foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $esoaccosseymguso = $this->qamwegcyimgcqksw($eqgoocgaqwqcimie, $mkomwsiykqigmqca); if (!($esoaccosseymguso == $qwcmueausqgiwigy)) { goto uckeiuaoqmigcksq; } if (Constants::weiosaewqequuyuq === $aqykuigiuwmmcieu) { goto cqwcweokuiayeicq; } $sogksuscggsicmac = $eqgoocgaqwqcimie; goto siaaikmageayqqsu; cqwcweokuiayeicq: $sogksuscggsicmac = $uusmaiomayssaecw; siaaikmageayqqsu: goto egieyaugcwckokym; uckeiuaoqmigcksq: oykgoscoqcimcsqg: } egieyaugcwckokym: return $sogksuscggsicmac; } public function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, bool $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array { $sogksuscggsicmac = []; if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) { goto smgwweikoueukkom; } $ggauoeuaesiymgee = ''; foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) { if (is_numeric($ewyuweyoskiagksm)) { goto sweakucgmumqsakg; } $uusmaiomayssaecw = $ewyuweyoskiagksm; $ggauoeuaesiymgee = $uauoccoqcsaeggui; goto scuegucswagswcio; sweakucgmumqsakg: $uusmaiomayssaecw = $uauoccoqcsaeggui; scuegucswagswcio: $eqgoocgaqwqcimie = $this->get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!is_callable($ekiuyucoiagmscgy)) { goto wiumcqqogqsqyaqo; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee); wiumcqqogqsqyaqo: if ($mywqgwsimwoeoawk) { goto amyuqgaegykwgcgk; } $sogksuscggsicmac[] = $eqgoocgaqwqcimie; goto ecooysegquiascci; amyuqgaegykwgcgk: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; ecooysegquiascci: aymooygqycguekai: } wqwoeeeqwccksawi: smgwweikoueukkom: return $sogksuscggsicmac; } public function set($oaiciiqoawkamweo, $uwomkgseoiegeume = []) { if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) { goto goemgwueaswqayue; } $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo); $awqscowmskeuymeu = is_object($oaiciiqoawkamweo); foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if ($casemmqcsgmemwyg) { goto muiuuoeuoqqqqycq; } if (!$awqscowmskeuymeu) { goto swysacsiqeaqkeik; } $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; swysacsiqeaqkeik: goto meeeuaakuscgcomc; muiuuoeuoqqqqycq: $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; meeeuaakuscgcomc: quyumosiyumgeqao: } wekosqocigkegwgq: goemgwueaswqayue: return $oaiciiqoawkamweo; } public function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null) { $yygmoeguaqyumuui = explode("\56", $mkomwsiykqigmqca); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (is_array($uomewyckeuqoqocu)) { goto eiwsqkiauqoseceu; } if (is_object($uomewyckeuqoqocu)) { goto ikccqyauagueyquo; } $uomewyckeuqoqocu = null; goto quecaykkiwwgqoay; goto wmgwiaksugguumki; ikccqyauagueyquo: if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) { goto psgawyoyqymeaqmg; } if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) { goto gkiswiyesyseqgyi; } $uomewyckeuqoqocu = null; goto quecaykkiwwgqoay; goto mwqgcamgeuigkmag; gkiswiyesyseqgyi: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}; mwqgcamgeuigkmag: goto wwsimimccosesome; psgawyoyqymeaqmg: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}(); wwsimimccosesome: wmgwiaksugguumki: goto meuauqksicgeyqci; eiwsqkiauqoseceu: if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto mmmaegqwqsqomcso; } $uomewyckeuqoqocu = null; goto quecaykkiwwgqoay; goto yakgkywayukuuoeo; mmmaegqwqsqomcso: $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw]; yakgkywayukuuoeo: meuauqksicgeyqci: uymqegkssemcqegk: } quecaykkiwwgqoay: if ($uomewyckeuqoqocu) { goto ycwuaycumimegeaw; } $uomewyckeuqoqocu = $ggauoeuaesiymgee; ycwuaycumimegeaw: return $uomewyckeuqoqocu; } public function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw) { $eqgoocgaqwqcimie = null; if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) { goto gcsessaokiukkyig; } if (is_array($uusmaiomayssaecw)) { goto qcmugwqioeggciuq; } if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto emcwccgymecyuwog; } $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw]; unset($uomewyckeuqoqocu[$uusmaiomayssaecw]); emcwccgymecyuwog: goto iimgquoiiseikqug; qcmugwqioeggciuq: $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw)); iimgquoiiseikqug: gcsessaokiukkyig: return $eqgoocgaqwqcimie; } public function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie) { if (is_array($eqgoocgaqwqcimie)) { goto cyomuwaeeaimesos; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; cyomuwaeeaimesos: $qcgkuqesqqymcuui = false; foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) { $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu, true); if (!($uusmaiomayssaecw !== false)) { goto ksugksoayiigqake; } $qcgkuqesqqymcuui = $this->unset($uomewyckeuqoqocu, $uusmaiomayssaecw); ksugksoayiigqake: acmmiiqmeggwcuis: } okywiecqsoykqemk: return $qcgkuqesqqymcuui; } public static function rswuscuqiwycaoym($uomewyckeuqoqocu) : bool { $wuoqgcwmkicakygs = false; if (!$uomewyckeuqoqocu) { goto mukqaqueesywqsuq; } $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1); mukqaqueesywqsuq: return $wuoqgcwmkicakygs; } public function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool { $ksaameoqigiaoigg = false; if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) { goto cagiyomyssauaquc; } foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if ($this->get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) { goto guuosmqayokicema; } $ksaameoqigiaoigg = true; goto gguissygssokqwso; guuosmqayokicema: kqwoqegwcaycwyou: } gguissygssokqwso: cagiyomyssauaquc: return $ksaameoqigiaoigg; } public function ooaaysmsqgsqmaqu(array $coyyecywycscckmw, array $oeoqckygmmkmsuky, bool $qkwmeayoakeoawya = true) : bool { $wwuukgmueeqciiqs = false; if (!(count($coyyecywycscckmw) === count($oeoqckygmmkmsuky))) { goto umgmikwiqagosokm; } if (!$qkwmeayoakeoawya) { goto ayqwqcgquogagmsc; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $wwuukgmueeqciiqs = $yyauwyaeewsickwk->wegeuqkaeuusoike($coyyecywycscckmw) === $yyauwyaeewsickwk->wegeuqkaeuusoike($oeoqckygmmkmsuky); goto cwcoqyuoyckuuios; ayqwqcgquogagmsc: $wwuukgmueeqciiqs = empty(array_diff_assoc($coyyecywycscckmw, $oeoqckygmmkmsuky)); cwcoqyuoyckuuios: umgmikwiqagosokm: return $wwuukgmueeqciiqs; } public function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool { return count($uomewyckeuqoqocu) !== count($uomewyckeuqoqocu, 1); } public function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array { if (!is_array($uomewyckeuqoqocu)) { goto syaimiaogoukoqaa; } uasort($uomewyckeuqoqocu, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) { return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw]; }); if (!($uuyoeicyoayimaoa > 0)) { goto ikiwqgmciageamia; } $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true); ikiwqgmciageamia: syaimiaogoukoqaa: return $uomewyckeuqoqocu; } public function yaeiiwwyckwugsem($uomewyckeuqoqocu, string $igaagwuyasawwqms = Constants::iuqumwggccmcuyem) { if (!is_array($uomewyckeuqoqocu)) { goto gyyuyqcmmcsoemkc; } $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms, $cgwqqcukiasoicmi) { $uiuykcweuosgmwki = false; if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) { goto ikaweoguqucoaegy; } if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) { goto gqqeucaekwcskwqm; } $uiuykcweuosgmwki = $this->get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> $this->get($csougakqegqiqsgi, $igaagwuyasawwqms); gqqeucaekwcskwqm: goto uegaqgayeaugeoim; ikaweoguqucoaegy: if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) { goto smuqqgosmeymscwo; } $aaqigycaeeeceqme = $cgwqqcukiasoicmi->myagqecycsaiyqsk($mmeioagwmyscwumo, $igaagwuyasawwqms); $uywmwywieegcwmqe = $cgwqqcukiasoicmi->myagqecycsaiyqsk($csougakqegqiqsgi, $igaagwuyasawwqms); if (!($aaqigycaeeeceqme && $uywmwywieegcwmqe)) { goto ukkkayewayqiekce; } $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$aaqigycaeeeceqme}() <=> $csougakqegqiqsgi->{$uywmwywieegcwmqe}(); ukkkayewayqiekce: goto micgaswksmmkmgkq; smuqqgosmeymscwo: $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}; micgaswksmmkmgkq: uegaqgayeaugeoim: return (int) $uiuykcweuosgmwki; }); gyyuyqcmmcsoemkc: return $uomewyckeuqoqocu; } public function merge($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { return array_merge((array) $sysgmomuyiiawwcm, (array) $gcegymooyemmaysk); } public function sggceaqggqqsqaoo(array $uomewyckeuqoqocu, array $igqsaukqcqscimok, int $kuuiuigeacouwmaa = 0) : array { return array_slice($uomewyckeuqoqocu, 0, $kuuiuigeacouwmaa, true) + $igqsaukqcqscimok + array_slice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, count($uomewyckeuqoqocu) - 1, true); } public function ggkqgwsekcwaaawa(array $oammesyieqmwuwyi = []) : array { if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto weyuusiimkuykwca; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $igqsaukqcqscimok = array_filter($igqsaukqcqscimok); if ($this->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm)) { goto zsscgecwckmocwqa; } $oammesyieqmwuwyi[$momcykaoccoymeig][Constants::ascagqcquwgmygkm] = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); zsscgecwckmocwqa: miocgmmkkkksmisy: } ukgemiyqimumoyoa: weyuusiimkuykwca: return $oammesyieqmwuwyi; } public function skauuuoqcaiseuks(array $uomewyckeuqoqocu = [], string $geqcesmqwkeayoiu = "\x2c") : string { $sociqikgoyemqaac = ''; if (!(is_array($uomewyckeuqoqocu) && is_string($geqcesmqwkeayoiu))) { goto eggowcqiawiuwski; } $sociqikgoyemqaac = rtrim(implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu), $geqcesmqwkeayoiu); eggowcqiawiuwski: return $sociqikgoyemqaac; } public function giwoasoewgaqiuis($uomewyckeuqoqocu) { if (!is_array($uomewyckeuqoqocu)) { goto igkameomykgywamu; } $uomewyckeuqoqocu = array_unique(array_filter($uomewyckeuqoqocu)); igkameomykgywamu: return $uomewyckeuqoqocu; } public function ygwimyogyaqgumam($vaksuumyyeikuuco, $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!$vaksuumyyeikuuco) { goto oaoggiyikquikqmg; } $qgciuiagkkguykgs = "\x67\145\164\x5f{$aiowsaccomcoikus}"; if (method_exists($vaksuumyyeikuuco, $qgciuiagkkguykgs)) { goto qkgoiusmuuaqwywu; } if (method_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto ouqgocoygmaiamou; } if (!property_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto awgyiumgyeockqoa; } $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}; awgyiumgyeockqoa: goto qaaymsuwqmigcoea; ouqgocoygmaiamou: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}(...$ywmkwiwkosakssii); qaaymsuwqmigcoea: goto waiwugiowecgeeww; qkgoiusmuuaqwywu: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); waiwugiowecgeeww: oaoggiyikquikqmg: return $ksaameoqigiaoigg; } public function gymccqywkegiqiiw(array $uomewyckeuqoqocu) : int { return $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->owsaaggskwmeemog(0, count($uomewyckeuqoqocu) - 1); } public function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok) : void { if (is_int($kuuiuigeacouwmaa)) { goto awcqsekwccegiugq; } $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu), true); $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy)); goto wgawqekaeousiwwe; awcqsekwccegiugq: array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok); wgawqekaeousiwwe: } public function wkoiuauiogwgeyeo(array $uomewyckeuqoqocu, array $yygmoeguaqyumuui = []) : array { return array_intersect_key($uomewyckeuqoqocu, array_flip($yygmoeguaqyumuui)); } }

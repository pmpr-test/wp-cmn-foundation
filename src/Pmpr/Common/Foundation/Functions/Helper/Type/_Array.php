<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d7a86a94f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Pmpr\Common\Foundation\Interfaces\Constants; class _Array extends Common { public function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = []) { if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto iimgquoiiseikqug; } foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) { if (is_array($esquqsuaumgwoewu)) { goto emcwccgymecyuwog; } if ($xkqaigkogigocask) { goto meuauqksicgeyqci; } $sogksuscggsicmac[] = $esquqsuaumgwoewu; goto ycwuaycumimegeaw; meuauqksicgeyqci: $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu; ycwuaycumimegeaw: goto qcmugwqioeggciuq; emcwccgymecyuwog: $sogksuscggsicmac = $this->kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac); qcmugwqioeggciuq: eiwsqkiauqoseceu: } wmgwiaksugguumki: iimgquoiiseikqug: return $sogksuscggsicmac; } public function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array { $giqggecqqikcysgq = 0; $uiymkeeaukcyqqik = null; $aqeywoskqiugcmye = null; foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { if (array_key_exists($momcykaoccoymeig, $couiucmsqaieciue)) { goto mukqaqueesywqsuq; } if (!is_object($eqgoocgaqwqcimie)) { goto okywiecqsoykqemk; } $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok}; okywiecqsoykqemk: if (!is_string($eqgoocgaqwqcimie)) { goto ksugksoayiigqake; } $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie); if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) { goto acmmiiqmeggwcuis; } $giqggecqqikcysgq = $ykiwomimkkuiigoq; $uiymkeeaukcyqqik = $eqgoocgaqwqcimie; $aqeywoskqiugcmye = $momcykaoccoymeig; acmmiiqmeggwcuis: ksugksoayiigqake: mukqaqueesywqsuq: cyomuwaeeaimesos: } gcsessaokiukkyig: return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik]; } public function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $umeowkomuuewqksk = true) { $sogksuscggsicmac = $ggauoeuaesiymgee; if (!(is_string($uusmaiomayssaecw) || is_numeric($uusmaiomayssaecw))) { goto cwcoqyuoyckuuios; } if (is_array($oaiciiqoawkamweo)) { goto guuosmqayokicema; } if (!(is_object($oaiciiqoawkamweo) && isset($oaiciiqoawkamweo->{$uusmaiomayssaecw}))) { goto kqwoqegwcaycwyou; } $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw}; kqwoqegwcaycwyou: goto cagiyomyssauaquc; guuosmqayokicema: if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) { goto gguissygssokqwso; } $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw]; gguissygssokqwso: cagiyomyssauaquc: if (!($umeowkomuuewqksk && !$sogksuscggsicmac)) { goto ayqwqcgquogagmsc; } $sogksuscggsicmac = $ggauoeuaesiymgee; ayqwqcgquogagmsc: cwcoqyuoyckuuios: return $sogksuscggsicmac; } public function find(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, string $aqykuigiuwmmcieu = Constants::weiosaewqequuyuq) { $sogksuscggsicmac = false; foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $esoaccosseymguso = $this->qamwegcyimgcqksw($eqgoocgaqwqcimie, $mkomwsiykqigmqca); if (!($esoaccosseymguso == $qwcmueausqgiwigy)) { goto smuqqgosmeymscwo; } if (Constants::weiosaewqequuyuq === $aqykuigiuwmmcieu) { goto syaimiaogoukoqaa; } $sogksuscggsicmac = $eqgoocgaqwqcimie; goto ukkkayewayqiekce; syaimiaogoukoqaa: $sogksuscggsicmac = $uusmaiomayssaecw; ukkkayewayqiekce: goto umgmikwiqagosokm; smuqqgosmeymscwo: ikiwqgmciageamia: } umgmikwiqagosokm: return $sogksuscggsicmac; } public function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, bool $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array { $sogksuscggsicmac = []; if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) { goto zsscgecwckmocwqa; } $ggauoeuaesiymgee = ''; foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) { if (is_numeric($ewyuweyoskiagksm)) { goto ikaweoguqucoaegy; } $uusmaiomayssaecw = $ewyuweyoskiagksm; $ggauoeuaesiymgee = $uauoccoqcsaeggui; goto uegaqgayeaugeoim; ikaweoguqucoaegy: $uusmaiomayssaecw = $uauoccoqcsaeggui; uegaqgayeaugeoim: $eqgoocgaqwqcimie = $this->get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!is_callable($ekiuyucoiagmscgy)) { goto gyyuyqcmmcsoemkc; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee); gyyuyqcmmcsoemkc: if ($mywqgwsimwoeoawk) { goto ukgemiyqimumoyoa; } $sogksuscggsicmac[] = $eqgoocgaqwqcimie; goto miocgmmkkkksmisy; ukgemiyqimumoyoa: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; miocgmmkkkksmisy: gqqeucaekwcskwqm: } micgaswksmmkmgkq: zsscgecwckmocwqa: return $sogksuscggsicmac; } public function set($oaiciiqoawkamweo, $uwomkgseoiegeume = []) { if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) { goto qaaymsuwqmigcoea; } $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo); $awqscowmskeuymeu = is_object($oaiciiqoawkamweo); foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if ($casemmqcsgmemwyg) { goto awgyiumgyeockqoa; } if (!$awqscowmskeuymeu) { goto igkameomykgywamu; } $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; igkameomykgywamu: goto ouqgocoygmaiamou; awgyiumgyeockqoa: $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; ouqgocoygmaiamou: eggowcqiawiuwski: } weyuusiimkuykwca: qaaymsuwqmigcoea: return $oaiciiqoawkamweo; } public function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null) { $yygmoeguaqyumuui = explode("\x2e", $mkomwsiykqigmqca); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (is_array($uomewyckeuqoqocu)) { goto eeimccqyqieauwuk; } if (is_object($uomewyckeuqoqocu)) { goto ywosowquuuociuio; } $uomewyckeuqoqocu = null; goto qkgoiusmuuaqwywu; goto gesseuyackqsekiy; ywosowquuuociuio: if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) { goto cuwwggakcukcesmy; } if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) { goto wgawqekaeousiwwe; } $uomewyckeuqoqocu = null; goto qkgoiusmuuaqwywu; goto oewsmwkmgiiugcie; wgawqekaeousiwwe: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}; oewsmwkmgiiugcie: goto yukceuoyyusqyiak; cuwwggakcukcesmy: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}(); yukceuoyyusqyiak: gesseuyackqsekiy: goto msqawsuquouuugkc; eeimccqyqieauwuk: if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto oaoggiyikquikqmg; } $uomewyckeuqoqocu = null; goto qkgoiusmuuaqwywu; goto awcqsekwccegiugq; oaoggiyikquikqmg: $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw]; awcqsekwccegiugq: msqawsuquouuugkc: waiwugiowecgeeww: } qkgoiusmuuaqwywu: if ($uomewyckeuqoqocu) { goto kaacyyeegamkqkak; } $uomewyckeuqoqocu = $ggauoeuaesiymgee; kaacyyeegamkqkak: return $uomewyckeuqoqocu; } public function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw) { $eqgoocgaqwqcimie = null; if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) { goto ackiyyoociyuiaio; } if (is_array($uusmaiomayssaecw)) { goto imqikuakumuqamky; } if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto uaqeuukkceomqisi; } $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw]; unset($uomewyckeuqoqocu[$uusmaiomayssaecw]); uaqeuukkceomqisi: goto myuwuwgiccywkiog; imqikuakumuqamky: $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw)); myuwuwgiccywkiog: ackiyyoociyuiaio: return $eqgoocgaqwqcimie; } public function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie) { if (is_array($eqgoocgaqwqcimie)) { goto eckksscswgomeoqs; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; eckksscswgomeoqs: $qcgkuqesqqymcuui = false; foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) { $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu, true); if (!($uusmaiomayssaecw !== false)) { goto okgaykwweumwcsyq; } $qcgkuqesqqymcuui = $this->unset($uomewyckeuqoqocu, $uusmaiomayssaecw); okgaykwweumwcsyq: wakwsokmekawssyi: } ewgmqmguwukoekoc: return $qcgkuqesqqymcuui; } public static function rswuscuqiwycaoym($uomewyckeuqoqocu) : bool { $wuoqgcwmkicakygs = false; if (!$uomewyckeuqoqocu) { goto qwuuagecegiqouig; } $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1); qwuuagecegiqouig: return $wuoqgcwmkicakygs; } public function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool { $ksaameoqigiaoigg = false; if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) { goto uoowsoawqkggioeo; } foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if ($this->get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) { goto miuwoyekioyugegk; } $ksaameoqigiaoigg = true; goto mmiukekqescmgkie; miuwoyekioyugegk: agmcywmicucyeiig: } mmiukekqescmgkie: uoowsoawqkggioeo: return $ksaameoqigiaoigg; } public function ooaaysmsqgsqmaqu(array $coyyecywycscckmw, array $oeoqckygmmkmsuky, bool $qkwmeayoakeoawya = true) : bool { $wwuukgmueeqciiqs = false; if (!(count($coyyecywycscckmw) === count($oeoqckygmmkmsuky))) { goto yukscyeaqukseeim; } if (!$qkwmeayoakeoawya) { goto lwkkgmcgkowgygcs; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $wwuukgmueeqciiqs = $yyauwyaeewsickwk->wegeuqkaeuusoike($coyyecywycscckmw) === $yyauwyaeewsickwk->wegeuqkaeuusoike($oeoqckygmmkmsuky); goto ueyqgegieiwkocck; lwkkgmcgkowgygcs: $wwuukgmueeqciiqs = empty(array_diff_assoc($coyyecywycscckmw, $oeoqckygmmkmsuky)); ueyqgegieiwkocck: yukscyeaqukseeim: return $wwuukgmueeqciiqs; } public function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool { return count($uomewyckeuqoqocu) !== count($uomewyckeuqoqocu, 1); } public function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array { if (!is_array($uomewyckeuqoqocu)) { goto cwgsuaukyieoswoq; } uasort($uomewyckeuqoqocu, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) { return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw]; }); if (!($uuyoeicyoayimaoa > 0)) { goto ickoqwmqsgowyscy; } $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true); ickoqwmqsgowyscy: cwgsuaukyieoswoq: return $uomewyckeuqoqocu; } public function yaeiiwwyckwugsem($uomewyckeuqoqocu, string $igaagwuyasawwqms = Constants::iuqumwggccmcuyem) { if (!is_array($uomewyckeuqoqocu)) { goto ismswigsaeymicgu; } $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms, $cgwqqcukiasoicmi) { $uiuykcweuosgmwki = false; if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) { goto gsiaweqgymagyokg; } if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) { goto mouaeysyaawwqsmq; } $uiuykcweuosgmwki = $this->get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> $this->get($csougakqegqiqsgi, $igaagwuyasawwqms); mouaeysyaawwqsmq: goto gaqiaugiyyuoaywe; gsiaweqgymagyokg: if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) { goto ayuwgkkummcqqesk; } $aaqigycaeeeceqme = $cgwqqcukiasoicmi->myagqecycsaiyqsk($mmeioagwmyscwumo, $igaagwuyasawwqms); $uywmwywieegcwmqe = $cgwqqcukiasoicmi->myagqecycsaiyqsk($csougakqegqiqsgi, $igaagwuyasawwqms); if (!($aaqigycaeeeceqme && $uywmwywieegcwmqe)) { goto uwoawkimmaqcwqcq; } $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$aaqigycaeeeceqme}() <=> $csougakqegqiqsgi->{$uywmwywieegcwmqe}(); uwoawkimmaqcwqcq: goto eqgkqikoqkaiuocm; ayuwgkkummcqqesk: $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}; eqgkqikoqkaiuocm: gaqiaugiyyuoaywe: return (int) $uiuykcweuosgmwki; }); ismswigsaeymicgu: return $uomewyckeuqoqocu; } public function merge($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { return array_merge((array) $sysgmomuyiiawwcm, (array) $gcegymooyemmaysk); } public function sggceaqggqqsqaoo(array $uomewyckeuqoqocu, array $igqsaukqcqscimok, int $kuuiuigeacouwmaa = 0) : array { return array_slice($uomewyckeuqoqocu, 0, $kuuiuigeacouwmaa, true) + $igqsaukqcqscimok + array_slice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, count($uomewyckeuqoqocu) - 1, true); } public function ggkqgwsekcwaaawa(array $oammesyieqmwuwyi = []) : array { if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto eeyukwscccmigmuq; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $igqsaukqcqscimok = array_filter($igqsaukqcqscimok); if ($this->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm)) { goto gqaiosgasmiekmma; } $oammesyieqmwuwyi[$momcykaoccoymeig][Constants::ascagqcquwgmygkm] = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); gqaiosgasmiekmma: kykgeuicqicmuucg: } syuuameqwoymyswo: eeyukwscccmigmuq: return $oammesyieqmwuwyi; } public function skauuuoqcaiseuks(array $uomewyckeuqoqocu = [], string $geqcesmqwkeayoiu = "\54") : string { $sociqikgoyemqaac = ''; if (!(is_array($uomewyckeuqoqocu) && is_string($geqcesmqwkeayoiu))) { goto oqmwiucmyoiwciws; } $sociqikgoyemqaac = rtrim(implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu), $geqcesmqwkeayoiu); oqmwiucmyoiwciws: return $sociqikgoyemqaac; } public function giwoasoewgaqiuis($uomewyckeuqoqocu) { if (!is_array($uomewyckeuqoqocu)) { goto sqummycmewomisus; } $uomewyckeuqoqocu = array_unique(array_filter($uomewyckeuqoqocu)); sqummycmewomisus: return $uomewyckeuqoqocu; } public function ygwimyogyaqgumam($vaksuumyyeikuuco, $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!$vaksuumyyeikuuco) { goto ukaumyigguemyqmg; } $qgciuiagkkguykgs = "\147\145\164\x5f{$aiowsaccomcoikus}"; if (method_exists($vaksuumyyeikuuco, $qgciuiagkkguykgs)) { goto weciiuggqamwweai; } if (method_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto ismmoaqwqiyscccu; } if (!property_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto uaeqweeeyaoceeae; } $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}; uaeqweeeyaoceeae: goto seymakqosammeimy; ismmoaqwqiyscccu: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}(...$ywmkwiwkosakssii); seymakqosammeimy: goto usukaqsqeowqkwwu; weciiuggqamwweai: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); usukaqsqeowqkwwu: ukaumyigguemyqmg: return $ksaameoqigiaoigg; } public function gymccqywkegiqiiw(array $uomewyckeuqoqocu) : int { return $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->owsaaggskwmeemog(0, count($uomewyckeuqoqocu) - 1); } public function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok) : void { if (is_int($kuuiuigeacouwmaa)) { goto mekmkiaykamiugmo; } $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu), true); $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy)); goto okieooymmiqqwsui; mekmkiaykamiugmo: array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok); okieooymmiqqwsui: } public function wkoiuauiogwgeyeo(array $uomewyckeuqoqocu, array $yygmoeguaqyumuui = []) : array { return array_intersect_key($uomewyckeuqoqocu, array_flip($yygmoeguaqyumuui)); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c1476eb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Pmpr\Common\Foundation\Interfaces\Constants; class _Array extends Common { public function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = []) { if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto wgawqekaeousiwwe; } foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) { if (is_array($esquqsuaumgwoewu)) { goto oaoggiyikquikqmg; } if ($xkqaigkogigocask) { goto qkgoiusmuuaqwywu; } $sogksuscggsicmac[] = $esquqsuaumgwoewu; goto waiwugiowecgeeww; qkgoiusmuuaqwywu: $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu; waiwugiowecgeeww: goto awcqsekwccegiugq; oaoggiyikquikqmg: $sogksuscggsicmac = $this->kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac); awcqsekwccegiugq: qaaymsuwqmigcoea: } ouqgocoygmaiamou: wgawqekaeousiwwe: return $sogksuscggsicmac; } public function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array { $giqggecqqikcysgq = 0; $uiymkeeaukcyqqik = null; $aqeywoskqiugcmye = null; foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { if (array_key_exists($momcykaoccoymeig, $couiucmsqaieciue)) { goto eeimccqyqieauwuk; } if (!is_object($eqgoocgaqwqcimie)) { goto yukceuoyyusqyiak; } $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok}; yukceuoyyusqyiak: if (!is_string($eqgoocgaqwqcimie)) { goto gesseuyackqsekiy; } $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie); if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) { goto ywosowquuuociuio; } $giqggecqqikcysgq = $ykiwomimkkuiigoq; $uiymkeeaukcyqqik = $eqgoocgaqwqcimie; $aqeywoskqiugcmye = $momcykaoccoymeig; ywosowquuuociuio: gesseuyackqsekiy: eeimccqyqieauwuk: cuwwggakcukcesmy: } oewsmwkmgiiugcie: return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik]; } public function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $umeowkomuuewqksk = true) { $sogksuscggsicmac = $ggauoeuaesiymgee; if (!(is_string($uusmaiomayssaecw) || is_numeric($uusmaiomayssaecw))) { goto ackiyyoociyuiaio; } if (is_array($oaiciiqoawkamweo)) { goto uaqeuukkceomqisi; } if (!(is_object($oaiciiqoawkamweo) && isset($oaiciiqoawkamweo->{$uusmaiomayssaecw}))) { goto kaacyyeegamkqkak; } $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw}; kaacyyeegamkqkak: goto imqikuakumuqamky; uaqeuukkceomqisi: if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) { goto msqawsuquouuugkc; } $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw]; msqawsuquouuugkc: imqikuakumuqamky: if (!($umeowkomuuewqksk && !$sogksuscggsicmac)) { goto myuwuwgiccywkiog; } $sogksuscggsicmac = $ggauoeuaesiymgee; myuwuwgiccywkiog: ackiyyoociyuiaio: return $sogksuscggsicmac; } public function find(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, string $aqykuigiuwmmcieu = Constants::weiosaewqequuyuq) { $sogksuscggsicmac = false; foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $esoaccosseymguso = $this->qamwegcyimgcqksw($eqgoocgaqwqcimie, $mkomwsiykqigmqca); if (!($esoaccosseymguso == $qwcmueausqgiwigy)) { goto qwuuagecegiqouig; } if (Constants::weiosaewqequuyuq === $aqykuigiuwmmcieu) { goto wakwsokmekawssyi; } $sogksuscggsicmac = $eqgoocgaqwqcimie; goto okgaykwweumwcsyq; wakwsokmekawssyi: $sogksuscggsicmac = $uusmaiomayssaecw; okgaykwweumwcsyq: goto eckksscswgomeoqs; qwuuagecegiqouig: ewgmqmguwukoekoc: } eckksscswgomeoqs: return $sogksuscggsicmac; } public function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, bool $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array { $sogksuscggsicmac = []; if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) { goto ickoqwmqsgowyscy; } $ggauoeuaesiymgee = ''; foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) { if (is_numeric($ewyuweyoskiagksm)) { goto miuwoyekioyugegk; } $uusmaiomayssaecw = $ewyuweyoskiagksm; $ggauoeuaesiymgee = $uauoccoqcsaeggui; goto uoowsoawqkggioeo; miuwoyekioyugegk: $uusmaiomayssaecw = $uauoccoqcsaeggui; uoowsoawqkggioeo: $eqgoocgaqwqcimie = $this->get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!is_callable($ekiuyucoiagmscgy)) { goto lwkkgmcgkowgygcs; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee); lwkkgmcgkowgygcs: if ($mywqgwsimwoeoawk) { goto ueyqgegieiwkocck; } $sogksuscggsicmac[] = $eqgoocgaqwqcimie; goto yukscyeaqukseeim; ueyqgegieiwkocck: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; yukscyeaqukseeim: agmcywmicucyeiig: } mmiukekqescmgkie: ickoqwmqsgowyscy: return $sogksuscggsicmac; } public function set($oaiciiqoawkamweo, $uwomkgseoiegeume = []) { if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) { goto gsiaweqgymagyokg; } $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo); $awqscowmskeuymeu = is_object($oaiciiqoawkamweo); foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if ($casemmqcsgmemwyg) { goto eqgkqikoqkaiuocm; } if (!$awqscowmskeuymeu) { goto ayuwgkkummcqqesk; } $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; ayuwgkkummcqqesk: goto mouaeysyaawwqsmq; eqgkqikoqkaiuocm: $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; mouaeysyaawwqsmq: uwoawkimmaqcwqcq: } cwgsuaukyieoswoq: gsiaweqgymagyokg: return $oaiciiqoawkamweo; } public function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null) { $yygmoeguaqyumuui = explode("\56", $mkomwsiykqigmqca); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (is_array($uomewyckeuqoqocu)) { goto seymakqosammeimy; } if (is_object($uomewyckeuqoqocu)) { goto uaeqweeeyaoceeae; } $uomewyckeuqoqocu = null; goto gaqiaugiyyuoaywe; goto ismmoaqwqiyscccu; uaeqweeeyaoceeae: if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) { goto oqmwiucmyoiwciws; } if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) { goto gqaiosgasmiekmma; } $uomewyckeuqoqocu = null; goto gaqiaugiyyuoaywe; goto eeyukwscccmigmuq; gqaiosgasmiekmma: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}; eeyukwscccmigmuq: goto sqummycmewomisus; oqmwiucmyoiwciws: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}(); sqummycmewomisus: ismmoaqwqiyscccu: goto weciiuggqamwweai; seymakqosammeimy: if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto syuuameqwoymyswo; } $uomewyckeuqoqocu = null; goto gaqiaugiyyuoaywe; goto kykgeuicqicmuucg; syuuameqwoymyswo: $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw]; kykgeuicqicmuucg: weciiuggqamwweai: ismswigsaeymicgu: } gaqiaugiyyuoaywe: if ($uomewyckeuqoqocu) { goto usukaqsqeowqkwwu; } $uomewyckeuqoqocu = $ggauoeuaesiymgee; usukaqsqeowqkwwu: return $uomewyckeuqoqocu; } public function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw) { $eqgoocgaqwqcimie = null; if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) { goto wukeekgkakowukck; } if (is_array($uusmaiomayssaecw)) { goto mekmkiaykamiugmo; } if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto ukaumyigguemyqmg; } $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw]; unset($uomewyckeuqoqocu[$uusmaiomayssaecw]); ukaumyigguemyqmg: goto okieooymmiqqwsui; mekmkiaykamiugmo: $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw)); okieooymmiqqwsui: wukeekgkakowukck: return $eqgoocgaqwqcimie; } public function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie) { if (is_array($eqgoocgaqwqcimie)) { goto wwgssoakwoscwoss; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; wwgssoakwoscwoss: $qcgkuqesqqymcuui = false; foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) { $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu, true); if (!($uusmaiomayssaecw !== false)) { goto oyauiswikoukcyqy; } $qcgkuqesqqymcuui = $this->unset($uomewyckeuqoqocu, $uusmaiomayssaecw); oyauiswikoukcyqy: syeosgmcsoykgmoi: } komaikgkmaeoescu: return $qcgkuqesqqymcuui; } public static function rswuscuqiwycaoym($uomewyckeuqoqocu) : bool { $wuoqgcwmkicakygs = false; if (!$uomewyckeuqoqocu) { goto cmaemkmgukqugeow; } $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1); cmaemkmgukqugeow: return $wuoqgcwmkicakygs; } public function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool { $ksaameoqigiaoigg = false; if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) { goto gammgmwagsemkuua; } foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if ($this->get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) { goto euekwowaokcqsgsw; } $ksaameoqigiaoigg = true; goto qmukimkmkeagqocg; euekwowaokcqsgsw: kgyqmwecomucoumg: } qmukimkmkeagqocg: gammgmwagsemkuua: return $ksaameoqigiaoigg; } public function ooaaysmsqgsqmaqu(array $coyyecywycscckmw, array $oeoqckygmmkmsuky, bool $qkwmeayoakeoawya = true) : bool { $wwuukgmueeqciiqs = false; if (!(count($coyyecywycscckmw) === count($oeoqckygmmkmsuky))) { goto wioguogamqaikqqy; } if (!$qkwmeayoakeoawya) { goto euuqcskgauwamyuw; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $wwuukgmueeqciiqs = $yyauwyaeewsickwk->wegeuqkaeuusoike($coyyecywycscckmw) === $yyauwyaeewsickwk->wegeuqkaeuusoike($oeoqckygmmkmsuky); goto qkqkgaaomgkyowwy; euuqcskgauwamyuw: $wwuukgmueeqciiqs = empty(array_diff_assoc($coyyecywycscckmw, $oeoqckygmmkmsuky)); qkqkgaaomgkyowwy: wioguogamqaikqqy: return $wwuukgmueeqciiqs; } public function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool { return count($uomewyckeuqoqocu) !== count($uomewyckeuqoqocu, 1); } public function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array { if (!is_array($uomewyckeuqoqocu)) { goto wmgigiqsosicakwu; } uasort($uomewyckeuqoqocu, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) { return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw]; }); if (!($uuyoeicyoayimaoa > 0)) { goto aiaagscmgeyuqaky; } $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true); aiaagscmgeyuqaky: wmgigiqsosicakwu: return $uomewyckeuqoqocu; } public function yaeiiwwyckwugsem($uomewyckeuqoqocu, string $igaagwuyasawwqms = Constants::iuqumwggccmcuyem) { if (!is_array($uomewyckeuqoqocu)) { goto fauegywkmasowmki; } $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms, $cgwqqcukiasoicmi) { $uiuykcweuosgmwki = false; if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) { goto aumkeyeqwqukcyqm; } if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) { goto iquwggoqmwgkouio; } $uiuykcweuosgmwki = $this->get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> $this->get($csougakqegqiqsgi, $igaagwuyasawwqms); iquwggoqmwgkouio: goto moaqsaoasisemagk; aumkeyeqwqukcyqm: if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) { goto uwaoaysiccasmygw; } $aaqigycaeeeceqme = $cgwqqcukiasoicmi->myagqecycsaiyqsk($mmeioagwmyscwumo, $igaagwuyasawwqms); $uywmwywieegcwmqe = $cgwqqcukiasoicmi->myagqecycsaiyqsk($csougakqegqiqsgi, $igaagwuyasawwqms); if (!($aaqigycaeeeceqme && $uywmwywieegcwmqe)) { goto kyayieiyyyqgkcyc; } $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$aaqigycaeeeceqme}() <=> $csougakqegqiqsgi->{$uywmwywieegcwmqe}(); kyayieiyyyqgkcyc: goto okccyiwkococowmi; uwaoaysiccasmygw: $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}; okccyiwkococowmi: moaqsaoasisemagk: return (int) $uiuykcweuosgmwki; }); fauegywkmasowmki: return $uomewyckeuqoqocu; } public function merge($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { return array_merge((array) $sysgmomuyiiawwcm, (array) $gcegymooyemmaysk); } public function sggceaqggqqsqaoo(array $uomewyckeuqoqocu, array $igqsaukqcqscimok, int $kuuiuigeacouwmaa = 0) : array { return array_slice($uomewyckeuqoqocu, 0, $kuuiuigeacouwmaa, true) + $igqsaukqcqscimok + array_slice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, count($uomewyckeuqoqocu) - 1, true); } public function ggkqgwsekcwaaawa(array $oammesyieqmwuwyi = []) : array { if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto oqqsaycukyyqkwwa; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $igqsaukqcqscimok = array_filter($igqsaukqcqscimok); if ($this->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm)) { goto acwgyguyoswiiayo; } $oammesyieqmwuwyi[$momcykaoccoymeig][Constants::ascagqcquwgmygkm] = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); acwgyguyoswiiayo: bkusemkaeowgcggg: } sgggogwmywukuwoq: oqqsaycukyyqkwwa: return $oammesyieqmwuwyi; } public function skauuuoqcaiseuks(array $uomewyckeuqoqocu = [], string $geqcesmqwkeayoiu = "\54") : string { $sociqikgoyemqaac = ''; if (!(is_array($uomewyckeuqoqocu) && is_string($geqcesmqwkeayoiu))) { goto lsgwaumeuqgqgykm; } $sociqikgoyemqaac = rtrim(implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu), $geqcesmqwkeayoiu); lsgwaumeuqgqgykm: return $sociqikgoyemqaac; } public function giwoasoewgaqiuis($uomewyckeuqoqocu) { if (!is_array($uomewyckeuqoqocu)) { goto aosqacyissiuywmy; } $uomewyckeuqoqocu = array_unique(array_filter($uomewyckeuqoqocu)); aosqacyissiuywmy: return $uomewyckeuqoqocu; } public function ygwimyogyaqgumam($vaksuumyyeikuuco, $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!$vaksuumyyeikuuco) { goto koayqokgokmcaeou; } $qgciuiagkkguykgs = "\147\x65\x74\x5f{$aiowsaccomcoikus}"; if (method_exists($vaksuumyyeikuuco, $qgciuiagkkguykgs)) { goto eickccugyqkeaqqs; } if (method_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto iyiogqckuesmwgsi; } if (!property_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto gkaauyqyceyeasym; } $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}; gkaauyqyceyeasym: goto akgikwguwgmkickm; iyiogqckuesmwgsi: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}(...$ywmkwiwkosakssii); akgikwguwgmkickm: goto wecqaqqeqaiwuqmc; eickccugyqkeaqqs: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); wecqaqqeqaiwuqmc: koayqokgokmcaeou: return $ksaameoqigiaoigg; } public function gymccqywkegiqiiw(array $uomewyckeuqoqocu) : int { return $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->owsaaggskwmeemog(0, count($uomewyckeuqoqocu) - 1); } public function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok) : void { if (is_int($kuuiuigeacouwmaa)) { goto owgquegaygweeuwq; } $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu), true); $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy)); goto mkeikioeqcuumiga; owgquegaygweeuwq: array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok); mkeikioeqcuumiga: } public function wkoiuauiogwgeyeo(array $uomewyckeuqoqocu, array $yygmoeguaqyumuui = []) : array { return array_intersect_key($uomewyckeuqoqocu, array_flip($yygmoeguaqyumuui)); } }

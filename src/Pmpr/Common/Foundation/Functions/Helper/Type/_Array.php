<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77d1b4081             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Pmpr\Common\Foundation\Interfaces\Constants; class _Array extends Common { public function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = []) { if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto cuwwggakcukcesmy; } foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) { if (is_array($esquqsuaumgwoewu)) { goto wgawqekaeousiwwe; } if ($xkqaigkogigocask) { goto oaoggiyikquikqmg; } $sogksuscggsicmac[] = $esquqsuaumgwoewu; goto awcqsekwccegiugq; oaoggiyikquikqmg: $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu; awcqsekwccegiugq: goto oewsmwkmgiiugcie; wgawqekaeousiwwe: $sogksuscggsicmac = $this->kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac); oewsmwkmgiiugcie: waiwugiowecgeeww: } qkgoiusmuuaqwywu: cuwwggakcukcesmy: return $sogksuscggsicmac; } public function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array { $giqggecqqikcysgq = 0; $uiymkeeaukcyqqik = null; $aqeywoskqiugcmye = null; foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { if (array_key_exists($momcykaoccoymeig, $couiucmsqaieciue)) { goto kaacyyeegamkqkak; } if (!is_object($eqgoocgaqwqcimie)) { goto gesseuyackqsekiy; } $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok}; gesseuyackqsekiy: if (!is_string($eqgoocgaqwqcimie)) { goto msqawsuquouuugkc; } $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie); if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) { goto eeimccqyqieauwuk; } $giqggecqqikcysgq = $ykiwomimkkuiigoq; $uiymkeeaukcyqqik = $eqgoocgaqwqcimie; $aqeywoskqiugcmye = $momcykaoccoymeig; eeimccqyqieauwuk: msqawsuquouuugkc: kaacyyeegamkqkak: ywosowquuuociuio: } yukceuoyyusqyiak: return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik]; } public function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $umeowkomuuewqksk = true) { $sogksuscggsicmac = $ggauoeuaesiymgee; if (!(is_string($uusmaiomayssaecw) || is_numeric($uusmaiomayssaecw))) { goto ewgmqmguwukoekoc; } if (is_array($oaiciiqoawkamweo)) { goto myuwuwgiccywkiog; } if (!(is_object($oaiciiqoawkamweo) && isset($oaiciiqoawkamweo->{$uusmaiomayssaecw}))) { goto imqikuakumuqamky; } $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw}; imqikuakumuqamky: goto ackiyyoociyuiaio; myuwuwgiccywkiog: if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) { goto uaqeuukkceomqisi; } $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw]; uaqeuukkceomqisi: ackiyyoociyuiaio: if (!($umeowkomuuewqksk && !$sogksuscggsicmac)) { goto eckksscswgomeoqs; } $sogksuscggsicmac = $ggauoeuaesiymgee; eckksscswgomeoqs: ewgmqmguwukoekoc: return $sogksuscggsicmac; } public function find(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, string $aqykuigiuwmmcieu = Constants::weiosaewqequuyuq) { $sogksuscggsicmac = false; foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $esoaccosseymguso = $this->qamwegcyimgcqksw($eqgoocgaqwqcimie, $mkomwsiykqigmqca); if (!($esoaccosseymguso == $qwcmueausqgiwigy)) { goto agmcywmicucyeiig; } if (Constants::weiosaewqequuyuq === $aqykuigiuwmmcieu) { goto qwuuagecegiqouig; } $sogksuscggsicmac = $eqgoocgaqwqcimie; goto mmiukekqescmgkie; qwuuagecegiqouig: $sogksuscggsicmac = $uusmaiomayssaecw; mmiukekqescmgkie: goto wakwsokmekawssyi; agmcywmicucyeiig: okgaykwweumwcsyq: } wakwsokmekawssyi: return $sogksuscggsicmac; } public function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, bool $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array { $sogksuscggsicmac = []; if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) { goto uwoawkimmaqcwqcq; } $ggauoeuaesiymgee = ''; foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) { if (is_numeric($ewyuweyoskiagksm)) { goto lwkkgmcgkowgygcs; } $uusmaiomayssaecw = $ewyuweyoskiagksm; $ggauoeuaesiymgee = $uauoccoqcsaeggui; goto ueyqgegieiwkocck; lwkkgmcgkowgygcs: $uusmaiomayssaecw = $uauoccoqcsaeggui; ueyqgegieiwkocck: $eqgoocgaqwqcimie = $this->get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!is_callable($ekiuyucoiagmscgy)) { goto yukscyeaqukseeim; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee); yukscyeaqukseeim: if ($mywqgwsimwoeoawk) { goto ickoqwmqsgowyscy; } $sogksuscggsicmac[] = $eqgoocgaqwqcimie; goto cwgsuaukyieoswoq; ickoqwmqsgowyscy: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; cwgsuaukyieoswoq: uoowsoawqkggioeo: } miuwoyekioyugegk: uwoawkimmaqcwqcq: return $sogksuscggsicmac; } public function set($oaiciiqoawkamweo, $uwomkgseoiegeume = []) { if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) { goto ismswigsaeymicgu; } $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo); $awqscowmskeuymeu = is_object($oaiciiqoawkamweo); foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if ($casemmqcsgmemwyg) { goto gsiaweqgymagyokg; } if (!$awqscowmskeuymeu) { goto mouaeysyaawwqsmq; } $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; mouaeysyaawwqsmq: goto gaqiaugiyyuoaywe; gsiaweqgymagyokg: $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; gaqiaugiyyuoaywe: eqgkqikoqkaiuocm: } ayuwgkkummcqqesk: ismswigsaeymicgu: return $oaiciiqoawkamweo; } public function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null) { $yygmoeguaqyumuui = explode("\x2e", $mkomwsiykqigmqca); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (is_array($uomewyckeuqoqocu)) { goto usukaqsqeowqkwwu; } if (is_object($uomewyckeuqoqocu)) { goto seymakqosammeimy; } $uomewyckeuqoqocu = null; goto syuuameqwoymyswo; goto weciiuggqamwweai; seymakqosammeimy: if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) { goto uaeqweeeyaoceeae; } if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) { goto oqmwiucmyoiwciws; } $uomewyckeuqoqocu = null; goto syuuameqwoymyswo; goto sqummycmewomisus; oqmwiucmyoiwciws: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}; sqummycmewomisus: goto ismmoaqwqiyscccu; uaeqweeeyaoceeae: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}(); ismmoaqwqiyscccu: weciiuggqamwweai: goto ukaumyigguemyqmg; usukaqsqeowqkwwu: if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto gqaiosgasmiekmma; } $uomewyckeuqoqocu = null; goto syuuameqwoymyswo; goto eeyukwscccmigmuq; gqaiosgasmiekmma: $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw]; eeyukwscccmigmuq: ukaumyigguemyqmg: kykgeuicqicmuucg: } syuuameqwoymyswo: if ($uomewyckeuqoqocu) { goto mekmkiaykamiugmo; } $uomewyckeuqoqocu = $ggauoeuaesiymgee; mekmkiaykamiugmo: return $uomewyckeuqoqocu; } public function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw) { $eqgoocgaqwqcimie = null; if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) { goto komaikgkmaeoescu; } if (is_array($uusmaiomayssaecw)) { goto wukeekgkakowukck; } if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto okieooymmiqqwsui; } $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw]; unset($uomewyckeuqoqocu[$uusmaiomayssaecw]); okieooymmiqqwsui: goto wwgssoakwoscwoss; wukeekgkakowukck: $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw)); wwgssoakwoscwoss: komaikgkmaeoescu: return $eqgoocgaqwqcimie; } public function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie) { if (is_array($eqgoocgaqwqcimie)) { goto syeosgmcsoykgmoi; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; syeosgmcsoykgmoi: $qcgkuqesqqymcuui = false; foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) { $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu, true); if (!($uusmaiomayssaecw !== false)) { goto qmukimkmkeagqocg; } $qcgkuqesqqymcuui = $this->unset($uomewyckeuqoqocu, $uusmaiomayssaecw); qmukimkmkeagqocg: cmaemkmgukqugeow: } oyauiswikoukcyqy: return $qcgkuqesqqymcuui; } public static function rswuscuqiwycaoym($uomewyckeuqoqocu) : bool { $wuoqgcwmkicakygs = false; if (!$uomewyckeuqoqocu) { goto kgyqmwecomucoumg; } $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1); kgyqmwecomucoumg: return $wuoqgcwmkicakygs; } public function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool { $ksaameoqigiaoigg = false; if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) { goto qkqkgaaomgkyowwy; } foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if ($this->get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) { goto euuqcskgauwamyuw; } $ksaameoqigiaoigg = true; goto euekwowaokcqsgsw; euuqcskgauwamyuw: gammgmwagsemkuua: } euekwowaokcqsgsw: qkqkgaaomgkyowwy: return $ksaameoqigiaoigg; } public function ooaaysmsqgsqmaqu(array $coyyecywycscckmw, array $oeoqckygmmkmsuky, bool $qkwmeayoakeoawya = true) : bool { $wwuukgmueeqciiqs = false; if (!(count($coyyecywycscckmw) === count($oeoqckygmmkmsuky))) { goto wmgigiqsosicakwu; } if (!$qkwmeayoakeoawya) { goto wioguogamqaikqqy; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $wwuukgmueeqciiqs = $yyauwyaeewsickwk->wegeuqkaeuusoike($coyyecywycscckmw) === $yyauwyaeewsickwk->wegeuqkaeuusoike($oeoqckygmmkmsuky); goto aiaagscmgeyuqaky; wioguogamqaikqqy: $wwuukgmueeqciiqs = empty(array_diff_assoc($coyyecywycscckmw, $oeoqckygmmkmsuky)); aiaagscmgeyuqaky: wmgigiqsosicakwu: return $wwuukgmueeqciiqs; } public function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool { return count($uomewyckeuqoqocu) !== count($uomewyckeuqoqocu, 1); } public function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array { if (!is_array($uomewyckeuqoqocu)) { goto uwaoaysiccasmygw; } uasort($uomewyckeuqoqocu, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) { return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw]; }); if (!($uuyoeicyoayimaoa > 0)) { goto kyayieiyyyqgkcyc; } $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true); kyayieiyyyqgkcyc: uwaoaysiccasmygw: return $uomewyckeuqoqocu; } public function yaeiiwwyckwugsem($uomewyckeuqoqocu, string $igaagwuyasawwqms = Constants::iuqumwggccmcuyem) { if (!is_array($uomewyckeuqoqocu)) { goto bkusemkaeowgcggg; } $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms, $cgwqqcukiasoicmi) { $uiuykcweuosgmwki = false; if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) { goto fauegywkmasowmki; } if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) { goto moaqsaoasisemagk; } $uiuykcweuosgmwki = $this->get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> $this->get($csougakqegqiqsgi, $igaagwuyasawwqms); moaqsaoasisemagk: goto sgggogwmywukuwoq; fauegywkmasowmki: if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) { goto iquwggoqmwgkouio; } $aaqigycaeeeceqme = $cgwqqcukiasoicmi->myagqecycsaiyqsk($mmeioagwmyscwumo, $igaagwuyasawwqms); $uywmwywieegcwmqe = $cgwqqcukiasoicmi->myagqecycsaiyqsk($csougakqegqiqsgi, $igaagwuyasawwqms); if (!($aaqigycaeeeceqme && $uywmwywieegcwmqe)) { goto okccyiwkococowmi; } $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$aaqigycaeeeceqme}() <=> $csougakqegqiqsgi->{$uywmwywieegcwmqe}(); okccyiwkococowmi: goto aumkeyeqwqukcyqm; iquwggoqmwgkouio: $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}; aumkeyeqwqukcyqm: sgggogwmywukuwoq: return (int) $uiuykcweuosgmwki; }); bkusemkaeowgcggg: return $uomewyckeuqoqocu; } public function merge($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { return array_merge((array) $sysgmomuyiiawwcm, (array) $gcegymooyemmaysk); } public function sggceaqggqqsqaoo(array $uomewyckeuqoqocu, array $igqsaukqcqscimok, int $kuuiuigeacouwmaa = 0) : array { return array_slice($uomewyckeuqoqocu, 0, $kuuiuigeacouwmaa, true) + $igqsaukqcqscimok + array_slice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, count($uomewyckeuqoqocu) - 1, true); } public function ggkqgwsekcwaaawa(array $oammesyieqmwuwyi = []) : array { if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto aosqacyissiuywmy; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $igqsaukqcqscimok = array_filter($igqsaukqcqscimok); if ($this->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm)) { goto lsgwaumeuqgqgykm; } $oammesyieqmwuwyi[$momcykaoccoymeig][Constants::ascagqcquwgmygkm] = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); lsgwaumeuqgqgykm: oqqsaycukyyqkwwa: } acwgyguyoswiiayo: aosqacyissiuywmy: return $oammesyieqmwuwyi; } public function skauuuoqcaiseuks(array $uomewyckeuqoqocu = [], string $geqcesmqwkeayoiu = "\x2c") : string { $sociqikgoyemqaac = ''; if (!(is_array($uomewyckeuqoqocu) && is_string($geqcesmqwkeayoiu))) { goto gkaauyqyceyeasym; } $sociqikgoyemqaac = rtrim(implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu), $geqcesmqwkeayoiu); gkaauyqyceyeasym: return $sociqikgoyemqaac; } public function giwoasoewgaqiuis($uomewyckeuqoqocu) { if (!is_array($uomewyckeuqoqocu)) { goto iyiogqckuesmwgsi; } $uomewyckeuqoqocu = array_unique(array_filter($uomewyckeuqoqocu)); iyiogqckuesmwgsi: return $uomewyckeuqoqocu; } public function ygwimyogyaqgumam($vaksuumyyeikuuco, $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!$vaksuumyyeikuuco) { goto mkeikioeqcuumiga; } $qgciuiagkkguykgs = "\147\x65\164\x5f{$aiowsaccomcoikus}"; if (method_exists($vaksuumyyeikuuco, $qgciuiagkkguykgs)) { goto koayqokgokmcaeou; } if (method_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto eickccugyqkeaqqs; } if (!property_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto akgikwguwgmkickm; } $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}; akgikwguwgmkickm: goto wecqaqqeqaiwuqmc; eickccugyqkeaqqs: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}(...$ywmkwiwkosakssii); wecqaqqeqaiwuqmc: goto owgquegaygweeuwq; koayqokgokmcaeou: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); owgquegaygweeuwq: mkeikioeqcuumiga: return $ksaameoqigiaoigg; } public function gymccqywkegiqiiw(array $uomewyckeuqoqocu) : int { return $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->owsaaggskwmeemog(0, count($uomewyckeuqoqocu) - 1); } public function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok) : void { if (is_int($kuuiuigeacouwmaa)) { goto gusqaksmckugmucc; } $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu), true); $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy)); goto uceqaououkceeiui; gusqaksmckugmucc: array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok); uceqaououkceeiui: } public function wkoiuauiogwgeyeo(array $uomewyckeuqoqocu, array $yygmoeguaqyumuui = []) : array { return array_intersect_key($uomewyckeuqoqocu, array_flip($yygmoeguaqyumuui)); } }

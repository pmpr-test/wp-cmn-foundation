<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e2e8864db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Pmpr\Common\Foundation\Interfaces\Constants; class _Array extends Common { public function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = []) { if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto ayqwqcgquogagmsc; } foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) { if (is_array($esquqsuaumgwoewu)) { goto guuosmqayokicema; } if ($xkqaigkogigocask) { goto gguissygssokqwso; } $sogksuscggsicmac[] = $esquqsuaumgwoewu; goto kqwoqegwcaycwyou; gguissygssokqwso: $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu; kqwoqegwcaycwyou: goto cagiyomyssauaquc; guuosmqayokicema: $sogksuscggsicmac = $this->kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac); cagiyomyssauaquc: mukqaqueesywqsuq: } ksugksoayiigqake: ayqwqcgquogagmsc: return $sogksuscggsicmac; } public function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array { $giqggecqqikcysgq = 0; $uiymkeeaukcyqqik = null; $aqeywoskqiugcmye = null; foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { if (array_key_exists($momcykaoccoymeig, $couiucmsqaieciue)) { goto smuqqgosmeymscwo; } if (!is_object($eqgoocgaqwqcimie)) { goto ikiwqgmciageamia; } $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok}; ikiwqgmciageamia: if (!is_string($eqgoocgaqwqcimie)) { goto ukkkayewayqiekce; } $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie); if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) { goto syaimiaogoukoqaa; } $giqggecqqikcysgq = $ykiwomimkkuiigoq; $uiymkeeaukcyqqik = $eqgoocgaqwqcimie; $aqeywoskqiugcmye = $momcykaoccoymeig; syaimiaogoukoqaa: ukkkayewayqiekce: smuqqgosmeymscwo: umgmikwiqagosokm: } cwcoqyuoyckuuios: return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik]; } public function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $umeowkomuuewqksk = true) { $sogksuscggsicmac = $ggauoeuaesiymgee; if (!(is_string($uusmaiomayssaecw) || is_numeric($uusmaiomayssaecw))) { goto ukgemiyqimumoyoa; } if (is_array($oaiciiqoawkamweo)) { goto ikaweoguqucoaegy; } if (!(is_object($oaiciiqoawkamweo) && isset($oaiciiqoawkamweo->{$uusmaiomayssaecw}))) { goto gqqeucaekwcskwqm; } $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw}; gqqeucaekwcskwqm: goto uegaqgayeaugeoim; ikaweoguqucoaegy: if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) { goto micgaswksmmkmgkq; } $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw]; micgaswksmmkmgkq: uegaqgayeaugeoim: if (!($umeowkomuuewqksk && !$sogksuscggsicmac)) { goto gyyuyqcmmcsoemkc; } $sogksuscggsicmac = $ggauoeuaesiymgee; gyyuyqcmmcsoemkc: ukgemiyqimumoyoa: return $sogksuscggsicmac; } public function find(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, string $aqykuigiuwmmcieu = Constants::weiosaewqequuyuq) { $sogksuscggsicmac = false; foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $esoaccosseymguso = $this->qamwegcyimgcqksw($eqgoocgaqwqcimie, $mkomwsiykqigmqca); if (!($esoaccosseymguso == $qwcmueausqgiwigy)) { goto igkameomykgywamu; } if (Constants::weiosaewqequuyuq === $aqykuigiuwmmcieu) { goto weyuusiimkuykwca; } $sogksuscggsicmac = $eqgoocgaqwqcimie; goto eggowcqiawiuwski; weyuusiimkuykwca: $sogksuscggsicmac = $uusmaiomayssaecw; eggowcqiawiuwski: goto miocgmmkkkksmisy; igkameomykgywamu: zsscgecwckmocwqa: } miocgmmkkkksmisy: return $sogksuscggsicmac; } public function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, bool $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array { $sogksuscggsicmac = []; if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) { goto wgawqekaeousiwwe; } $ggauoeuaesiymgee = ''; foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) { if (is_numeric($ewyuweyoskiagksm)) { goto qaaymsuwqmigcoea; } $uusmaiomayssaecw = $ewyuweyoskiagksm; $ggauoeuaesiymgee = $uauoccoqcsaeggui; goto qkgoiusmuuaqwywu; qaaymsuwqmigcoea: $uusmaiomayssaecw = $uauoccoqcsaeggui; qkgoiusmuuaqwywu: $eqgoocgaqwqcimie = $this->get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!is_callable($ekiuyucoiagmscgy)) { goto waiwugiowecgeeww; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee); waiwugiowecgeeww: if ($mywqgwsimwoeoawk) { goto oaoggiyikquikqmg; } $sogksuscggsicmac[] = $eqgoocgaqwqcimie; goto awcqsekwccegiugq; oaoggiyikquikqmg: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; awcqsekwccegiugq: ouqgocoygmaiamou: } awgyiumgyeockqoa: wgawqekaeousiwwe: return $sogksuscggsicmac; } public function set($oaiciiqoawkamweo, $uwomkgseoiegeume = []) { if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) { goto eeimccqyqieauwuk; } $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo); $awqscowmskeuymeu = is_object($oaiciiqoawkamweo); foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if ($casemmqcsgmemwyg) { goto ywosowquuuociuio; } if (!$awqscowmskeuymeu) { goto yukceuoyyusqyiak; } $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; yukceuoyyusqyiak: goto gesseuyackqsekiy; ywosowquuuociuio: $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; gesseuyackqsekiy: cuwwggakcukcesmy: } oewsmwkmgiiugcie: eeimccqyqieauwuk: return $oaiciiqoawkamweo; } public function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null) { $yygmoeguaqyumuui = explode("\x2e", $mkomwsiykqigmqca); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (is_array($uomewyckeuqoqocu)) { goto qwuuagecegiqouig; } if (is_object($uomewyckeuqoqocu)) { goto wakwsokmekawssyi; } $uomewyckeuqoqocu = null; goto msqawsuquouuugkc; goto okgaykwweumwcsyq; wakwsokmekawssyi: if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) { goto eckksscswgomeoqs; } if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) { goto myuwuwgiccywkiog; } $uomewyckeuqoqocu = null; goto msqawsuquouuugkc; goto ackiyyoociyuiaio; myuwuwgiccywkiog: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}; ackiyyoociyuiaio: goto ewgmqmguwukoekoc; eckksscswgomeoqs: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}(); ewgmqmguwukoekoc: okgaykwweumwcsyq: goto mmiukekqescmgkie; qwuuagecegiqouig: if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto uaqeuukkceomqisi; } $uomewyckeuqoqocu = null; goto msqawsuquouuugkc; goto imqikuakumuqamky; uaqeuukkceomqisi: $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw]; imqikuakumuqamky: mmiukekqescmgkie: kaacyyeegamkqkak: } msqawsuquouuugkc: if ($uomewyckeuqoqocu) { goto agmcywmicucyeiig; } $uomewyckeuqoqocu = $ggauoeuaesiymgee; agmcywmicucyeiig: return $uomewyckeuqoqocu; } public function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw) { $eqgoocgaqwqcimie = null; if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) { goto ueyqgegieiwkocck; } if (is_array($uusmaiomayssaecw)) { goto uoowsoawqkggioeo; } if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto miuwoyekioyugegk; } $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw]; unset($uomewyckeuqoqocu[$uusmaiomayssaecw]); miuwoyekioyugegk: goto lwkkgmcgkowgygcs; uoowsoawqkggioeo: $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw)); lwkkgmcgkowgygcs: ueyqgegieiwkocck: return $eqgoocgaqwqcimie; } public function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie) { if (is_array($eqgoocgaqwqcimie)) { goto yukscyeaqukseeim; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; yukscyeaqukseeim: $qcgkuqesqqymcuui = false; foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) { $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu, true); if (!($uusmaiomayssaecw !== false)) { goto uwoawkimmaqcwqcq; } $qcgkuqesqqymcuui = $this->unset($uomewyckeuqoqocu, $uusmaiomayssaecw); uwoawkimmaqcwqcq: cwgsuaukyieoswoq: } ickoqwmqsgowyscy: return $qcgkuqesqqymcuui; } public static function rswuscuqiwycaoym($uomewyckeuqoqocu) : bool { $wuoqgcwmkicakygs = false; if (!$uomewyckeuqoqocu) { goto ayuwgkkummcqqesk; } $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1); ayuwgkkummcqqesk: return $wuoqgcwmkicakygs; } public function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool { $ksaameoqigiaoigg = false; if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) { goto gaqiaugiyyuoaywe; } foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if ($this->get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) { goto gsiaweqgymagyokg; } $ksaameoqigiaoigg = true; goto eqgkqikoqkaiuocm; gsiaweqgymagyokg: mouaeysyaawwqsmq: } eqgkqikoqkaiuocm: gaqiaugiyyuoaywe: return $ksaameoqigiaoigg; } public function ooaaysmsqgsqmaqu(array $coyyecywycscckmw, array $oeoqckygmmkmsuky, bool $qkwmeayoakeoawya = true) : bool { $wwuukgmueeqciiqs = false; if (!(count($coyyecywycscckmw) === count($oeoqckygmmkmsuky))) { goto kykgeuicqicmuucg; } if (!$qkwmeayoakeoawya) { goto ismswigsaeymicgu; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $wwuukgmueeqciiqs = $yyauwyaeewsickwk->wegeuqkaeuusoike($coyyecywycscckmw) === $yyauwyaeewsickwk->wegeuqkaeuusoike($oeoqckygmmkmsuky); goto syuuameqwoymyswo; ismswigsaeymicgu: $wwuukgmueeqciiqs = empty(array_diff_assoc($coyyecywycscckmw, $oeoqckygmmkmsuky)); syuuameqwoymyswo: kykgeuicqicmuucg: return $wwuukgmueeqciiqs; } public function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool { return count($uomewyckeuqoqocu) !== count($uomewyckeuqoqocu, 1); } public function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array { if (!is_array($uomewyckeuqoqocu)) { goto eeyukwscccmigmuq; } uasort($uomewyckeuqoqocu, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) { return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw]; }); if (!($uuyoeicyoayimaoa > 0)) { goto gqaiosgasmiekmma; } $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true); gqaiosgasmiekmma: eeyukwscccmigmuq: return $uomewyckeuqoqocu; } public function yaeiiwwyckwugsem($uomewyckeuqoqocu, string $igaagwuyasawwqms = Constants::iuqumwggccmcuyem) { if (!is_array($uomewyckeuqoqocu)) { goto usukaqsqeowqkwwu; } $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms, $cgwqqcukiasoicmi) { $uiuykcweuosgmwki = false; if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) { goto seymakqosammeimy; } if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) { goto ismmoaqwqiyscccu; } $uiuykcweuosgmwki = $this->get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> $this->get($csougakqegqiqsgi, $igaagwuyasawwqms); ismmoaqwqiyscccu: goto weciiuggqamwweai; seymakqosammeimy: if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) { goto sqummycmewomisus; } $aaqigycaeeeceqme = $cgwqqcukiasoicmi->myagqecycsaiyqsk($mmeioagwmyscwumo, $igaagwuyasawwqms); $uywmwywieegcwmqe = $cgwqqcukiasoicmi->myagqecycsaiyqsk($csougakqegqiqsgi, $igaagwuyasawwqms); if (!($aaqigycaeeeceqme && $uywmwywieegcwmqe)) { goto oqmwiucmyoiwciws; } $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$aaqigycaeeeceqme}() <=> $csougakqegqiqsgi->{$uywmwywieegcwmqe}(); oqmwiucmyoiwciws: goto uaeqweeeyaoceeae; sqummycmewomisus: $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}; uaeqweeeyaoceeae: weciiuggqamwweai: return (int) $uiuykcweuosgmwki; }); usukaqsqeowqkwwu: return $uomewyckeuqoqocu; } public function merge($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { return array_merge((array) $sysgmomuyiiawwcm, (array) $gcegymooyemmaysk); } public function sggceaqggqqsqaoo(array $uomewyckeuqoqocu, array $igqsaukqcqscimok, int $kuuiuigeacouwmaa = 0) : array { return array_slice($uomewyckeuqoqocu, 0, $kuuiuigeacouwmaa, true) + $igqsaukqcqscimok + array_slice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, count($uomewyckeuqoqocu) - 1, true); } public function ggkqgwsekcwaaawa(array $oammesyieqmwuwyi = []) : array { if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto wukeekgkakowukck; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $igqsaukqcqscimok = array_filter($igqsaukqcqscimok); if ($this->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm)) { goto okieooymmiqqwsui; } $oammesyieqmwuwyi[$momcykaoccoymeig][Constants::ascagqcquwgmygkm] = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); okieooymmiqqwsui: mekmkiaykamiugmo: } ukaumyigguemyqmg: wukeekgkakowukck: return $oammesyieqmwuwyi; } public function skauuuoqcaiseuks(array $uomewyckeuqoqocu = [], string $geqcesmqwkeayoiu = "\x2c") : string { $sociqikgoyemqaac = ''; if (!(is_array($uomewyckeuqoqocu) && is_string($geqcesmqwkeayoiu))) { goto wwgssoakwoscwoss; } $sociqikgoyemqaac = rtrim(implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu), $geqcesmqwkeayoiu); wwgssoakwoscwoss: return $sociqikgoyemqaac; } public function giwoasoewgaqiuis($uomewyckeuqoqocu) { if (!is_array($uomewyckeuqoqocu)) { goto komaikgkmaeoescu; } $uomewyckeuqoqocu = array_unique(array_filter($uomewyckeuqoqocu)); komaikgkmaeoescu: return $uomewyckeuqoqocu; } public function ygwimyogyaqgumam($vaksuumyyeikuuco, $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!$vaksuumyyeikuuco) { goto euekwowaokcqsgsw; } $qgciuiagkkguykgs = "\147\145\164\137{$aiowsaccomcoikus}"; if (method_exists($vaksuumyyeikuuco, $qgciuiagkkguykgs)) { goto qmukimkmkeagqocg; } if (method_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto oyauiswikoukcyqy; } if (!property_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto syeosgmcsoykgmoi; } $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}; syeosgmcsoykgmoi: goto cmaemkmgukqugeow; oyauiswikoukcyqy: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}(...$ywmkwiwkosakssii); cmaemkmgukqugeow: goto kgyqmwecomucoumg; qmukimkmkeagqocg: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); kgyqmwecomucoumg: euekwowaokcqsgsw: return $ksaameoqigiaoigg; } public function gymccqywkegiqiiw(array $uomewyckeuqoqocu) : int { return $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->owsaaggskwmeemog(0, count($uomewyckeuqoqocu) - 1); } public function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok) : void { if (is_int($kuuiuigeacouwmaa)) { goto gammgmwagsemkuua; } $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu), true); $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy)); goto euuqcskgauwamyuw; gammgmwagsemkuua: array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok); euuqcskgauwamyuw: } public function wkoiuauiogwgeyeo(array $uomewyckeuqoqocu, array $yygmoeguaqyumuui = []) : array { return array_intersect_key($uomewyckeuqoqocu, array_flip($yygmoeguaqyumuui)); } }

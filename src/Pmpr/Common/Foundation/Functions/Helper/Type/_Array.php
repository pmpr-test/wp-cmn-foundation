<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae859a8f03             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Pmpr\Common\Foundation\Interfaces\Constants; class _Array extends Common { public function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = []) { if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) { goto yqysoqweammswcea; } foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) { if (is_array($esquqsuaumgwoewu)) { goto ycwkcyukyieusyce; } if ($xkqaigkogigocask) { goto oysgkcoiouaikyys; } $sogksuscggsicmac[] = $esquqsuaumgwoewu; goto gikmiimsmmugmewi; oysgkcoiouaikyys: $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu; gikmiimsmmugmewi: goto ywskqocaomieoeuo; ycwkcyukyieusyce: $sogksuscggsicmac = $this->kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac); ywskqocaomieoeuo: aiegomwmomwugkaa: } gmwcswqmcyogosia: yqysoqweammswcea: return $sogksuscggsicmac; } public function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array { $giqggecqqikcysgq = 0; $uiymkeeaukcyqqik = null; $aqeywoskqiugcmye = null; foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { if (array_key_exists($momcykaoccoymeig, $couiucmsqaieciue)) { goto smecgcsaskaiyqwg; } if (!is_object($eqgoocgaqwqcimie)) { goto ymygyumokgcugqco; } $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok}; ymygyumokgcugqco: if (!is_string($eqgoocgaqwqcimie)) { goto cumkyeqakeicycqy; } $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie); if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) { goto cukkwcqimawsesga; } $giqggecqqikcysgq = $ykiwomimkkuiigoq; $uiymkeeaukcyqqik = $eqgoocgaqwqcimie; $aqeywoskqiugcmye = $momcykaoccoymeig; cukkwcqimawsesga: cumkyeqakeicycqy: smecgcsaskaiyqwg: okcicyakakceigwe: } oesieyemekcikmuo: return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik]; } public function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $umeowkomuuewqksk = true) { $sogksuscggsicmac = $ggauoeuaesiymgee; if (!(is_string($uusmaiomayssaecw) || is_numeric($uusmaiomayssaecw))) { goto akccmuykyisokmqm; } if (is_array($oaiciiqoawkamweo)) { goto yeyuwakqagwqqmuc; } if (!(is_object($oaiciiqoawkamweo) && isset($oaiciiqoawkamweo->{$uusmaiomayssaecw}))) { goto iwcqqisaagoyaoyq; } $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw}; iwcqqisaagoyaoyq: goto ouakugqyqismmmwq; yeyuwakqagwqqmuc: if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) { goto kwqqookuogugoeoc; } $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw]; kwqqookuogugoeoc: ouakugqyqismmmwq: if (!($umeowkomuuewqksk && !$sogksuscggsicmac)) { goto eseyuoaaskemwycm; } $sogksuscggsicmac = $ggauoeuaesiymgee; eseyuoaaskemwycm: akccmuykyisokmqm: return $sogksuscggsicmac; } public function find(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, string $aqykuigiuwmmcieu = Constants::weiosaewqequuyuq) { $sogksuscggsicmac = false; foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $esoaccosseymguso = $this->qamwegcyimgcqksw($eqgoocgaqwqcimie, $mkomwsiykqigmqca); if (!($esoaccosseymguso == $qwcmueausqgiwigy)) { goto mkskmcusskkouyyi; } if (Constants::weiosaewqequuyuq === $aqykuigiuwmmcieu) { goto eaeowkksqokeigsq; } $sogksuscggsicmac = $eqgoocgaqwqcimie; goto qcmiieemioisoyyi; eaeowkksqokeigsq: $sogksuscggsicmac = $uusmaiomayssaecw; qcmiieemioisoyyi: goto qmeuekyqssiomcyy; mkskmcusskkouyyi: eyimcucoicmimiao: } qmeuekyqssiomcyy: return $sogksuscggsicmac; } public function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, bool $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array { $sogksuscggsicmac = []; if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) { goto csisksagguuywuia; } $ggauoeuaesiymgee = ''; foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) { if (is_numeric($ewyuweyoskiagksm)) { goto scmkeeaewmeqguac; } $uusmaiomayssaecw = $ewyuweyoskiagksm; $ggauoeuaesiymgee = $uauoccoqcsaeggui; goto qqeiuucaguymmsws; scmkeeaewmeqguac: $uusmaiomayssaecw = $uauoccoqcsaeggui; qqeiuucaguymmsws: $eqgoocgaqwqcimie = $this->get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (!is_callable($ekiuyucoiagmscgy)) { goto owqiausosmeaugay; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee); owqiausosmeaugay: if ($mywqgwsimwoeoawk) { goto kqueakeekumokwoe; } $sogksuscggsicmac[] = $eqgoocgaqwqcimie; goto okgweyikqgcceggq; kqueakeekumokwoe: $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; okgweyikqgcceggq: ccwwqiosmasqqqwu: } swuomeuwkcgwekss: csisksagguuywuia: return $sogksuscggsicmac; } public function set($oaiciiqoawkamweo, $uwomkgseoiegeume = []) { if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) { goto gcywqkqkwkcmoawo; } $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo); $awqscowmskeuymeu = is_object($oaiciiqoawkamweo); foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if ($casemmqcsgmemwyg) { goto kwmgoowcwggsyokw; } if (!$awqscowmskeuymeu) { goto usakoyequcyysywo; } $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; usakoyequcyysywo: goto okamgiuocakyggwo; kwmgoowcwggsyokw: $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; okamgiuocakyggwo: kquqieqqiieakmoa: } ycucsikocgkiesgi: gcywqkqkwkcmoawo: return $oaiciiqoawkamweo; } public function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null) { $yygmoeguaqyumuui = explode("\56", $mkomwsiykqigmqca); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (is_array($uomewyckeuqoqocu)) { goto sskkiisoqmmsocic; } if (is_object($uomewyckeuqoqocu)) { goto mcyamakgwewogwqi; } $uomewyckeuqoqocu = null; goto cmcwskwgaiauugws; goto aqamaqggiseeioqq; mcyamakgwewogwqi: if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) { goto miyggyguyamiggcm; } if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) { goto maswyugssquqqggq; } $uomewyckeuqoqocu = null; goto cmcwskwgaiauugws; goto egcycueumoemiuai; maswyugssquqqggq: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}; egcycueumoemiuai: goto gwucakcwqkiiqyyg; miyggyguyamiggcm: $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}(); gwucakcwqkiiqyyg: aqamaqggiseeioqq: goto siuuokwymeygcosy; sskkiisoqmmsocic: if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto iywiyewymemgqacq; } $uomewyckeuqoqocu = null; goto cmcwskwgaiauugws; goto kyaiywcwwmeqwyaw; iywiyewymemgqacq: $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw]; kyaiywcwwmeqwyaw: siuuokwymeygcosy: gmoykcyssieuqueu: } cmcwskwgaiauugws: if ($uomewyckeuqoqocu) { goto icksskeigsiugace; } $uomewyckeuqoqocu = $ggauoeuaesiymgee; icksskeigsiugace: return $uomewyckeuqoqocu; } public function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw) { $eqgoocgaqwqcimie = null; if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) { goto occaiwsgmaykoqey; } if (is_array($uusmaiomayssaecw)) { goto eyaesumwwwgisaym; } if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { goto ceyygoicaeoqwwio; } $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw]; unset($uomewyckeuqoqocu[$uusmaiomayssaecw]); ceyygoicaeoqwwio: goto swuquosuguoomaeq; eyaesumwwwgisaym: $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw)); swuquosuguoomaeq: occaiwsgmaykoqey: return $eqgoocgaqwqcimie; } public function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie) { if (is_array($eqgoocgaqwqcimie)) { goto iuikeaqqcukamyqm; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; iuikeaqqcukamyqm: $qcgkuqesqqymcuui = false; foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) { $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu, true); if (!($uusmaiomayssaecw !== false)) { goto imqeimsscmwgasys; } $qcgkuqesqqymcuui = $this->unset($uomewyckeuqoqocu, $uusmaiomayssaecw); imqeimsscmwgasys: swwmkisacmieqiae: } mweoqymwyuimuakm: return $qcgkuqesqqymcuui; } public static function rswuscuqiwycaoym($uomewyckeuqoqocu) : bool { $wuoqgcwmkicakygs = false; if (!$uomewyckeuqoqocu) { goto kuwecmygikeyisuq; } $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1); kuwecmygikeyisuq: return $wuoqgcwmkicakygs; } public function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool { $ksaameoqigiaoigg = false; if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) { goto ugwysoaqswaocsuu; } foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if ($this->get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) { goto msmiaayuagocuswc; } $ksaameoqigiaoigg = true; goto augwgqgcukgkywiw; msmiaayuagocuswc: kmkoiwuimosekikq: } augwgqgcukgkywiw: ugwysoaqswaocsuu: return $ksaameoqigiaoigg; } public function ooaaysmsqgsqmaqu(array $coyyecywycscckmw, array $oeoqckygmmkmsuky, bool $qkwmeayoakeoawya = true) : bool { $wwuukgmueeqciiqs = false; if (!(count($coyyecywycscckmw) === count($oeoqckygmmkmsuky))) { goto qeieqkqcyuasgqqk; } if (!$qkwmeayoakeoawya) { goto akkecgwmiimmeqmy; } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $wwuukgmueeqciiqs = $yyauwyaeewsickwk->wegeuqkaeuusoike($coyyecywycscckmw) === $yyauwyaeewsickwk->wegeuqkaeuusoike($oeoqckygmmkmsuky); goto kmykwuqougkwauiy; akkecgwmiimmeqmy: $wwuukgmueeqciiqs = empty(array_diff_assoc($coyyecywycscckmw, $oeoqckygmmkmsuky)); kmykwuqougkwauiy: qeieqkqcyuasgqqk: return $wwuukgmueeqciiqs; } public function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool { return count($uomewyckeuqoqocu) !== count($uomewyckeuqoqocu, 1); } public function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array { if (!is_array($uomewyckeuqoqocu)) { goto sucekaeksayiwooe; } uasort($uomewyckeuqoqocu, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) { return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw]; }); if (!($uuyoeicyoayimaoa > 0)) { goto uysqwomcuuccagkq; } $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true); uysqwomcuuccagkq: sucekaeksayiwooe: return $uomewyckeuqoqocu; } public function yaeiiwwyckwugsem($uomewyckeuqoqocu, string $igaagwuyasawwqms = Constants::iuqumwggccmcuyem) { if (!is_array($uomewyckeuqoqocu)) { goto eugoueaksseemowq; } $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms, $cgwqqcukiasoicmi) { $uiuykcweuosgmwki = false; if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) { goto qisaayswqcmucoqg; } if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) { goto mioseimsuqaqiqae; } $uiuykcweuosgmwki = $this->get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> $this->get($csougakqegqiqsgi, $igaagwuyasawwqms); mioseimsuqaqiqae: goto ewecikeyyqmewkgy; qisaayswqcmucoqg: if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) { goto wsksakoqeqwkigoq; } $aaqigycaeeeceqme = $cgwqqcukiasoicmi->myagqecycsaiyqsk($mmeioagwmyscwumo, $igaagwuyasawwqms); $uywmwywieegcwmqe = $cgwqqcukiasoicmi->myagqecycsaiyqsk($csougakqegqiqsgi, $igaagwuyasawwqms); if (!($aaqigycaeeeceqme && $uywmwywieegcwmqe)) { goto scykswkumgcoqgcc; } $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$aaqigycaeeeceqme}() <=> $csougakqegqiqsgi->{$uywmwywieegcwmqe}(); scykswkumgcoqgcc: goto auiaaeeakqkocmqu; wsksakoqeqwkigoq: $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}; auiaaeeakqkocmqu: ewecikeyyqmewkgy: return (int) $uiuykcweuosgmwki; }); eugoueaksseemowq: return $uomewyckeuqoqocu; } public function merge($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { return array_merge((array) $sysgmomuyiiawwcm, (array) $gcegymooyemmaysk); } public function sggceaqggqqsqaoo(array $uomewyckeuqoqocu, array $igqsaukqcqscimok, int $kuuiuigeacouwmaa = 0) : array { return array_slice($uomewyckeuqoqocu, 0, $kuuiuigeacouwmaa, true) + $igqsaukqcqscimok + array_slice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, count($uomewyckeuqoqocu) - 1, true); } public function ggkqgwsekcwaaawa(array $oammesyieqmwuwyi = []) : array { if (!($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi))) { goto yquwqeooeyyociqm; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $igqsaukqcqscimok = array_filter($igqsaukqcqscimok); if ($this->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm)) { goto iyuiasiuowggciss; } $oammesyieqmwuwyi[$momcykaoccoymeig][Constants::ascagqcquwgmygkm] = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); iyuiasiuowggciss: wsiysogusuimayic: } awsqsasmmamcskkk: yquwqeooeyyociqm: return $oammesyieqmwuwyi; } public function skauuuoqcaiseuks(array $uomewyckeuqoqocu = [], string $geqcesmqwkeayoiu = "\54") : string { $sociqikgoyemqaac = ''; if (!(is_array($uomewyckeuqoqocu) && is_string($geqcesmqwkeayoiu))) { goto mowimwgkwoymuoae; } $sociqikgoyemqaac = rtrim(implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu), $geqcesmqwkeayoiu); mowimwgkwoymuoae: return $sociqikgoyemqaac; } public function giwoasoewgaqiuis($uomewyckeuqoqocu) { if (!is_array($uomewyckeuqoqocu)) { goto yukcsywomcgeqoiq; } $uomewyckeuqoqocu = array_unique(array_filter($uomewyckeuqoqocu)); yukcsywomcgeqoiq: return $uomewyckeuqoqocu; } public function ygwimyogyaqgumam($vaksuumyyeikuuco, $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if (!$vaksuumyyeikuuco) { goto caeucwusaisgqaoe; } $qgciuiagkkguykgs = "\x67\145\164\137{$aiowsaccomcoikus}"; if (method_exists($vaksuumyyeikuuco, $qgciuiagkkguykgs)) { goto siuaqaksaumkaeui; } if (method_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto cygqsmeoqscsscqm; } if (!property_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { goto gqaecycgekomqqgu; } $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}; gqaecycgekomqqgu: goto ukmkcwicoqcoyqog; cygqsmeoqscsscqm: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}(...$ywmkwiwkosakssii); ukmkcwicoqcoyqog: goto gkyuckeugacsewka; siuaqaksaumkaeui: $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); gkyuckeugacsewka: caeucwusaisgqaoe: return $ksaameoqigiaoigg; } public function gymccqywkegiqiiw(array $uomewyckeuqoqocu) : int { return $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->owsaaggskwmeemog(0, count($uomewyckeuqoqocu) - 1); } public function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok) : void { if (is_int($kuuiuigeacouwmaa)) { goto cgksasyqkkiiowyg; } $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu), true); $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy)); goto yesymsikkwmuikuc; cgksasyqkkiiowyg: array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok); yesymsikkwmuikuc: } public function wkoiuauiogwgeyeo(array $uomewyckeuqoqocu, array $yygmoeguaqyumuui = []) : array { return array_intersect_key($uomewyckeuqoqocu, array_flip($yygmoeguaqyumuui)); } }

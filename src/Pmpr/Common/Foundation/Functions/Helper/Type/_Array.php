<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67ceca327bf05             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Pmpr\Common\Foundation\Interfaces\Constants; class _Array extends Common { public function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = []) { if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu) { foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) { if (is_array($esquqsuaumgwoewu)) { $sogksuscggsicmac = $this->kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac); } else { if ($xkqaigkogigocask) { $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu; } else { $sogksuscggsicmac[] = $esquqsuaumgwoewu; } } } } return $sogksuscggsicmac; } public function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array { $giqggecqqikcysgq = 0; $uiymkeeaukcyqqik = null; $aqeywoskqiugcmye = null; foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) { if (!array_key_exists($momcykaoccoymeig, $couiucmsqaieciue)) { if (is_object($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok}; } if (is_string($eqgoocgaqwqcimie)) { $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie); if ($ykiwomimkkuiigoq > $giqggecqqikcysgq) { $giqggecqqikcysgq = $ykiwomimkkuiigoq; $uiymkeeaukcyqqik = $eqgoocgaqwqcimie; $aqeywoskqiugcmye = $momcykaoccoymeig; } } } } return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik]; } public function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null, bool $umeowkomuuewqksk = true) { $sogksuscggsicmac = $ggauoeuaesiymgee; if (is_string($uusmaiomayssaecw) || is_numeric($uusmaiomayssaecw)) { if (is_array($oaiciiqoawkamweo)) { if (isset($oaiciiqoawkamweo[$uusmaiomayssaecw]) || array_key_exists($uusmaiomayssaecw, $oaiciiqoawkamweo)) { $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw]; } } else { if (is_object($oaiciiqoawkamweo) && isset($oaiciiqoawkamweo->{$uusmaiomayssaecw})) { $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw}; } } if ($umeowkomuuewqksk && !$sogksuscggsicmac) { $sogksuscggsicmac = $ggauoeuaesiymgee; } } return $sogksuscggsicmac; } public function find(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, string $aqykuigiuwmmcieu = Constants::weiosaewqequuyuq) { $sogksuscggsicmac = false; foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $esoaccosseymguso = $this->qamwegcyimgcqksw($eqgoocgaqwqcimie, $mkomwsiykqigmqca); if ($esoaccosseymguso == $qwcmueausqgiwigy) { if (Constants::weiosaewqequuyuq === $aqykuigiuwmmcieu) { $sogksuscggsicmac = $uusmaiomayssaecw; } else { $sogksuscggsicmac = $eqgoocgaqwqcimie; } break; } } return $sogksuscggsicmac; } public function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, bool $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array { $sogksuscggsicmac = []; if (is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui)) { $ggauoeuaesiymgee = ''; foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) { if (is_numeric($ewyuweyoskiagksm)) { $uusmaiomayssaecw = $uauoccoqcsaeggui; } else { $uusmaiomayssaecw = $ewyuweyoskiagksm; $ggauoeuaesiymgee = $uauoccoqcsaeggui; } $eqgoocgaqwqcimie = $this->get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee); if (is_callable($ekiuyucoiagmscgy)) { $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee); } if ($mywqgwsimwoeoawk) { $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } else { $sogksuscggsicmac[] = $eqgoocgaqwqcimie; } } } return $sogksuscggsicmac; } public function set($oaiciiqoawkamweo, $uwomkgseoiegeume = []) { if (is_array($uwomkgseoiegeume) && $uwomkgseoiegeume) { $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo); $awqscowmskeuymeu = is_object($oaiciiqoawkamweo); foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if ($casemmqcsgmemwyg) { $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } else { if ($awqscowmskeuymeu) { $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; } } } } return $oaiciiqoawkamweo; } public function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null) { $yygmoeguaqyumuui = explode('.', $mkomwsiykqigmqca); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (is_array($uomewyckeuqoqocu)) { if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw]; } else { $uomewyckeuqoqocu = null; break; } } else { if (is_object($uomewyckeuqoqocu)) { if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) { $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}(); } else { if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) { $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}; } else { $uomewyckeuqoqocu = null; break; } } } else { $uomewyckeuqoqocu = null; break; } } } if (!$uomewyckeuqoqocu) { $uomewyckeuqoqocu = $ggauoeuaesiymgee; } return $uomewyckeuqoqocu; } public function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw) { $eqgoocgaqwqcimie = null; if ($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu)) { if (is_array($uusmaiomayssaecw)) { $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw)); } else { if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) { $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw]; unset($uomewyckeuqoqocu[$uusmaiomayssaecw]); } } } return $eqgoocgaqwqcimie; } public function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie) { if (!is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; } $qcgkuqesqqymcuui = false; foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) { $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu, true); if ($uusmaiomayssaecw !== false) { $qcgkuqesqqymcuui = $this->unset($uomewyckeuqoqocu, $uusmaiomayssaecw); } } return $qcgkuqesqqymcuui; } public static function rswuscuqiwycaoym($uomewyckeuqoqocu) : bool { $wuoqgcwmkicakygs = false; if ($uomewyckeuqoqocu) { $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1); } return $wuoqgcwmkicakygs; } public function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool { $ksaameoqigiaoigg = false; if ($uomewyckeuqoqocu && $yygmoeguaqyumuui) { foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!$this->get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) { $ksaameoqigiaoigg = true; break; } } } return $ksaameoqigiaoigg; } public function ooaaysmsqgsqmaqu(array $coyyecywycscckmw, array $oeoqckygmmkmsuky, bool $qkwmeayoakeoawya = true) : bool { $wwuukgmueeqciiqs = false; if (count($coyyecywycscckmw) === count($oeoqckygmmkmsuky)) { if (!$qkwmeayoakeoawya) { $wwuukgmueeqciiqs = empty(array_diff_assoc($coyyecywycscckmw, $oeoqckygmmkmsuky)); } else { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $wwuukgmueeqciiqs = $yyauwyaeewsickwk->wegeuqkaeuusoike($coyyecywycscckmw) === $yyauwyaeewsickwk->wegeuqkaeuusoike($oeoqckygmmkmsuky); } } return $wwuukgmueeqciiqs; } public function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool { return count($uomewyckeuqoqocu) !== count($uomewyckeuqoqocu, 1); } public function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array { if (is_array($uomewyckeuqoqocu)) { uasort($uomewyckeuqoqocu, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) { return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw]; }); if ($uuyoeicyoayimaoa > 0) { $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true); } } return $uomewyckeuqoqocu; } public function yaeiiwwyckwugsem($uomewyckeuqoqocu, string $igaagwuyasawwqms = Constants::iuqumwggccmcuyem) { if (is_array($uomewyckeuqoqocu)) { $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms, $cgwqqcukiasoicmi) { $uiuykcweuosgmwki = false; if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) { if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) { $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}; } else { $aaqigycaeeeceqme = $cgwqqcukiasoicmi->myagqecycsaiyqsk($mmeioagwmyscwumo, $igaagwuyasawwqms); $uywmwywieegcwmqe = $cgwqqcukiasoicmi->myagqecycsaiyqsk($csougakqegqiqsgi, $igaagwuyasawwqms); if ($aaqigycaeeeceqme && $uywmwywieegcwmqe) { $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$aaqigycaeeeceqme}() <=> $csougakqegqiqsgi->{$uywmwywieegcwmqe}(); } } } else { if (is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi)) { $uiuykcweuosgmwki = $this->get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> $this->get($csougakqegqiqsgi, $igaagwuyasawwqms); } } return (int) $uiuykcweuosgmwki; }); } return $uomewyckeuqoqocu; } public function merge($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array { return array_merge((array) $sysgmomuyiiawwcm, (array) $gcegymooyemmaysk); } public function sggceaqggqqsqaoo(array $uomewyckeuqoqocu, array $igqsaukqcqscimok, int $kuuiuigeacouwmaa = 0) : array { return array_slice($uomewyckeuqoqocu, 0, $kuuiuigeacouwmaa, true) + $igqsaukqcqscimok + array_slice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, count($uomewyckeuqoqocu) - 1, true); } public function ggkqgwsekcwaaawa(array $oammesyieqmwuwyi = []) : array { if ($oammesyieqmwuwyi && is_array($oammesyieqmwuwyi)) { foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $igqsaukqcqscimok = array_filter($igqsaukqcqscimok); if (!$this->get($igqsaukqcqscimok, Constants::ascagqcquwgmygkm)) { $oammesyieqmwuwyi[$momcykaoccoymeig][Constants::ascagqcquwgmygkm] = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); } } } return $oammesyieqmwuwyi; } public function skauuuoqcaiseuks(array $uomewyckeuqoqocu = [], string $geqcesmqwkeayoiu = ',') : string { $sociqikgoyemqaac = ''; if (is_array($uomewyckeuqoqocu) && is_string($geqcesmqwkeayoiu)) { $sociqikgoyemqaac = rtrim(implode($geqcesmqwkeayoiu, $uomewyckeuqoqocu), $geqcesmqwkeayoiu); } return $sociqikgoyemqaac; } public function giwoasoewgaqiuis($uomewyckeuqoqocu) { if (is_array($uomewyckeuqoqocu)) { $uomewyckeuqoqocu = array_unique(array_filter($uomewyckeuqoqocu)); } return $uomewyckeuqoqocu; } public function ygwimyogyaqgumam($vaksuumyyeikuuco, $aiowsaccomcoikus, $ggauoeuaesiymgee = null, ...$ywmkwiwkosakssii) { $ksaameoqigiaoigg = $ggauoeuaesiymgee; if ($vaksuumyyeikuuco) { $qgciuiagkkguykgs = "get_{$aiowsaccomcoikus}"; if (method_exists($vaksuumyyeikuuco, $qgciuiagkkguykgs)) { $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$qgciuiagkkguykgs}(...$ywmkwiwkosakssii); } else { if (method_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}(...$ywmkwiwkosakssii); } else { if (property_exists($vaksuumyyeikuuco, $aiowsaccomcoikus)) { $ksaameoqigiaoigg = $vaksuumyyeikuuco->{$aiowsaccomcoikus}; } } } } return $ksaameoqigiaoigg; } public function gymccqywkegiqiiw(array $uomewyckeuqoqocu) : int { return $this->caokeucsksukesyo()->iyowqkwcwiuccgag()->owsaaggskwmeemog(0, count($uomewyckeuqoqocu) - 1); } public function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok) : void { if (is_int($kuuiuigeacouwmaa)) { array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok); } else { $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu), true); $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy)); } } public function wkoiuauiogwgeyeo(array $uomewyckeuqoqocu, array $yygmoeguaqyumuui = []) : array { return array_intersect_key($uomewyckeuqoqocu, array_flip($yygmoeguaqyumuui)); } }

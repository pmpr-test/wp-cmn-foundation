<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d9f11bf9d9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use DateTime; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _Datetime extends Common { public function wguceomqgwouoyks($ocogsiouoiuuguym) : bool { if (!is_numeric($ocogsiouoiuuguym)) { $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); } return $ocogsiouoiuuguym < time(); } public function scmwwoemimggqsyk($eqgoocgaqwqcimie, string $ymmgciamciieaysq = Constants::caaieqwcccuueamg, string $mcmcymukmqioukkk = "\156\x6f\x77") { if ("\x6e\157\x77" === $mcmcymukmqioukkk) { $mcmcymukmqioukkk = date("\x59\x2d\x6d\55\144"); } $yiuogaeewyockeak = strtotime($mcmcymukmqioukkk); switch ($ymmgciamciieaysq) { case Constants::caaieqwcccuueamg: $yiuogaeewyockeak = $this->kisewqyyuqqqwesi($yiuogaeewyockeak, $eqgoocgaqwqcimie); break; case Constants::qummiiakyucoycws: $yiuogaeewyockeak = $this->gaecekyeoigwwwsc($yiuogaeewyockeak, $eqgoocgaqwqcimie); break; default: $yiuogaeewyockeak = strtotime("\53{$eqgoocgaqwqcimie}\x20{$ymmgciamciieaysq}", $yiuogaeewyockeak); break; } return date("\131\55\155\55\144", $yiuogaeewyockeak); } public function ikuqieqosemkwuio($cqgoimumaewouews) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews); if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) { $sieoyimycoskwwku = sprintf(__("\x25\x73\40\x61\x67\157"), human_time_diff($cqgoimumaewouews)); } else { $sieoyimycoskwwku = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x64\141\164\x65\x5f\164\x69\x6d\145\137\x61\147\x6f", date("\131\55\x6d\x2d\x64\x20\110\x3a\x69", $cqgoimumaewouews), $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq()); } return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x74\151\x6d\145\x5f\141\x67\157", $sieoyimycoskwwku, $cqgoimumaewouews); } public function kisewqyyuqqqwesi($yiuogaeewyockeak, $usqcwoasmiiomgks) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x61\144\144\137\171\x65\141\162", $yiuogaeewyockeak, $usqcwoasmiiomgks); if ($uwomkgseoiegeume === $yiuogaeewyockeak) { $uwomkgseoiegeume = strtotime("\53{$usqcwoasmiiomgks}\x20\171\145\141\162", $yiuogaeewyockeak); } return $uwomkgseoiegeume; } public function gaecekyeoigwwwsc($yiuogaeewyockeak, $mwemskcucwsyycwm) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x61\144\144\x5f\x6d\x6f\x6e\x74\150", $yiuogaeewyockeak, $mwemskcucwsyycwm); if ($uwomkgseoiegeume === $yiuogaeewyockeak) { $uwomkgseoiegeume = strtotime("\53{$mwemskcucwsyycwm}\40\x6d\157\x6e\164\150", $yiuogaeewyockeak); } return $uwomkgseoiegeume; } public function wkksckeyeyeckqsm($ekasyoagocygouom, $bocuuiaeamyyakam = 0) : bool { $yqicqqkokawiosom = true; try { if ($bocuuiaeamyyakam > 0) { $kwgqaywqqgqqwscy = new DateTime($ekasyoagocygouom); $cugkqygegsymsyic = new DateTime("\x6e\157\x77"); $asuaciiookaciacq = $kwgqaywqqgqqwscy->diff($cugkqygegsymsyic); $scuieskcukagwiys = $asuaciiookaciacq->days * 24 * 60 + $asuaciiookaciacq->h * 60 + $asuaciiookaciacq->i; $yqicqqkokawiosom = $scuieskcukagwiys >= (int) $bocuuiaeamyyakam; } } catch (Exception $wgaoewqkwgomoaai) { } return $yqicqqkokawiosom; } public function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\x6e\157\x77") : bool { $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg); $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc); $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym); return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc; } public function gwgmymsuwsceguce() { $cqgoimumaewouews = current_time("\125"); if (is_string($cqgoimumaewouews)) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); } return $cqgoimumaewouews; } public function omyucuigmqgqmwio($yiuogaeewyockeak, string $ccamueccusigaaio = Constants::eggusgsscecmiiee) { if (is_string($yiuogaeewyockeak)) { $yiuogaeewyockeak = strtotime($yiuogaeewyockeak); if (!$yiuogaeewyockeak) { return 0; } } $mkuwoiyskieqciqe = $this->cmaecekuqkwmemms(strtoupper($ccamueccusigaaio) . "\137\111\116\137\x53\x45\103\x4f\x4e\104\123", 0); return round(($yiuogaeewyockeak - time()) / $mkuwoiyskieqciqe); } public function aaqkcwqaikooouus($eqgoocgaqwqcimie) { $saqmwwmqiwmkiwaa = Constants::askyqwomciwggekw; if ($eqgoocgaqwqcimie > 0) { $scumyeasgcsssmko = [Constants::askyqwomciwggekw => 1, Constants::wsgueemccsugoays => 60, Constants::eggusgsscecmiiee => 1440, Constants::mqayweomwsokkqsu => 10080, Constants::qummiiakyucoycws => 43800, Constants::caaieqwcccuueamg => 525600]; $momcykaoccoymeig = 0; $qqswgiawgeaeoecu = array_values($scumyeasgcsssmko); foreach ($scumyeasgcsssmko as $uusmaiomayssaecw => $ymmgciamciieaysq) { $mmwoqcwiwemokkue = $momcykaoccoymeig + 1; if (!isset($qqswgiawgeaeoecu[$mmwoqcwiwemokkue]) || $qqswgiawgeaeoecu[$mmwoqcwiwemokkue] > $eqgoocgaqwqcimie) { $saqmwwmqiwmkiwaa = $uusmaiomayssaecw; $eqgoocgaqwqcimie = (int) floor($eqgoocgaqwqcimie / $ymmgciamciieaysq); break; } $momcykaoccoymeig++; } } else { $eqgoocgaqwqcimie = 0; } $wamcomkuwysqgwgk = ''; switch ($saqmwwmqiwmkiwaa) { case Constants::askyqwomciwggekw: $wamcomkuwysqgwgk = _n("\x25\163\40\x4d\x69\156\165\164\145", "\45\x73\40\115\151\x6e\165\164\x65\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::wsgueemccsugoays: $wamcomkuwysqgwgk = _n("\45\x73\x20\x48\157\165\162", "\x25\163\40\x48\x6f\165\162\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::eggusgsscecmiiee: $wamcomkuwysqgwgk = _n("\45\163\x20\x44\141\171", "\45\163\x20\104\141\171\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::mqayweomwsokkqsu: $wamcomkuwysqgwgk = _n("\45\x73\x20\127\x65\x65\x6b", "\45\x73\40\x57\x65\145\x6b\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::qummiiakyucoycws: $wamcomkuwysqgwgk = _n("\x25\163\x20\115\x6f\156\164\x68", "\x25\163\40\x4d\x6f\x6e\x74\150\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::caaieqwcccuueamg: $wamcomkuwysqgwgk = _n("\45\x73\x20\x59\x65\x61\162", "\x25\x73\x20\131\x65\141\162\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; } return sprintf($wamcomkuwysqgwgk, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($eqgoocgaqwqcimie)); } }

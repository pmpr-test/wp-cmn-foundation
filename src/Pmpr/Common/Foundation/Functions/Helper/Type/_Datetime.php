<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672356231cfee             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use DateTime; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _Datetime extends Common { public function wguceomqgwouoyks($ocogsiouoiuuguym) : bool { if (!is_numeric($ocogsiouoiuuguym)) { $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); } return $ocogsiouoiuuguym < time(); } public function scmwwoemimggqsyk($eqgoocgaqwqcimie, string $ymmgciamciieaysq = Constants::caaieqwcccuueamg, string $mcmcymukmqioukkk = "\x6e\157\167") { if ("\156\x6f\167" === $mcmcymukmqioukkk) { $mcmcymukmqioukkk = date("\x59\x2d\155\55\x64"); } $yiuogaeewyockeak = strtotime($mcmcymukmqioukkk); switch ($ymmgciamciieaysq) { case Constants::caaieqwcccuueamg: $yiuogaeewyockeak = $this->kisewqyyuqqqwesi($yiuogaeewyockeak, $eqgoocgaqwqcimie); break; case Constants::qummiiakyucoycws: $yiuogaeewyockeak = $this->gaecekyeoigwwwsc($yiuogaeewyockeak, $eqgoocgaqwqcimie); break; default: $yiuogaeewyockeak = strtotime("\x2b{$eqgoocgaqwqcimie}\40{$ymmgciamciieaysq}", $yiuogaeewyockeak); break; } return date("\131\55\x6d\55\144", $yiuogaeewyockeak); } public function ikuqieqosemkwuio($cqgoimumaewouews) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews); if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) { $sieoyimycoskwwku = sprintf(__("\45\163\40\141\x67\157"), human_time_diff($cqgoimumaewouews)); } else { $sieoyimycoskwwku = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x64\141\164\145\137\164\151\x6d\x65\x5f\141\147\x6f", date("\x59\55\x6d\x2d\144\x20\x48\x3a\151", $cqgoimumaewouews), $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq()); } return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\164\151\x6d\145\137\141\x67\157", $sieoyimycoskwwku, $cqgoimumaewouews); } public function kisewqyyuqqqwesi($yiuogaeewyockeak, $usqcwoasmiiomgks) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x61\x64\x64\137\171\x65\x61\x72", $yiuogaeewyockeak, $usqcwoasmiiomgks); if ($uwomkgseoiegeume === $yiuogaeewyockeak) { $uwomkgseoiegeume = strtotime("\53{$usqcwoasmiiomgks}\x20\x79\x65\141\x72", $yiuogaeewyockeak); } return $uwomkgseoiegeume; } public function gaecekyeoigwwwsc($yiuogaeewyockeak, $mwemskcucwsyycwm) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x61\x64\x64\137\155\x6f\156\x74\x68", $yiuogaeewyockeak, $mwemskcucwsyycwm); if ($uwomkgseoiegeume === $yiuogaeewyockeak) { $uwomkgseoiegeume = strtotime("\x2b{$mwemskcucwsyycwm}\40\x6d\157\x6e\x74\x68", $yiuogaeewyockeak); } return $uwomkgseoiegeume; } public function wkksckeyeyeckqsm($ekasyoagocygouom, $bocuuiaeamyyakam = 0) : bool { $yqicqqkokawiosom = true; try { if ($bocuuiaeamyyakam > 0) { $kwgqaywqqgqqwscy = new DateTime($ekasyoagocygouom); $cugkqygegsymsyic = new DateTime("\156\157\x77"); $asuaciiookaciacq = $kwgqaywqqgqqwscy->diff($cugkqygegsymsyic); $scuieskcukagwiys = $asuaciiookaciacq->days * 24 * 60 + $asuaciiookaciacq->h * 60 + $asuaciiookaciacq->i; $yqicqqkokawiosom = $scuieskcukagwiys >= (int) $bocuuiaeamyyakam; } } catch (Exception $wgaoewqkwgomoaai) { } return $yqicqqkokawiosom; } public function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\x6e\x6f\x77") : bool { $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg); $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc); $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym); return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc; } public function gwgmymsuwsceguce() { $cqgoimumaewouews = current_time("\125"); if (is_string($cqgoimumaewouews)) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); } return $cqgoimumaewouews; } public function omyucuigmqgqmwio($yiuogaeewyockeak, string $ccamueccusigaaio = Constants::eggusgsscecmiiee) { if (is_string($yiuogaeewyockeak)) { $yiuogaeewyockeak = strtotime($yiuogaeewyockeak); if (!$yiuogaeewyockeak) { return 0; } } $mkuwoiyskieqciqe = $this->cmaecekuqkwmemms(strtoupper($ccamueccusigaaio) . "\x5f\111\x4e\137\x53\x45\103\x4f\x4e\x44\123", 0); return round(($yiuogaeewyockeak - time()) / $mkuwoiyskieqciqe); } public function aaqkcwqaikooouus($eqgoocgaqwqcimie) { $saqmwwmqiwmkiwaa = Constants::askyqwomciwggekw; if ($eqgoocgaqwqcimie > 0) { $scumyeasgcsssmko = [Constants::askyqwomciwggekw => 1, Constants::wsgueemccsugoays => 60, Constants::eggusgsscecmiiee => 1440, Constants::mqayweomwsokkqsu => 10080, Constants::qummiiakyucoycws => 43800, Constants::caaieqwcccuueamg => 525600]; $momcykaoccoymeig = 0; $qqswgiawgeaeoecu = array_values($scumyeasgcsssmko); foreach ($scumyeasgcsssmko as $uusmaiomayssaecw => $ymmgciamciieaysq) { $mmwoqcwiwemokkue = $momcykaoccoymeig + 1; if (!isset($qqswgiawgeaeoecu[$mmwoqcwiwemokkue]) || $qqswgiawgeaeoecu[$mmwoqcwiwemokkue] > $eqgoocgaqwqcimie) { $saqmwwmqiwmkiwaa = $uusmaiomayssaecw; $eqgoocgaqwqcimie = (int) floor($eqgoocgaqwqcimie / $ymmgciamciieaysq); break; } $momcykaoccoymeig++; } } else { $eqgoocgaqwqcimie = 0; } $wamcomkuwysqgwgk = ''; switch ($saqmwwmqiwmkiwaa) { case Constants::askyqwomciwggekw: $wamcomkuwysqgwgk = _n("\45\x73\x20\115\151\x6e\x75\164\x65", "\x25\x73\40\x4d\151\156\165\x74\x65\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::wsgueemccsugoays: $wamcomkuwysqgwgk = _n("\45\x73\40\x48\157\165\x72", "\45\x73\x20\110\157\x75\162\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::eggusgsscecmiiee: $wamcomkuwysqgwgk = _n("\45\163\x20\104\141\171", "\45\163\40\x44\141\171\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::mqayweomwsokkqsu: $wamcomkuwysqgwgk = _n("\x25\163\x20\127\x65\145\153", "\x25\x73\x20\x57\x65\145\x6b\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::qummiiakyucoycws: $wamcomkuwysqgwgk = _n("\45\163\x20\x4d\157\156\164\x68", "\x25\x73\x20\115\157\x6e\164\150\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::caaieqwcccuueamg: $wamcomkuwysqgwgk = _n("\x25\163\x20\x59\x65\x61\162", "\x25\x73\x20\x59\145\x61\162\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; } return sprintf($wamcomkuwysqgwgk, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($eqgoocgaqwqcimie)); } }

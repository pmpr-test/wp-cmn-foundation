<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67143a37bcbb1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use DateTime; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _Datetime extends Common { public function wguceomqgwouoyks($ocogsiouoiuuguym) : bool { if (!is_numeric($ocogsiouoiuuguym)) { $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); } return $ocogsiouoiuuguym < time(); } public function scmwwoemimggqsyk($eqgoocgaqwqcimie, string $ymmgciamciieaysq = Constants::caaieqwcccuueamg, string $mcmcymukmqioukkk = "\x6e\x6f\x77") { if ("\156\x6f\167" === $mcmcymukmqioukkk) { $mcmcymukmqioukkk = date("\x59\55\x6d\x2d\144"); } $yiuogaeewyockeak = strtotime($mcmcymukmqioukkk); switch ($ymmgciamciieaysq) { case Constants::caaieqwcccuueamg: $yiuogaeewyockeak = $this->kisewqyyuqqqwesi($yiuogaeewyockeak, $eqgoocgaqwqcimie); break; case Constants::qummiiakyucoycws: $yiuogaeewyockeak = $this->gaecekyeoigwwwsc($yiuogaeewyockeak, $eqgoocgaqwqcimie); break; default: $yiuogaeewyockeak = strtotime("\x2b{$eqgoocgaqwqcimie}\40{$ymmgciamciieaysq}", $yiuogaeewyockeak); break; } return date("\x59\55\155\x2d\144", $yiuogaeewyockeak); } public function ikuqieqosemkwuio($cqgoimumaewouews) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews); if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) { $sieoyimycoskwwku = sprintf(__("\x25\x73\x20\141\x67\157"), human_time_diff($cqgoimumaewouews)); } else { $sieoyimycoskwwku = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x64\141\164\145\x5f\x74\x69\x6d\x65\x5f\141\147\157", date("\131\x2d\155\x2d\x64\40\110\72\151", $cqgoimumaewouews), $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq()); } return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x74\x69\155\145\x5f\141\x67\157", $sieoyimycoskwwku, $cqgoimumaewouews); } public function kisewqyyuqqqwesi($yiuogaeewyockeak, $usqcwoasmiiomgks) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x61\x64\x64\x5f\171\x65\141\162", $yiuogaeewyockeak, $usqcwoasmiiomgks); if ($uwomkgseoiegeume === $yiuogaeewyockeak) { $uwomkgseoiegeume = strtotime("\53{$usqcwoasmiiomgks}\x20\171\145\x61\x72", $yiuogaeewyockeak); } return $uwomkgseoiegeume; } public function gaecekyeoigwwwsc($yiuogaeewyockeak, $mwemskcucwsyycwm) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\141\144\x64\x5f\x6d\157\x6e\164\x68", $yiuogaeewyockeak, $mwemskcucwsyycwm); if ($uwomkgseoiegeume === $yiuogaeewyockeak) { $uwomkgseoiegeume = strtotime("\x2b{$mwemskcucwsyycwm}\40\x6d\x6f\x6e\x74\x68", $yiuogaeewyockeak); } return $uwomkgseoiegeume; } public function wkksckeyeyeckqsm($ekasyoagocygouom, $bocuuiaeamyyakam = 0) : bool { $yqicqqkokawiosom = true; try { if ($bocuuiaeamyyakam > 0) { $kwgqaywqqgqqwscy = new DateTime($ekasyoagocygouom); $cugkqygegsymsyic = new DateTime("\x6e\x6f\167"); $asuaciiookaciacq = $kwgqaywqqgqqwscy->diff($cugkqygegsymsyic); $scuieskcukagwiys = $asuaciiookaciacq->days * 24 * 60 + $asuaciiookaciacq->h * 60 + $asuaciiookaciacq->i; $yqicqqkokawiosom = $scuieskcukagwiys >= (int) $bocuuiaeamyyakam; } } catch (Exception $wgaoewqkwgomoaai) { } return $yqicqqkokawiosom; } public function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\156\x6f\167") : bool { $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg); $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc); $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym); return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc; } public function gwgmymsuwsceguce() { $cqgoimumaewouews = current_time("\125"); if (is_string($cqgoimumaewouews)) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); } return $cqgoimumaewouews; } public function omyucuigmqgqmwio($yiuogaeewyockeak, string $ccamueccusigaaio = Constants::eggusgsscecmiiee) { if (is_string($yiuogaeewyockeak)) { $yiuogaeewyockeak = strtotime($yiuogaeewyockeak); if (!$yiuogaeewyockeak) { return 0; } } $mkuwoiyskieqciqe = $this->cmaecekuqkwmemms(strtoupper($ccamueccusigaaio) . "\137\x49\116\x5f\123\105\103\117\116\104\123", 0); return round(($yiuogaeewyockeak - time()) / $mkuwoiyskieqciqe); } public function aaqkcwqaikooouus($eqgoocgaqwqcimie) { $saqmwwmqiwmkiwaa = Constants::askyqwomciwggekw; if ($eqgoocgaqwqcimie > 0) { $scumyeasgcsssmko = [Constants::askyqwomciwggekw => 1, Constants::wsgueemccsugoays => 60, Constants::eggusgsscecmiiee => 1440, Constants::mqayweomwsokkqsu => 10080, Constants::qummiiakyucoycws => 43800, Constants::caaieqwcccuueamg => 525600]; $momcykaoccoymeig = 0; $qqswgiawgeaeoecu = array_values($scumyeasgcsssmko); foreach ($scumyeasgcsssmko as $uusmaiomayssaecw => $ymmgciamciieaysq) { $mmwoqcwiwemokkue = $momcykaoccoymeig + 1; if (!isset($qqswgiawgeaeoecu[$mmwoqcwiwemokkue]) || $qqswgiawgeaeoecu[$mmwoqcwiwemokkue] > $eqgoocgaqwqcimie) { $saqmwwmqiwmkiwaa = $uusmaiomayssaecw; $eqgoocgaqwqcimie = (int) floor($eqgoocgaqwqcimie / $ymmgciamciieaysq); break; } $momcykaoccoymeig++; } } else { $eqgoocgaqwqcimie = 0; } $wamcomkuwysqgwgk = ''; switch ($saqmwwmqiwmkiwaa) { case Constants::askyqwomciwggekw: $wamcomkuwysqgwgk = _n("\45\163\x20\x4d\151\x6e\x75\x74\x65", "\45\163\x20\x4d\151\x6e\x75\x74\x65\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::wsgueemccsugoays: $wamcomkuwysqgwgk = _n("\x25\x73\x20\110\x6f\165\x72", "\45\x73\40\110\x6f\165\162\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::eggusgsscecmiiee: $wamcomkuwysqgwgk = _n("\x25\x73\x20\104\x61\x79", "\45\163\40\104\141\x79\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::mqayweomwsokkqsu: $wamcomkuwysqgwgk = _n("\x25\163\40\x57\145\145\x6b", "\45\163\x20\x57\145\x65\x6b\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::qummiiakyucoycws: $wamcomkuwysqgwgk = _n("\x25\x73\x20\x4d\157\x6e\x74\150", "\x25\163\40\x4d\x6f\x6e\164\x68\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::caaieqwcccuueamg: $wamcomkuwysqgwgk = _n("\45\163\40\x59\x65\x61\x72", "\x25\163\40\131\145\141\x72\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; } return sprintf($wamcomkuwysqgwgk, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($eqgoocgaqwqcimie)); } }

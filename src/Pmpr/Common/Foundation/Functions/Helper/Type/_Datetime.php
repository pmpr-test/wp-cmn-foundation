<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d3647befc6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use DateTime; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _Datetime extends Common { public function wguceomqgwouoyks($ocogsiouoiuuguym) : bool { if (!is_numeric($ocogsiouoiuuguym)) { $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); } return $ocogsiouoiuuguym < time(); } public function scmwwoemimggqsyk($eqgoocgaqwqcimie, string $ymmgciamciieaysq = Constants::caaieqwcccuueamg, string $mcmcymukmqioukkk = "\x6e\157\x77") { if ("\x6e\x6f\x77" === $mcmcymukmqioukkk) { $mcmcymukmqioukkk = date("\x59\x2d\x6d\x2d\x64"); } $yiuogaeewyockeak = strtotime($mcmcymukmqioukkk); switch ($ymmgciamciieaysq) { case Constants::caaieqwcccuueamg: $yiuogaeewyockeak = $this->kisewqyyuqqqwesi($yiuogaeewyockeak, $eqgoocgaqwqcimie); break; case Constants::qummiiakyucoycws: $yiuogaeewyockeak = $this->gaecekyeoigwwwsc($yiuogaeewyockeak, $eqgoocgaqwqcimie); break; default: $yiuogaeewyockeak = strtotime("\x2b{$eqgoocgaqwqcimie}\x20{$ymmgciamciieaysq}", $yiuogaeewyockeak); break; } return date("\x59\x2d\x6d\55\144", $yiuogaeewyockeak); } public function ikuqieqosemkwuio($cqgoimumaewouews) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews); if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) { $sieoyimycoskwwku = sprintf(__("\x25\x73\x20\141\x67\x6f"), human_time_diff($cqgoimumaewouews)); } else { $sieoyimycoskwwku = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\144\x61\164\x65\137\x74\x69\x6d\x65\137\x61\147\157", date("\x59\55\155\55\x64\x20\x48\x3a\151", $cqgoimumaewouews), $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq()); } return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\164\x69\155\x65\x5f\x61\x67\x6f", $sieoyimycoskwwku, $cqgoimumaewouews); } public function kisewqyyuqqqwesi($yiuogaeewyockeak, $usqcwoasmiiomgks) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x61\x64\x64\137\x79\145\141\162", $yiuogaeewyockeak, $usqcwoasmiiomgks); if ($uwomkgseoiegeume === $yiuogaeewyockeak) { $uwomkgseoiegeume = strtotime("\53{$usqcwoasmiiomgks}\x20\x79\145\141\x72", $yiuogaeewyockeak); } return $uwomkgseoiegeume; } public function gaecekyeoigwwwsc($yiuogaeewyockeak, $mwemskcucwsyycwm) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x61\144\144\x5f\x6d\157\x6e\164\150", $yiuogaeewyockeak, $mwemskcucwsyycwm); if ($uwomkgseoiegeume === $yiuogaeewyockeak) { $uwomkgseoiegeume = strtotime("\53{$mwemskcucwsyycwm}\x20\x6d\157\156\164\150", $yiuogaeewyockeak); } return $uwomkgseoiegeume; } public function wkksckeyeyeckqsm($ekasyoagocygouom, $bocuuiaeamyyakam = 0) : bool { $yqicqqkokawiosom = true; try { if ($bocuuiaeamyyakam > 0) { $kwgqaywqqgqqwscy = new DateTime($ekasyoagocygouom); $cugkqygegsymsyic = new DateTime("\156\x6f\x77"); $asuaciiookaciacq = $kwgqaywqqgqqwscy->diff($cugkqygegsymsyic); $scuieskcukagwiys = $asuaciiookaciacq->days * 24 * 60 + $asuaciiookaciacq->h * 60 + $asuaciiookaciacq->i; $yqicqqkokawiosom = $scuieskcukagwiys >= (int) $bocuuiaeamyyakam; } } catch (Exception $wgaoewqkwgomoaai) { } return $yqicqqkokawiosom; } public function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\156\x6f\x77") : bool { $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg); $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc); $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym); return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc; } public function gwgmymsuwsceguce() { $cqgoimumaewouews = current_time("\x55"); if (is_string($cqgoimumaewouews)) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); } return $cqgoimumaewouews; } public function omyucuigmqgqmwio($yiuogaeewyockeak, string $ccamueccusigaaio = Constants::eggusgsscecmiiee) { if (is_string($yiuogaeewyockeak)) { $yiuogaeewyockeak = strtotime($yiuogaeewyockeak); if (!$yiuogaeewyockeak) { return 0; } } $mkuwoiyskieqciqe = $this->cmaecekuqkwmemms(strtoupper($ccamueccusigaaio) . "\x5f\x49\116\137\x53\105\x43\117\116\104\x53", 0); return round(($yiuogaeewyockeak - time()) / $mkuwoiyskieqciqe); } public function aaqkcwqaikooouus($eqgoocgaqwqcimie) { $saqmwwmqiwmkiwaa = Constants::askyqwomciwggekw; if ($eqgoocgaqwqcimie > 0) { $scumyeasgcsssmko = [Constants::askyqwomciwggekw => 1, Constants::wsgueemccsugoays => 60, Constants::eggusgsscecmiiee => 1440, Constants::mqayweomwsokkqsu => 10080, Constants::qummiiakyucoycws => 43800, Constants::caaieqwcccuueamg => 525600]; $momcykaoccoymeig = 0; $qqswgiawgeaeoecu = array_values($scumyeasgcsssmko); foreach ($scumyeasgcsssmko as $uusmaiomayssaecw => $ymmgciamciieaysq) { $mmwoqcwiwemokkue = $momcykaoccoymeig + 1; if (!isset($qqswgiawgeaeoecu[$mmwoqcwiwemokkue]) || $qqswgiawgeaeoecu[$mmwoqcwiwemokkue] > $eqgoocgaqwqcimie) { $saqmwwmqiwmkiwaa = $uusmaiomayssaecw; $eqgoocgaqwqcimie = (int) floor($eqgoocgaqwqcimie / $ymmgciamciieaysq); break; } $momcykaoccoymeig++; } } else { $eqgoocgaqwqcimie = 0; } $wamcomkuwysqgwgk = ''; switch ($saqmwwmqiwmkiwaa) { case Constants::askyqwomciwggekw: $wamcomkuwysqgwgk = _n("\45\163\x20\115\x69\156\x75\x74\145", "\45\x73\40\x4d\151\x6e\x75\x74\145\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::wsgueemccsugoays: $wamcomkuwysqgwgk = _n("\x25\163\x20\110\x6f\165\162", "\x25\163\x20\x48\157\x75\x72\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::eggusgsscecmiiee: $wamcomkuwysqgwgk = _n("\x25\x73\x20\104\141\171", "\45\x73\x20\x44\x61\171\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::mqayweomwsokkqsu: $wamcomkuwysqgwgk = _n("\x25\163\x20\x57\145\x65\153", "\45\163\x20\x57\145\145\153\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::qummiiakyucoycws: $wamcomkuwysqgwgk = _n("\x25\x73\40\115\157\156\x74\150", "\45\x73\x20\x4d\157\x6e\x74\x68\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::caaieqwcccuueamg: $wamcomkuwysqgwgk = _n("\x25\x73\x20\131\x65\141\162", "\x25\x73\40\131\x65\141\162\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; } return sprintf($wamcomkuwysqgwgk, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($eqgoocgaqwqcimie)); } }

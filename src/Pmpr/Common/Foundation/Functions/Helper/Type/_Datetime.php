<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d43c6c83e1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use DateTime; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; class _Datetime extends Common { public function wguceomqgwouoyks($ocogsiouoiuuguym) : bool { if (!is_numeric($ocogsiouoiuuguym)) { $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); } return $ocogsiouoiuuguym < time(); } public function scmwwoemimggqsyk($eqgoocgaqwqcimie, string $ymmgciamciieaysq = Constants::caaieqwcccuueamg, string $mcmcymukmqioukkk = "\156\157\x77") { if ("\156\157\x77" === $mcmcymukmqioukkk) { $mcmcymukmqioukkk = date("\x59\x2d\x6d\55\144"); } $yiuogaeewyockeak = strtotime($mcmcymukmqioukkk); switch ($ymmgciamciieaysq) { case Constants::caaieqwcccuueamg: $yiuogaeewyockeak = $this->kisewqyyuqqqwesi($yiuogaeewyockeak, $eqgoocgaqwqcimie); break; case Constants::qummiiakyucoycws: $yiuogaeewyockeak = $this->gaecekyeoigwwwsc($yiuogaeewyockeak, $eqgoocgaqwqcimie); break; default: $yiuogaeewyockeak = strtotime("\x2b{$eqgoocgaqwqcimie}\40{$ymmgciamciieaysq}", $yiuogaeewyockeak); break; } return date("\x59\55\155\x2d\144", $yiuogaeewyockeak); } public function ikuqieqosemkwuio($cqgoimumaewouews) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews); if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) { $sieoyimycoskwwku = sprintf(__("\45\163\x20\x61\x67\x6f"), human_time_diff($cqgoimumaewouews)); } else { $sieoyimycoskwwku = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\144\x61\164\x65\x5f\164\x69\x6d\145\x5f\141\x67\157", date("\131\55\x6d\55\144\40\110\72\x69", $cqgoimumaewouews), $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq()); } return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x74\151\x6d\145\x5f\x61\147\157", $sieoyimycoskwwku, $cqgoimumaewouews); } public function kisewqyyuqqqwesi($yiuogaeewyockeak, $usqcwoasmiiomgks) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\141\x64\144\x5f\x79\145\141\162", $yiuogaeewyockeak, $usqcwoasmiiomgks); if ($uwomkgseoiegeume === $yiuogaeewyockeak) { $uwomkgseoiegeume = strtotime("\53{$usqcwoasmiiomgks}\x20\171\145\x61\x72", $yiuogaeewyockeak); } return $uwomkgseoiegeume; } public function gaecekyeoigwwwsc($yiuogaeewyockeak, $mwemskcucwsyycwm) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\141\144\144\137\x6d\x6f\156\164\150", $yiuogaeewyockeak, $mwemskcucwsyycwm); if ($uwomkgseoiegeume === $yiuogaeewyockeak) { $uwomkgseoiegeume = strtotime("\53{$mwemskcucwsyycwm}\x20\155\x6f\156\164\x68", $yiuogaeewyockeak); } return $uwomkgseoiegeume; } public function wkksckeyeyeckqsm($ekasyoagocygouom, $bocuuiaeamyyakam = 0) : bool { $yqicqqkokawiosom = true; try { if ($bocuuiaeamyyakam > 0) { $kwgqaywqqgqqwscy = new DateTime($ekasyoagocygouom); $cugkqygegsymsyic = new DateTime("\156\x6f\x77"); $asuaciiookaciacq = $kwgqaywqqgqqwscy->diff($cugkqygegsymsyic); $scuieskcukagwiys = $asuaciiookaciacq->days * 24 * 60 + $asuaciiookaciacq->h * 60 + $asuaciiookaciacq->i; $yqicqqkokawiosom = $scuieskcukagwiys >= (int) $bocuuiaeamyyakam; } } catch (Exception $wgaoewqkwgomoaai) { } return $yqicqqkokawiosom; } public function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\x6e\x6f\167") : bool { $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg); $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc); $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym); return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc; } public function gwgmymsuwsceguce() { $cqgoimumaewouews = current_time("\125"); if (is_string($cqgoimumaewouews)) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); } return $cqgoimumaewouews; } public function omyucuigmqgqmwio($yiuogaeewyockeak, string $ccamueccusigaaio = Constants::eggusgsscecmiiee) { if (is_string($yiuogaeewyockeak)) { $yiuogaeewyockeak = strtotime($yiuogaeewyockeak); if (!$yiuogaeewyockeak) { return 0; } } $mkuwoiyskieqciqe = $this->cmaecekuqkwmemms(strtoupper($ccamueccusigaaio) . "\x5f\111\x4e\x5f\123\x45\103\x4f\x4e\104\123", 0); return round(($yiuogaeewyockeak - time()) / $mkuwoiyskieqciqe); } public function aaqkcwqaikooouus($eqgoocgaqwqcimie) { $saqmwwmqiwmkiwaa = Constants::askyqwomciwggekw; if ($eqgoocgaqwqcimie > 0) { $scumyeasgcsssmko = [Constants::askyqwomciwggekw => 1, Constants::wsgueemccsugoays => 60, Constants::eggusgsscecmiiee => 1440, Constants::mqayweomwsokkqsu => 10080, Constants::qummiiakyucoycws => 43800, Constants::caaieqwcccuueamg => 525600]; $momcykaoccoymeig = 0; $qqswgiawgeaeoecu = array_values($scumyeasgcsssmko); foreach ($scumyeasgcsssmko as $uusmaiomayssaecw => $ymmgciamciieaysq) { $mmwoqcwiwemokkue = $momcykaoccoymeig + 1; if (!isset($qqswgiawgeaeoecu[$mmwoqcwiwemokkue]) || $qqswgiawgeaeoecu[$mmwoqcwiwemokkue] > $eqgoocgaqwqcimie) { $saqmwwmqiwmkiwaa = $uusmaiomayssaecw; $eqgoocgaqwqcimie = (int) floor($eqgoocgaqwqcimie / $ymmgciamciieaysq); break; } $momcykaoccoymeig++; } } else { $eqgoocgaqwqcimie = 0; } $wamcomkuwysqgwgk = ''; switch ($saqmwwmqiwmkiwaa) { case Constants::askyqwomciwggekw: $wamcomkuwysqgwgk = _n("\45\x73\x20\x4d\x69\x6e\x75\x74\x65", "\x25\163\40\x4d\x69\156\165\x74\145\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::wsgueemccsugoays: $wamcomkuwysqgwgk = _n("\45\x73\40\x48\157\165\162", "\x25\x73\x20\110\157\x75\x72\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::eggusgsscecmiiee: $wamcomkuwysqgwgk = _n("\45\x73\40\104\x61\171", "\45\163\x20\104\141\171\x73", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::mqayweomwsokkqsu: $wamcomkuwysqgwgk = _n("\45\x73\40\127\145\145\153", "\45\x73\x20\127\x65\145\153\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::qummiiakyucoycws: $wamcomkuwysqgwgk = _n("\45\163\40\x4d\157\156\164\150", "\45\x73\40\x4d\157\156\x74\x68\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; case Constants::caaieqwcccuueamg: $wamcomkuwysqgwgk = _n("\45\x73\x20\x59\145\141\162", "\45\x73\40\x59\145\141\162\163", $eqgoocgaqwqcimie, PR__CMN__FOUNDATION); break; } return sprintf($wamcomkuwysqgwgk, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($eqgoocgaqwqcimie)); } }

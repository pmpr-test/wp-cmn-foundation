<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b55badb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Pmpr\Common\Foundation\Interfaces\Constants; class _Datetime extends Common { public function wguceomqgwouoyks($ocogsiouoiuuguym) : bool { if (is_numeric($ocogsiouoiuuguym)) { goto amyuqgaegykwgcgk; } $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); amyuqgaegykwgcgk: return $ocogsiouoiuuguym < time(); } public function scmwwoemimggqsyk($eqgoocgaqwqcimie, string $ymmgciamciieaysq = Constants::caaieqwcccuueamg, string $mcmcymukmqioukkk = "\156\157\167") { if (!("\156\x6f\x77" === $mcmcymukmqioukkk)) { goto ecooysegquiascci; } $mcmcymukmqioukkk = date("\x59\x2d\x6d\55\x64"); ecooysegquiascci: $yiuogaeewyockeak = strtotime($mcmcymukmqioukkk); switch ($ymmgciamciieaysq) { case Constants::caaieqwcccuueamg: $yiuogaeewyockeak = $this->kisewqyyuqqqwesi($yiuogaeewyockeak, $eqgoocgaqwqcimie); goto smgwweikoueukkom; case Constants::qummiiakyucoycws: $yiuogaeewyockeak = $this->gaecekyeoigwwwsc($yiuogaeewyockeak, $eqgoocgaqwqcimie); goto smgwweikoueukkom; default: $yiuogaeewyockeak = strtotime("\x2b{$eqgoocgaqwqcimie}\40{$ymmgciamciieaysq}", $yiuogaeewyockeak); goto smgwweikoueukkom; } wekosqocigkegwgq: smgwweikoueukkom: return date("\x59\x2d\x6d\55\x64", $yiuogaeewyockeak); } public function ikuqieqosemkwuio($cqgoimumaewouews) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews); if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) { goto quyumosiyumgeqao; } $sieoyimycoskwwku = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x64\141\164\145\137\x74\151\x6d\145\x5f\141\147\x6f", date("\x59\55\x6d\x2d\144\40\110\72\151", $cqgoimumaewouews), $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq()); goto swysacsiqeaqkeik; quyumosiyumgeqao: $sieoyimycoskwwku = sprintf(__("\45\x73\40\x61\147\157"), human_time_diff($cqgoimumaewouews)); swysacsiqeaqkeik: return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\164\x69\x6d\x65\137\141\x67\x6f", $sieoyimycoskwwku, $cqgoimumaewouews); } public function kisewqyyuqqqwesi($yiuogaeewyockeak, $usqcwoasmiiomgks) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\141\x64\x64\137\171\x65\x61\162", $yiuogaeewyockeak, $usqcwoasmiiomgks); if (!($uwomkgseoiegeume === $yiuogaeewyockeak)) { goto muiuuoeuoqqqqycq; } $uwomkgseoiegeume = strtotime("\53{$usqcwoasmiiomgks}\x20\171\x65\x61\x72", $yiuogaeewyockeak); muiuuoeuoqqqqycq: return $uwomkgseoiegeume; } public function gaecekyeoigwwwsc($yiuogaeewyockeak, $mwemskcucwsyycwm) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\141\x64\x64\x5f\155\157\156\164\x68", $yiuogaeewyockeak, $mwemskcucwsyycwm); if (!($uwomkgseoiegeume === $yiuogaeewyockeak)) { goto meeeuaakuscgcomc; } $uwomkgseoiegeume = strtotime("\53{$mwemskcucwsyycwm}\40\155\157\156\164\x68", $yiuogaeewyockeak); meeeuaakuscgcomc: return $uwomkgseoiegeume; } public function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\156\x6f\167") : bool { $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg); $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc); $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym); return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc; } public function gwgmymsuwsceguce() { $cqgoimumaewouews = current_time("\125"); if (!is_string($cqgoimumaewouews)) { goto goemgwueaswqayue; } $cqgoimumaewouews = strtotime($cqgoimumaewouews); goemgwueaswqayue: return $cqgoimumaewouews; } public function omyucuigmqgqmwio($yiuogaeewyockeak, string $ccamueccusigaaio = Constants::eggusgsscecmiiee) { if (!is_string($yiuogaeewyockeak)) { goto uymqegkssemcqegk; } $yiuogaeewyockeak = strtotime($yiuogaeewyockeak); if ($yiuogaeewyockeak) { goto quecaykkiwwgqoay; } return 0; quecaykkiwwgqoay: uymqegkssemcqegk: $mkuwoiyskieqciqe = $this->cmaecekuqkwmemms(strtoupper($ccamueccusigaaio) . "\x5f\x49\116\x5f\x53\105\x43\x4f\116\104\123", 0); return round(($yiuogaeewyockeak - time()) / $mkuwoiyskieqciqe); } }

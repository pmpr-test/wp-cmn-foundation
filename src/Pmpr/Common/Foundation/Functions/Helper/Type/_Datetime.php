<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c4949867             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Pmpr\Common\Foundation\Interfaces\Constants; class _Datetime extends Common { public function wguceomqgwouoyks($ocogsiouoiuuguym) : bool { if (is_numeric($ocogsiouoiuuguym)) { goto ueyagkiewoigukeq; } $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); ueyagkiewoigukeq: return $ocogsiouoiuuguym < time(); } public function scmwwoemimggqsyk($eqgoocgaqwqcimie, string $ymmgciamciieaysq = Constants::caaieqwcccuueamg, string $mcmcymukmqioukkk = "\156\x6f\x77") { if (!("\x6e\x6f\167" === $mcmcymukmqioukkk)) { goto oeqaomymqmegqway; } $mcmcymukmqioukkk = date("\x59\x2d\155\55\x64"); oeqaomymqmegqway: $yiuogaeewyockeak = strtotime($mcmcymukmqioukkk); switch ($ymmgciamciieaysq) { case Constants::caaieqwcccuueamg: $yiuogaeewyockeak = $this->kisewqyyuqqqwesi($yiuogaeewyockeak, $eqgoocgaqwqcimie); goto aeaaqimiugqwsiuo; case Constants::qummiiakyucoycws: $yiuogaeewyockeak = $this->gaecekyeoigwwwsc($yiuogaeewyockeak, $eqgoocgaqwqcimie); goto aeaaqimiugqwsiuo; default: $yiuogaeewyockeak = strtotime("\x2b{$eqgoocgaqwqcimie}\x20{$ymmgciamciieaysq}", $yiuogaeewyockeak); goto aeaaqimiugqwsiuo; } iwcmwyyeuwuogkmy: aeaaqimiugqwsiuo: return date("\x59\x2d\x6d\x2d\144", $yiuogaeewyockeak); } public function ikuqieqosemkwuio($cqgoimumaewouews) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews); if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) { goto yogcgegoayymyisi; } $sieoyimycoskwwku = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\144\141\164\x65\137\164\x69\155\145\137\141\x67\157", date("\x59\55\x6d\55\144\x20\x48\x3a\x69", $cqgoimumaewouews), $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq()); goto gayuuyucaseyequa; yogcgegoayymyisi: $sieoyimycoskwwku = sprintf(__("\x25\x73\x20\141\147\x6f"), human_time_diff($cqgoimumaewouews)); gayuuyucaseyequa: return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x74\151\155\x65\137\x61\x67\157", $sieoyimycoskwwku, $cqgoimumaewouews); } public function kisewqyyuqqqwesi($yiuogaeewyockeak, $usqcwoasmiiomgks) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\141\144\x64\137\171\x65\141\x72", $yiuogaeewyockeak, $usqcwoasmiiomgks); if (!($uwomkgseoiegeume === $yiuogaeewyockeak)) { goto oemswegiqoiyocyi; } $uwomkgseoiegeume = strtotime("\x2b{$usqcwoasmiiomgks}\x20\171\x65\141\162", $yiuogaeewyockeak); oemswegiqoiyocyi: return $uwomkgseoiegeume; } public function gaecekyeoigwwwsc($yiuogaeewyockeak, $mwemskcucwsyycwm) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\141\144\144\x5f\x6d\x6f\x6e\164\x68", $yiuogaeewyockeak, $mwemskcucwsyycwm); if (!($uwomkgseoiegeume === $yiuogaeewyockeak)) { goto ckocyicqgqesqcyw; } $uwomkgseoiegeume = strtotime("\x2b{$mwemskcucwsyycwm}\40\155\157\x6e\x74\150", $yiuogaeewyockeak); ckocyicqgqesqcyw: return $uwomkgseoiegeume; } public function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\156\x6f\x77") : bool { $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg); $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc); $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym); return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc; } public function gwgmymsuwsceguce() { $cqgoimumaewouews = current_time("\x55"); if (!is_string($cqgoimumaewouews)) { goto oiuwwaimuiuasyak; } $cqgoimumaewouews = strtotime($cqgoimumaewouews); oiuwwaimuiuasyak: return $cqgoimumaewouews; } public function omyucuigmqgqmwio($yiuogaeewyockeak, string $ccamueccusigaaio = Constants::eggusgsscecmiiee) { if (!is_string($yiuogaeewyockeak)) { goto yooikokuygygyscy; } $yiuogaeewyockeak = strtotime($yiuogaeewyockeak); if ($yiuogaeewyockeak) { goto mceqeoceqiqsqyig; } return 0; mceqeoceqiqsqyig: yooikokuygygyscy: $mkuwoiyskieqciqe = $this->cmaecekuqkwmemms(strtoupper($ccamueccusigaaio) . "\x5f\111\116\x5f\x53\105\x43\x4f\x4e\x44\x53", 0); return round(($yiuogaeewyockeak - time()) / $mkuwoiyskieqciqe); } }

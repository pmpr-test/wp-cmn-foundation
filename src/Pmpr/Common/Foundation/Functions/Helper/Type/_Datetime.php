<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf62d32095             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Type; use Pmpr\Common\Foundation\Interfaces\Constants; class _Datetime extends Common { public function wguceomqgwouoyks($ocogsiouoiuuguym) : bool { if (is_numeric($ocogsiouoiuuguym)) { goto kuiimqmaogsaoimi; } $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); kuiimqmaogsaoimi: return $ocogsiouoiuuguym < time(); } public function scmwwoemimggqsyk($eqgoocgaqwqcimie, string $ymmgciamciieaysq = Constants::caaieqwcccuueamg, string $mcmcymukmqioukkk = "\x6e\157\x77") { if (!("\x6e\157\x77" === $mcmcymukmqioukkk)) { goto ueyagkiewoigukeq; } $mcmcymukmqioukkk = date("\131\55\155\x2d\144"); ueyagkiewoigukeq: $yiuogaeewyockeak = strtotime($mcmcymukmqioukkk); switch ($ymmgciamciieaysq) { case Constants::caaieqwcccuueamg: $yiuogaeewyockeak = $this->kisewqyyuqqqwesi($yiuogaeewyockeak, $eqgoocgaqwqcimie); goto oeqaomymqmegqway; case Constants::qummiiakyucoycws: $yiuogaeewyockeak = $this->gaecekyeoigwwwsc($yiuogaeewyockeak, $eqgoocgaqwqcimie); goto oeqaomymqmegqway; default: $yiuogaeewyockeak = strtotime("\x2b{$eqgoocgaqwqcimie}\40{$ymmgciamciieaysq}", $yiuogaeewyockeak); goto oeqaomymqmegqway; } aeaaqimiugqwsiuo: oeqaomymqmegqway: return date("\x59\55\155\55\x64", $yiuogaeewyockeak); } public function ikuqieqosemkwuio($cqgoimumaewouews) { $cqgoimumaewouews = strtotime($cqgoimumaewouews); $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews); if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) { goto iwcmwyyeuwuogkmy; } $sieoyimycoskwwku = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\x64\x61\164\145\x5f\164\151\155\145\137\141\147\x6f", date("\x59\55\x6d\55\144\40\110\x3a\x69", $cqgoimumaewouews), $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq()); goto yogcgegoayymyisi; iwcmwyyeuwuogkmy: $sieoyimycoskwwku = sprintf(__("\x25\x73\40\141\x67\157"), human_time_diff($cqgoimumaewouews)); yogcgegoayymyisi: return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy("\164\151\x6d\145\137\x61\x67\x6f", $sieoyimycoskwwku, $cqgoimumaewouews); } public function kisewqyyuqqqwesi($yiuogaeewyockeak, $usqcwoasmiiomgks) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\x61\144\144\137\171\145\141\x72", $yiuogaeewyockeak, $usqcwoasmiiomgks); if (!($uwomkgseoiegeume === $yiuogaeewyockeak)) { goto gayuuyucaseyequa; } $uwomkgseoiegeume = strtotime("\53{$usqcwoasmiiomgks}\40\171\x65\x61\x72", $yiuogaeewyockeak); gayuuyucaseyequa: return $uwomkgseoiegeume; } public function gaecekyeoigwwwsc($yiuogaeewyockeak, $mwemskcucwsyycwm) { $uwomkgseoiegeume = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("\141\x64\144\137\x6d\157\156\x74\150", $yiuogaeewyockeak, $mwemskcucwsyycwm); if (!($uwomkgseoiegeume === $yiuogaeewyockeak)) { goto oemswegiqoiyocyi; } $uwomkgseoiegeume = strtotime("\x2b{$mwemskcucwsyycwm}\x20\155\x6f\156\164\150", $yiuogaeewyockeak); oemswegiqoiyocyi: return $uwomkgseoiegeume; } public function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\156\157\x77") : bool { $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg); $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc); $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym); return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc; } public function gwgmymsuwsceguce() { $cqgoimumaewouews = current_time("\125"); if (!is_string($cqgoimumaewouews)) { goto ckocyicqgqesqcyw; } $cqgoimumaewouews = strtotime($cqgoimumaewouews); ckocyicqgqesqcyw: return $cqgoimumaewouews; } public function omyucuigmqgqmwio($yiuogaeewyockeak, string $ccamueccusigaaio = Constants::eggusgsscecmiiee) { if (!is_string($yiuogaeewyockeak)) { goto mceqeoceqiqsqyig; } $yiuogaeewyockeak = strtotime($yiuogaeewyockeak); if ($yiuogaeewyockeak) { goto oiuwwaimuiuasyak; } return 0; oiuwwaimuiuasyak: mceqeoceqiqsqyig: $mkuwoiyskieqciqe = $this->cmaecekuqkwmemms(strtoupper($ccamueccusigaaio) . "\x5f\x49\x4e\x5f\123\x45\x43\x4f\x4e\x44\x53", 0); return round(($yiuogaeewyockeak - time()) / $mkuwoiyskieqciqe); } }

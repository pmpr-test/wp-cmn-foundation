<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1795dce7fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; use WP_Error; class Error extends Common { public function ywgmqwueaugywcwi($iswcokucwmiosiaq) : array { $ueeagokqmgisgauy = []; if (!$iswcokucwmiosiaq instanceof WP_Error) { goto waqycyookeekysyw; } $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages(); waqycyookeekysyw: return $ueeagokqmgisgauy; } public function skekyweyomoqgekq($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) { $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw($this->skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk)); } public function kyacickkomkioeyu($wgaoewqkwgomoaai, bool $cywsuewgaoeygqso = true) : ?string { $uamcoiueqaamsqma = ''; if (!$wgaoewqkwgomoaai instanceof Exception) { goto eqcwgomkucsikows; } $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); if (!$cywsuewgaoeygqso) { goto kkcgaqkugmqqeyka; } $ckugsqsomwywoois = $wgaoewqkwgomoaai->getTrace(); $qsmysquqmiwcimqg = ''; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ckugsqsomwywoois as $momcykaoccoymeig => $smgswawakqcsecka) { $qsmysquqmiwcimqg .= $swqimwqeweekeusq->iaaacsuskiakkwui(sprintf("\x23\40\45\x73\x20\45\163\72\40\x25\x73\40\x2d\40\x25\163\72\x25\163", $momcykaoccoymeig - 1, $smgswawakqcsecka["\146\151\154\145"] ?? '', $smgswawakqcsecka["\154\151\156\x65"] ?? '', $smgswawakqcsecka["\143\154\x61\x73\x73"] ?? '', $smgswawakqcsecka["\x66\x75\156\143\164\151\x6f\x6e"] ?? '')) . "\x3c\x62\162\x3e"; ugckgwumakkmewem: } egooqaeyqemyyueq: $uamcoiueqaamsqma .= $qsmysquqmiwcimqg; kkcgaqkugmqqeyka: eqcwgomkucsikows: return $uamcoiueqaamsqma; } public function skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) : ?string { if ($iswcokucwmiosiaq instanceof WP_Error) { goto wayyaaaewkgkyayk; } if (!$iswcokucwmiosiaq instanceof Exception) { goto beesceygkkecsask; } $iswcokucwmiosiaq = $this->kyacickkomkioeyu($iswcokucwmiosiaq); beesceygkkecsask: goto ameikuoiuqcsucgo; wayyaaaewkgkyayk: $iswcokucwmiosiaq = $this->ywgmqwueaugywcwi($iswcokucwmiosiaq); ameikuoiuqcsucgo: if (is_array($iswcokucwmiosiaq)) { goto awewuysgsucyuiqu; } $uamcoiueqaamsqma = $iswcokucwmiosiaq; goto gqiuuyygewuqosqe; awewuysgsucyuiqu: $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq); gqiuuyygewuqosqe: if (!$wamcomkuwysqgwgk) { goto egieyaugcwckokym; } $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma); egieyaugcwckokym: return $uamcoiueqaamsqma; } public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null) { throw new RuntimeException($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk); } public function cackyykusuowuiwg(?string $aiowsaccomcoikus = null, array $icwicymcioeyeyek = []) : WP_Error { if ($aiowsaccomcoikus) { goto oykgoscoqcimcsqg; } $uamcoiueqaamsqma = __("\x52\x65\x71\165\x69\x72\x65\x64\40\x70\x61\162\141\155\145\x74\x65\x72\x73\40\156\x6f\164\40\160\141\x73\163\x65\144\x2e", PR__CMN__FOUNDATION); goto cqwcweokuiayeicq; oykgoscoqcimcsqg: $uamcoiueqaamsqma = sprintf(__("\45\x73\40\151\x73\x20\141\x20\x72\x65\161\x75\x69\x72\145\x64\40\160\141\162\x61\155\x65\164\x65\162\56", PR__CMN__FOUNDATION), $aiowsaccomcoikus); cqwcweokuiayeicq: return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, 400, $icwicymcioeyeyek); } public function gosmqcmmomkqwmis($uamcoiueqaamsqma, int $iueymcwwscwqkiyq = 403, array $icwicymcioeyeyek = []) : WP_Error { $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gmqckgyqkacaqaug($iueymcwwscwqkiyq); $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($icwicymcioeyeyek, [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); $iswcokucwmiosiaq = new WP_Error(); if (is_string($uamcoiueqaamsqma)) { goto amyuqgaegykwgcgk; } if (is_array($uamcoiueqaamsqma)) { goto scuegucswagswcio; } if (is_wp_error($uamcoiueqaamsqma)) { goto aymooygqycguekai; } if (!$uamcoiueqaamsqma instanceof Exception) { goto wqwoeeeqwccksawi; } $iswcokucwmiosiaq = $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma), $icwicymcioeyeyek); wqwoeeeqwccksawi: goto sweakucgmumqsakg; aymooygqycguekai: $iswcokucwmiosiaq = $uamcoiueqaamsqma; sweakucgmumqsakg: goto wiumcqqogqsqyaqo; scuegucswagswcio: foreach ($uamcoiueqaamsqma as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->add($iswcokucwmiosiaq, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $icwicymcioeyeyek); uckeiuaoqmigcksq: } siaaikmageayqqsu: wiumcqqogqsqyaqo: goto ecooysegquiascci; amyuqgaegykwgcgk: $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); ecooysegquiascci: return $iswcokucwmiosiaq; } public function add($cukqimcsiooqyskq, $ymacoouqwcqwwagu, string $uamcoiueqaamsqma, $icwicymcioeyeyek = '') { if (!$cukqimcsiooqyskq instanceof WP_Error) { goto smgwweikoueukkom; } $cukqimcsiooqyskq->add($ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); smgwweikoueukkom: return $cukqimcsiooqyskq; } public function ueiegogoeyqoiewa(?string $uamcoiueqaamsqma = null, array $icwicymcioeyeyek = [], int $gaciecykoqycioyu = 500) : WP_Error { if ($uamcoiueqaamsqma) { goto wekosqocigkegwgq; } $uamcoiueqaamsqma = __("\123\x6f\162\162\171\x2c\x20\164\x68\x65\162\x65\40\163\x65\x65\155\163\x20\x74\157\40\x62\145\x20\x61\40\160\162\x6f\142\154\145\155\x20\x77\x69\164\150\x20\164\x68\x65\x20\163\x65\x72\x76\x65\162\54\x20\160\154\x65\141\163\145\40\143\157\156\x74\141\x63\x74\x20\x75\163\x2e", PR__CMN__FOUNDATION); wekosqocigkegwgq: return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, $gaciecykoqycioyu, $icwicymcioeyeyek); } }

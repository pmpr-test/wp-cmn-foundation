<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; use WP_Error; class Error extends Common { public function ywgmqwueaugywcwi($iswcokucwmiosiaq) : array { $ueeagokqmgisgauy = []; if (!$iswcokucwmiosiaq instanceof WP_Error) { goto ocqwquesqkeuaqss; } $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages(); ocqwquesqkeuaqss: return $ueeagokqmgisgauy; } public function skekyweyomoqgekq($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) { $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw($this->skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk)); } public function kyacickkomkioeyu($wgaoewqkwgomoaai, bool $cywsuewgaoeygqso = true) : ?string { $uamcoiueqaamsqma = ''; if (!$wgaoewqkwgomoaai instanceof Exception) { goto swiqkgiecwkaegge; } $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); if (!$cywsuewgaoeygqso) { goto wuqgkeayuqmoiuyo; } $ckugsqsomwywoois = $wgaoewqkwgomoaai->getTrace(); $qsmysquqmiwcimqg = ''; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ckugsqsomwywoois as $momcykaoccoymeig => $smgswawakqcsecka) { $qsmysquqmiwcimqg .= $swqimwqeweekeusq->iaaacsuskiakkwui(sprintf("\x23\x20\x25\163\x20\x25\x73\72\40\x25\x73\x20\x2d\x20\45\x73\72\x25\163", $momcykaoccoymeig - 1, $smgswawakqcsecka["\146\151\154\145"] ?? '', $smgswawakqcsecka["\154\x69\x6e\x65"] ?? '', $smgswawakqcsecka["\143\x6c\x61\x73\x73"] ?? '', $smgswawakqcsecka["\146\165\156\x63\164\x69\157\156"] ?? '')) . "\x3c\x62\x72\76"; kgoiagiewgoeuyym: } ieuawqgmecwsukqg: $uamcoiueqaamsqma .= $qsmysquqmiwcimqg; wuqgkeayuqmoiuyo: swiqkgiecwkaegge: return $uamcoiueqaamsqma; } public function skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) : ?string { if ($iswcokucwmiosiaq instanceof WP_Error) { goto sewckeyeiguewqki; } if (!$iswcokucwmiosiaq instanceof Exception) { goto qkesssukmqqcqikg; } $iswcokucwmiosiaq = $this->kyacickkomkioeyu($iswcokucwmiosiaq); qkesssukmqqcqikg: goto wkoguegaagqeqkeq; sewckeyeiguewqki: $iswcokucwmiosiaq = $this->ywgmqwueaugywcwi($iswcokucwmiosiaq); wkoguegaagqeqkeq: if (is_array($iswcokucwmiosiaq)) { goto iqeceuygmigawkoy; } $uamcoiueqaamsqma = $iswcokucwmiosiaq; goto ieuuecggquoakswk; iqeceuygmigawkoy: $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq); ieuuecggquoakswk: if (!$wamcomkuwysqgwgk) { goto gemkckmaeeoqyusu; } $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma); gemkckmaeeoqyusu: return $uamcoiueqaamsqma; } public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null) { throw new RuntimeException($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk); } public function cackyykusuowuiwg(?string $aiowsaccomcoikus = null, array $icwicymcioeyeyek = []) : WP_Error { if ($aiowsaccomcoikus) { goto ukoemwwgmqeggiai; } $uamcoiueqaamsqma = __("\x52\x65\x71\165\x69\162\x65\x64\x20\x70\x61\162\141\155\145\x74\145\162\163\40\156\x6f\164\x20\160\141\163\x73\x65\x64\x2e", PR__CMN__FOUNDATION); goto moscmqueqcmsuqaq; ukoemwwgmqeggiai: $uamcoiueqaamsqma = sprintf(__("\x25\x73\40\151\x73\40\x61\40\x72\x65\x71\165\x69\162\x65\x64\x20\x70\141\x72\141\155\x65\x74\x65\162\x2e", PR__CMN__FOUNDATION), $aiowsaccomcoikus); moscmqueqcmsuqaq: return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, 400, $icwicymcioeyeyek); } public function gosmqcmmomkqwmis($uamcoiueqaamsqma, int $iueymcwwscwqkiyq = 403, array $icwicymcioeyeyek = []) : WP_Error { $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gmqckgyqkacaqaug($iueymcwwscwqkiyq); $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($icwicymcioeyeyek, [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); $iswcokucwmiosiaq = new WP_Error(); if (is_string($uamcoiueqaamsqma)) { goto iwimkwucugqaemcu; } if (is_array($uamcoiueqaamsqma)) { goto qgkgmseosomqwicm; } if (is_wp_error($uamcoiueqaamsqma)) { goto ugkwkcaycececsay; } if (!$uamcoiueqaamsqma instanceof Exception) { goto hkyamaausyicywiq; } $iswcokucwmiosiaq = $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma), $icwicymcioeyeyek); hkyamaausyicywiq: goto wisgcoswiemiwicy; ugkwkcaycececsay: $iswcokucwmiosiaq = $uamcoiueqaamsqma; wisgcoswiemiwicy: goto aewweoqsskseouck; qgkgmseosomqwicm: foreach ($uamcoiueqaamsqma as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->add($iswcokucwmiosiaq, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $icwicymcioeyeyek); mymgcmggqauqoiee: } yiiaeaqyyakeieqa: aewweoqsskseouck: goto wggygymygomaekqo; iwimkwucugqaemcu: $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); wggygymygomaekqo: return $iswcokucwmiosiaq; } public function add($cukqimcsiooqyskq, $ymacoouqwcqwwagu, string $uamcoiueqaamsqma, $icwicymcioeyeyek = '') { if (!$cukqimcsiooqyskq instanceof WP_Error) { goto wmimsumiocyqcgyy; } $cukqimcsiooqyskq->add($ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); wmimsumiocyqcgyy: return $cukqimcsiooqyskq; } public function ueiegogoeyqoiewa(?string $uamcoiueqaamsqma = null, array $icwicymcioeyeyek = [], int $gaciecykoqycioyu = 500) : WP_Error { if ($uamcoiueqaamsqma) { goto iaasuqsqgwgoecik; } $uamcoiueqaamsqma = __("\x53\157\162\x72\x79\x2c\40\x74\150\145\x72\x65\x20\x73\145\x65\155\x73\x20\164\157\x20\142\145\x20\x61\x20\x70\162\157\x62\154\145\155\x20\x77\x69\164\x68\40\x74\x68\145\x20\x73\x65\x72\166\145\x72\x2c\x20\160\154\x65\141\x73\x65\40\143\x6f\x6e\x74\141\x63\x74\40\165\163\x2e", PR__CMN__FOUNDATION); iaasuqsqgwgoecik: return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, $gaciecykoqycioyu, $icwicymcioeyeyek); } }

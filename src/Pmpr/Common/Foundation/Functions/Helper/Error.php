<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d41721935c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; use WP_Error; class Error extends Common { public function ywgmqwueaugywcwi($iswcokucwmiosiaq) : array { $ueeagokqmgisgauy = []; if ($iswcokucwmiosiaq instanceof WP_Error) { $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages(); } return $ueeagokqmgisgauy; } public function skekyweyomoqgekq($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) { $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw($this->skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk)); } public function kyacickkomkioeyu($wgaoewqkwgomoaai, bool $cywsuewgaoeygqso = true) : ?string { $uamcoiueqaamsqma = ''; if ($wgaoewqkwgomoaai instanceof Exception) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); if ($cywsuewgaoeygqso) { $ckugsqsomwywoois = $wgaoewqkwgomoaai->getTrace(); $qsmysquqmiwcimqg = ''; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ckugsqsomwywoois as $momcykaoccoymeig => $smgswawakqcsecka) { $qsmysquqmiwcimqg .= $swqimwqeweekeusq->iaaacsuskiakkwui(sprintf("\43\x20\x25\x73\x20\x25\163\x3a\x20\x25\163\40\x2d\x20\45\163\x3a\45\163", $momcykaoccoymeig - 1, $smgswawakqcsecka["\146\x69\x6c\145"] ?? '', $smgswawakqcsecka["\x6c\151\x6e\145"] ?? '', $smgswawakqcsecka["\143\x6c\141\x73\163"] ?? '', $smgswawakqcsecka["\146\x75\156\x63\x74\151\157\156"] ?? '')) . "\74\x62\162\x3e"; } $uamcoiueqaamsqma .= $qsmysquqmiwcimqg; } } return $uamcoiueqaamsqma; } public function sacmkccceuywoqsq($iswcokucwmiosiaq) : array { $wumguikkgaigkoee = []; if (is_wp_error($iswcokucwmiosiaq)) { foreach ($iswcokucwmiosiaq->get_error_codes() as $ymacoouqwcqwwagu) { $wumguikkgaigkoee[$ymacoouqwcqwwagu] = $iswcokucwmiosiaq->get_error_message($ymacoouqwcqwwagu); } } else { if (is_string($iswcokucwmiosiaq)) { $wumguikkgaigkoee[] = $iswcokucwmiosiaq; } else { if (is_array($iswcokucwmiosiaq)) { $wumguikkgaigkoee = $iswcokucwmiosiaq; } } } return $wumguikkgaigkoee; } public function skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) : ?string { if ($iswcokucwmiosiaq instanceof WP_Error) { $iswcokucwmiosiaq = $this->ywgmqwueaugywcwi($iswcokucwmiosiaq); } else { if ($iswcokucwmiosiaq instanceof Exception) { $iswcokucwmiosiaq = $this->kyacickkomkioeyu($iswcokucwmiosiaq); } } if (is_array($iswcokucwmiosiaq)) { $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq); } else { $uamcoiueqaamsqma = $iswcokucwmiosiaq; } if ($wamcomkuwysqgwgk) { $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma); } return $uamcoiueqaamsqma; } public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null) { throw new RuntimeException($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk); } public function cackyykusuowuiwg(?string $aiowsaccomcoikus = null, array $icwicymcioeyeyek = []) : WP_Error { if ($aiowsaccomcoikus) { $uamcoiueqaamsqma = sprintf(__("\x25\x73\40\151\x73\x20\141\x20\x72\x65\x71\165\x69\x72\x65\144\40\x70\x61\x72\x61\155\145\164\x65\162\56", PR__CMN__FOUNDATION), $aiowsaccomcoikus); } else { $uamcoiueqaamsqma = __("\122\x65\x71\165\151\162\145\144\40\x70\141\162\141\155\145\164\x65\162\163\x20\x6e\157\x74\40\x70\x61\x73\163\145\x64\56", PR__CMN__FOUNDATION); } return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, 400, $icwicymcioeyeyek); } public function gosmqcmmomkqwmis($uamcoiueqaamsqma, int $iueymcwwscwqkiyq = 403, array $icwicymcioeyeyek = []) : WP_Error { $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gmqckgyqkacaqaug($iueymcwwscwqkiyq); $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($icwicymcioeyeyek, [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); $iswcokucwmiosiaq = new WP_Error(); if (is_string($uamcoiueqaamsqma)) { $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); } else { if (is_array($uamcoiueqaamsqma)) { foreach ($uamcoiueqaamsqma as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->add($iswcokucwmiosiaq, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $icwicymcioeyeyek); } } else { if (is_wp_error($uamcoiueqaamsqma)) { $iswcokucwmiosiaq = $uamcoiueqaamsqma; } else { if ($uamcoiueqaamsqma instanceof Exception) { $iswcokucwmiosiaq = $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma), $icwicymcioeyeyek); } } } } return $iswcokucwmiosiaq; } public function add($cukqimcsiooqyskq, $ymacoouqwcqwwagu, string $uamcoiueqaamsqma, $icwicymcioeyeyek = '') { if ($cukqimcsiooqyskq instanceof WP_Error) { $cukqimcsiooqyskq->add($ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); } return $cukqimcsiooqyskq; } public function ueiegogoeyqoiewa(?string $uamcoiueqaamsqma = null, array $icwicymcioeyeyek = [], int $gaciecykoqycioyu = 500) : WP_Error { if (!$uamcoiueqaamsqma) { $uamcoiueqaamsqma = __("\123\157\x72\x72\171\x2c\40\164\x68\x65\162\x65\x20\x73\145\145\155\x73\x20\x74\x6f\x20\x62\145\x20\141\40\160\x72\157\x62\154\145\x6d\40\x77\151\164\x68\40\164\150\x65\x20\x73\145\162\x76\x65\x72\x2c\x20\x70\154\x65\x61\x73\x65\x20\143\157\x6e\164\x61\x63\164\x20\165\163\56", PR__CMN__FOUNDATION); } return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, $gaciecykoqycioyu, $icwicymcioeyeyek); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4d0827938             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; use WP_Error; class Error extends Common { public function ywgmqwueaugywcwi($iswcokucwmiosiaq) : array { $ueeagokqmgisgauy = []; if ($iswcokucwmiosiaq instanceof WP_Error) { $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages(); } return $ueeagokqmgisgauy; } public function skekyweyomoqgekq($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) { $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw($this->skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk)); } public function kyacickkomkioeyu($wgaoewqkwgomoaai, bool $cywsuewgaoeygqso = true) : ?string { $uamcoiueqaamsqma = ''; if ($wgaoewqkwgomoaai instanceof Exception) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); if ($cywsuewgaoeygqso) { $ckugsqsomwywoois = $wgaoewqkwgomoaai->getTrace(); $qsmysquqmiwcimqg = ''; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ckugsqsomwywoois as $momcykaoccoymeig => $smgswawakqcsecka) { $qsmysquqmiwcimqg .= $swqimwqeweekeusq->iaaacsuskiakkwui(sprintf("\x23\x20\x25\163\40\45\163\72\40\x25\x73\40\x2d\x20\45\x73\x3a\45\x73", $momcykaoccoymeig - 1, $smgswawakqcsecka["\146\x69\x6c\x65"] ?? '', $smgswawakqcsecka["\x6c\151\x6e\x65"] ?? '', $smgswawakqcsecka["\143\154\x61\x73\163"] ?? '', $smgswawakqcsecka["\146\165\x6e\x63\164\151\157\x6e"] ?? '')) . "\x3c\142\162\76"; } $uamcoiueqaamsqma .= $qsmysquqmiwcimqg; } } return $uamcoiueqaamsqma; } public function sacmkccceuywoqsq($iswcokucwmiosiaq) : array { $wumguikkgaigkoee = []; if (is_wp_error($iswcokucwmiosiaq)) { foreach ($iswcokucwmiosiaq->get_error_codes() as $ymacoouqwcqwwagu) { $wumguikkgaigkoee[$ymacoouqwcqwwagu] = $iswcokucwmiosiaq->get_error_message($ymacoouqwcqwwagu); } } else { if (is_string($iswcokucwmiosiaq)) { $wumguikkgaigkoee[] = $iswcokucwmiosiaq; } else { if (is_array($iswcokucwmiosiaq)) { $wumguikkgaigkoee = $iswcokucwmiosiaq; } } } return $wumguikkgaigkoee; } public function skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) : ?string { if ($iswcokucwmiosiaq instanceof WP_Error) { $iswcokucwmiosiaq = $this->ywgmqwueaugywcwi($iswcokucwmiosiaq); } else { if ($iswcokucwmiosiaq instanceof Exception) { $iswcokucwmiosiaq = $this->kyacickkomkioeyu($iswcokucwmiosiaq); } } if (is_array($iswcokucwmiosiaq)) { $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq); } else { $uamcoiueqaamsqma = $iswcokucwmiosiaq; } if ($wamcomkuwysqgwgk) { $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma); } return $uamcoiueqaamsqma; } public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null) { throw new RuntimeException($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk); } public function cackyykusuowuiwg(?string $aiowsaccomcoikus = null, array $icwicymcioeyeyek = []) : WP_Error { if ($aiowsaccomcoikus) { $uamcoiueqaamsqma = sprintf(__("\45\x73\40\x69\x73\40\141\40\162\x65\161\x75\x69\x72\x65\144\40\x70\x61\162\x61\155\x65\x74\145\162\56", PR__CMN__FOUNDATION), $aiowsaccomcoikus); } else { $uamcoiueqaamsqma = __("\x52\x65\161\165\x69\x72\145\x64\40\160\x61\162\x61\x6d\145\x74\145\x72\163\x20\156\157\x74\x20\160\x61\x73\x73\x65\x64\56", PR__CMN__FOUNDATION); } return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, 400, $icwicymcioeyeyek); } public function gosmqcmmomkqwmis($uamcoiueqaamsqma, int $iueymcwwscwqkiyq = 403, array $icwicymcioeyeyek = []) : WP_Error { $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gmqckgyqkacaqaug($iueymcwwscwqkiyq); $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($icwicymcioeyeyek, [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); $iswcokucwmiosiaq = new WP_Error(); if (is_string($uamcoiueqaamsqma)) { $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); } else { if (is_array($uamcoiueqaamsqma)) { foreach ($uamcoiueqaamsqma as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->add($iswcokucwmiosiaq, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $icwicymcioeyeyek); } } else { if (is_wp_error($uamcoiueqaamsqma)) { $iswcokucwmiosiaq = $uamcoiueqaamsqma; } else { if ($uamcoiueqaamsqma instanceof Exception) { $iswcokucwmiosiaq = $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma), $icwicymcioeyeyek); } } } } return $iswcokucwmiosiaq; } public function add($cukqimcsiooqyskq, $ymacoouqwcqwwagu, string $uamcoiueqaamsqma, $icwicymcioeyeyek = '') { if ($cukqimcsiooqyskq instanceof WP_Error) { $cukqimcsiooqyskq->add($ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); } return $cukqimcsiooqyskq; } public function ueiegogoeyqoiewa(?string $uamcoiueqaamsqma = null, array $icwicymcioeyeyek = [], int $gaciecykoqycioyu = 500) : WP_Error { if (!$uamcoiueqaamsqma) { $uamcoiueqaamsqma = __("\x53\157\x72\x72\171\54\40\x74\150\145\x72\x65\40\163\145\x65\155\x73\40\x74\x6f\x20\x62\145\x20\x61\40\160\162\x6f\x62\x6c\x65\155\40\167\x69\x74\150\40\x74\x68\x65\x20\163\x65\x72\x76\145\x72\54\x20\x70\154\145\141\163\145\x20\143\x6f\156\164\141\143\x74\40\165\163\x2e", PR__CMN__FOUNDATION); } return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, $gaciecykoqycioyu, $icwicymcioeyeyek); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d585ed47eb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; use WP_Error; class Error extends Common { public function ywgmqwueaugywcwi($iswcokucwmiosiaq) : array { $ueeagokqmgisgauy = []; if ($iswcokucwmiosiaq instanceof WP_Error) { $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages(); } return $ueeagokqmgisgauy; } public function skekyweyomoqgekq($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) { $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw($this->skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk)); } public function kyacickkomkioeyu($wgaoewqkwgomoaai, bool $cywsuewgaoeygqso = true) : ?string { $uamcoiueqaamsqma = ''; if ($wgaoewqkwgomoaai instanceof Exception) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); if ($cywsuewgaoeygqso) { $ckugsqsomwywoois = $wgaoewqkwgomoaai->getTrace(); $qsmysquqmiwcimqg = ''; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ckugsqsomwywoois as $momcykaoccoymeig => $smgswawakqcsecka) { $qsmysquqmiwcimqg .= $swqimwqeweekeusq->iaaacsuskiakkwui(sprintf("\43\40\45\x73\40\45\163\72\x20\45\x73\40\x2d\x20\45\x73\x3a\x25\163", $momcykaoccoymeig - 1, $smgswawakqcsecka["\x66\x69\154\x65"] ?? '', $smgswawakqcsecka["\154\x69\156\x65"] ?? '', $smgswawakqcsecka["\x63\x6c\141\x73\163"] ?? '', $smgswawakqcsecka["\x66\x75\x6e\x63\164\x69\x6f\x6e"] ?? '')) . "\x3c\142\162\76"; } $uamcoiueqaamsqma .= $qsmysquqmiwcimqg; } } return $uamcoiueqaamsqma; } public function sacmkccceuywoqsq($iswcokucwmiosiaq) : array { $wumguikkgaigkoee = []; if (is_wp_error($iswcokucwmiosiaq)) { foreach ($iswcokucwmiosiaq->get_error_codes() as $ymacoouqwcqwwagu) { $wumguikkgaigkoee[$ymacoouqwcqwwagu] = $iswcokucwmiosiaq->get_error_message($ymacoouqwcqwwagu); } } else { if (is_string($iswcokucwmiosiaq)) { $wumguikkgaigkoee[] = $iswcokucwmiosiaq; } else { if (is_array($iswcokucwmiosiaq)) { $wumguikkgaigkoee = $iswcokucwmiosiaq; } } } return $wumguikkgaigkoee; } public function skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) : ?string { if ($iswcokucwmiosiaq instanceof WP_Error) { $iswcokucwmiosiaq = $this->ywgmqwueaugywcwi($iswcokucwmiosiaq); } else { if ($iswcokucwmiosiaq instanceof Exception) { $iswcokucwmiosiaq = $this->kyacickkomkioeyu($iswcokucwmiosiaq); } } if (is_array($iswcokucwmiosiaq)) { $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq); } else { $uamcoiueqaamsqma = $iswcokucwmiosiaq; } if ($wamcomkuwysqgwgk) { $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma); } return $uamcoiueqaamsqma; } public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null) { throw new RuntimeException($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk); } public function cackyykusuowuiwg(?string $aiowsaccomcoikus = null, array $icwicymcioeyeyek = []) : WP_Error { if ($aiowsaccomcoikus) { $uamcoiueqaamsqma = sprintf(__("\45\163\x20\x69\163\x20\141\40\162\145\161\165\x69\162\x65\x64\x20\x70\x61\162\x61\x6d\145\x74\x65\x72\x2e", PR__CMN__FOUNDATION), $aiowsaccomcoikus); } else { $uamcoiueqaamsqma = __("\x52\x65\x71\x75\151\x72\145\144\x20\160\x61\162\x61\155\145\x74\145\x72\x73\40\x6e\157\164\40\160\x61\163\163\x65\144\x2e", PR__CMN__FOUNDATION); } return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, 400, $icwicymcioeyeyek); } public function gosmqcmmomkqwmis($uamcoiueqaamsqma, int $iueymcwwscwqkiyq = 403, array $icwicymcioeyeyek = []) : WP_Error { $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gmqckgyqkacaqaug($iueymcwwscwqkiyq); $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($icwicymcioeyeyek, [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); $iswcokucwmiosiaq = new WP_Error(); if (is_string($uamcoiueqaamsqma)) { $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); } else { if (is_array($uamcoiueqaamsqma)) { foreach ($uamcoiueqaamsqma as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->add($iswcokucwmiosiaq, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $icwicymcioeyeyek); } } else { if (is_wp_error($uamcoiueqaamsqma)) { $iswcokucwmiosiaq = $uamcoiueqaamsqma; } else { if ($uamcoiueqaamsqma instanceof Exception) { $iswcokucwmiosiaq = $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma), $icwicymcioeyeyek); } } } } return $iswcokucwmiosiaq; } public function add($cukqimcsiooqyskq, $ymacoouqwcqwwagu, string $uamcoiueqaamsqma, $icwicymcioeyeyek = '') { if ($cukqimcsiooqyskq instanceof WP_Error) { $cukqimcsiooqyskq->add($ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); } return $cukqimcsiooqyskq; } public function ueiegogoeyqoiewa(?string $uamcoiueqaamsqma = null, array $icwicymcioeyeyek = [], int $gaciecykoqycioyu = 500) : WP_Error { if (!$uamcoiueqaamsqma) { $uamcoiueqaamsqma = __("\123\x6f\162\162\171\54\x20\164\x68\145\162\x65\x20\163\x65\145\x6d\163\40\164\157\40\142\x65\40\141\40\x70\162\157\142\154\x65\155\x20\x77\151\164\150\40\x74\x68\x65\40\163\145\x72\166\x65\162\54\40\x70\x6c\145\x61\x73\145\40\143\x6f\x6e\x74\x61\143\164\40\x75\163\x2e", PR__CMN__FOUNDATION); } return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, $gaciecykoqycioyu, $icwicymcioeyeyek); } }

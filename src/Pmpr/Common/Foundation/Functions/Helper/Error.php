<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d01ba572bba             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; use WP_Error; class Error extends Common { public function ywgmqwueaugywcwi($iswcokucwmiosiaq) : array { $ueeagokqmgisgauy = []; if ($iswcokucwmiosiaq instanceof WP_Error) { $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages(); } return $ueeagokqmgisgauy; } public function skekyweyomoqgekq($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) { $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw($this->skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk)); } public function kyacickkomkioeyu($wgaoewqkwgomoaai, bool $cywsuewgaoeygqso = false) : ?string { $uamcoiueqaamsqma = ''; if ($wgaoewqkwgomoaai instanceof Exception) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); if ($cywsuewgaoeygqso) { $ckugsqsomwywoois = $wgaoewqkwgomoaai->getTrace(); $qsmysquqmiwcimqg = ''; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ckugsqsomwywoois as $momcykaoccoymeig => $smgswawakqcsecka) { $qsmysquqmiwcimqg .= $swqimwqeweekeusq->iaaacsuskiakkwui(sprintf('# %s %s: %s - %s:%s', $momcykaoccoymeig - 1, $smgswawakqcsecka['file'] ?? '', $smgswawakqcsecka['line'] ?? '', $smgswawakqcsecka['class'] ?? '', $smgswawakqcsecka['function'] ?? '')) . '<br>'; } $uamcoiueqaamsqma .= $qsmysquqmiwcimqg; } } return $uamcoiueqaamsqma; } public function sacmkccceuywoqsq($iswcokucwmiosiaq) : array { $wumguikkgaigkoee = []; if (is_wp_error($iswcokucwmiosiaq)) { foreach ($iswcokucwmiosiaq->get_error_codes() as $ymacoouqwcqwwagu) { $wumguikkgaigkoee[$ymacoouqwcqwwagu] = $iswcokucwmiosiaq->get_error_message($ymacoouqwcqwwagu); } } else { if (is_string($iswcokucwmiosiaq)) { $wumguikkgaigkoee[] = $iswcokucwmiosiaq; } else { if (is_array($iswcokucwmiosiaq)) { $wumguikkgaigkoee = $iswcokucwmiosiaq; } } } return $wumguikkgaigkoee; } public function skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null, bool $cywsuewgaoeygqso = false) : ?string { if ($iswcokucwmiosiaq instanceof WP_Error) { $iswcokucwmiosiaq = $this->ywgmqwueaugywcwi($iswcokucwmiosiaq); } else { if ($iswcokucwmiosiaq instanceof Exception) { $iswcokucwmiosiaq = $this->kyacickkomkioeyu($iswcokucwmiosiaq, $cywsuewgaoeygqso); } } if (is_array($iswcokucwmiosiaq)) { $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq); } else { if (is_string($iswcokucwmiosiaq)) { $uamcoiueqaamsqma = $iswcokucwmiosiaq; } else { $uamcoiueqaamsqma = ''; } } if ($wamcomkuwysqgwgk) { $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma); } return $uamcoiueqaamsqma; } public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null) { throw new RuntimeException($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk); } public function cackyykusuowuiwg(?string $aiowsaccomcoikus = null, array $icwicymcioeyeyek = []) : WP_Error { if ($aiowsaccomcoikus) { $uamcoiueqaamsqma = sprintf(__('%s is a required parameter.', PR__CMN__FOUNDATION), $aiowsaccomcoikus); } else { $uamcoiueqaamsqma = __('Required parameters not passed.', PR__CMN__FOUNDATION); } return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, 400, $icwicymcioeyeyek); } public function gosmqcmmomkqwmis($uamcoiueqaamsqma, int $iueymcwwscwqkiyq = 403, array $icwicymcioeyeyek = []) : WP_Error { $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gmqckgyqkacaqaug($iueymcwwscwqkiyq); $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($icwicymcioeyeyek, [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); $iswcokucwmiosiaq = new WP_Error(); if (is_string($uamcoiueqaamsqma)) { $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); } else { if (is_array($uamcoiueqaamsqma)) { foreach ($uamcoiueqaamsqma as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->add($iswcokucwmiosiaq, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $icwicymcioeyeyek); } } else { if (is_wp_error($uamcoiueqaamsqma)) { $iswcokucwmiosiaq = $uamcoiueqaamsqma; } else { if ($uamcoiueqaamsqma instanceof Exception) { $iswcokucwmiosiaq = $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma), $icwicymcioeyeyek); } } } } return $iswcokucwmiosiaq; } public function add($cukqimcsiooqyskq, $ymacoouqwcqwwagu, string $uamcoiueqaamsqma, $icwicymcioeyeyek = '') { if ($cukqimcsiooqyskq instanceof WP_Error) { $cukqimcsiooqyskq->add($ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); } return $cukqimcsiooqyskq; } public function ueiegogoeyqoiewa(?string $uamcoiueqaamsqma = null, array $icwicymcioeyeyek = [], int $gaciecykoqycioyu = 500) : WP_Error { if (!$uamcoiueqaamsqma) { $uamcoiueqaamsqma = __('Sorry, there seems to be a problem with the server, please contact us.', PR__CMN__FOUNDATION); } return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, $gaciecykoqycioyu, $icwicymcioeyeyek); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a5b5520cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; use WP_Error; class Error extends Common { public function ywgmqwueaugywcwi($iswcokucwmiosiaq) : array { $ueeagokqmgisgauy = []; if (!$iswcokucwmiosiaq instanceof WP_Error) { goto wioguogamqaikqqy; } $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages(); wioguogamqaikqqy: return $ueeagokqmgisgauy; } public function skekyweyomoqgekq($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) { $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw($this->skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk)); } public function kyacickkomkioeyu($wgaoewqkwgomoaai, bool $cywsuewgaoeygqso = true) : ?string { $uamcoiueqaamsqma = ''; if (!$wgaoewqkwgomoaai instanceof Exception) { goto uwaoaysiccasmygw; } $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); if (!$cywsuewgaoeygqso) { goto kyayieiyyyqgkcyc; } $ckugsqsomwywoois = $wgaoewqkwgomoaai->getTrace(); $qsmysquqmiwcimqg = ''; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ckugsqsomwywoois as $momcykaoccoymeig => $smgswawakqcsecka) { $qsmysquqmiwcimqg .= $swqimwqeweekeusq->iaaacsuskiakkwui(sprintf("\43\x20\45\x73\40\x25\163\72\40\45\x73\40\x2d\40\x25\163\x3a\45\163", $momcykaoccoymeig - 1, $smgswawakqcsecka["\x66\151\x6c\145"] ?? '', $smgswawakqcsecka["\154\x69\x6e\x65"] ?? '', $smgswawakqcsecka["\143\x6c\x61\163\163"] ?? '', $smgswawakqcsecka["\146\x75\156\143\x74\x69\157\156"] ?? '')) . "\74\x62\162\76"; wmgigiqsosicakwu: } aiaagscmgeyuqaky: $uamcoiueqaamsqma .= $qsmysquqmiwcimqg; kyayieiyyyqgkcyc: uwaoaysiccasmygw: return $uamcoiueqaamsqma; } public function skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) : ?string { if ($iswcokucwmiosiaq instanceof WP_Error) { goto iquwggoqmwgkouio; } if (!$iswcokucwmiosiaq instanceof Exception) { goto okccyiwkococowmi; } $iswcokucwmiosiaq = $this->kyacickkomkioeyu($iswcokucwmiosiaq); okccyiwkococowmi: goto aumkeyeqwqukcyqm; iquwggoqmwgkouio: $iswcokucwmiosiaq = $this->ywgmqwueaugywcwi($iswcokucwmiosiaq); aumkeyeqwqukcyqm: if (is_array($iswcokucwmiosiaq)) { goto moaqsaoasisemagk; } $uamcoiueqaamsqma = $iswcokucwmiosiaq; goto fauegywkmasowmki; moaqsaoasisemagk: $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq); fauegywkmasowmki: if (!$wamcomkuwysqgwgk) { goto sgggogwmywukuwoq; } $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma); sgggogwmywukuwoq: return $uamcoiueqaamsqma; } public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null) { throw new RuntimeException($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk); } public function cackyykusuowuiwg(?string $aiowsaccomcoikus = null, array $icwicymcioeyeyek = []) : WP_Error { if ($aiowsaccomcoikus) { goto bkusemkaeowgcggg; } $uamcoiueqaamsqma = __("\x52\145\x71\165\x69\x72\145\x64\x20\160\141\162\141\155\x65\164\x65\x72\x73\x20\x6e\157\164\40\x70\x61\163\x73\x65\144\56", PR__CMN__FOUNDATION); goto acwgyguyoswiiayo; bkusemkaeowgcggg: $uamcoiueqaamsqma = sprintf(__("\x25\163\x20\x69\x73\40\x61\x20\x72\145\161\x75\x69\x72\145\144\x20\160\x61\x72\x61\155\x65\x74\x65\x72\56", PR__CMN__FOUNDATION), $aiowsaccomcoikus); acwgyguyoswiiayo: return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, 400, $icwicymcioeyeyek); } public function gosmqcmmomkqwmis($uamcoiueqaamsqma, int $iueymcwwscwqkiyq = 403, array $icwicymcioeyeyek = []) : WP_Error { $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gmqckgyqkacaqaug($iueymcwwscwqkiyq); $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($icwicymcioeyeyek, [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); $iswcokucwmiosiaq = new WP_Error(); if (is_string($uamcoiueqaamsqma)) { goto wecqaqqeqaiwuqmc; } if (is_array($uamcoiueqaamsqma)) { goto akgikwguwgmkickm; } if (is_wp_error($uamcoiueqaamsqma)) { goto gkaauyqyceyeasym; } if (!$uamcoiueqaamsqma instanceof Exception) { goto aosqacyissiuywmy; } $iswcokucwmiosiaq = $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma), $icwicymcioeyeyek); aosqacyissiuywmy: goto iyiogqckuesmwgsi; gkaauyqyceyeasym: $iswcokucwmiosiaq = $uamcoiueqaamsqma; iyiogqckuesmwgsi: goto eickccugyqkeaqqs; akgikwguwgmkickm: foreach ($uamcoiueqaamsqma as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->add($iswcokucwmiosiaq, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $icwicymcioeyeyek); lsgwaumeuqgqgykm: } oqqsaycukyyqkwwa: eickccugyqkeaqqs: goto koayqokgokmcaeou; wecqaqqeqaiwuqmc: $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); koayqokgokmcaeou: return $iswcokucwmiosiaq; } public function add($cukqimcsiooqyskq, $ymacoouqwcqwwagu, string $uamcoiueqaamsqma, $icwicymcioeyeyek = '') { if (!$cukqimcsiooqyskq instanceof WP_Error) { goto owgquegaygweeuwq; } $cukqimcsiooqyskq->add($ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); owgquegaygweeuwq: return $cukqimcsiooqyskq; } public function ueiegogoeyqoiewa(?string $uamcoiueqaamsqma = null, array $icwicymcioeyeyek = [], int $gaciecykoqycioyu = 500) : WP_Error { if ($uamcoiueqaamsqma) { goto mkeikioeqcuumiga; } $uamcoiueqaamsqma = __("\x53\157\x72\x72\x79\54\40\164\x68\x65\162\x65\x20\163\145\145\x6d\163\x20\x74\157\x20\142\145\x20\141\x20\160\162\157\142\x6c\145\x6d\x20\x77\x69\164\150\40\x74\x68\145\40\x73\145\x72\166\145\x72\x2c\x20\x70\154\x65\x61\163\145\x20\143\157\156\x74\x61\x63\164\x20\165\x73\x2e", PR__CMN__FOUNDATION); mkeikioeqcuumiga: return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, $gaciecykoqycioyu, $icwicymcioeyeyek); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae192c055a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; use WP_Error; class Error extends Common { public function ywgmqwueaugywcwi($iswcokucwmiosiaq) : array { $ueeagokqmgisgauy = []; if (!$iswcokucwmiosiaq instanceof WP_Error) { goto wgawqekaeousiwwe; } $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages(); wgawqekaeousiwwe: return $ueeagokqmgisgauy; } public function skekyweyomoqgekq($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) { $this->caokeucsksukesyo()->euekiyuksecoccus()->yqkwsouguwgoywcw($this->skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk)); } public function kyacickkomkioeyu($wgaoewqkwgomoaai, bool $cywsuewgaoeygqso = true) : ?string { $uamcoiueqaamsqma = ''; if (!$wgaoewqkwgomoaai instanceof Exception) { goto ywosowquuuociuio; } $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage(); if (!$cywsuewgaoeygqso) { goto yukceuoyyusqyiak; } $ckugsqsomwywoois = $wgaoewqkwgomoaai->getTrace(); $qsmysquqmiwcimqg = ''; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($ckugsqsomwywoois as $momcykaoccoymeig => $smgswawakqcsecka) { $qsmysquqmiwcimqg .= $swqimwqeweekeusq->iaaacsuskiakkwui(sprintf("\43\x20\x25\x73\40\x25\x73\x3a\x20\x25\163\x20\x2d\x20\45\x73\72\x25\x73", $momcykaoccoymeig - 1, $smgswawakqcsecka["\146\151\154\145"] ?? '', $smgswawakqcsecka["\x6c\151\x6e\x65"] ?? '', $smgswawakqcsecka["\143\x6c\x61\x73\163"] ?? '', $smgswawakqcsecka["\146\165\156\x63\x74\x69\157\156"] ?? '')) . "\x3c\142\162\x3e"; cuwwggakcukcesmy: } oewsmwkmgiiugcie: $uamcoiueqaamsqma .= $qsmysquqmiwcimqg; yukceuoyyusqyiak: ywosowquuuociuio: return $uamcoiueqaamsqma; } public function skauuuoqcaiseuks($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null) : ?string { if ($iswcokucwmiosiaq instanceof WP_Error) { goto eeimccqyqieauwuk; } if (!$iswcokucwmiosiaq instanceof Exception) { goto gesseuyackqsekiy; } $iswcokucwmiosiaq = $this->kyacickkomkioeyu($iswcokucwmiosiaq); gesseuyackqsekiy: goto msqawsuquouuugkc; eeimccqyqieauwuk: $iswcokucwmiosiaq = $this->ywgmqwueaugywcwi($iswcokucwmiosiaq); msqawsuquouuugkc: if (is_array($iswcokucwmiosiaq)) { goto kaacyyeegamkqkak; } $uamcoiueqaamsqma = $iswcokucwmiosiaq; goto uaqeuukkceomqisi; kaacyyeegamkqkak: $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq); uaqeuukkceomqisi: if (!$wamcomkuwysqgwgk) { goto imqikuakumuqamky; } $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma); imqikuakumuqamky: return $uamcoiueqaamsqma; } public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null) { throw new RuntimeException($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk); } public function cackyykusuowuiwg(?string $aiowsaccomcoikus = null, array $icwicymcioeyeyek = []) : WP_Error { if ($aiowsaccomcoikus) { goto myuwuwgiccywkiog; } $uamcoiueqaamsqma = __("\122\145\161\165\x69\162\145\x64\x20\160\141\x72\141\x6d\145\164\x65\162\163\x20\156\157\164\x20\160\x61\x73\163\145\x64\x2e", PR__CMN__FOUNDATION); goto ackiyyoociyuiaio; myuwuwgiccywkiog: $uamcoiueqaamsqma = sprintf(__("\x25\x73\x20\x69\163\40\141\x20\162\145\161\165\x69\162\x65\x64\40\x70\x61\162\x61\x6d\x65\164\145\162\56", PR__CMN__FOUNDATION), $aiowsaccomcoikus); ackiyyoociyuiaio: return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, 400, $icwicymcioeyeyek); } public function gosmqcmmomkqwmis($uamcoiueqaamsqma, int $iueymcwwscwqkiyq = 403, array $icwicymcioeyeyek = []) : WP_Error { $ymacoouqwcqwwagu = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gmqckgyqkacaqaug($iueymcwwscwqkiyq); $icwicymcioeyeyek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($icwicymcioeyeyek, [Constants::ciywsqoeiymemsys => $iueymcwwscwqkiyq]); $iswcokucwmiosiaq = new WP_Error(); if (is_string($uamcoiueqaamsqma)) { goto miuwoyekioyugegk; } if (is_array($uamcoiueqaamsqma)) { goto mmiukekqescmgkie; } if (is_wp_error($uamcoiueqaamsqma)) { goto okgaykwweumwcsyq; } if (!$uamcoiueqaamsqma instanceof Exception) { goto wakwsokmekawssyi; } $iswcokucwmiosiaq = $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma), $icwicymcioeyeyek); wakwsokmekawssyi: goto qwuuagecegiqouig; okgaykwweumwcsyq: $iswcokucwmiosiaq = $uamcoiueqaamsqma; qwuuagecegiqouig: goto agmcywmicucyeiig; mmiukekqescmgkie: foreach ($uamcoiueqaamsqma as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->add($iswcokucwmiosiaq, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $icwicymcioeyeyek); ewgmqmguwukoekoc: } eckksscswgomeoqs: agmcywmicucyeiig: goto uoowsoawqkggioeo; miuwoyekioyugegk: $this->add($iswcokucwmiosiaq, $ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); uoowsoawqkggioeo: return $iswcokucwmiosiaq; } public function add($cukqimcsiooqyskq, $ymacoouqwcqwwagu, string $uamcoiueqaamsqma, $icwicymcioeyeyek = '') { if (!$cukqimcsiooqyskq instanceof WP_Error) { goto lwkkgmcgkowgygcs; } $cukqimcsiooqyskq->add($ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek); lwkkgmcgkowgygcs: return $cukqimcsiooqyskq; } public function ueiegogoeyqoiewa(?string $uamcoiueqaamsqma = null, array $icwicymcioeyeyek = [], int $gaciecykoqycioyu = 500) : WP_Error { if ($uamcoiueqaamsqma) { goto ueyqgegieiwkocck; } $uamcoiueqaamsqma = __("\x53\x6f\162\x72\x79\54\x20\164\x68\x65\x72\x65\40\x73\145\145\x6d\x73\x20\x74\157\x20\x62\145\x20\x61\40\160\162\x6f\x62\x6c\145\x6d\x20\167\x69\164\x68\40\164\150\x65\x20\163\145\162\166\145\x72\x2c\40\160\x6c\145\x61\163\x65\40\143\x6f\x6e\x74\141\143\x74\40\165\x73\x2e", PR__CMN__FOUNDATION); ueyqgegieiwkocck: return $this->gosmqcmmomkqwmis($uamcoiueqaamsqma, $gaciecykoqycioyu, $icwicymcioeyeyek); } }

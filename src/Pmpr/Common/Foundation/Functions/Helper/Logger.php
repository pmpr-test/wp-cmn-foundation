<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a5b5520cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Monolog\Handler\StreamHandler; use Monolog\Logger as MonologLogger; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; class Logger extends Common { const swmsegkcoseieecu = 200; const kgyucekgwygmaaqo = 400; const ewqeuewgmkawokak = 100; const yuagaackuycqiqyy = 550; const miiqceyggoamcyes = 250; const wsoyicosksecekqq = 300; const wywmaomcqoeeiqww = 500; const kqioueausmouegww = 600; const oiokmgueiyocikwq = "\56\154\x6f\x67"; protected array $channels = []; private function eqosmaiseggiwsqi() : string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::mcmyyuqyqicguccu, ''); } private function oquccoakoiimcoyk() : array { return $this->channels; } private function meyuyyociockkgow($ymqmyyeuycgmigyo) { if (!empty($this->oquccoakoiimcoyk())) { goto yyaeqgumuoaseuiu; } $this->aeywacagikkcgoak("\x64\x65\146\141\165\154\x74", "\144\145\x66\141\x75\154\164"); yyaeqgumuoaseuiu: return $this->oquccoakoiimcoyk()[$ymqmyyeuycgmigyo] ?? false; } private function aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs) : self { try { $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::oiokmgueiyocikwq) . self::oiokmgueiyocikwq; if (!($smaiamkswqkisawm = $this->eqosmaiseggiwsqi())) { goto quokmqgeweiggmag; } $acqcekoeswseswws = $smaiamkswqkisawm . "\57" . $wkcwykowmmmwioqs; if (@file_exists($acqcekoeswseswws)) { goto qiayqwouwmkgkgsa; } @file_put_contents($acqcekoeswseswws, "\x53\164\141\x72\x74\40\114\157\147\40\146\x6f\x72\x3a\40" . $ymqmyyeuycgmigyo . PHP_EOL); qiayqwouwmkgkgsa: if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk(), true)) { goto asokiwyqmawokkeq; } throw new RuntimeException("{$wkcwykowmmmwioqs}\40\143\141\156\x6e\x6f\164\x20\141\144\144\40\164\157\x20\154\x6f\147\147\x65\162\x20\x6c\x69\x73\164\x3a\40\103\x68\x61\156\156\145\154\x20{$ymqmyyeuycgmigyo}\x20\151\163\x20\141\154\162\145\141\x64\171\x20\145\x78\x69\163\164\40\x69\x6e\40\143\150\141\156\x6e\x65\154\x20\x6c\x69\163\x74\56"); goto umyoqguamkcimsci; asokiwyqmawokkeq: $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]); umyoqguamkcimsci: quokmqgeweiggmag: } catch (Exception $wgaoewqkwgomoaai) { wp_die(__("\123\x6f\155\145\x74\150\x69\x6e\147\x20\x69\x73\40\x77\x72\157\156\x67\40\151\x6e\x20\141\144\x64\x43\x68\x61\156\156\x65\x6c\x20\157\156\40\x6c\157\x67\147\x65\x72\x2e", PR__CMN__FOUNDATION)); } return $this; } private function kukckykeywuqakmu($esmqigouaegaycwg) { foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) { $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs); wwuimucgqsyicsoi: } wwoueyigeiukcwes: } private function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string { $qogsmwakwacwqogk = null; $iwcsiuuqeaaaeees = $this->meyuyyociockkgow($ymqmyyeuycgmigyo); if (!$iwcsiuuqeaaaeees instanceof MonologLogger) { goto iukuugggmakeqqwe; } $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers(); if (!$qgysocqcuoqmacuo) { goto qeikaiueqcoiowse; } $umawqwoyymwaicas = $qgysocqcuoqmacuo[0] ?? false; if (!$umawqwoyymwaicas instanceof StreamHandler) { goto mqmeqiyoawukmesi; } $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl(); mqmeqiyoawukmesi: qeikaiueqcoiowse: iukuugggmakeqqwe: return $qogsmwakwacwqogk; } private function add($uamcoiueqaamsqma, $iqaosyayeiuaisqi, array $mgkceomocowocqyo = [], ?string $iwcsiuuqeaaaeees = null) { if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto amaiiayeosswqwmm; } $xwwgygqkqwuaqwsa = MonologLogger::getLevels(); if (!in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa, true)) { goto migcueeaqkeowqmw; } if ($iwcsiuuqeaaaeees) { goto oiycaieiumsmwscm; } $iwcsiuuqeaaaeees = "\x64\x65\x66\141\165\x6c\x74"; oiycaieiumsmwscm: $eawuoscsaksyqwiw = $this->meyuyyociockkgow($iwcsiuuqeaaaeees); if ($eawuoscsaksyqwiw instanceof MonologLogger) { goto aqyucckkqokygkmc; } if (!function_exists("\145\162\162\157\162\x5f\154\x6f\x67")) { goto iuwuwckwayyuyowa; } if (!(!is_array($mgkceomocowocqyo) || !$mgkceomocowocqyo)) { goto meygqsoqsiieysca; } try { $uamcoiueqaamsqma .= "\40\75\76\40" . $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($mgkceomocowocqyo, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (Exception $wgaoewqkwgomoaai) { } meygqsoqsiieysca: $iqaosyayeiuaisqi = strtoupper($iqaosyayeiuaisqi); error_log("\133{$iqaosyayeiuaisqi}\x5d\x3a\x20{$uamcoiueqaamsqma}"); iuwuwckwayyuyowa: goto cuaummwqgqwqeeak; aqyucckkqokygkmc: $iqaosyayeiuaisqi = MonologLogger::getLevelName($iqaosyayeiuaisqi); $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi); if ($iqaosyayeiuaisqi) { goto guiqgcoeisukskww; } $eawuoscsaksyqwiw->debug($uamcoiueqaamsqma, $mgkceomocowocqyo); goto qgogmmwuycacecke; guiqgcoeisukskww: $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo); qgogmmwuycacecke: cuaummwqgqwqeeak: migcueeaqkeowqmw: amaiiayeosswqwmm: } public function iswcokucwmiosiaq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::kgyucekgwygmaaqo, $mgkceomocowocqyo); } public function info(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::swmsegkcoseieecu, $mgkceomocowocqyo); } public function debug(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::ewqeuewgmkawokak, $mgkceomocowocqyo); } public function eumukgqciqgksuiq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::wsoyicosksecekqq, $mgkceomocowocqyo); } }

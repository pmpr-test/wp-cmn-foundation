<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67051cac7bda7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Monolog\Handler\StreamHandler; use Monolog\Logger as MonologLogger; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; class Logger extends Common { const swmsegkcoseieecu = 200; const kgyucekgwygmaaqo = 400; const ewqeuewgmkawokak = 100; const yuagaackuycqiqyy = 550; const miiqceyggoamcyes = 250; const wsoyicosksecekqq = 300; const wywmaomcqoeeiqww = 500; const kqioueausmouegww = 600; const oiokmgueiyocikwq = "\x2e\154\157\147"; protected array $channels = []; private function eqosmaiseggiwsqi() : string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::mcmyyuqyqicguccu, ''); } private function oquccoakoiimcoyk() : array { return $this->channels; } private function meyuyyociockkgow($ymqmyyeuycgmigyo) { if (!empty($this->oquccoakoiimcoyk())) { goto qgoiooayqmqqsiok; } $this->aeywacagikkcgoak("\x64\x65\146\x61\165\x6c\x74", "\x64\x65\146\141\165\x6c\x74"); qgoiooayqmqqsiok: return $this->oquccoakoiimcoyk()[$ymqmyyeuycgmigyo] ?? false; } private function aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs) : self { try { $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::oiokmgueiyocikwq) . self::oiokmgueiyocikwq; if (!($smaiamkswqkisawm = $this->eqosmaiseggiwsqi())) { goto csscmcacoikwsecs; } $acqcekoeswseswws = $smaiamkswqkisawm . "\x2f" . $wkcwykowmmmwioqs; if (@file_exists($acqcekoeswseswws)) { goto qwigomakwmyiwkgo; } @file_put_contents($acqcekoeswseswws, "\x53\x74\x61\162\164\40\x4c\157\147\x20\146\x6f\162\72\40" . $ymqmyyeuycgmigyo . PHP_EOL); qwigomakwmyiwkgo: if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk(), true)) { goto myoicgcuugciueis; } throw new RuntimeException("{$wkcwykowmmmwioqs}\40\143\141\156\x6e\157\x74\x20\x61\144\x64\40\164\157\40\x6c\x6f\x67\x67\145\x72\x20\154\x69\x73\164\x3a\40\x43\x68\141\x6e\156\x65\x6c\40{$ymqmyyeuycgmigyo}\x20\151\163\x20\141\x6c\x72\145\x61\x64\171\40\x65\170\x69\x73\x74\x20\x69\x6e\40\143\x68\x61\x6e\156\145\154\x20\154\151\163\x74\x2e"); goto asmecuqiyyswueqe; myoicgcuugciueis: $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]); asmecuqiyyswueqe: csscmcacoikwsecs: } catch (Exception $wgaoewqkwgomoaai) { wp_die(__("\x53\157\x6d\x65\x74\x68\x69\156\x67\x20\x69\163\40\167\162\x6f\156\x67\40\x69\x6e\40\141\x64\144\103\x68\x61\x6e\x6e\145\x6c\x20\x6f\156\x20\154\x6f\x67\147\x65\162\56", PR__CMN__FOUNDATION)); } return $this; } private function kukckykeywuqakmu($esmqigouaegaycwg) { foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) { $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs); kuicqywysciceggs: } cuykwgmswkskqkyi: } private function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string { $qogsmwakwacwqogk = null; $iwcsiuuqeaaaeees = $this->meyuyyociockkgow($ymqmyyeuycgmigyo); if (!$iwcsiuuqeaaaeees instanceof MonologLogger) { goto eqkauqciwewmgeoi; } $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers(); if (!$qgysocqcuoqmacuo) { goto sciwggaeogcoesiu; } $umawqwoyymwaicas = $qgysocqcuoqmacuo[0] ?? false; if (!$umawqwoyymwaicas instanceof StreamHandler) { goto mkwskuycuyguqqok; } $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl(); mkwskuycuyguqqok: sciwggaeogcoesiu: eqkauqciwewmgeoi: return $qogsmwakwacwqogk; } private function add($uamcoiueqaamsqma, $iqaosyayeiuaisqi, array $mgkceomocowocqyo = [], ?string $iwcsiuuqeaaaeees = null) { if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto ocokwuuquaokmasc; } $xwwgygqkqwuaqwsa = MonologLogger::getLevels(); if (!in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa, true)) { goto cggowoquuiwqkyew; } if ($iwcsiuuqeaaaeees) { goto kwagwqyusyiyoaqs; } $iwcsiuuqeaaaeees = "\144\x65\x66\141\165\x6c\x74"; kwagwqyusyiyoaqs: $eawuoscsaksyqwiw = $this->meyuyyociockkgow($iwcsiuuqeaaaeees); if ($eawuoscsaksyqwiw instanceof MonologLogger) { goto eequksumcoogyoem; } if (!function_exists("\x65\162\x72\x6f\x72\137\154\157\147")) { goto sqiciiuwmykocycc; } if (!(!is_array($mgkceomocowocqyo) || !$mgkceomocowocqyo)) { goto iomcaiwewsawiamu; } try { $uamcoiueqaamsqma .= "\40\75\x3e\40" . $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($mgkceomocowocqyo, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (Exception $wgaoewqkwgomoaai) { } iomcaiwewsawiamu: $iqaosyayeiuaisqi = strtoupper($iqaosyayeiuaisqi); error_log("\133{$iqaosyayeiuaisqi}\x5d\x3a\x20{$uamcoiueqaamsqma}"); sqiciiuwmykocycc: goto uukumskkeggaowck; eequksumcoogyoem: $iqaosyayeiuaisqi = MonologLogger::getLevelName($iqaosyayeiuaisqi); $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi); if ($iqaosyayeiuaisqi) { goto yowsmsiyimmimemc; } $eawuoscsaksyqwiw->debug($uamcoiueqaamsqma, $mgkceomocowocqyo); goto kiqogmwcgcamwiig; yowsmsiyimmimemc: $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo); kiqogmwcgcamwiig: uukumskkeggaowck: cggowoquuiwqkyew: ocokwuuquaokmasc: } public function iswcokucwmiosiaq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::kgyucekgwygmaaqo, $mgkceomocowocqyo); } public function info(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::swmsegkcoseieecu, $mgkceomocowocqyo); } public function debug(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::ewqeuewgmkawokak, $mgkceomocowocqyo); } public function eumukgqciqgksuiq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::wsoyicosksecekqq, $mgkceomocowocqyo); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670598d3a6ee7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Monolog\Handler\StreamHandler; use Monolog\Logger as MonologLogger; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; class Logger extends Common { const swmsegkcoseieecu = 200; const kgyucekgwygmaaqo = 400; const ewqeuewgmkawokak = 100; const yuagaackuycqiqyy = 550; const miiqceyggoamcyes = 250; const wsoyicosksecekqq = 300; const wywmaomcqoeeiqww = 500; const kqioueausmouegww = 600; const oiokmgueiyocikwq = "\56\154\157\147"; protected array $channels = []; private function eqosmaiseggiwsqi() : string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::mcmyyuqyqicguccu, ''); } private function oquccoakoiimcoyk() : array { return $this->channels; } private function meyuyyociockkgow($ymqmyyeuycgmigyo) { if (empty($this->oquccoakoiimcoyk())) { $this->aeywacagikkcgoak("\144\x65\146\141\x75\154\x74", "\144\x65\x66\141\165\x6c\164"); } return $this->oquccoakoiimcoyk()[$ymqmyyeuycgmigyo] ?? false; } private function aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs) : self { try { $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::oiokmgueiyocikwq) . self::oiokmgueiyocikwq; if ($smaiamkswqkisawm = $this->eqosmaiseggiwsqi()) { $acqcekoeswseswws = $smaiamkswqkisawm . "\x2f" . $wkcwykowmmmwioqs; if (!@file_exists($acqcekoeswseswws)) { @file_put_contents($acqcekoeswseswws, "\123\164\141\162\164\40\114\157\x67\x20\x66\x6f\162\72\x20" . $ymqmyyeuycgmigyo . PHP_EOL); } if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk(), true)) { $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]); } else { throw new RuntimeException("{$wkcwykowmmmwioqs}\x20\143\x61\x6e\156\x6f\x74\40\x61\x64\144\x20\x74\x6f\40\x6c\157\147\x67\145\162\x20\154\x69\163\x74\72\40\103\150\x61\156\x6e\145\154\x20{$ymqmyyeuycgmigyo}\40\151\163\x20\141\x6c\x72\145\x61\144\171\40\145\170\151\163\x74\x20\x69\x6e\40\143\150\x61\156\x6e\x65\154\x20\154\x69\163\x74\56"); } } } catch (Exception $wgaoewqkwgomoaai) { wp_die(__("\123\157\155\x65\x74\x68\x69\156\x67\40\x69\x73\x20\167\x72\x6f\156\147\40\x69\x6e\x20\x61\144\144\103\150\141\x6e\156\x65\154\40\x6f\x6e\40\x6c\157\147\147\x65\x72\x2e", PR__CMN__FOUNDATION)); } return $this; } private function kukckykeywuqakmu($esmqigouaegaycwg) { foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) { $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs); } } private function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string { $qogsmwakwacwqogk = null; $iwcsiuuqeaaaeees = $this->meyuyyociockkgow($ymqmyyeuycgmigyo); if ($iwcsiuuqeaaaeees instanceof MonologLogger) { $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers(); if ($qgysocqcuoqmacuo) { $umawqwoyymwaicas = $qgysocqcuoqmacuo[0] ?? false; if ($umawqwoyymwaicas instanceof StreamHandler) { $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl(); } } } return $qogsmwakwacwqogk; } private function add($uamcoiueqaamsqma, $iqaosyayeiuaisqi, array $mgkceomocowocqyo = [], ?string $iwcsiuuqeaaaeees = null) { if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { $xwwgygqkqwuaqwsa = MonologLogger::getLevels(); if (in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa, true)) { if (!$iwcsiuuqeaaaeees) { $iwcsiuuqeaaaeees = "\x64\145\146\141\x75\x6c\x74"; } $eawuoscsaksyqwiw = $this->meyuyyociockkgow($iwcsiuuqeaaaeees); if ($eawuoscsaksyqwiw instanceof MonologLogger) { $iqaosyayeiuaisqi = MonologLogger::getLevelName($iqaosyayeiuaisqi); $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi); if ($iqaosyayeiuaisqi) { $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo); } else { $eawuoscsaksyqwiw->debug($uamcoiueqaamsqma, $mgkceomocowocqyo); } } else { if (function_exists("\145\x72\162\157\162\137\154\157\x67")) { if (!is_array($mgkceomocowocqyo) || !$mgkceomocowocqyo) { try { $uamcoiueqaamsqma .= "\x20\x3d\76\x20" . $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($mgkceomocowocqyo, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (Exception $wgaoewqkwgomoaai) { } } $iqaosyayeiuaisqi = strtoupper($iqaosyayeiuaisqi); error_log("\x5b{$iqaosyayeiuaisqi}\135\72\40{$uamcoiueqaamsqma}"); } } } } } public function iswcokucwmiosiaq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::kgyucekgwygmaaqo, $mgkceomocowocqyo); } public function info(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::swmsegkcoseieecu, $mgkceomocowocqyo); } public function debug(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::ewqeuewgmkawokak, $mgkceomocowocqyo); } public function eumukgqciqgksuiq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::wsoyicosksecekqq, $mgkceomocowocqyo); } }

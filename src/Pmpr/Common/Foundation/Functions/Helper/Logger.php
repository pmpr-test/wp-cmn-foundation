<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670e3816e1675             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Monolog\Handler\StreamHandler; use Monolog\Logger as MonologLogger; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; class Logger extends Common { const swmsegkcoseieecu = 200; const kgyucekgwygmaaqo = 400; const ewqeuewgmkawokak = 100; const yuagaackuycqiqyy = 550; const miiqceyggoamcyes = 250; const wsoyicosksecekqq = 300; const wywmaomcqoeeiqww = 500; const kqioueausmouegww = 600; const oiokmgueiyocikwq = "\56\x6c\157\x67"; protected array $channels = []; private function eqosmaiseggiwsqi() : string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::mcmyyuqyqicguccu, ''); } private function oquccoakoiimcoyk() : array { return $this->channels; } private function meyuyyociockkgow($ymqmyyeuycgmigyo) { if (empty($this->oquccoakoiimcoyk())) { $this->aeywacagikkcgoak("\144\x65\146\141\x75\x6c\x74", "\x64\x65\146\x61\165\154\164"); } return $this->oquccoakoiimcoyk()[$ymqmyyeuycgmigyo] ?? false; } private function aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs) : self { try { $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::oiokmgueiyocikwq) . self::oiokmgueiyocikwq; if ($smaiamkswqkisawm = $this->eqosmaiseggiwsqi()) { $acqcekoeswseswws = $smaiamkswqkisawm . "\57" . $wkcwykowmmmwioqs; if (!@file_exists($acqcekoeswseswws)) { @file_put_contents($acqcekoeswseswws, "\x53\164\x61\162\x74\x20\114\157\x67\40\146\x6f\162\x3a\x20" . $ymqmyyeuycgmigyo . PHP_EOL); } if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk(), true)) { $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]); } else { throw new RuntimeException("{$wkcwykowmmmwioqs}\40\x63\x61\156\x6e\x6f\164\x20\141\144\x64\x20\164\x6f\x20\154\x6f\x67\x67\145\x72\x20\x6c\151\163\x74\x3a\x20\103\150\x61\156\156\x65\154\40{$ymqmyyeuycgmigyo}\40\x69\163\x20\x61\x6c\x72\145\141\144\171\x20\x65\x78\x69\x73\164\40\x69\x6e\40\143\150\141\x6e\x6e\145\x6c\40\x6c\151\163\x74\x2e"); } } } catch (Exception $wgaoewqkwgomoaai) { wp_die(__("\123\157\155\x65\164\150\151\156\x67\x20\151\163\x20\167\162\157\156\x67\40\x69\156\40\141\144\144\x43\x68\x61\156\x6e\145\x6c\x20\x6f\156\40\x6c\x6f\147\147\x65\x72\x2e", PR__CMN__FOUNDATION)); } return $this; } private function kukckykeywuqakmu($esmqigouaegaycwg) { foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) { $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs); } } private function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string { $qogsmwakwacwqogk = null; $iwcsiuuqeaaaeees = $this->meyuyyociockkgow($ymqmyyeuycgmigyo); if ($iwcsiuuqeaaaeees instanceof MonologLogger) { $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers(); if ($qgysocqcuoqmacuo) { $umawqwoyymwaicas = $qgysocqcuoqmacuo[0] ?? false; if ($umawqwoyymwaicas instanceof StreamHandler) { $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl(); } } } return $qogsmwakwacwqogk; } private function add($uamcoiueqaamsqma, $iqaosyayeiuaisqi, array $mgkceomocowocqyo = [], ?string $iwcsiuuqeaaaeees = null) { if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { $xwwgygqkqwuaqwsa = MonologLogger::getLevels(); if (in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa, true)) { if (!$iwcsiuuqeaaaeees) { $iwcsiuuqeaaaeees = "\x64\x65\146\141\x75\x6c\164"; } $eawuoscsaksyqwiw = $this->meyuyyociockkgow($iwcsiuuqeaaaeees); if ($eawuoscsaksyqwiw instanceof MonologLogger) { $iqaosyayeiuaisqi = MonologLogger::getLevelName($iqaosyayeiuaisqi); $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi); if ($iqaosyayeiuaisqi) { $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo); } else { $eawuoscsaksyqwiw->debug($uamcoiueqaamsqma, $mgkceomocowocqyo); } } else { if (function_exists("\x65\162\162\157\162\x5f\154\x6f\147")) { if (!is_array($mgkceomocowocqyo) || !$mgkceomocowocqyo) { try { $uamcoiueqaamsqma .= "\40\75\x3e\x20" . $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($mgkceomocowocqyo, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (Exception $wgaoewqkwgomoaai) { } } $iqaosyayeiuaisqi = strtoupper($iqaosyayeiuaisqi); error_log("\133{$iqaosyayeiuaisqi}\x5d\x3a\x20{$uamcoiueqaamsqma}"); } } } } } public function iswcokucwmiosiaq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::kgyucekgwygmaaqo, $mgkceomocowocqyo); } public function info(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::swmsegkcoseieecu, $mgkceomocowocqyo); } public function debug(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::ewqeuewgmkawokak, $mgkceomocowocqyo); } public function eumukgqciqgksuiq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::wsoyicosksecekqq, $mgkceomocowocqyo); } }

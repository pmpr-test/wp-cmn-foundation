<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d41721935c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Monolog\Handler\StreamHandler; use Monolog\Logger as MonologLogger; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; class Logger extends Common { const swmsegkcoseieecu = 200; const kgyucekgwygmaaqo = 400; const ewqeuewgmkawokak = 100; const yuagaackuycqiqyy = 550; const miiqceyggoamcyes = 250; const wsoyicosksecekqq = 300; const wywmaomcqoeeiqww = 500; const kqioueausmouegww = 600; const oiokmgueiyocikwq = "\56\154\157\147"; protected array $channels = []; private function eqosmaiseggiwsqi() : string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::mcmyyuqyqicguccu, ''); } private function oquccoakoiimcoyk() : array { return $this->channels; } private function meyuyyociockkgow($ymqmyyeuycgmigyo) { if (empty($this->oquccoakoiimcoyk())) { $this->aeywacagikkcgoak("\144\x65\x66\x61\165\154\x74", "\144\145\146\141\x75\154\164"); } return $this->oquccoakoiimcoyk()[$ymqmyyeuycgmigyo] ?? false; } private function aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs) : self { try { $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::oiokmgueiyocikwq) . self::oiokmgueiyocikwq; if ($smaiamkswqkisawm = $this->eqosmaiseggiwsqi()) { $acqcekoeswseswws = $smaiamkswqkisawm . "\57" . $wkcwykowmmmwioqs; if (!@file_exists($acqcekoeswseswws)) { @file_put_contents($acqcekoeswseswws, "\123\164\141\x72\164\x20\114\157\147\x20\146\x6f\162\x3a\x20" . $ymqmyyeuycgmigyo . PHP_EOL); } if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk(), true)) { $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]); } else { throw new RuntimeException("{$wkcwykowmmmwioqs}\40\143\x61\x6e\156\157\x74\40\141\144\x64\x20\x74\x6f\40\154\x6f\x67\147\x65\162\40\x6c\x69\x73\x74\72\40\x43\x68\141\x6e\x6e\145\154\x20{$ymqmyyeuycgmigyo}\x20\151\163\40\141\x6c\162\145\141\x64\x79\40\145\170\151\x73\164\x20\151\x6e\40\143\x68\x61\x6e\156\145\x6c\40\154\x69\163\164\x2e"); } } } catch (Exception $wgaoewqkwgomoaai) { wp_die(__("\123\x6f\155\x65\x74\150\x69\156\147\x20\151\163\40\x77\x72\x6f\x6e\147\x20\x69\x6e\40\x61\x64\144\103\150\x61\156\156\x65\154\40\157\x6e\x20\154\x6f\x67\147\145\x72\56", PR__CMN__FOUNDATION)); } return $this; } private function kukckykeywuqakmu($esmqigouaegaycwg) { foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) { $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs); } } private function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string { $qogsmwakwacwqogk = null; $iwcsiuuqeaaaeees = $this->meyuyyociockkgow($ymqmyyeuycgmigyo); if ($iwcsiuuqeaaaeees instanceof MonologLogger) { $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers(); if ($qgysocqcuoqmacuo) { $umawqwoyymwaicas = $qgysocqcuoqmacuo[0] ?? false; if ($umawqwoyymwaicas instanceof StreamHandler) { $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl(); } } } return $qogsmwakwacwqogk; } private function add($uamcoiueqaamsqma, $iqaosyayeiuaisqi, array $mgkceomocowocqyo = [], ?string $iwcsiuuqeaaaeees = null) { if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { $xwwgygqkqwuaqwsa = MonologLogger::getLevels(); if (in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa, true)) { if (!$iwcsiuuqeaaaeees) { $iwcsiuuqeaaaeees = "\x64\x65\146\141\x75\x6c\164"; } $eawuoscsaksyqwiw = $this->meyuyyociockkgow($iwcsiuuqeaaaeees); if ($eawuoscsaksyqwiw instanceof MonologLogger) { $iqaosyayeiuaisqi = MonologLogger::getLevelName($iqaosyayeiuaisqi); $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi); if ($iqaosyayeiuaisqi) { $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo); } else { $eawuoscsaksyqwiw->debug($uamcoiueqaamsqma, $mgkceomocowocqyo); } } else { if (function_exists("\145\x72\162\157\162\137\154\157\147")) { if (!is_array($mgkceomocowocqyo) || !$mgkceomocowocqyo) { try { $uamcoiueqaamsqma .= "\x20\x3d\x3e\x20" . $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($mgkceomocowocqyo, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (Exception $wgaoewqkwgomoaai) { } } $iqaosyayeiuaisqi = strtoupper($iqaosyayeiuaisqi); error_log("\133{$iqaosyayeiuaisqi}\x5d\72\40{$uamcoiueqaamsqma}"); } } } } } public function iswcokucwmiosiaq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::kgyucekgwygmaaqo, $mgkceomocowocqyo); } public function info(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::swmsegkcoseieecu, $mgkceomocowocqyo); } public function debug(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::ewqeuewgmkawokak, $mgkceomocowocqyo); } public function eumukgqciqgksuiq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::wsoyicosksecekqq, $mgkceomocowocqyo); } }

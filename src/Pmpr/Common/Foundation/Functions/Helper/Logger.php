<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b6ff7ddcde4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Monolog\Handler\StreamHandler; use Monolog\Logger as MonologLogger; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; class Logger extends Common { const swmsegkcoseieecu = 200; const kgyucekgwygmaaqo = 400; const ewqeuewgmkawokak = 100; const yuagaackuycqiqyy = 550; const miiqceyggoamcyes = 250; const wsoyicosksecekqq = 300; const wywmaomcqoeeiqww = 500; const kqioueausmouegww = 600; const oiokmgueiyocikwq = '.log'; protected array $channels = []; private function eqosmaiseggiwsqi() : string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::mcmyyuqyqicguccu, ''); } private function oquccoakoiimcoyk() : array { return $this->channels; } private function meyuyyociockkgow($ymqmyyeuycgmigyo) { if (empty($this->oquccoakoiimcoyk())) { $this->aeywacagikkcgoak('default', 'default'); } return $this->oquccoakoiimcoyk()[$ymqmyyeuycgmigyo] ?? false; } private function aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs) : self { try { $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::oiokmgueiyocikwq) . self::oiokmgueiyocikwq; if ($smaiamkswqkisawm = $this->eqosmaiseggiwsqi()) { $acqcekoeswseswws = $smaiamkswqkisawm . '/' . $wkcwykowmmmwioqs; if (!@file_exists($acqcekoeswseswws)) { @file_put_contents($acqcekoeswseswws, "Start Log for: " . $ymqmyyeuycgmigyo . PHP_EOL); } if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk(), true)) { $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]); } else { throw new RuntimeException("{$wkcwykowmmmwioqs} cannot add to logger list: Channel {$ymqmyyeuycgmigyo} is already exist in channel list."); } } } catch (Exception $wgaoewqkwgomoaai) { wp_die(__('Something is wrong in addChannel on logger.', PR__CMN__FOUNDATION)); } return $this; } private function kukckykeywuqakmu($esmqigouaegaycwg) { foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) { $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs); } } private function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string { $qogsmwakwacwqogk = null; $iwcsiuuqeaaaeees = $this->meyuyyociockkgow($ymqmyyeuycgmigyo); if ($iwcsiuuqeaaaeees instanceof MonologLogger) { $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers(); if ($qgysocqcuoqmacuo) { $umawqwoyymwaicas = $qgysocqcuoqmacuo[0] ?? false; if ($umawqwoyymwaicas instanceof StreamHandler) { $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl(); } } } return $qogsmwakwacwqogk; } private function add($uamcoiueqaamsqma, $iqaosyayeiuaisqi, array $mgkceomocowocqyo = [], ?string $iwcsiuuqeaaaeees = null) { if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { if (!is_string($uamcoiueqaamsqma)) { $uamcoiueqaamsqma = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma); } $xwwgygqkqwuaqwsa = MonologLogger::getLevels(); if (in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa, true)) { if (!$iwcsiuuqeaaaeees) { $iwcsiuuqeaaaeees = 'default'; } $eawuoscsaksyqwiw = $this->meyuyyociockkgow($iwcsiuuqeaaaeees); if ($eawuoscsaksyqwiw instanceof MonologLogger) { $iqaosyayeiuaisqi = MonologLogger::getLevelName($iqaosyayeiuaisqi); $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi); if ($iqaosyayeiuaisqi) { $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo); } else { $eawuoscsaksyqwiw->debug($uamcoiueqaamsqma, $mgkceomocowocqyo); } } else { if (function_exists('error_log')) { if (!is_array($mgkceomocowocqyo) || !$mgkceomocowocqyo) { try { $uamcoiueqaamsqma .= ' => ' . $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($mgkceomocowocqyo, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (Exception $wgaoewqkwgomoaai) { } } $iqaosyayeiuaisqi = strtoupper($iqaosyayeiuaisqi); error_log("[{$iqaosyayeiuaisqi}]: {$uamcoiueqaamsqma}"); } } } } } public function iswcokucwmiosiaq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::kgyucekgwygmaaqo, $mgkceomocowocqyo); } public function info(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::swmsegkcoseieecu, $mgkceomocowocqyo); } public function debug(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::ewqeuewgmkawokak, $mgkceomocowocqyo); } public function eumukgqciqgksuiq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::wsoyicosksecekqq, $mgkceomocowocqyo); } }

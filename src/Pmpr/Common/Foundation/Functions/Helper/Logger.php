<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c61c8485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Monolog\Handler\StreamHandler; use Monolog\Logger as MonologLogger; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; class Logger extends Common { const swmsegkcoseieecu = 200; const kgyucekgwygmaaqo = 400; const ewqeuewgmkawokak = 100; const yuagaackuycqiqyy = 550; const miiqceyggoamcyes = 250; const wsoyicosksecekqq = 300; const wywmaomcqoeeiqww = 500; const kqioueausmouegww = 600; const oiokmgueiyocikwq = "\x2e\154\157\147"; protected array $channels = []; private function eqosmaiseggiwsqi() : string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::mcmyyuqyqicguccu, ''); } private function oquccoakoiimcoyk() : array { return $this->channels; } private function meyuyyociockkgow($ymqmyyeuycgmigyo) { if (!empty($this->oquccoakoiimcoyk())) { goto useqkkasoyuoecio; } $this->aeywacagikkcgoak("\x64\145\x66\141\165\154\x74", "\x64\145\146\141\x75\x6c\x74"); useqkkasoyuoecio: return $this->oquccoakoiimcoyk()[$ymqmyyeuycgmigyo] ?? false; } private function aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs) : self { try { $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::oiokmgueiyocikwq) . self::oiokmgueiyocikwq; if (!($smaiamkswqkisawm = $this->eqosmaiseggiwsqi())) { goto smwyssciamywmcwc; } $acqcekoeswseswws = $smaiamkswqkisawm . "\57" . $wkcwykowmmmwioqs; if (@file_exists($acqcekoeswseswws)) { goto kemqmaqgsgueoaye; } @file_put_contents($acqcekoeswseswws, "\123\164\x61\162\x74\x20\114\x6f\147\x20\146\x6f\162\72\40" . $ymqmyyeuycgmigyo . PHP_EOL); kemqmaqgsgueoaye: if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk(), true)) { goto wccugoogysmyisqe; } throw new RuntimeException("{$wkcwykowmmmwioqs}\40\143\141\156\x6e\x6f\164\40\141\x64\x64\40\x74\x6f\x20\154\x6f\x67\147\145\162\x20\154\151\x73\164\72\x20\103\x68\x61\156\156\x65\154\x20{$ymqmyyeuycgmigyo}\x20\151\x73\x20\141\x6c\162\145\x61\144\x79\40\145\170\x69\163\x74\x20\x69\x6e\40\143\150\141\x6e\156\x65\154\x20\154\151\163\164\56"); goto eaqqgoagskioaooo; wccugoogysmyisqe: $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]); eaqqgoagskioaooo: smwyssciamywmcwc: } catch (Exception $wgaoewqkwgomoaai) { wp_die(__("\x53\157\155\145\164\150\151\156\x67\40\151\x73\x20\x77\x72\157\x6e\x67\x20\151\x6e\40\141\144\x64\x43\150\141\x6e\x6e\x65\x6c\x20\x6f\156\40\x6c\157\x67\147\145\162\56", PR__CMN__FOUNDATION)); } return $this; } private function kukckykeywuqakmu($esmqigouaegaycwg) { foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) { $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs); wqekysuysssisica: } ukyauawycqguowmk: } private function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string { $qogsmwakwacwqogk = null; $iwcsiuuqeaaaeees = $this->meyuyyociockkgow($ymqmyyeuycgmigyo); if (!$iwcsiuuqeaaaeees instanceof MonologLogger) { goto wumkcikqsegaceuy; } $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers(); if (!$qgysocqcuoqmacuo) { goto mukimwqesmuuceii; } $umawqwoyymwaicas = $qgysocqcuoqmacuo[0] ?? false; if (!$umawqwoyymwaicas instanceof StreamHandler) { goto gscweoakqmmoeuki; } $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl(); gscweoakqmmoeuki: mukimwqesmuuceii: wumkcikqsegaceuy: return $qogsmwakwacwqogk; } private function add($uamcoiueqaamsqma, $iqaosyayeiuaisqi, array $mgkceomocowocqyo = [], ?string $iwcsiuuqeaaaeees = null) { if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto ykssueyoewywagwk; } $xwwgygqkqwuaqwsa = MonologLogger::getLevels(); if (!in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa, true)) { goto yygceasikmuigagu; } if ($iwcsiuuqeaaaeees) { goto gmmcayeamkkksegg; } $iwcsiuuqeaaaeees = "\144\145\146\141\165\x6c\x74"; gmmcayeamkkksegg: $eawuoscsaksyqwiw = $this->meyuyyociockkgow($iwcsiuuqeaaaeees); if ($eawuoscsaksyqwiw instanceof MonologLogger) { goto yawsicegksimgmco; } if (!function_exists("\x65\x72\162\x6f\162\x5f\154\157\x67")) { goto gmwgckwgwcswwsys; } if (!(!is_array($mgkceomocowocqyo) || !$mgkceomocowocqyo)) { goto kwyqumksiocogsue; } try { $uamcoiueqaamsqma .= "\40\75\x3e\x20" . $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($mgkceomocowocqyo, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (Exception $wgaoewqkwgomoaai) { } kwyqumksiocogsue: $iqaosyayeiuaisqi = strtoupper($iqaosyayeiuaisqi); error_log("\x5b{$iqaosyayeiuaisqi}\135\x3a\x20{$uamcoiueqaamsqma}"); gmwgckwgwcswwsys: goto tawikeiumkmiyomw; yawsicegksimgmco: $iqaosyayeiuaisqi = MonologLogger::getLevelName($iqaosyayeiuaisqi); $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi); if ($iqaosyayeiuaisqi) { goto okyewgwqccwumwew; } $eawuoscsaksyqwiw->debug($uamcoiueqaamsqma, $mgkceomocowocqyo); goto gqkaemugiuqsakac; okyewgwqccwumwew: $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo); gqkaemugiuqsakac: tawikeiumkmiyomw: yygceasikmuigagu: ykssueyoewywagwk: } public function iswcokucwmiosiaq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::kgyucekgwygmaaqo, $mgkceomocowocqyo); } public function info(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::swmsegkcoseieecu, $mgkceomocowocqyo); } public function debug(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::ewqeuewgmkawokak, $mgkceomocowocqyo); } public function eumukgqciqgksuiq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::wsoyicosksecekqq, $mgkceomocowocqyo); } }

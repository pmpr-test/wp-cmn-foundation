<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec064496439             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Monolog\Handler\StreamHandler; use Monolog\Logger as MonologLogger; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; class Logger extends Common { const swmsegkcoseieecu = 200; const kgyucekgwygmaaqo = 400; const ewqeuewgmkawokak = 100; const yuagaackuycqiqyy = 550; const miiqceyggoamcyes = 250; const wsoyicosksecekqq = 300; const wywmaomcqoeeiqww = 500; const kqioueausmouegww = 600; const oiokmgueiyocikwq = "\x2e\x6c\157\x67"; protected array $channels = []; private function eqosmaiseggiwsqi() : string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::mcmyyuqyqicguccu, ''); } private function oquccoakoiimcoyk() : array { return $this->channels; } private function meyuyyociockkgow($ymqmyyeuycgmigyo) { if (!empty($this->oquccoakoiimcoyk())) { goto useqkkasoyuoecio; } $this->aeywacagikkcgoak("\144\x65\x66\x61\165\154\x74", "\144\x65\x66\141\165\x6c\x74"); useqkkasoyuoecio: return $this->oquccoakoiimcoyk()[$ymqmyyeuycgmigyo] ?? false; } private function aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs) : self { try { $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::oiokmgueiyocikwq) . self::oiokmgueiyocikwq; if (!($smaiamkswqkisawm = $this->eqosmaiseggiwsqi())) { goto smwyssciamywmcwc; } $acqcekoeswseswws = $smaiamkswqkisawm . "\x2f" . $wkcwykowmmmwioqs; if (@file_exists($acqcekoeswseswws)) { goto kemqmaqgsgueoaye; } @file_put_contents($acqcekoeswseswws, "\x53\x74\141\x72\164\40\114\x6f\x67\x20\146\157\x72\x3a\x20" . $ymqmyyeuycgmigyo . PHP_EOL); kemqmaqgsgueoaye: if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk(), true)) { goto wccugoogysmyisqe; } throw new RuntimeException("{$wkcwykowmmmwioqs}\x20\x63\141\x6e\x6e\157\164\40\141\x64\x64\40\x74\157\x20\154\157\147\147\x65\x72\40\154\151\x73\x74\x3a\40\103\x68\141\156\156\x65\154\x20{$ymqmyyeuycgmigyo}\40\151\x73\40\141\154\162\145\x61\144\x79\x20\145\x78\151\163\x74\x20\151\156\40\143\150\x61\156\156\x65\154\x20\x6c\x69\163\x74\x2e"); goto eaqqgoagskioaooo; wccugoogysmyisqe: $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]); eaqqgoagskioaooo: smwyssciamywmcwc: } catch (Exception $wgaoewqkwgomoaai) { wp_die(__("\123\x6f\x6d\x65\x74\x68\x69\x6e\147\40\151\163\x20\167\162\157\x6e\147\x20\151\x6e\x20\x61\x64\x64\103\x68\141\x6e\156\x65\154\x20\x6f\156\40\x6c\157\x67\147\x65\162\56", PR__CMN__FOUNDATION)); } return $this; } private function kukckykeywuqakmu($esmqigouaegaycwg) { foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) { $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs); wqekysuysssisica: } ukyauawycqguowmk: } private function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string { $qogsmwakwacwqogk = null; $iwcsiuuqeaaaeees = $this->meyuyyociockkgow($ymqmyyeuycgmigyo); if (!$iwcsiuuqeaaaeees instanceof MonologLogger) { goto wumkcikqsegaceuy; } $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers(); if (!$qgysocqcuoqmacuo) { goto mukimwqesmuuceii; } $umawqwoyymwaicas = $qgysocqcuoqmacuo[0] ?? false; if (!$umawqwoyymwaicas instanceof StreamHandler) { goto gscweoakqmmoeuki; } $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl(); gscweoakqmmoeuki: mukimwqesmuuceii: wumkcikqsegaceuy: return $qogsmwakwacwqogk; } private function add($uamcoiueqaamsqma, $iqaosyayeiuaisqi, array $mgkceomocowocqyo = [], ?string $iwcsiuuqeaaaeees = null) { if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto ykssueyoewywagwk; } $xwwgygqkqwuaqwsa = MonologLogger::getLevels(); if (!in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa, true)) { goto yygceasikmuigagu; } if ($iwcsiuuqeaaaeees) { goto gmmcayeamkkksegg; } $iwcsiuuqeaaaeees = "\144\x65\146\x61\x75\x6c\164"; gmmcayeamkkksegg: $eawuoscsaksyqwiw = $this->meyuyyociockkgow($iwcsiuuqeaaaeees); if ($eawuoscsaksyqwiw instanceof MonologLogger) { goto yawsicegksimgmco; } if (!function_exists("\x65\x72\x72\x6f\x72\137\x6c\x6f\147")) { goto gmwgckwgwcswwsys; } if (!(!is_array($mgkceomocowocqyo) || !$mgkceomocowocqyo)) { goto kwyqumksiocogsue; } try { $uamcoiueqaamsqma .= "\x20\x3d\x3e\40" . $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($mgkceomocowocqyo, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (Exception $wgaoewqkwgomoaai) { } kwyqumksiocogsue: $iqaosyayeiuaisqi = strtoupper($iqaosyayeiuaisqi); error_log("\133{$iqaosyayeiuaisqi}\135\x3a\x20{$uamcoiueqaamsqma}"); gmwgckwgwcswwsys: goto tawikeiumkmiyomw; yawsicegksimgmco: $iqaosyayeiuaisqi = MonologLogger::getLevelName($iqaosyayeiuaisqi); $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi); if ($iqaosyayeiuaisqi) { goto okyewgwqccwumwew; } $eawuoscsaksyqwiw->debug($uamcoiueqaamsqma, $mgkceomocowocqyo); goto gqkaemugiuqsakac; okyewgwqccwumwew: $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo); gqkaemugiuqsakac: tawikeiumkmiyomw: yygceasikmuigagu: ykssueyoewywagwk: } public function iswcokucwmiosiaq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::kgyucekgwygmaaqo, $mgkceomocowocqyo); } public function info(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::swmsegkcoseieecu, $mgkceomocowocqyo); } public function debug(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::ewqeuewgmkawokak, $mgkceomocowocqyo); } public function eumukgqciqgksuiq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::wsoyicosksecekqq, $mgkceomocowocqyo); } }

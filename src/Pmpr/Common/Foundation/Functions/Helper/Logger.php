<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15f5710e7a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Exception; use Monolog\Handler\StreamHandler; use Monolog\Logger as MonologLogger; use Pmpr\Common\Foundation\Interfaces\Constants; use RuntimeException; class Logger extends Common { const swmsegkcoseieecu = 200; const kgyucekgwygmaaqo = 400; const ewqeuewgmkawokak = 100; const yuagaackuycqiqyy = 550; const miiqceyggoamcyes = 250; const wsoyicosksecekqq = 300; const wywmaomcqoeeiqww = 500; const kqioueausmouegww = 600; const oiokmgueiyocikwq = "\x2e\154\157\x67"; protected array $channels = []; private function eqosmaiseggiwsqi() : string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms(Constants::mcmyyuqyqicguccu, ''); } private function oquccoakoiimcoyk() : array { return $this->channels; } private function meyuyyociockkgow($ymqmyyeuycgmigyo) { if (!empty($this->oquccoakoiimcoyk())) { goto iumwukayaosoaois; } $this->aeywacagikkcgoak("\x64\145\x66\x61\165\154\164", "\x64\x65\x66\141\x75\154\164"); iumwukayaosoaois: return $this->oquccoakoiimcoyk()[$ymqmyyeuycgmigyo] ?? false; } private function aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs) : self { try { $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::oiokmgueiyocikwq) . self::oiokmgueiyocikwq; if (!($smaiamkswqkisawm = $this->eqosmaiseggiwsqi())) { goto qqsgiayqyskeisua; } $acqcekoeswseswws = $smaiamkswqkisawm . "\57" . $wkcwykowmmmwioqs; if (@file_exists($acqcekoeswseswws)) { goto smoiwyguceomewwy; } @file_put_contents($acqcekoeswseswws, "\123\x74\141\162\164\x20\114\157\147\40\x66\157\x72\x3a\x20" . $ymqmyyeuycgmigyo . PHP_EOL); smoiwyguceomewwy: if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk(), true)) { goto kkqkiieookquommo; } throw new RuntimeException("{$wkcwykowmmmwioqs}\40\x63\141\156\x6e\x6f\164\40\141\144\x64\x20\164\x6f\x20\x6c\157\x67\x67\x65\x72\40\154\x69\163\164\72\40\x43\150\141\156\156\145\x6c\x20{$ymqmyyeuycgmigyo}\x20\151\163\40\x61\154\162\145\141\x64\x79\x20\145\x78\151\x73\164\40\x69\x6e\x20\143\150\141\156\156\x65\154\x20\154\151\x73\164\56"); goto agiaqmmawekwgsky; kkqkiieookquommo: $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]); agiaqmmawekwgsky: qqsgiayqyskeisua: } catch (Exception $wgaoewqkwgomoaai) { wp_die(__("\x53\157\155\145\x74\x68\x69\x6e\x67\40\x69\163\40\x77\x72\157\156\147\40\x69\x6e\x20\x61\144\144\x43\x68\x61\156\x6e\145\x6c\x20\157\156\40\154\x6f\147\147\x65\x72\56", PR__CMN__FOUNDATION)); } return $this; } private function kukckykeywuqakmu($esmqigouaegaycwg) { foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) { $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs); aiiskmcymwiakkgc: } wugmoiceuaawcoem: } private function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string { $qogsmwakwacwqogk = null; $iwcsiuuqeaaaeees = $this->meyuyyociockkgow($ymqmyyeuycgmigyo); if (!$iwcsiuuqeaaaeees instanceof MonologLogger) { goto esmwwomccacsqywi; } $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers(); if (!$qgysocqcuoqmacuo) { goto cgukcskqwgsmumcy; } $umawqwoyymwaicas = $qgysocqcuoqmacuo[0] ?? false; if (!$umawqwoyymwaicas instanceof StreamHandler) { goto moueuekwquacwkok; } $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl(); moueuekwquacwkok: cgukcskqwgsmumcy: esmwwomccacsqywi: return $qogsmwakwacwqogk; } private function add($uamcoiueqaamsqma, $iqaosyayeiuaisqi, array $mgkceomocowocqyo = [], ?string $iwcsiuuqeaaaeees = null) { if (!$this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { goto qqwiwaamsuyeaymq; } $xwwgygqkqwuaqwsa = MonologLogger::getLevels(); if (!in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa, true)) { goto guqcykekieeiuyoc; } if ($iwcsiuuqeaaaeees) { goto eyecumosyciiiooq; } $iwcsiuuqeaaaeees = "\144\x65\146\141\x75\154\164"; eyecumosyciiiooq: $eawuoscsaksyqwiw = $this->meyuyyociockkgow($iwcsiuuqeaaaeees); if ($eawuoscsaksyqwiw instanceof MonologLogger) { goto umueiqgeckuoywuw; } if (!function_exists("\x65\162\x72\x6f\162\x5f\x6c\157\147")) { goto sciuwmmsmaecigik; } if (!(!is_array($mgkceomocowocqyo) || !$mgkceomocowocqyo)) { goto soqkyegaguykmcso; } try { $uamcoiueqaamsqma .= "\40\x3d\x3e\40" . $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($mgkceomocowocqyo, JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES); } catch (Exception $wgaoewqkwgomoaai) { } soqkyegaguykmcso: $iqaosyayeiuaisqi = strtoupper($iqaosyayeiuaisqi); error_log("\x5b{$iqaosyayeiuaisqi}\x5d\72\x20{$uamcoiueqaamsqma}"); sciuwmmsmaecigik: goto wsyqaoimygmemgay; umueiqgeckuoywuw: $iqaosyayeiuaisqi = MonologLogger::getLevelName($iqaosyayeiuaisqi); $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi); if ($iqaosyayeiuaisqi) { goto kwuiqqycqycswaku; } $eawuoscsaksyqwiw->debug($uamcoiueqaamsqma, $mgkceomocowocqyo); goto eqwqmiawekysseqe; kwuiqqycqycswaku: $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo); eqwqmiawekysseqe: wsyqaoimygmemgay: guqcykekieeiuyoc: qqwiwaamsuyeaymq: } public function iswcokucwmiosiaq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::kgyucekgwygmaaqo, $mgkceomocowocqyo); } public function info(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::swmsegkcoseieecu, $mgkceomocowocqyo); } public function debug(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::ewqeuewgmkawokak, $mgkceomocowocqyo); } public function eumukgqciqgksuiq(?string $uamcoiueqaamsqma, array $mgkceomocowocqyo = []) { $this->add($uamcoiueqaamsqma, self::wsoyicosksecekqq, $mgkceomocowocqyo); } }

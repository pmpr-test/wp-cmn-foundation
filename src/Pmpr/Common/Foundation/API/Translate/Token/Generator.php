<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf5417a8d7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate\Token; class Generator implements GeneratorInterface { private function sccuiosigqguemoq() : array { return ["\x34\60\x36\63\71\70", 561666268 + 1526272306]; } private function siwocasuauacmugc(?int $mmeioagwmyscwumo, ?string $csougakqegqiqsgi) { $cqcuwemuusesmqsq = 0; qsygcycwieukkgwc: if (!($cqcuwemuusesmqsq < strlen($csougakqegqiqsgi) - 2)) { goto wwkgkaecgiwggcck; } $icuyogeyaokmwusi = $csougakqegqiqsgi[$cqcuwemuusesmqsq + 2]; $icuyogeyaokmwusi = "\x61" <= $icuyogeyaokmwusi ? ord($icuyogeyaokmwusi[0]) - 87 : (int) $icuyogeyaokmwusi; $icuyogeyaokmwusi = "\x2b" === $csougakqegqiqsgi[$cqcuwemuusesmqsq + 1] ? $this->ysuauwsgeuswusqc($mmeioagwmyscwumo, $icuyogeyaokmwusi) : $mmeioagwmyscwumo << $icuyogeyaokmwusi; $mmeioagwmyscwumo = "\x2b" === $csougakqegqiqsgi[$cqcuwemuusesmqsq] ? $mmeioagwmyscwumo + $icuyogeyaokmwusi & 4294967295 : $mmeioagwmyscwumo ^ $icuyogeyaokmwusi; umgaesggesswoaqe: $cqcuwemuusesmqsq += 3; goto qsygcycwieukkgwc; wwkgkaecgiwggcck: return $mmeioagwmyscwumo; } private function aeckqwkmqquymouu(?string $ycskuuyucyuqisaq) { $kwkgamuegwgqckyi = mb_convert_encoding($ycskuuyucyuqisaq, "\125\x54\106\x2d\x31\x36\114\105", "\125\x54\x46\x2d\70"); return strlen($kwkgamuegwgqckyi) / 2; } private function ysuauwsgeuswusqc($mmeioagwmyscwumo, $csougakqegqiqsgi) { if (!($csougakqegqiqsgi >= 32 || $csougakqegqiqsgi < -32)) { goto kiwqkcaekqqyuegq; } $gcisockiummsmcag = (int) ($csougakqegqiqsgi / 32); $csougakqegqiqsgi -= $gcisockiummsmcag * 32; kiwqkcaekqqyuegq: if (!($csougakqegqiqsgi < 0)) { goto quwcqmyokicssyew; } $csougakqegqiqsgi = 32 + $csougakqegqiqsgi; quwcqmyokicssyew: if (!($csougakqegqiqsgi == 0)) { goto iqcogmsguwoikame; } return ($mmeioagwmyscwumo >> 1 & 0x7fffffff) * 2 + ($mmeioagwmyscwumo >> $csougakqegqiqsgi & 1); iqcogmsguwoikame: if ($mmeioagwmyscwumo < 0) { goto gimmuoqwckiseaik; } $mmeioagwmyscwumo = $mmeioagwmyscwumo >> $csougakqegqiqsgi; goto cmqucgoewuyieoyk; gimmuoqwckiseaik: $mmeioagwmyscwumo = $mmeioagwmyscwumo >> 1; $mmeioagwmyscwumo &= 2147483647; $mmeioagwmyscwumo |= 0x40000000; $mmeioagwmyscwumo = $mmeioagwmyscwumo >> $csougakqegqiqsgi - 1; cmqucgoewuyieoyk: return $mmeioagwmyscwumo; } private function yqyyeacwyukicaui(string $ycskuuyucyuqisaq, int $momcykaoccoymeig) { $kwkgamuegwgqckyi = mb_convert_encoding($ycskuuyucyuqisaq, "\x55\x54\106\x2d\61\x36\114\105", "\x55\x54\106\x2d\x38"); return ord($kwkgamuegwgqckyi[$momcykaoccoymeig * 2]) + (ord($kwkgamuegwgqckyi[$momcykaoccoymeig * 2 + 1]) << 8); } public function ysyiouymigoigsma(?string $cmwygeyygwqaemaq) : ?string { $qqmscgkgwmwuqwmw = $this->sccuiosigqguemoq(); $csougakqegqiqsgi = $qqmscgkgwmwuqwmw[0]; $icuyogeyaokmwusi = []; $iewosgggaueeyymg = 0; $uuooecoseucuqyag = 0; ssoucoucsgccekwe: if (!($uuooecoseucuqyag < $this->aeckqwkmqquymouu($cmwygeyygwqaemaq))) { goto yqykqysmiquwoasu; } $iemwuweegooaeuuq = $this->yqyyeacwyukicaui($cmwygeyygwqaemaq, $uuooecoseucuqyag); if (128 > $iemwuweegooaeuuq) { goto iggyqogweyosuikc; } if (2048 > $iemwuweegooaeuuq) { goto ygcsmkuycoagwyou; } if (55296 == ($iemwuweegooaeuuq & 64512) && $uuooecoseucuqyag + 1 < $this->aeckqwkmqquymouu($cmwygeyygwqaemaq) && 56320 == ($this->yqyyeacwyukicaui($cmwygeyygwqaemaq, $uuooecoseucuqyag + 1) & 64512)) { goto mosqsmqimqgqoase; } $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 12 | 224; goto omugkkesagcyagmk; mosqsmqimqgqoase: $iemwuweegooaeuuq = 65536 + (($iemwuweegooaeuuq & 1023) << 10) + ($this->yqyyeacwyukicaui($cmwygeyygwqaemaq, ++$uuooecoseucuqyag) & 1023); $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 18 | 240; $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 12 & 63 | 128; omugkkesagcyagmk: $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 6 & 63 | 128; goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 6 | 192; kqksuugcgsyeoayy: $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq & 63 | 128; goto qqewoyookaskiuek; iggyqogweyosuikc: $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq; qqewoyookaskiuek: ayyweymyuuiauamo: $uuooecoseucuqyag++; goto ssoucoucsgccekwe; yqykqysmiquwoasu: $cmwygeyygwqaemaq = $csougakqegqiqsgi; $iewosgggaueeyymg = 0; $wguoskkakasakici = count($icuyogeyaokmwusi); eegqyykygiccaoeo: if (!($iewosgggaueeyymg < $wguoskkakasakici)) { goto qkcyqocqqwmqgqww; } $cmwygeyygwqaemaq += $icuyogeyaokmwusi[$iewosgggaueeyymg]; $cmwygeyygwqaemaq = $this->siwocasuauacmugc($cmwygeyygwqaemaq, "\53\55\x61\x5e\53\x36"); miyqyeiwquwsacsm: $iewosgggaueeyymg++; goto eegqyykygiccaoeo; qkcyqocqqwmqgqww: $cmwygeyygwqaemaq = $this->siwocasuauacmugc($cmwygeyygwqaemaq, "\x2b\x2d\63\x5e\x2b\x62\x2b\55\x66"); $cmwygeyygwqaemaq ^= $qqmscgkgwmwuqwmw[1] ? $qqmscgkgwmwuqwmw[1] + 0 : 0; if (!(0 > $cmwygeyygwqaemaq)) { goto ywqgcegomwaiuquc; } $cmwygeyygwqaemaq = ($cmwygeyygwqaemaq & 2147483647) + 2147483648; ywqgcegomwaiuquc: $cmwygeyygwqaemaq = fmod($cmwygeyygwqaemaq, pow(10, 6)); return $cmwygeyygwqaemaq . "\x2e" . ($cmwygeyygwqaemaq ^ $csougakqegqiqsgi); } }

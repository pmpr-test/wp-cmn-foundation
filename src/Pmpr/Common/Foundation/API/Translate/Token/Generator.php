<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate\Token; class Generator implements GeneratorInterface { private function sccuiosigqguemoq() : array { return ["\64\60\x36\63\x39\x38", 561666268 + 1526272306]; } private function siwocasuauacmugc(?int $mmeioagwmyscwumo, ?string $csougakqegqiqsgi) { $cqcuwemuusesmqsq = 0; quwcqmyokicssyew: if (!($cqcuwemuusesmqsq < strlen($csougakqegqiqsgi) - 2)) { goto qsygcycwieukkgwc; } $icuyogeyaokmwusi = $csougakqegqiqsgi[$cqcuwemuusesmqsq + 2]; $icuyogeyaokmwusi = "\x61" <= $icuyogeyaokmwusi ? ord($icuyogeyaokmwusi[0]) - 87 : (int) $icuyogeyaokmwusi; $icuyogeyaokmwusi = "\53" === $csougakqegqiqsgi[$cqcuwemuusesmqsq + 1] ? $this->ysuauwsgeuswusqc($mmeioagwmyscwumo, $icuyogeyaokmwusi) : $mmeioagwmyscwumo << $icuyogeyaokmwusi; $mmeioagwmyscwumo = "\x2b" === $csougakqegqiqsgi[$cqcuwemuusesmqsq] ? $mmeioagwmyscwumo + $icuyogeyaokmwusi & 4294967295 : $mmeioagwmyscwumo ^ $icuyogeyaokmwusi; kiwqkcaekqqyuegq: $cqcuwemuusesmqsq += 3; goto quwcqmyokicssyew; qsygcycwieukkgwc: return $mmeioagwmyscwumo; } private function aeckqwkmqquymouu(?string $ycskuuyucyuqisaq) { $kwkgamuegwgqckyi = mb_convert_encoding($ycskuuyucyuqisaq, "\125\124\x46\55\x31\66\x4c\105", "\x55\124\x46\55\x38"); return strlen($kwkgamuegwgqckyi) / 2; } private function ysuauwsgeuswusqc($mmeioagwmyscwumo, $csougakqegqiqsgi) { if (!($csougakqegqiqsgi >= 32 || $csougakqegqiqsgi < -32)) { goto iqcogmsguwoikame; } $gcisockiummsmcag = (int) ($csougakqegqiqsgi / 32); $csougakqegqiqsgi -= $gcisockiummsmcag * 32; iqcogmsguwoikame: if (!($csougakqegqiqsgi < 0)) { goto gimmuoqwckiseaik; } $csougakqegqiqsgi = 32 + $csougakqegqiqsgi; gimmuoqwckiseaik: if (!($csougakqegqiqsgi == 0)) { goto cmqucgoewuyieoyk; } return ($mmeioagwmyscwumo >> 1 & 0x7fffffff) * 2 + ($mmeioagwmyscwumo >> $csougakqegqiqsgi & 1); cmqucgoewuyieoyk: if ($mmeioagwmyscwumo < 0) { goto yqykqysmiquwoasu; } $mmeioagwmyscwumo = $mmeioagwmyscwumo >> $csougakqegqiqsgi; goto ayyweymyuuiauamo; yqykqysmiquwoasu: $mmeioagwmyscwumo = $mmeioagwmyscwumo >> 1; $mmeioagwmyscwumo &= 2147483647; $mmeioagwmyscwumo |= 0x40000000; $mmeioagwmyscwumo = $mmeioagwmyscwumo >> $csougakqegqiqsgi - 1; ayyweymyuuiauamo: return $mmeioagwmyscwumo; } private function yqyyeacwyukicaui(string $ycskuuyucyuqisaq, int $momcykaoccoymeig) { $kwkgamuegwgqckyi = mb_convert_encoding($ycskuuyucyuqisaq, "\125\124\x46\55\61\x36\x4c\105", "\x55\124\106\55\70"); return ord($kwkgamuegwgqckyi[$momcykaoccoymeig * 2]) + (ord($kwkgamuegwgqckyi[$momcykaoccoymeig * 2 + 1]) << 8); } public function ysyiouymigoigsma(?string $cmwygeyygwqaemaq) : ?string { $qqmscgkgwmwuqwmw = $this->sccuiosigqguemoq(); $csougakqegqiqsgi = $qqmscgkgwmwuqwmw[0]; $icuyogeyaokmwusi = []; $iewosgggaueeyymg = 0; $uuooecoseucuqyag = 0; miyqyeiwquwsacsm: if (!($uuooecoseucuqyag < $this->aeckqwkmqquymouu($cmwygeyygwqaemaq))) { goto mosqsmqimqgqoase; } $iemwuweegooaeuuq = $this->yqyyeacwyukicaui($cmwygeyygwqaemaq, $uuooecoseucuqyag); if (128 > $iemwuweegooaeuuq) { goto ssoucoucsgccekwe; } if (2048 > $iemwuweegooaeuuq) { goto iggyqogweyosuikc; } if (55296 == ($iemwuweegooaeuuq & 64512) && $uuooecoseucuqyag + 1 < $this->aeckqwkmqquymouu($cmwygeyygwqaemaq) && 56320 == ($this->yqyyeacwyukicaui($cmwygeyygwqaemaq, $uuooecoseucuqyag + 1) & 64512)) { goto ygcsmkuycoagwyou; } $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 12 | 224; goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $iemwuweegooaeuuq = 65536 + (($iemwuweegooaeuuq & 1023) << 10) + ($this->yqyyeacwyukicaui($cmwygeyygwqaemaq, ++$uuooecoseucuqyag) & 1023); $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 18 | 240; $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 12 & 63 | 128; kqksuugcgsyeoayy: $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 6 & 63 | 128; goto qqewoyookaskiuek; iggyqogweyosuikc: $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 6 | 192; qqewoyookaskiuek: $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq & 63 | 128; goto qkcyqocqqwmqgqww; ssoucoucsgccekwe: $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq; qkcyqocqqwmqgqww: omugkkesagcyagmk: $uuooecoseucuqyag++; goto miyqyeiwquwsacsm; mosqsmqimqgqoase: $cmwygeyygwqaemaq = $csougakqegqiqsgi; $iewosgggaueeyymg = 0; $wguoskkakasakici = count($icuyogeyaokmwusi); wmmggowmigekyoso: if (!($iewosgggaueeyymg < $wguoskkakasakici)) { goto eegqyykygiccaoeo; } $cmwygeyygwqaemaq += $icuyogeyaokmwusi[$iewosgggaueeyymg]; $cmwygeyygwqaemaq = $this->siwocasuauacmugc($cmwygeyygwqaemaq, "\53\55\x61\x5e\53\x36"); ywqgcegomwaiuquc: $iewosgggaueeyymg++; goto wmmggowmigekyoso; eegqyykygiccaoeo: $cmwygeyygwqaemaq = $this->siwocasuauacmugc($cmwygeyygwqaemaq, "\53\x2d\x33\136\53\x62\53\55\x66"); $cmwygeyygwqaemaq ^= $qqmscgkgwmwuqwmw[1] ? $qqmscgkgwmwuqwmw[1] + 0 : 0; if (!(0 > $cmwygeyygwqaemaq)) { goto soqqemyioggmoakg; } $cmwygeyygwqaemaq = ($cmwygeyygwqaemaq & 2147483647) + 2147483648; soqqemyioggmoakg: $cmwygeyygwqaemaq = fmod($cmwygeyygwqaemaq, pow(10, 6)); return $cmwygeyygwqaemaq . "\x2e" . ($cmwygeyygwqaemaq ^ $csougakqegqiqsgi); } }

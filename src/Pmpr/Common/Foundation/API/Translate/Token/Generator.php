<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b645383f9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\API\Translate\Token; class Generator implements GeneratorInterface { private function sccuiosigqguemoq() : array { return ["\x34\60\x36\x33\71\x38", 561666268 + 1526272306]; } private function siwocasuauacmugc(?int $mmeioagwmyscwumo, ?string $csougakqegqiqsgi) { for ($cqcuwemuusesmqsq = 0; $cqcuwemuusesmqsq < strlen($csougakqegqiqsgi) - 2; $cqcuwemuusesmqsq += 3) { $icuyogeyaokmwusi = $csougakqegqiqsgi[$cqcuwemuusesmqsq + 2]; $icuyogeyaokmwusi = "\141" <= $icuyogeyaokmwusi ? ord($icuyogeyaokmwusi[0]) - 87 : (int) $icuyogeyaokmwusi; $icuyogeyaokmwusi = "\53" === $csougakqegqiqsgi[$cqcuwemuusesmqsq + 1] ? $this->ysuauwsgeuswusqc($mmeioagwmyscwumo, $icuyogeyaokmwusi) : $mmeioagwmyscwumo << $icuyogeyaokmwusi; $mmeioagwmyscwumo = "\x2b" === $csougakqegqiqsgi[$cqcuwemuusesmqsq] ? $mmeioagwmyscwumo + $icuyogeyaokmwusi & 4294967295 : $mmeioagwmyscwumo ^ $icuyogeyaokmwusi; } return $mmeioagwmyscwumo; } private function aeckqwkmqquymouu(?string $ycskuuyucyuqisaq) { $kwkgamuegwgqckyi = mb_convert_encoding($ycskuuyucyuqisaq, "\x55\124\106\55\61\66\x4c\x45", "\125\x54\x46\x2d\x38"); return strlen($kwkgamuegwgqckyi) / 2; } private function ysuauwsgeuswusqc($mmeioagwmyscwumo, $csougakqegqiqsgi) { if ($csougakqegqiqsgi >= 32 || $csougakqegqiqsgi < -32) { $gcisockiummsmcag = (int) ($csougakqegqiqsgi / 32); $csougakqegqiqsgi -= $gcisockiummsmcag * 32; } if ($csougakqegqiqsgi < 0) { $csougakqegqiqsgi = 32 + $csougakqegqiqsgi; } if ($csougakqegqiqsgi == 0) { return ($mmeioagwmyscwumo >> 1 & 0x7fffffff) * 2 + ($mmeioagwmyscwumo >> $csougakqegqiqsgi & 1); } if ($mmeioagwmyscwumo < 0) { $mmeioagwmyscwumo = $mmeioagwmyscwumo >> 1; $mmeioagwmyscwumo &= 2147483647; $mmeioagwmyscwumo |= 0x40000000; $mmeioagwmyscwumo = $mmeioagwmyscwumo >> $csougakqegqiqsgi - 1; } else { $mmeioagwmyscwumo = $mmeioagwmyscwumo >> $csougakqegqiqsgi; } return $mmeioagwmyscwumo; } private function yqyyeacwyukicaui(string $ycskuuyucyuqisaq, int $momcykaoccoymeig) { $kwkgamuegwgqckyi = mb_convert_encoding($ycskuuyucyuqisaq, "\x55\124\x46\x2d\x31\x36\x4c\105", "\125\x54\x46\55\x38"); return ord($kwkgamuegwgqckyi[$momcykaoccoymeig * 2]) + (ord($kwkgamuegwgqckyi[$momcykaoccoymeig * 2 + 1]) << 8); } public function ysyiouymigoigsma(?string $cmwygeyygwqaemaq) : ?string { $qqmscgkgwmwuqwmw = $this->sccuiosigqguemoq(); $csougakqegqiqsgi = $qqmscgkgwmwuqwmw[0]; for ($icuyogeyaokmwusi = [], $iewosgggaueeyymg = 0, $uuooecoseucuqyag = 0; $uuooecoseucuqyag < $this->aeckqwkmqquymouu($cmwygeyygwqaemaq); $uuooecoseucuqyag++) { $iemwuweegooaeuuq = $this->yqyyeacwyukicaui($cmwygeyygwqaemaq, $uuooecoseucuqyag); if (128 > $iemwuweegooaeuuq) { $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq; } else { if (2048 > $iemwuweegooaeuuq) { $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 6 | 192; } else { if (55296 == ($iemwuweegooaeuuq & 64512) && $uuooecoseucuqyag + 1 < $this->aeckqwkmqquymouu($cmwygeyygwqaemaq) && 56320 == ($this->yqyyeacwyukicaui($cmwygeyygwqaemaq, $uuooecoseucuqyag + 1) & 64512)) { $iemwuweegooaeuuq = 65536 + (($iemwuweegooaeuuq & 1023) << 10) + ($this->yqyyeacwyukicaui($cmwygeyygwqaemaq, ++$uuooecoseucuqyag) & 1023); $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 18 | 240; $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 12 & 63 | 128; } else { $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 12 | 224; } $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq >> 6 & 63 | 128; } $icuyogeyaokmwusi[$iewosgggaueeyymg++] = $iemwuweegooaeuuq & 63 | 128; } } $cmwygeyygwqaemaq = $csougakqegqiqsgi; for ($iewosgggaueeyymg = 0, $wguoskkakasakici = count($icuyogeyaokmwusi); $iewosgggaueeyymg < $wguoskkakasakici; $iewosgggaueeyymg++) { $cmwygeyygwqaemaq += $icuyogeyaokmwusi[$iewosgggaueeyymg]; $cmwygeyygwqaemaq = $this->siwocasuauacmugc($cmwygeyygwqaemaq, "\x2b\x2d\x61\136\53\66"); } $cmwygeyygwqaemaq = $this->siwocasuauacmugc($cmwygeyygwqaemaq, "\53\55\x33\136\53\142\53\55\146"); $cmwygeyygwqaemaq ^= $qqmscgkgwmwuqwmw[1] ? $qqmscgkgwmwuqwmw[1] + 0 : 0; if (0 > $cmwygeyygwqaemaq) { $cmwygeyygwqaemaq = ($cmwygeyygwqaemaq & 2147483647) + 2147483648; } $cmwygeyygwqaemaq = fmod($cmwygeyygwqaemaq, pow(10, 6)); return $cmwygeyygwqaemaq . "\x2e" . ($cmwygeyygwqaemaq ^ $csougakqegqiqsgi); } }

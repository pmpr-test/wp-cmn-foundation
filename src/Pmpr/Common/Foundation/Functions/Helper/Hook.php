<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6723ec0bde9d3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; class Hook extends Common { public function ocksiywmkyaqseou(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii) { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy($this->ygyygikyocoymgaw($iaakskwmyqceoscy), ...$ywmkwiwkosakssii); } public function ewcsyqaaigkicgse(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii) { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->cqscqicucmeamkyq($this->ygyygikyocoymgaw($iaakskwmyqceoscy), ...$ywmkwiwkosakssii); } public function koaegcswmcqsiykq(string $aiamqeawckcsuaou, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10) { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\167\x70\x5f\x61\x6a\x61\170\137{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); } public function suoiicwmcuqouwow(string $aiamqeawckcsuaou, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10) { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\x77\160\x5f\141\152\141\x78\x5f\x6e\x6f\160\162\x69\166\137{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); } public function iqkqummseggmikgo(string $aiamqeawckcsuaou, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10) { $this->suoiicwmcuqouwow($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); $this->koaegcswmcqsiykq($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); } public function wysmcwgiaskkoeam(string $uusmaiomayssaecw, $oceoauekaygmuoko = false, $awcmekyiwwkeyisq = false, $cciauwuwuqaywgce = false, $asksuykwsesyqoky = false) : string { $iaakskwmyqceoscy = $uusmaiomayssaecw; if ($oceoauekaygmuoko) { $iaakskwmyqceoscy .= "\x5f\x73\145\x67\x6d\145\156\x74\137{$oceoauekaygmuoko}"; if (is_string($awcmekyiwwkeyisq)) { $iaakskwmyqceoscy .= "\x5f\x73\x65\x63\x74\151\157\156\137{$awcmekyiwwkeyisq}"; if ($cciauwuwuqaywgce) { if (is_string($cciauwuwuqaywgce)) { $iaakskwmyqceoscy .= "\137\x74\x61\x62\137{$cciauwuwuqaywgce}\137\x66\151\145\154\144\163"; } else { $iaakskwmyqceoscy .= "\137\164\141\142\163"; } } else { $iaakskwmyqceoscy .= "\x5f\146\x69\145\154\x64\163"; } } else { if (is_string($cciauwuwuqaywgce)) { $iaakskwmyqceoscy .= "\137\x74\x61\x62\x5f{$cciauwuwuqaywgce}"; if ($asksuykwsesyqoky) { if (is_string($asksuykwsesyqoky)) { $iaakskwmyqceoscy .= "\137\163\145\143\x74\x69\x6f\x6e\137{$asksuykwsesyqoky}\137\146\x69\x65\x6c\144\x73"; } else { $iaakskwmyqceoscy .= "\x5f\x73\x65\143\x74\x69\x6f\156\163"; } } else { $iaakskwmyqceoscy .= "\x5f\x66\x69\145\x6c\x64\x73"; } } else { if ($awcmekyiwwkeyisq) { $iaakskwmyqceoscy .= "\x5f\x73\x65\x63\x74\x69\157\x6e\x73"; } else { if ($cciauwuwuqaywgce) { $iaakskwmyqceoscy .= "\x5f\164\141\142\x73"; } } } } } else { $iaakskwmyqceoscy .= "\137\163\x65\147\x6d\145\x6e\x74\163"; } return $this->ygyygikyocoymgaw($iaakskwmyqceoscy); } public function ygyygikyocoymgaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask = null, bool $ykuqcwwmuyqmkisq = true) : ?string { $iaakskwmyqceoscy = ''; if ($ykuqcwwmuyqmkisq) { global $icgkamwwakkgigsi; if (!$icgkamwwakkgigsi) { $icgkamwwakkgigsi = []; } $iaakskwmyqceoscy = ''; if (in_array($ymqmyyeuycgmigyo, $icgkamwwakkgigsi, true)) { $ksiyqouuaoymsycg = array_search($ymqmyyeuycgmigyo, $icgkamwwakkgigsi, true); if ($ksiyqouuaoymsycg) { $iaakskwmyqceoscy = $ksiyqouuaoymsycg; } } } if (!$iaakskwmyqceoscy) { if ($wksoawcgagcgoask) { $iaakskwmyqceoscy = "{$wksoawcgagcgoask}\137{$ymqmyyeuycgmigyo}"; } else { $iaakskwmyqceoscy = $ymqmyyeuycgmigyo; } if ($ykuqcwwmuyqmkisq) { $icgkamwwakkgigsi[$iaakskwmyqceoscy] = $ymqmyyeuycgmigyo; } } return $iaakskwmyqceoscy; } }

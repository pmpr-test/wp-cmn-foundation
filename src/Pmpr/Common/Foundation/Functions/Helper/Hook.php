<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6794e7648968d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; class Hook extends Common { public function ocksiywmkyaqseou(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii) { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy($this->ygyygikyocoymgaw($iaakskwmyqceoscy), ...$ywmkwiwkosakssii); } public function ewcsyqaaigkicgse(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii) { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->cqscqicucmeamkyq($this->ygyygikyocoymgaw($iaakskwmyqceoscy), ...$ywmkwiwkosakssii); } public function koaegcswmcqsiykq(string $aiamqeawckcsuaou, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10) { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\167\x70\x5f\x61\x6a\141\170\137{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); } public function suoiicwmcuqouwow(string $aiamqeawckcsuaou, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10) { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\167\x70\137\141\x6a\x61\x78\x5f\x6e\157\x70\162\151\x76\137{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); } public function iqkqummseggmikgo(string $aiamqeawckcsuaou, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10) { $this->suoiicwmcuqouwow($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); $this->koaegcswmcqsiykq($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); } public function wysmcwgiaskkoeam(string $uusmaiomayssaecw, $oceoauekaygmuoko = false, $awcmekyiwwkeyisq = false, $cciauwuwuqaywgce = false, $asksuykwsesyqoky = false) : string { $iaakskwmyqceoscy = $uusmaiomayssaecw; if ($oceoauekaygmuoko) { $iaakskwmyqceoscy .= "\x5f\163\145\x67\x6d\x65\x6e\164\137{$oceoauekaygmuoko}"; if (is_string($awcmekyiwwkeyisq)) { $iaakskwmyqceoscy .= "\137\x73\x65\143\x74\151\157\156\137{$awcmekyiwwkeyisq}"; if ($cciauwuwuqaywgce) { if (is_string($cciauwuwuqaywgce)) { $iaakskwmyqceoscy .= "\x5f\164\x61\x62\x5f{$cciauwuwuqaywgce}\137\x66\151\145\x6c\x64\x73"; } else { $iaakskwmyqceoscy .= "\x5f\x74\x61\142\163"; } } else { $iaakskwmyqceoscy .= "\137\146\151\145\154\144\x73"; } } else { if (is_string($cciauwuwuqaywgce)) { $iaakskwmyqceoscy .= "\137\x74\141\x62\137{$cciauwuwuqaywgce}"; if ($asksuykwsesyqoky) { if (is_string($asksuykwsesyqoky)) { $iaakskwmyqceoscy .= "\x5f\x73\x65\x63\164\x69\157\x6e\x5f{$asksuykwsesyqoky}\137\x66\151\x65\x6c\144\x73"; } else { $iaakskwmyqceoscy .= "\137\163\x65\143\164\x69\157\156\x73"; } } else { $iaakskwmyqceoscy .= "\137\146\x69\x65\x6c\x64\x73"; } } else { if ($awcmekyiwwkeyisq) { $iaakskwmyqceoscy .= "\137\163\145\x63\164\x69\157\156\163"; } else { if ($cciauwuwuqaywgce) { $iaakskwmyqceoscy .= "\x5f\164\141\x62\x73"; } } } } } else { $iaakskwmyqceoscy .= "\x5f\163\145\x67\155\x65\x6e\164\163"; } return $this->ygyygikyocoymgaw($iaakskwmyqceoscy); } public function ygyygikyocoymgaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask = null, bool $ykuqcwwmuyqmkisq = true) : ?string { $iaakskwmyqceoscy = ''; if ($ykuqcwwmuyqmkisq) { global $icgkamwwakkgigsi; if (!$icgkamwwakkgigsi) { $icgkamwwakkgigsi = []; } $iaakskwmyqceoscy = ''; if (in_array($ymqmyyeuycgmigyo, $icgkamwwakkgigsi, true)) { $ksiyqouuaoymsycg = array_search($ymqmyyeuycgmigyo, $icgkamwwakkgigsi, true); if ($ksiyqouuaoymsycg) { $iaakskwmyqceoscy = $ksiyqouuaoymsycg; } } } if (!$iaakskwmyqceoscy) { if ($wksoawcgagcgoask) { $iaakskwmyqceoscy = "{$wksoawcgagcgoask}\137{$ymqmyyeuycgmigyo}"; } else { $iaakskwmyqceoscy = $ymqmyyeuycgmigyo; } if ($ykuqcwwmuyqmkisq) { $icgkamwwakkgigsi[$iaakskwmyqceoscy] = $ymqmyyeuycgmigyo; } } return $iaakskwmyqceoscy; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d02140955ac             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; class Hook extends Common { public function ocksiywmkyaqseou(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii) { return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy($this->ygyygikyocoymgaw($iaakskwmyqceoscy), ...$ywmkwiwkosakssii); } public function ewcsyqaaigkicgse(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii) { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->cqscqicucmeamkyq($this->ygyygikyocoymgaw($iaakskwmyqceoscy), ...$ywmkwiwkosakssii); } public function koaegcswmcqsiykq(string $aiamqeawckcsuaou, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10) { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("wp_ajax_{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); } public function suoiicwmcuqouwow(string $aiamqeawckcsuaou, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10) { $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("wp_ajax_nopriv_{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); } public function iqkqummseggmikgo(string $aiamqeawckcsuaou, $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10) { $this->suoiicwmcuqouwow($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); $this->koaegcswmcqsiykq($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas); } public function wysmcwgiaskkoeam(string $uusmaiomayssaecw, $oceoauekaygmuoko = false, $awcmekyiwwkeyisq = false, $cciauwuwuqaywgce = false, $asksuykwsesyqoky = false) : string { $iaakskwmyqceoscy = $uusmaiomayssaecw; if ($oceoauekaygmuoko) { $iaakskwmyqceoscy .= "_segment_{$oceoauekaygmuoko}"; if (is_string($awcmekyiwwkeyisq)) { $iaakskwmyqceoscy .= "_section_{$awcmekyiwwkeyisq}"; if ($cciauwuwuqaywgce) { if (is_string($cciauwuwuqaywgce)) { $iaakskwmyqceoscy .= "_tab_{$cciauwuwuqaywgce}_fields"; } else { $iaakskwmyqceoscy .= "_tabs"; } } else { $iaakskwmyqceoscy .= "_fields"; } } else { if (is_string($cciauwuwuqaywgce)) { $iaakskwmyqceoscy .= "_tab_{$cciauwuwuqaywgce}"; if ($asksuykwsesyqoky) { if (is_string($asksuykwsesyqoky)) { $iaakskwmyqceoscy .= "_section_{$asksuykwsesyqoky}_fields"; } else { $iaakskwmyqceoscy .= "_sections"; } } else { $iaakskwmyqceoscy .= "_fields"; } } else { if ($awcmekyiwwkeyisq) { $iaakskwmyqceoscy .= "_sections"; } else { if ($cciauwuwuqaywgce) { $iaakskwmyqceoscy .= "_tabs"; } } } } } else { $iaakskwmyqceoscy .= '_segments'; } return $this->ygyygikyocoymgaw($iaakskwmyqceoscy); } public function ygyygikyocoymgaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask = null, bool $ykuqcwwmuyqmkisq = true) : ?string { $iaakskwmyqceoscy = ''; if ($ykuqcwwmuyqmkisq) { global $icgkamwwakkgigsi; if (!$icgkamwwakkgigsi) { $icgkamwwakkgigsi = []; } $iaakskwmyqceoscy = ''; if (in_array($ymqmyyeuycgmigyo, $icgkamwwakkgigsi, true)) { $ksiyqouuaoymsycg = array_search($ymqmyyeuycgmigyo, $icgkamwwakkgigsi, true); if ($ksiyqouuaoymsycg) { $iaakskwmyqceoscy = $ksiyqouuaoymsycg; } } } if (!$iaakskwmyqceoscy) { if ($wksoawcgagcgoask) { $iaakskwmyqceoscy = "{$wksoawcgagcgoask}_{$ymqmyyeuycgmigyo}"; } else { $iaakskwmyqceoscy = $ymqmyyeuycgmigyo; } if ($ykuqcwwmuyqmkisq) { $icgkamwwakkgigsi[$iaakskwmyqceoscy] = $ymqmyyeuycgmigyo; } } return $iaakskwmyqceoscy; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e2e8864db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Notice\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Notice\Engine; trait NoticeTrait { private function ywygyiqaiqkwwwom() : Engine { return Engine::symcgieuakksimmu(); } public final function caoquisuiesaowke($aokagokqyuysuksm) : bool { return $this->ywygyiqaiqkwwwom()->has($aokagokqyuysuksm); } public final function syiuacooagmooima($aokagokqyuysuksm, $egsumesakcaaukem, $mkomwsiykqigmqca) { $aokagokqyuysuksm .= "\55\x77\162\151\164\x69\156\x67\x2d\x70\x65\x72\x6d\x69\x73\163\151\157\x6e"; $uamcoiueqaamsqma = sprintf("\x25\163\74\142\x72\76\x25\163", sprintf(__("\x25\163\40\143\141\156\x6e\x6f\164\40\143\157\x6e\x66\x69\x67\165\x72\x65\x20\151\x74\163\x65\154\146\40\144\x75\145\40\164\157\x20\x6d\x69\163\163\151\156\x67\40\x77\162\x69\164\151\x6e\x67\40\x70\145\162\155\x69\163\163\x69\157\156\163\56", PR__CMN__FOUNDATION), $egsumesakcaaukem), sprintf(__("\101\x66\146\145\143\164\x65\x64\x20\146\151\x6c\x65\x3a\40\x25\x73", PR__CMN__FOUNDATION), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\143\x6f\144\x65", [], $mkomwsiykqigmqca))); $this->yiggueaiwiygoiyi($uamcoiueqaamsqma, $aokagokqyuysuksm); } public final function kwoycoqogoswycgg(?string $aokagokqyuysuksm, bool $sywokgmoskcocqgy = true) { $ycyucwoysmwkgiui = ''; if (!$aokagokqyuysuksm) { goto usuaqaeacooqoqeg; } $wksoawcgagcgoask = $this->couwksyewgyeooqe(); if (!$wksoawcgagcgoask) { goto wigkaokkwyecekic; } $aokagokqyuysuksm .= "\x2d{$wksoawcgagcgoask->aakmagwggmkoiiyu()}"; wigkaokkwyecekic: $ycyucwoysmwkgiui = $this->ywygyiqaiqkwwwom()->get($aokagokqyuysuksm); if (!$sywokgmoskcocqgy) { goto mskkcyugwccmgmue; } $ycyucwoysmwkgiui = $this->mumsqekeeuykyemy($ycyucwoysmwkgiui); mskkcyugwccmgmue: $this->ywygyiqaiqkwwwom()->remove($aokagokqyuysuksm); usuaqaeacooqoqeg: return $ycyucwoysmwkgiui; } private function cwykyuieaqgcuwis(array $ywmkwiwkosakssii = [], bool $yuwymayicwwqiske = false) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '']); if (!($wksoawcgagcgoask = $this->couwksyewgyeooqe())) { goto icaaymowyygqqwsa; } $ywmkwiwkosakssii[Constants::gouqcwikiiygyasc] .= "\x2d{$wksoawcgagcgoask->aakmagwggmkoiiyu()}"; icaaymowyygqqwsa: if (!($yuwymayicwwqiske && $wksoawcgagcgoask)) { goto cwqecoyeuseoiyee; } $ywmkwiwkosakssii[Constants::PREFIX] = $wksoawcgagcgoask->qcgakseyaikigqco(); cwqecoyeuseoiyee: $this->ywygyiqaiqkwwwom()->add($ywmkwiwkosakssii); } public final function yiggueaiwiygoiyi($uamcoiueqaamsqma, $aokagokqyuysuksm, string $iqaosyayeiuaisqi = Constants::ecioqysekgaasegg, bool $yuwymayicwwqiske = true) { if (!$uamcoiueqaamsqma) { goto iukwaymqsaukgucc; } $this->cwykyuieaqgcuwis([Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::iiooageieusuyomy => $iqaosyayeiuaisqi, Constants::gouqcwikiiygyasc => $aokagokqyuysuksm], $yuwymayicwwqiske); iukwaymqsaukgucc: } public final function cimaucgayqyyccoc($uamcoiueqaamsqma, $aokagokqyuysuksm, string $iqaosyayeiuaisqi = Constants::ecioqysekgaasegg, bool $yuwymayicwwqiske = true) { if (!$uamcoiueqaamsqma) { goto oukcgieuakaagsaw; } $this->cwykyuieaqgcuwis([Constants::ucmueuwwcmocgmig => Constants::gewmeskawiqikkoc, Constants::eoskkkieowogacws => $uamcoiueqaamsqma, Constants::iiooageieusuyomy => $iqaosyayeiuaisqi, Constants::gouqcwikiiygyasc => $aokagokqyuysuksm], $yuwymayicwwqiske); oukcgieuakaagsaw: } public final function mumsqekeeuykyemy($ywmkwiwkosakssii = []) { return $this->ywygyiqaiqkwwwom()->generate($ywmkwiwkosakssii); } }

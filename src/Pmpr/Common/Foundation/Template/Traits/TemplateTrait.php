<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d8187bb66             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Engine; use Pmpr\Common\Foundation\Template\Twig\Twig; trait TemplateTrait { protected ?string $templatePrefix = ''; public function kasioquywmeosmsi() : ?Engine { if (!($goqqimcssiyagkwy = Twig::symcgieuakksimmu()->uykissogmuaaocsg())) { goto qmygamkeyyeweaug; } $goqqimcssiyagkwy->yqcmsqwcioyookau($this->akuociswqmoigkas()); qmygamkeyyeweaug: return $goqqimcssiyagkwy; } public final function uuiwwqyikiwauwgq(?string $qqscaoyqikuyeoaw) : bool { return $this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw); } public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\154\x61\x73\x73" => false, Constants::qaacaqioeyiuakeu => false, Constants::wikgqsqysyuoykse => false]); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\x6c\x61\163\163", false); $koaqeegoeiaiccse = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qaacaqioeyiuakeu, false); $ggauoeuaesiymgee = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::wikgqsqysyuoykse, false); $this->kasioquywmeosmsi()->yqcmsqwcioyookau($this->akuociswqmoigkas($egkyssmuqcwaciya)); $nsmgceoqaqogqmuw = ''; $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya); if (!$this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs)) { goto gqmomswmsooweyco; } $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->ugcgocaoguesoiic($wkcwykowmmmwioqs, $qookweymeqawmcwo); goto scqewiwsusqceycg; gqmomswmsooweyco: if (!($omwmuycmeqcqokom = $cwaqscoiqkokyase->giuwsoqummqkeaua($this))) { goto gcgmcwkcywoeqyua; } $nsmgceoqaqogqmuw = $omwmuycmeqcqokom->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, $ywmkwiwkosakssii); gcgmcwkcywoeqyua: scqewiwsusqceycg: if (!$koaqeegoeiaiccse) { goto kiagckcoykiwemaq; } echo $nsmgceoqaqogqmuw; kiagckcoykiwemaq: return $nsmgceoqaqogqmuw; } public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string { if (!$egkyssmuqcwaciya) { goto oucyomommkeoegkm; } return $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya); oucyomommkeoegkm: if (!empty($this->templatePrefix)) { goto quwomueueaekwyqo; } $this->templatePrefix = $this->kasioquywmeosmsi()->siameoooqiiuqgsm(static::class); quwomueueaekwyqo: return $this->templatePrefix; } private function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string { if (!$this->ciigewkguqeamews()) { goto ymgmkyymcokcqcge; } $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca); $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu); array_pop($uomewyckeuqoqocu); $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo; $mkomwsiykqigmqca = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu); ymgmkyymcokcqcge: return $mkomwsiykqigmqca; } public final function eskggqsasgsiommy($qqscaoyqikuyeoaw, ?string $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null) : ?string { $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw); if (!($this->ciigewkguqeamews() && !$this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs))) { goto mgwwogkgkaycgokq; } $sqeykgyoooqysmca = ''; if (preg_match("\x2f\134\56\x28\133\x30\55\x39\141\x2d\x7a\135\x2b\x24\51\x2f\x69", $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) { goto qcacqoowkyyyeies; } $sqeykgyoooqysmca = "\56\x68\164\155\x6c"; qcacqoowkyyyeies: $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}\56\164\x77\x69\x67", $ggauoeuaesiymgee); mgwwogkgkaycgokq: return $wkcwykowmmmwioqs; } private function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null) : ?string { if (!($wkcwykowmmmwioqs && $this->ciigewkguqeamews())) { goto mqwciycqokgiaask; } if ($qqscaoyqikuyeoaw) { goto swcoukyskageuyec; } if ($this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs)) { goto aeksiqkwsmsqqkem; } $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs); aeksiqkwsmsqqkem: goto wawekyqmeyuiuuwo; swcoukyskageuyec: if ($this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) { goto soacwieaayswiusy; } $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs); soacwieaayswiusy: $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw; if (!($ggauoeuaesiymgee && !$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw))) { goto ukucugmwieqomaii; } $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee; ukucugmwieqomaii: $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw; wawekyqmeyuiuuwo: mqwciycqokgiaask: return $wkcwykowmmmwioqs; } private function ciigewkguqeamews() : bool { $qoqyomiqwooaeoiy = true; if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\143\x61\156\122\165\156"))) { goto iuweayiqouuegcgq; } $qoqyomiqwooaeoiy = $this->{$qgciuiagkkguykgs}(); iuweayiqouuegcgq: return $qoqyomiqwooaeoiy; } }

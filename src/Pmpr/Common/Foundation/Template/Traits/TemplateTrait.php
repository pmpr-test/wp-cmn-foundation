<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15f5710e7a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Engine; use Pmpr\Common\Foundation\Template\Twig\Twig; trait TemplateTrait { protected ?string $templatePrefix = ''; public function kasioquywmeosmsi() : ?Engine { if (!($goqqimcssiyagkwy = Twig::symcgieuakksimmu()->uykissogmuaaocsg())) { goto uumwyacekksycmcy; } $goqqimcssiyagkwy->yqcmsqwcioyookau($this->akuociswqmoigkas()); uumwyacekksycmcy: return $goqqimcssiyagkwy; } public final function uuiwwqyikiwauwgq(?string $qqscaoyqikuyeoaw) : bool { return $this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw); } public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\x6c\x61\x73\x73" => false, Constants::qaacaqioeyiuakeu => false, Constants::wikgqsqysyuoykse => false]); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\154\x61\x73\x73", false); $koaqeegoeiaiccse = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qaacaqioeyiuakeu, false); $ggauoeuaesiymgee = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::wikgqsqysyuoykse, false); $this->kasioquywmeosmsi()->yqcmsqwcioyookau($this->akuociswqmoigkas($egkyssmuqcwaciya)); $nsmgceoqaqogqmuw = ''; $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya); if (!$this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs)) { goto mskkcyugwccmgmue; } $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->ugcgocaoguesoiic($wkcwykowmmmwioqs, $qookweymeqawmcwo); goto usuaqaeacooqoqeg; mskkcyugwccmgmue: if (!($omwmuycmeqcqokom = $cwaqscoiqkokyase->giuwsoqummqkeaua($this))) { goto wigkaokkwyecekic; } $nsmgceoqaqogqmuw = $omwmuycmeqcqokom->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, $ywmkwiwkosakssii); wigkaokkwyecekic: usuaqaeacooqoqeg: if (!$koaqeegoeiaiccse) { goto icaaymowyygqqwsa; } echo $nsmgceoqaqogqmuw; icaaymowyygqqwsa: return $nsmgceoqaqogqmuw; } public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string { if (!$egkyssmuqcwaciya) { goto cwqecoyeuseoiyee; } return $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya); cwqecoyeuseoiyee: if (!empty($this->templatePrefix)) { goto iukwaymqsaukgucc; } $this->templatePrefix = $this->kasioquywmeosmsi()->siameoooqiiuqgsm(static::class); iukwaymqsaukgucc: return $this->templatePrefix; } private function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string { if (!$this->ciigewkguqeamews()) { goto oukcgieuakaagsaw; } $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca); $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu); array_pop($uomewyckeuqoqocu); $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo; $mkomwsiykqigmqca = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu); oukcgieuakaagsaw: return $mkomwsiykqigmqca; } public final function eskggqsasgsiommy($qqscaoyqikuyeoaw, ?string $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null) : ?string { $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw); if (!($this->ciigewkguqeamews() && !$this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs))) { goto cusmimwmwgscqeku; } $sqeykgyoooqysmca = ''; if (preg_match("\57\x5c\56\x28\x5b\x30\x2d\71\141\x2d\x7a\x5d\x2b\44\x29\x2f\x69", $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) { goto aeagssqaiwooeoei; } $sqeykgyoooqysmca = "\56\x68\164\155\x6c"; aeagssqaiwooeoei: $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}\x2e\x74\167\151\x67", $ggauoeuaesiymgee); cusmimwmwgscqeku: return $wkcwykowmmmwioqs; } private function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null) : ?string { if (!($wkcwykowmmmwioqs && $this->ciigewkguqeamews())) { goto cekiucuusaiieqyy; } if ($qqscaoyqikuyeoaw) { goto wucqauasuekkoayw; } if ($this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs)) { goto gogmaqgwwsoekumo; } $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs); gogmaqgwwsoekumo: goto qiuucioewqyqqwok; wucqauasuekkoayw: if ($this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) { goto egcqemgwyuoosmuq; } $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs); egcqemgwyuoosmuq: $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw; if (!($ggauoeuaesiymgee && !$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw))) { goto wekieycqkqmgagyq; } $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee; wekieycqkqmgagyq: $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw; qiuucioewqyqqwok: cekiucuusaiieqyy: return $wkcwykowmmmwioqs; } private function ciigewkguqeamews() : bool { $qoqyomiqwooaeoiy = true; if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\x63\x61\x6e\122\x75\x6e"))) { goto wscecwieywoacuyc; } $qoqyomiqwooaeoiy = $this->{$qgciuiagkkguykgs}(); wscecwieywoacuyc: return $qoqyomiqwooaeoiy; } }

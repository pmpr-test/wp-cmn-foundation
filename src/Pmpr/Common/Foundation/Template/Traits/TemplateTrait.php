<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6af0adcff6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Engine; use Pmpr\Common\Foundation\Template\Twig\Twig; trait TemplateTrait { protected ?string $templatePrefix = ''; public function kasioquywmeosmsi() : ?Engine { if (!($goqqimcssiyagkwy = Twig::symcgieuakksimmu()->uykissogmuaaocsg())) { goto eiecqmeuaaaiwgiq; } $goqqimcssiyagkwy->yqcmsqwcioyookau($this->akuociswqmoigkas()); eiecqmeuaaaiwgiq: return $goqqimcssiyagkwy; } public final function uuiwwqyikiwauwgq(?string $qqscaoyqikuyeoaw) : bool { return $this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw); } public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\x63\154\141\163\163" => false, Constants::qaacaqioeyiuakeu => false, Constants::wikgqsqysyuoykse => false]); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\x6c\x61\163\x73", false); $koaqeegoeiaiccse = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qaacaqioeyiuakeu, false); $ggauoeuaesiymgee = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::wikgqsqysyuoykse, false); $this->kasioquywmeosmsi()->yqcmsqwcioyookau($this->akuociswqmoigkas($egkyssmuqcwaciya)); $nsmgceoqaqogqmuw = ''; $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya); if (!$this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs)) { goto icmgkesuuwsmygme; } $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->ugcgocaoguesoiic($wkcwykowmmmwioqs, $qookweymeqawmcwo); goto iekieuqmokeakays; icmgkesuuwsmygme: if (!($omwmuycmeqcqokom = $cwaqscoiqkokyase->giuwsoqummqkeaua($this))) { goto icisyikkoqqasowa; } $nsmgceoqaqogqmuw = $omwmuycmeqcqokom->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, $ywmkwiwkosakssii); icisyikkoqqasowa: iekieuqmokeakays: if (!$koaqeegoeiaiccse) { goto csucwqwqcoiyeesk; } echo $nsmgceoqaqogqmuw; csucwqwqcoiyeesk: return $nsmgceoqaqogqmuw; } public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string { if (!$egkyssmuqcwaciya) { goto kmmcmckqqsioiqes; } return $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya); kmmcmckqqsioiqes: if (!empty($this->templatePrefix)) { goto miaqksuykcksyyuo; } $this->templatePrefix = $this->kasioquywmeosmsi()->siameoooqiiuqgsm(static::class); miaqksuykcksyyuo: return $this->templatePrefix; } private function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string { if (!$this->ciigewkguqeamews()) { goto waowywqegyiieeke; } $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca); $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu); array_pop($uomewyckeuqoqocu); $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo; $mkomwsiykqigmqca = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu); waowywqegyiieeke: return $mkomwsiykqigmqca; } public final function eskggqsasgsiommy($qqscaoyqikuyeoaw, ?string $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null) : ?string { $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw); if (!($this->ciigewkguqeamews() && !$this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs))) { goto ikemoyeuukmcueoi; } $sqeykgyoooqysmca = ''; if (preg_match("\x2f\x5c\x2e\x28\x5b\60\55\71\141\55\x7a\x5d\x2b\44\x29\57\x69", $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) { goto egksuoqocciukoaq; } $sqeykgyoooqysmca = "\x2e\150\164\155\154"; egksuoqocciukoaq: $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}\x2e\164\x77\151\147", $ggauoeuaesiymgee); ikemoyeuukmcueoi: return $wkcwykowmmmwioqs; } private function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null) : ?string { if (!($wkcwykowmmmwioqs && $this->ciigewkguqeamews())) { goto oisqamuwmiswywko; } if ($qqscaoyqikuyeoaw) { goto egkqsyyusoukuieu; } if ($this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs)) { goto eiaqgiaygokkeksu; } $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs); eiaqgiaygokkeksu: goto qeoeagouucmwsyqw; egkqsyyusoukuieu: if ($this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) { goto awekmuqsuwwkemoa; } $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs); awekmuqsuwwkemoa: $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw; if (!($ggauoeuaesiymgee && !$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw))) { goto qmcmiosogysemwsc; } $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee; qmcmiosogysemwsc: $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw; qeoeagouucmwsyqw: oisqamuwmiswywko: return $wkcwykowmmmwioqs; } private function ciigewkguqeamews() : bool { $qoqyomiqwooaeoiy = true; if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\143\141\x6e\x52\x75\156"))) { goto oyiyakeisgumawcu; } $qoqyomiqwooaeoiy = $this->{$qgciuiagkkguykgs}(); oyiyakeisgumawcu: return $qoqyomiqwooaeoiy; } }

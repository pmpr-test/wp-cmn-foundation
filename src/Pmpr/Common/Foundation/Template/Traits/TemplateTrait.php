<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec08edec3b9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Engine; use Pmpr\Common\Foundation\Template\Twig\Twig; trait TemplateTrait { protected ?string $templatePrefix = ''; public function kasioquywmeosmsi() : ?Engine { if (!($goqqimcssiyagkwy = Twig::symcgieuakksimmu()->uykissogmuaaocsg())) { goto eicgugqewsqoeqyq; } $goqqimcssiyagkwy->yqcmsqwcioyookau($this->akuociswqmoigkas()); eicgugqewsqoeqyq: return $goqqimcssiyagkwy; } public final function uuiwwqyikiwauwgq(?string $qqscaoyqikuyeoaw) : bool { return $this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw); } public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\154\141\163\163" => false, Constants::qaacaqioeyiuakeu => false, Constants::wikgqsqysyuoykse => false]); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\x6c\141\163\x73", false); $koaqeegoeiaiccse = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qaacaqioeyiuakeu, false); $ggauoeuaesiymgee = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::wikgqsqysyuoykse, false); $this->kasioquywmeosmsi()->yqcmsqwcioyookau($this->akuociswqmoigkas($egkyssmuqcwaciya)); $nsmgceoqaqogqmuw = ''; $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya); if (!$this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs)) { goto cmmagyiwukeyqwsy; } $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->ugcgocaoguesoiic($wkcwykowmmmwioqs, $qookweymeqawmcwo); goto sicyosycsmuqsysq; cmmagyiwukeyqwsy: if (!($omwmuycmeqcqokom = $cwaqscoiqkokyase->giuwsoqummqkeaua($this))) { goto mioukcqeukuoiowc; } $nsmgceoqaqogqmuw = $omwmuycmeqcqokom->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, $ywmkwiwkosakssii); mioukcqeukuoiowc: sicyosycsmuqsysq: if (!$koaqeegoeiaiccse) { goto qksaqkeugsqscias; } echo $nsmgceoqaqogqmuw; qksaqkeugsqscias: return $nsmgceoqaqogqmuw; } public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string { if (!$egkyssmuqcwaciya) { goto gmowomwyecacouuw; } return $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya); gmowomwyecacouuw: if (!empty($this->templatePrefix)) { goto wwuccwuuawkiywgk; } $this->templatePrefix = $this->kasioquywmeosmsi()->siameoooqiiuqgsm(static::class); wwuccwuuawkiywgk: return $this->templatePrefix; } private function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string { if (!$this->ciigewkguqeamews()) { goto gameegaekuiikoww; } $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca); $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu); array_pop($uomewyckeuqoqocu); $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo; $mkomwsiykqigmqca = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu); gameegaekuiikoww: return $mkomwsiykqigmqca; } public final function eskggqsasgsiommy($qqscaoyqikuyeoaw, ?string $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null) : ?string { $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw); if (!($this->ciigewkguqeamews() && !$this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs))) { goto wmmsqcgygcuuaycy; } $sqeykgyoooqysmca = ''; if (preg_match("\57\134\x2e\50\133\60\55\71\x61\x2d\172\135\x2b\x24\51\57\x69", $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) { goto qowesgcsaiysuagc; } $sqeykgyoooqysmca = "\x2e\150\164\x6d\154"; qowesgcsaiysuagc: $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}\56\164\167\x69\x67", $ggauoeuaesiymgee); wmmsqcgygcuuaycy: return $wkcwykowmmmwioqs; } private function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null) : ?string { if (!($wkcwykowmmmwioqs && $this->ciigewkguqeamews())) { goto yccqswiseqwmqqyg; } if ($qqscaoyqikuyeoaw) { goto qccywycocsamgkqi; } if ($this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs)) { goto eeiweeggimkmqoqg; } $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs); eeiweeggimkmqoqg: goto uaamwamsuakywoqc; qccywycocsamgkqi: if ($this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) { goto cmieikgaiegwmycs; } $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs); cmieikgaiegwmycs: $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw; if (!($ggauoeuaesiymgee && !$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw))) { goto aieyemueueyscaym; } $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee; aieyemueueyscaym: $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw; uaamwamsuakywoqc: yccqswiseqwmqqyg: return $wkcwykowmmmwioqs; } private function ciigewkguqeamews() : bool { $qoqyomiqwooaeoiy = true; if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\143\x61\156\122\165\x6e"))) { goto ecqkyymaqewoquuu; } $qoqyomiqwooaeoiy = $this->{$qgciuiagkkguykgs}(); ecqkyymaqewoquuu: return $qoqyomiqwooaeoiy; } }

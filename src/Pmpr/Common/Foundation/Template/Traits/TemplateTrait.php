<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053bb6ecfdb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Engine; use Pmpr\Common\Foundation\Template\Twig\Twig; trait TemplateTrait { public function kasioquywmeosmsi() : ?Engine { if ($goqqimcssiyagkwy = Twig::symcgieuakksimmu()->uykissogmuaaocsg()) { $goqqimcssiyagkwy->yqcmsqwcioyookau($this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this)); } return $goqqimcssiyagkwy; } public final function uuiwwqyikiwauwgq(?string $qqscaoyqikuyeoaw) : bool { return $this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw); } public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\x6c\141\x73\163" => $this, Constants::qaacaqioeyiuakeu => false, Constants::wikgqsqysyuoykse => false]); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\x63\x6c\141\x73\x73", $this); $koaqeegoeiaiccse = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qaacaqioeyiuakeu, false); $ggauoeuaesiymgee = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::wikgqsqysyuoykse, false); $this->kasioquywmeosmsi()->yqcmsqwcioyookau($this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($egkyssmuqcwaciya)); $nsmgceoqaqogqmuw = ''; $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya); if (!$this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs)) { if ($omwmuycmeqcqokom = $cwaqscoiqkokyase->giuwsoqummqkeaua($this)) { $nsmgceoqaqogqmuw = $omwmuycmeqcqokom->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, $ywmkwiwkosakssii); } } else { $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->ugcgocaoguesoiic($wkcwykowmmmwioqs, $qookweymeqawmcwo); } if ($koaqeegoeiaiccse) { echo $nsmgceoqaqogqmuw; } return $nsmgceoqaqogqmuw; } public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string { static $quqygsiugggcqici = []; if (is_object($egkyssmuqcwaciya)) { $egkyssmuqcwaciya = $egkyssmuqcwaciya::class; } if (isset($quqygsiugggcqici[$egkyssmuqcwaciya])) { $qkageigkaakkwceq = $quqygsiugggcqici[$egkyssmuqcwaciya]; } else { if ($egkyssmuqcwaciya) { $qkageigkaakkwceq = $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya); } else { $qkageigkaakkwceq = $this->kasioquywmeosmsi()->siameoooqiiuqgsm(static::class); } } return $qkageigkaakkwceq; } private function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string { if ($this->ciigewkguqeamews()) { $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca); $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu); array_pop($uomewyckeuqoqocu); $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo; $mkomwsiykqigmqca = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu); } return $mkomwsiykqigmqca; } public final function eskggqsasgsiommy($qqscaoyqikuyeoaw, ?string $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null) : ?string { $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw); if ($this->ciigewkguqeamews() && !$this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs)) { $sqeykgyoooqysmca = ''; if (!preg_match("\57\134\56\x28\133\x30\x2d\71\x61\55\172\135\53\44\x29\x2f\151", $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) { $sqeykgyoooqysmca = "\x2e\150\x74\x6d\x6c"; } $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}\56\x74\167\x69\147", $ggauoeuaesiymgee); } return $wkcwykowmmmwioqs; } private function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null) : ?string { if ($wkcwykowmmmwioqs && $this->ciigewkguqeamews()) { if ($qqscaoyqikuyeoaw) { if (!$this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) { $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs); } $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw; if ($ggauoeuaesiymgee && !$this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee; } $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw; } else { if (!$this->uuiwwqyikiwauwgq($wkcwykowmmmwioqs)) { $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs); } } } return $wkcwykowmmmwioqs; } private function ciigewkguqeamews() : bool { $qoqyomiqwooaeoiy = true; if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\143\x61\x6e\x52\x75\156")) { $qoqyomiqwooaeoiy = $this->{$qgciuiagkkguykgs}(); } return $qoqyomiqwooaeoiy; } }

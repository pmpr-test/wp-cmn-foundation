<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abce8e3ee38             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Segment; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; trait SegmentsTrait { protected array $segments = []; protected bool $vertical = false; protected bool $serverSide = false; protected ?string $currentSegment = null; public function gsesiocqciggmauo() : ?array { return $this->segments; } public function eawwmoocceckimku(string $oceoauekaygmuoko) : string { return "\160\162\x2d\x70\141\x6e\145\x6c\55\x73\x65\x67\x6d\145\156\x74\x2d{$oceoauekaygmuoko}"; } public function eooumquaoewwauoo(string $uusmaiomayssaecw) : ?Segment { return $this->segments[$uusmaiomayssaecw] ?? null; } public function skgwcckoyoqsascq() : bool { return !empty($this->gsesiocqciggmauo()); } public function ewwmomyayeoiwcck(array $wsqkgswwooewwekw) : self { $this->segments = $wsqkgswwooewwekw; return $this; } public function umiceomyaeiiwusw() : ?string { return $this->currentSegment; } public function ogimmkwaymekmoky(Segment $oceoauekaygmuoko) : self { if ($this->sgaiiqycsacgyuye() && empty($this->umiceomyaeiiwusw())) { $yeacayasgueouoqc = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\x73\x65\x67\x6d\x65\x6e\x74"); if (!$yeacayasgueouoqc) { $yeacayasgueouoqc = $oceoauekaygmuoko->mwikyscisascoeea(); } $this->currentSegment = $yeacayasgueouoqc; } if (!isset($this->segments[$oceoauekaygmuoko->mwikyscisascoeea()])) { if (!$oceoauekaygmuoko->yywskysiycwkwsgw()) { $oceoauekaygmuoko->jyumyyugiwwiqomk(count($this->gsesiocqciggmauo()) + 1); } $this->segments[$oceoauekaygmuoko->mwikyscisascoeea()] = $oceoauekaygmuoko; } return $this; } public function ogwccyaguaieayiq() : array { $ikgwqyuyckaewsow = []; if ($this->skgwcckoyoqsascq()) { foreach ($this->gsesiocqciggmauo() as $oceoauekaygmuoko) { if ($oceoauekaygmuoko->myomgmiksogoikuc()) { foreach ($oceoauekaygmuoko->equiyaoamqmaeckc() as $cciauwuwuqaywgce) { if ($qmsmicaeoaceewaw = $cciauwuwuqaywgce->uyaeumskacgcyskk()) { $ikgwqyuyckaewsow += $qmsmicaeoaceewaw; } } } if ($oceoauekaygmuoko->mgwewyykukaawcmo()) { foreach ($oceoauekaygmuoko->suuogccckocgseyg() as $awcmekyiwwkeyisq) { if ($iaiumiawmuswssky = $awcmekyiwwkeyisq->uyaeumskacgcyskk()) { $ikgwqyuyckaewsow += $iaiumiawmuswssky; } } } } } return $ikgwqyuyckaewsow; } public function swsooicosgeeocgq(array $wsqkgswwooewwekw) : self { foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) { if ($oceoauekaygmuoko instanceof Segment) { $this->ogimmkwaymekmoky($oceoauekaygmuoko); } } return $this; } public function sgssayiyusuaawmm() : bool { return $this->vertical; } public function kwcoiysqqkqsugqo() : self { $this->vertical = true; return $this; } public function sgaiiqycsacgyuye() : bool { return $this->serverSide; } public function ucqsgeumwwiiueqs() : self { $this->serverSide = true; return $this; } }

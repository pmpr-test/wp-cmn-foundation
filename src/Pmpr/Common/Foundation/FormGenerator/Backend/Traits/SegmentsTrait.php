<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Segment; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; trait SegmentsTrait { protected array $segments = []; protected bool $vertical = false; protected bool $serverSide = false; protected ?string $currentSegment = null; public function gsesiocqciggmauo() : ?array { return $this->segments; } public function eawwmoocceckimku(string $oceoauekaygmuoko) : string { return "\x70\162\x2d\x70\141\156\x65\x6c\x2d\x73\x65\147\155\x65\x6e\x74\x2d{$oceoauekaygmuoko}"; } public function eooumquaoewwauoo(string $uusmaiomayssaecw) : ?Segment { return $this->segments[$uusmaiomayssaecw] ?? null; } public function skgwcckoyoqsascq() : bool { return !empty($this->gsesiocqciggmauo()); } public function ewwmomyayeoiwcck(array $wsqkgswwooewwekw) : self { $this->segments = $wsqkgswwooewwekw; return $this; } public function umiceomyaeiiwusw() : ?string { return $this->currentSegment; } public function ogimmkwaymekmoky(Segment $oceoauekaygmuoko) : self { if (!($this->sgaiiqycsacgyuye() && empty($this->umiceomyaeiiwusw()))) { goto gwmauwgkiomyggmu; } $yeacayasgueouoqc = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\163\145\x67\x6d\145\x6e\164"); if ($yeacayasgueouoqc) { goto ooceggceowgoacyu; } $yeacayasgueouoqc = $oceoauekaygmuoko->mwikyscisascoeea(); ooceggceowgoacyu: $this->currentSegment = $yeacayasgueouoqc; gwmauwgkiomyggmu: if (isset($this->segments[$oceoauekaygmuoko->mwikyscisascoeea()])) { goto coqycqiqgwkgkymo; } if ($oceoauekaygmuoko->yywskysiycwkwsgw()) { goto syaqwysmymkgkcuu; } $oceoauekaygmuoko->jyumyyugiwwiqomk(count($this->gsesiocqciggmauo()) + 1); syaqwysmymkgkcuu: $this->segments[$oceoauekaygmuoko->mwikyscisascoeea()] = $oceoauekaygmuoko; coqycqiqgwkgkymo: return $this; } public function ogwccyaguaieayiq() : array { $ikgwqyuyckaewsow = []; if (!$this->skgwcckoyoqsascq()) { goto qmkmuwomcwygkysi; } foreach ($this->gsesiocqciggmauo() as $oceoauekaygmuoko) { if (!$oceoauekaygmuoko->mgwewyykukaawcmo()) { goto wguccgmciesyocmi; } foreach ($oceoauekaygmuoko->suuogccckocgseyg() as $awcmekyiwwkeyisq) { if (!($iaiumiawmuswssky = $awcmekyiwwkeyisq->uyaeumskacgcyskk())) { goto ggqqwysyuqiwksgm; } $ikgwqyuyckaewsow += $iaiumiawmuswssky; ggqqwysyuqiwksgm: aigseumaammwaqck: } yeacwagosugscqcg: wguccgmciesyocmi: msayswiykqokmuqa: } qcmakskemmcgaeyg: qmkmuwomcwygkysi: return $ikgwqyuyckaewsow; } public function swsooicosgeeocgq(array $wsqkgswwooewwekw) : self { foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) { if (!$oceoauekaygmuoko instanceof Segment) { goto skoscsikiaakokqe; } $this->ogimmkwaymekmoky($oceoauekaygmuoko); skoscsikiaakokqe: aaeuuccoyyuqkouc: } iaiooeockccgaaiq: return $this; } public function sgssayiyusuaawmm() : bool { return $this->vertical; } public function kwcoiysqqkqsugqo() : self { $this->vertical = true; return $this; } public function sgaiiqycsacgyuye() : bool { return $this->serverSide; } public function ucqsgeumwwiiueqs() : self { $this->serverSide = true; return $this; } }

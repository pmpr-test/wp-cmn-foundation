<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e176fddf2d5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Segment; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; trait SegmentsTrait { protected array $segments = []; protected bool $vertical = false; protected bool $serverSide = false; protected ?string $currentSegment = null; public function gsesiocqciggmauo() : ?array { return $this->segments; } public function eawwmoocceckimku(string $oceoauekaygmuoko) : string { return "\x70\162\x2d\x70\x61\x6e\x65\154\55\163\x65\147\x6d\145\156\x74\55{$oceoauekaygmuoko}"; } public function eooumquaoewwauoo(string $uusmaiomayssaecw) : ?Segment { return $this->segments[$uusmaiomayssaecw] ?? null; } public function skgwcckoyoqsascq() : bool { return !empty($this->gsesiocqciggmauo()); } public function ewwmomyayeoiwcck(array $wsqkgswwooewwekw) : self { $this->segments = $wsqkgswwooewwekw; return $this; } public function umiceomyaeiiwusw() : ?string { return $this->currentSegment; } public function ogimmkwaymekmoky(Segment $oceoauekaygmuoko) : self { if (!($this->sgaiiqycsacgyuye() && empty($this->umiceomyaeiiwusw()))) { goto ksksqwcyqoqgmgke; } $yeacayasgueouoqc = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg("\163\x65\x67\155\x65\156\164"); if ($yeacayasgueouoqc) { goto skysqikkawmaoase; } $yeacayasgueouoqc = $oceoauekaygmuoko->mwikyscisascoeea(); skysqikkawmaoase: $this->currentSegment = $yeacayasgueouoqc; ksksqwcyqoqgmgke: if (isset($this->segments[$oceoauekaygmuoko->mwikyscisascoeea()])) { goto skkqqcysscikmmik; } if ($oceoauekaygmuoko->yywskysiycwkwsgw()) { goto yqisgseiimwmoeee; } $oceoauekaygmuoko->jyumyyugiwwiqomk(count($this->gsesiocqciggmauo()) + 1); yqisgseiimwmoeee: $this->segments[$oceoauekaygmuoko->mwikyscisascoeea()] = $oceoauekaygmuoko; skkqqcysscikmmik: return $this; } public function ogwccyaguaieayiq() : array { $ikgwqyuyckaewsow = []; if (!$this->skgwcckoyoqsascq()) { goto guwyuigmkeeqssgw; } foreach ($this->gsesiocqciggmauo() as $oceoauekaygmuoko) { if (!$oceoauekaygmuoko->mgwewyykukaawcmo()) { goto sqsksyaqsweqiyci; } foreach ($oceoauekaygmuoko->suuogccckocgseyg() as $awcmekyiwwkeyisq) { if (!($iaiumiawmuswssky = $awcmekyiwwkeyisq->uyaeumskacgcyskk())) { goto iyekyouiiwcsewgy; } $ikgwqyuyckaewsow += $iaiumiawmuswssky; iyekyouiiwcsewgy: yuqowmmcwscosmgy: } yywgsissmueymcmg: sqsksyaqsweqiyci: sgaoyyoooykieusg: } oewsoauskqoqmiqa: guwyuigmkeeqssgw: return $ikgwqyuyckaewsow; } public function swsooicosgeeocgq(array $wsqkgswwooewwekw) : self { foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) { if (!$oceoauekaygmuoko instanceof Segment) { goto ugqeagqqaucqkcys; } $this->ogimmkwaymekmoky($oceoauekaygmuoko); ugqeagqqaucqkcys: oiissisqowcgwiyc: } cmogamaycywckuim: return $this; } public function sgssayiyusuaawmm() : bool { return $this->vertical; } public function kwcoiysqqkqsugqo() : self { $this->vertical = true; return $this; } public function sgaiiqycsacgyuye() : bool { return $this->serverSide; } public function ucqsgeumwwiiueqs() : self { $this->serverSide = true; return $this; } }

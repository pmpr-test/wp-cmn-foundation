<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d7a86a94f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Section extends Component { use TabsTrait, FieldsTrait; protected ?string $icon = null; public function qiccuiwooiquycsg() { $this->template = "\163\145\x63\x74\151\x6f\x6e"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!($ywoucyskcquysiwc = $this->equiyaoamqmaeckc())) { goto iwyomomasqykuwcw; } foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow += $cciauwuwuqaywgce->uyaeumskacgcyskk(); ekgcsqsycamakgak: } moiwoyyuauwqywom: iwyomomasqykuwcw: return $ikgwqyuyckaewsow; } public function ogqukouiogomkgka($ooggiaqasyawsuks) : self { $this->igiywquyccyiaucw("\150\145\154\x70\145\162", $ooggiaqasyawsuks); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!($ooggiaqasyawsuks = $this->imkyoqyocosuqasu("\x68\x65\154\x70\x65\x72"))) { goto amwqgwykwqyqsygy; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = "\43"; $meqocwsecsywiiqs = __("\116\145\x65\x64\40\110\x65\x6c\x70\x3f", PR__CMN__FOUNDATION); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ygeyccqqqkoikmwa, ["\x63\x6c\141\163\163" => "\151\143\x6f\x6e\55\x73\x6d"]) . $meqocwsecsywiiqs; $wwgucssaecqekuek = ["\x63\154\x61\163\163" => "\160\x72\x2d\150\x65\154\160\145\x72\40\160\x72\x2d\x74\x69\x74\154\145\55\154\145\166\x65\x6c\x2d\63"]; if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ooggiaqasyawsuks)) { goto jwicyuowwocymagu; } $eeamcawaiqocomwy = $ooggiaqasyawsuks; $wwgucssaecqekuek["\x74\x61\162\x67\x65\164"] = "\137\142\x6c\141\156\x6b"; jwicyuowwocymagu: $this->igiywquyccyiaucw("\x68\x65\154\x70\145\x72", $swqimwqeweekeusq->yuawgssgauywkiia($nsmgceoqaqogqmuw, $eeamcawaiqocomwy, $wwgucssaecqekuek, $meqocwsecsywiiqs)); amwqgwykwqyqsygy: } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\146\165\154\154", true); } }

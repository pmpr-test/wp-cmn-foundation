<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e17b763d23d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Section extends Component { use TabsTrait, FieldsTrait; protected ?string $icon = null; public function qiccuiwooiquycsg() { $this->template = "\x73\145\x63\x74\x69\x6f\x6e"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!($ywoucyskcquysiwc = $this->equiyaoamqmaeckc())) { goto ggcayqaayysyqmia; } foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow += $cciauwuwuqaywgce->ugmceccgwaaaigiy(); waiqmywasoeggkce: } qwqwwywiiuqayaca: ggcayqaayysyqmia: return $ikgwqyuyckaewsow; } public function ogqukouiogomkgka($ooggiaqasyawsuks) : self { $this->igiywquyccyiaucw("\x68\145\154\x70\145\162", $ooggiaqasyawsuks); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!($ooggiaqasyawsuks = $this->imkyoqyocosuqasu("\x68\145\x6c\160\x65\x72"))) { goto eskmkooukwwieuke; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = "\43"; $meqocwsecsywiiqs = __("\116\145\x65\x64\40\110\x65\x6c\160\77", PR__CMN__FOUNDATION); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ygeyccqqqkoikmwa, ["\x63\154\x61\163\163" => "\x69\143\157\x6e\55\163\155"]) . $meqocwsecsywiiqs; $wwgucssaecqekuek = ["\143\154\141\163\x73" => "\x70\x72\55\x68\145\154\160\x65\x72\40\x70\x72\55\x74\x69\x74\x6c\x65\x2d\154\145\x76\145\x6c\x2d\63"]; if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ooggiaqasyawsuks)) { goto miiegqgiuamasook; } $eeamcawaiqocomwy = $ooggiaqasyawsuks; $wwgucssaecqekuek["\164\x61\162\x67\x65\164"] = "\x5f\142\154\141\156\x6b"; miiegqgiuamasook: $this->igiywquyccyiaucw("\x68\145\x6c\160\x65\162", $swqimwqeweekeusq->yuawgssgauywkiia($nsmgceoqaqogqmuw, $eeamcawaiqocomwy, $wwgucssaecqekuek, $meqocwsecsywiiqs)); eskmkooukwwieuke: } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\146\165\x6c\154", true); } }

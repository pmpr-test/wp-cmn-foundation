<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e16ccfaa782             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Section extends Component { use TabsTrait, FieldsTrait; protected ?string $icon = null; public function qiccuiwooiquycsg() { $this->template = "\x73\x65\143\164\151\x6f\156"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!($ywoucyskcquysiwc = $this->equiyaoamqmaeckc())) { goto ggcayqaayysyqmia; } foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow += $cciauwuwuqaywgce->ugmceccgwaaaigiy(); waiqmywasoeggkce: } qwqwwywiiuqayaca: ggcayqaayysyqmia: return $ikgwqyuyckaewsow; } public function ogqukouiogomkgka($ooggiaqasyawsuks) : self { $this->igiywquyccyiaucw("\150\x65\154\x70\x65\x72", $ooggiaqasyawsuks); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!($ooggiaqasyawsuks = $this->imkyoqyocosuqasu("\x68\145\x6c\x70\145\162"))) { goto eskmkooukwwieuke; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = "\43"; $meqocwsecsywiiqs = __("\116\x65\x65\144\40\x48\x65\154\160\x3f", PR__CMN__FOUNDATION); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ygeyccqqqkoikmwa, ["\143\154\141\x73\163" => "\x69\x63\x6f\x6e\55\163\x6d"]) . $meqocwsecsywiiqs; $wwgucssaecqekuek = ["\x63\154\x61\x73\163" => "\x70\x72\x2d\x68\145\x6c\160\145\x72\x20\160\162\55\x74\151\x74\x6c\x65\55\154\x65\x76\145\154\x2d\63"]; if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ooggiaqasyawsuks)) { goto miiegqgiuamasook; } $eeamcawaiqocomwy = $ooggiaqasyawsuks; $wwgucssaecqekuek["\x74\x61\162\147\x65\x74"] = "\x5f\142\154\x61\x6e\x6b"; miiegqgiuamasook: $this->igiywquyccyiaucw("\x68\x65\x6c\160\x65\x72", $swqimwqeweekeusq->yuawgssgauywkiia($nsmgceoqaqogqmuw, $eeamcawaiqocomwy, $wwgucssaecqekuek, $meqocwsecsywiiqs)); eskmkooukwwieuke: } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\146\165\154\154", true); } }

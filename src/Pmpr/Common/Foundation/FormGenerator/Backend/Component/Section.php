<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675815b967a0e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Section extends Component { use TabsTrait, FieldsTrait; protected ?string $icon = null; public function qiccuiwooiquycsg() { $this->template = "\x73\x65\143\164\151\x6f\156"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($ywoucyskcquysiwc = $this->equiyaoamqmaeckc()) { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow += $cciauwuwuqaywgce->uyaeumskacgcyskk(); } } return $ikgwqyuyckaewsow; } public function ogqukouiogomkgka($ooggiaqasyawsuks) : self { $this->igiywquyccyiaucw("\x68\145\x6c\160\x65\x72", $ooggiaqasyawsuks); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($ooggiaqasyawsuks = $this->imkyoqyocosuqasu("\150\x65\154\160\145\x72")) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = "\x23"; $meqocwsecsywiiqs = __("\x4e\x65\145\144\40\110\x65\x6c\x70\x3f", PR__CMN__FOUNDATION); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ygeyccqqqkoikmwa, ["\143\154\x61\x73\163" => "\151\x63\157\156\x2d\163\x6d"]) . $meqocwsecsywiiqs; $wwgucssaecqekuek = ["\x63\154\x61\163\163" => "\x70\162\55\x68\145\x6c\x70\x65\162\x20\x70\x72\55\x74\151\x74\154\145\55\x6c\145\166\x65\154\x2d\x33"]; if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ooggiaqasyawsuks)) { $eeamcawaiqocomwy = $ooggiaqasyawsuks; $wwgucssaecqekuek["\x74\x61\x72\x67\x65\164"] = "\137\x62\154\x61\156\153"; } $this->igiywquyccyiaucw("\150\x65\154\x70\x65\x72", $swqimwqeweekeusq->yuawgssgauywkiia($nsmgceoqaqogqmuw, $eeamcawaiqocomwy, $wwgucssaecqekuek, $meqocwsecsywiiqs)); } } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\x66\x75\x6c\x6c", true); } }

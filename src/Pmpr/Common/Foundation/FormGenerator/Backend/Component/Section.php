<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679574c05515f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Section extends Component { use TabsTrait, FieldsTrait; protected ?string $icon = null; public function qiccuiwooiquycsg() { $this->template = "\163\x65\x63\164\151\157\x6e"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($ywoucyskcquysiwc = $this->equiyaoamqmaeckc()) { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow += $cciauwuwuqaywgce->uyaeumskacgcyskk(); } } return $ikgwqyuyckaewsow; } public function ogqukouiogomkgka($ooggiaqasyawsuks) : self { $this->igiywquyccyiaucw("\150\145\x6c\160\x65\x72", $ooggiaqasyawsuks); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($ooggiaqasyawsuks = $this->imkyoqyocosuqasu("\150\x65\154\160\145\x72")) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = "\x23"; $meqocwsecsywiiqs = __("\x4e\145\145\x64\x20\110\x65\x6c\x70\x3f", PR__CMN__FOUNDATION); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ygeyccqqqkoikmwa, ["\143\154\141\163\x73" => "\151\143\x6f\x6e\x2d\x73\x6d"]) . $meqocwsecsywiiqs; $wwgucssaecqekuek = ["\143\154\x61\x73\163" => "\160\x72\55\150\145\x6c\160\145\162\x20\x70\x72\x2d\164\x69\x74\154\145\55\x6c\x65\166\145\x6c\55\x33"]; if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ooggiaqasyawsuks)) { $eeamcawaiqocomwy = $ooggiaqasyawsuks; $wwgucssaecqekuek["\x74\x61\x72\x67\145\x74"] = "\x5f\142\154\x61\x6e\x6b"; } $this->igiywquyccyiaucw("\x68\x65\x6c\x70\145\162", $swqimwqeweekeusq->yuawgssgauywkiia($nsmgceoqaqogqmuw, $eeamcawaiqocomwy, $wwgucssaecqekuek, $meqocwsecsywiiqs)); } } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\146\165\x6c\x6c", true); } }

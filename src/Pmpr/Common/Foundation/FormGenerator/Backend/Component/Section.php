<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67143a37bcbb1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Section extends Component { use TabsTrait, FieldsTrait; protected ?string $icon = null; public function qiccuiwooiquycsg() { $this->template = "\163\145\x63\164\x69\x6f\x6e"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($ywoucyskcquysiwc = $this->equiyaoamqmaeckc()) { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow += $cciauwuwuqaywgce->uyaeumskacgcyskk(); } } return $ikgwqyuyckaewsow; } public function ogqukouiogomkgka($ooggiaqasyawsuks) : self { $this->igiywquyccyiaucw("\150\145\154\x70\145\x72", $ooggiaqasyawsuks); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($ooggiaqasyawsuks = $this->imkyoqyocosuqasu("\x68\145\x6c\x70\145\162")) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = "\x23"; $meqocwsecsywiiqs = __("\116\145\145\x64\40\110\145\x6c\x70\77", PR__CMN__FOUNDATION); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ygeyccqqqkoikmwa, ["\x63\154\x61\163\163" => "\151\x63\157\156\x2d\163\x6d"]) . $meqocwsecsywiiqs; $wwgucssaecqekuek = ["\x63\x6c\141\x73\163" => "\x70\x72\55\x68\145\154\160\145\x72\40\160\162\x2d\x74\151\x74\x6c\145\55\x6c\x65\166\145\154\55\63"]; if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ooggiaqasyawsuks)) { $eeamcawaiqocomwy = $ooggiaqasyawsuks; $wwgucssaecqekuek["\164\141\162\x67\x65\x74"] = "\137\x62\x6c\141\156\153"; } $this->igiywquyccyiaucw("\x68\145\154\x70\145\x72", $swqimwqeweekeusq->yuawgssgauywkiia($nsmgceoqaqogqmuw, $eeamcawaiqocomwy, $wwgucssaecqekuek, $meqocwsecsywiiqs)); } } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\x66\165\154\154", true); } }

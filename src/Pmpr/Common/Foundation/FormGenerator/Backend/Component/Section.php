<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6794e7648968d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Section extends Component { use TabsTrait, FieldsTrait; protected ?string $icon = null; public function qiccuiwooiquycsg() { $this->template = "\163\x65\143\x74\x69\x6f\156"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($ywoucyskcquysiwc = $this->equiyaoamqmaeckc()) { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow += $cciauwuwuqaywgce->uyaeumskacgcyskk(); } } return $ikgwqyuyckaewsow; } public function ogqukouiogomkgka($ooggiaqasyawsuks) : self { $this->igiywquyccyiaucw("\150\x65\154\160\x65\162", $ooggiaqasyawsuks); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($ooggiaqasyawsuks = $this->imkyoqyocosuqasu("\x68\x65\x6c\160\x65\162")) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = "\x23"; $meqocwsecsywiiqs = __("\x4e\x65\x65\x64\40\x48\x65\154\160\77", PR__CMN__FOUNDATION); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ygeyccqqqkoikmwa, ["\x63\154\x61\163\163" => "\x69\143\x6f\x6e\x2d\x73\155"]) . $meqocwsecsywiiqs; $wwgucssaecqekuek = ["\x63\x6c\141\x73\163" => "\x70\x72\x2d\x68\x65\x6c\160\145\x72\40\160\x72\55\x74\151\x74\x6c\x65\x2d\154\x65\166\145\x6c\55\63"]; if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ooggiaqasyawsuks)) { $eeamcawaiqocomwy = $ooggiaqasyawsuks; $wwgucssaecqekuek["\x74\141\162\147\145\x74"] = "\137\142\x6c\x61\x6e\153"; } $this->igiywquyccyiaucw("\x68\x65\x6c\160\145\x72", $swqimwqeweekeusq->yuawgssgauywkiia($nsmgceoqaqogqmuw, $eeamcawaiqocomwy, $wwgucssaecqekuek, $meqocwsecsywiiqs)); } } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\146\165\x6c\154", true); } }

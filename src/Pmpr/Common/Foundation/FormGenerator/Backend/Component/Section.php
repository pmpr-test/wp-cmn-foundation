<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b55badb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Section extends Component { use TabsTrait, FieldsTrait; protected ?string $icon = null; public function qiccuiwooiquycsg() { $this->template = "\x73\x65\x63\164\x69\157\156"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!($ywoucyskcquysiwc = $this->equiyaoamqmaeckc())) { goto ykomkgsekoimwoga; } foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow += $cciauwuwuqaywgce->uyaeumskacgcyskk(); kgaiygkqciegamkk: } gcikiyucocqiqkic: ykomkgsekoimwoga: return $ikgwqyuyckaewsow; } public function ogqukouiogomkgka($ooggiaqasyawsuks) : self { $this->igiywquyccyiaucw("\x68\x65\154\x70\145\x72", $ooggiaqasyawsuks); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!($ooggiaqasyawsuks = $this->imkyoqyocosuqasu("\x68\145\154\160\x65\162"))) { goto toacieymkgsmouum; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = "\x23"; $meqocwsecsywiiqs = __("\x4e\145\145\144\40\x48\x65\154\160\x3f", PR__CMN__FOUNDATION); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ygeyccqqqkoikmwa, ["\x63\x6c\x61\163\163" => "\151\x63\157\x6e\x2d\x73\x6d"]) . $meqocwsecsywiiqs; $wwgucssaecqekuek = ["\143\x6c\x61\163\163" => "\x70\162\x2d\150\x65\154\160\145\162\x20\x70\162\x2d\x74\x69\x74\x6c\x65\x2d\154\x65\x76\x65\154\x2d\x33"]; if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ooggiaqasyawsuks)) { goto uwacyygkmmwmqumm; } $eeamcawaiqocomwy = $ooggiaqasyawsuks; $wwgucssaecqekuek["\164\141\162\x67\145\164"] = "\x5f\x62\x6c\x61\x6e\153"; uwacyygkmmwmqumm: $this->igiywquyccyiaucw("\150\145\x6c\x70\145\162", $swqimwqeweekeusq->yuawgssgauywkiia($nsmgceoqaqogqmuw, $eeamcawaiqocomwy, $wwgucssaecqekuek, $meqocwsecsywiiqs)); toacieymkgsmouum: } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\146\165\x6c\x6c", true); } }

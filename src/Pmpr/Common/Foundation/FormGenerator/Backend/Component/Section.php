<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c61c8485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Section extends Component { use TabsTrait, FieldsTrait; protected ?string $icon = null; public function qiccuiwooiquycsg() { $this->template = "\163\x65\x63\x74\x69\157\156"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!($ywoucyskcquysiwc = $this->equiyaoamqmaeckc())) { goto giqssgogumimqkeo; } foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow += $cciauwuwuqaywgce->ugmceccgwaaaigiy(); kecgiacuyaumcewe: } ugsomcmgekqayoqc: giqssgogumimqkeo: return $ikgwqyuyckaewsow; } public function ogqukouiogomkgka($ooggiaqasyawsuks) : self { $this->igiywquyccyiaucw("\x68\145\154\160\145\x72", $ooggiaqasyawsuks); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!($ooggiaqasyawsuks = $this->imkyoqyocosuqasu("\x68\x65\x6c\x70\x65\x72"))) { goto csiokukquwmccgqc; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = "\x23"; $meqocwsecsywiiqs = __("\116\145\x65\x64\x20\110\x65\x6c\x70\77", PR__CMN__FOUNDATION); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ygeyccqqqkoikmwa, ["\x63\154\x61\x73\x73" => "\151\143\157\156\55\x73\x6d"]) . $meqocwsecsywiiqs; $wwgucssaecqekuek = ["\143\x6c\141\x73\x73" => "\160\162\x2d\x68\x65\154\160\x65\x72\x20\160\x72\55\164\151\164\x6c\x65\55\154\x65\x76\x65\x6c\55\x33"]; if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ooggiaqasyawsuks)) { goto wgiuiaqoekymkwwo; } $eeamcawaiqocomwy = $ooggiaqasyawsuks; $wwgucssaecqekuek["\164\141\162\147\x65\x74"] = "\x5f\142\x6c\x61\x6e\x6b"; wgiuiaqoekymkwwo: $this->igiywquyccyiaucw("\150\x65\x6c\160\x65\162", $swqimwqeweekeusq->yuawgssgauywkiia($nsmgceoqaqogqmuw, $eeamcawaiqocomwy, $wwgucssaecqekuek, $meqocwsecsywiiqs)); csiokukquwmccgqc: } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\146\x75\x6c\x6c", true); } }

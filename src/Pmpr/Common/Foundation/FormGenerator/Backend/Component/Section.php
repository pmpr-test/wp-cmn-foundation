<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Section extends Component { use TabsTrait, FieldsTrait; protected ?string $icon = null; public function qiccuiwooiquycsg() { $this->template = "\x73\x65\143\x74\x69\157\156"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!($ywoucyskcquysiwc = $this->equiyaoamqmaeckc())) { goto aikukgimkamkgwsu; } foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow += $cciauwuwuqaywgce->ugmceccgwaaaigiy(); mwkcmgksoyycumos: } wiigoqowismumcsm: aikukgimkamkgwsu: return $ikgwqyuyckaewsow; } public function ogqukouiogomkgka($ooggiaqasyawsuks) : self { $this->igiywquyccyiaucw("\x68\x65\x6c\x70\145\162", $ooggiaqasyawsuks); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!($ooggiaqasyawsuks = $this->imkyoqyocosuqasu("\150\x65\x6c\160\x65\162"))) { goto caskqicqwmyuugku; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $eeamcawaiqocomwy = "\x23"; $meqocwsecsywiiqs = __("\x4e\x65\145\144\40\x48\x65\154\160\77", PR__CMN__FOUNDATION); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::ygeyccqqqkoikmwa, ["\143\x6c\141\163\x73" => "\151\x63\x6f\156\55\163\155"]) . $meqocwsecsywiiqs; $wwgucssaecqekuek = ["\x63\154\x61\x73\163" => "\x70\x72\55\150\145\x6c\160\x65\x72\40\160\162\55\x74\151\x74\x6c\x65\x2d\x6c\x65\x76\x65\x6c\x2d\63"]; if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($ooggiaqasyawsuks)) { goto ukcukckucsyaggmw; } $eeamcawaiqocomwy = $ooggiaqasyawsuks; $wwgucssaecqekuek["\164\141\x72\x67\x65\x74"] = "\x5f\x62\154\141\156\153"; ukcukckucsyaggmw: $this->igiywquyccyiaucw("\150\x65\154\x70\145\x72", $swqimwqeweekeusq->yuawgssgauywkiia($nsmgceoqaqogqmuw, $eeamcawaiqocomwy, $wwgucssaecqekuek, $meqocwsecsywiiqs)); caskqicqwmyuugku: } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\146\x75\154\154", true); } }

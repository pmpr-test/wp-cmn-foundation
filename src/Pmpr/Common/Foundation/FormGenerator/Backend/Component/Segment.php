<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c61c8485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SidebarTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ButtonsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SectionsTrait; class Segment extends Component { use FieldsTrait, ButtonsTrait, SidebarTrait, SectionsTrait; protected ?string $icon = null; protected $content = null; public function qiccuiwooiquycsg() { $this->template = "\x73\x65\x67\155\x65\x6e\x74"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { return $this->content; } public function mukeiykoosqscuoo() { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); if (!$ewgwqamkygiqaawc) { goto wmasiggggymwkeqs; } if (is_string($ewgwqamkygiqaawc)) { goto vwyusaemeqkswgee; } if (!is_callable($ewgwqamkygiqaawc)) { goto comiusqosmykagiq; } echo $ewgwqamkygiqaawc($this); comiusqosmykagiq: goto qewmkgeeuomgomia; vwyusaemeqkswgee: echo $ewgwqamkygiqaawc; qewmkgeeuomgomia: wmasiggggymwkeqs: } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\146\165\154\x6c", true); } public function cooeyaumiimygakm(string $cmkqisoeyioisqaw) : self { return $this->igiywquyccyiaucw("\143\157\156\164\x61\x69\x6e\x65\162\x5f\x63\x6c\141\163\x73", $cmkqisoeyioisqaw); } public function qmgcisuuikgmqcsu(?string $suaemuyiacqyugsm = null) : string { if (!$suaemuyiacqyugsm) { goto csqwmisikmgeaaky; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($suaemuyiacqyugsm, ["\163\145\x67\155\145\x6e\164" => $this->mwikyscisascoeea()]); goto skokkuuieagmuwgm; csqwmisikmgeaaky: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\x65\147\155\145\x6e\164" => $this->mwikyscisascoeea()], $iwywmkygwewiamwm); skokkuuieagmuwgm: return $iwywmkygwewiamwm; } }

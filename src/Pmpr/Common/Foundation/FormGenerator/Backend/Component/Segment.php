<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SidebarTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ButtonsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SectionsTrait; class Segment extends Component { use FieldsTrait, ButtonsTrait, SidebarTrait, SectionsTrait; protected ?string $icon = null; protected $content = null; public function qiccuiwooiquycsg() { $this->template = "\163\x65\147\155\145\156\164"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { return $this->content; } public function mukeiykoosqscuoo() { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); if (!$ewgwqamkygiqaawc) { goto qewmkgeeuomgomia; } if (is_string($ewgwqamkygiqaawc)) { goto comiusqosmykagiq; } if (!is_callable($ewgwqamkygiqaawc)) { goto uiuekqekiguikuce; } echo $ewgwqamkygiqaawc($this); uiuekqekiguikuce: goto vwyusaemeqkswgee; comiusqosmykagiq: echo $ewgwqamkygiqaawc; vwyusaemeqkswgee: qewmkgeeuomgomia: } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\x66\165\x6c\154", true); } public function cooeyaumiimygakm(string $cmkqisoeyioisqaw) : self { return $this->igiywquyccyiaucw("\143\157\156\164\x61\x69\x6e\145\x72\137\x63\x6c\141\x73\163", $cmkqisoeyioisqaw); } public function qmgcisuuikgmqcsu(?string $suaemuyiacqyugsm = null) : string { if (!$suaemuyiacqyugsm) { goto wmasiggggymwkeqs; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($suaemuyiacqyugsm, ["\163\x65\x67\155\145\x6e\164" => $this->mwikyscisascoeea()]); goto csqwmisikmgeaaky; wmasiggggymwkeqs: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\x65\147\x6d\x65\156\x74" => $this->mwikyscisascoeea()], $iwywmkygwewiamwm); csqwmisikmgeaaky: return $iwywmkygwewiamwm; } }

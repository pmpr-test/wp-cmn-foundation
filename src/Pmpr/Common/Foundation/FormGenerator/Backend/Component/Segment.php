<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716d8ad41a06             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SidebarTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ButtonsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SectionsTrait; class Segment extends Component { use TabsTrait, FieldsTrait, ButtonsTrait, SidebarTrait, SectionsTrait; protected ?string $icon = null; protected $content = null; public function qiccuiwooiquycsg() { $this->template = "\x73\145\x67\x6d\x65\x6e\164"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { return $this->content; } public function mukeiykoosqscuoo() { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); if ($ewgwqamkygiqaawc) { if (is_string($ewgwqamkygiqaawc)) { echo $ewgwqamkygiqaawc; } else { if (is_callable($ewgwqamkygiqaawc)) { echo $ewgwqamkygiqaawc($this); } } } } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\x66\x75\x6c\154", true); } public function cooeyaumiimygakm(string $cmkqisoeyioisqaw) : self { return $this->igiywquyccyiaucw("\x63\157\156\164\x61\151\156\x65\162\137\x63\154\x61\163\x73", $cmkqisoeyioisqaw); } public function qmgcisuuikgmqcsu(?string $suaemuyiacqyugsm = null) : string { if (!$suaemuyiacqyugsm) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\x65\147\x6d\145\x6e\x74" => $this->mwikyscisascoeea()], $iwywmkygwewiamwm); } else { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($suaemuyiacqyugsm, ["\163\145\147\155\x65\156\x74" => $this->mwikyscisascoeea()]); } return $iwywmkygwewiamwm; } }

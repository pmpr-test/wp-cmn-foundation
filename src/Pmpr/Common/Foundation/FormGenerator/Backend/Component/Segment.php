<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1810bd5408             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SidebarTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ButtonsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SectionsTrait; class Segment extends Component { use FieldsTrait, ButtonsTrait, SidebarTrait, SectionsTrait; protected ?string $icon = null; protected $content = null; public function qiccuiwooiquycsg() { $this->template = "\x73\145\147\x6d\145\156\164"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { return $this->content; } public function mukeiykoosqscuoo() { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); if (!$ewgwqamkygiqaawc) { goto koueosuswmucsaec; } if (is_string($ewgwqamkygiqaawc)) { goto ukkmusemcqayowoa; } if (!is_callable($ewgwqamkygiqaawc)) { goto acuyqioeqaoeskya; } echo $ewgwqamkygiqaawc($this); acuyqioeqaoeskya: goto ugoeueisekcsquug; ukkmusemcqayowoa: echo $ewgwqamkygiqaawc; ugoeueisekcsquug: koueosuswmucsaec: } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\x66\x75\154\154", true); } public function cooeyaumiimygakm(string $cmkqisoeyioisqaw) : self { return $this->igiywquyccyiaucw("\143\x6f\156\x74\141\x69\x6e\145\x72\x5f\143\154\141\163\x73", $cmkqisoeyioisqaw); } public function qmgcisuuikgmqcsu(?string $suaemuyiacqyugsm = null) : string { if (!$suaemuyiacqyugsm) { goto wyqmackmyaikcggs; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($suaemuyiacqyugsm, ["\163\x65\x67\x6d\x65\x6e\164" => $this->mwikyscisascoeea()]); goto sswmueweogqkqumq; wyqmackmyaikcggs: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\x65\147\x6d\145\x6e\164" => $this->mwikyscisascoeea()], $iwywmkygwewiamwm); sswmueweogqkqumq: return $iwywmkygwewiamwm; } }

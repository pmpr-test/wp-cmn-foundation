<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SidebarTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ButtonsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SectionsTrait; class Segment extends Component { use TabsTrait, FieldsTrait, ButtonsTrait, SidebarTrait, SectionsTrait; protected ?string $icon = null; protected $content = null; public function qiccuiwooiquycsg() { $this->template = "\x73\145\x67\155\x65\x6e\x74"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { return $this->content; } public function mukeiykoosqscuoo() { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); if (!$ewgwqamkygiqaawc) { goto sagemooicmgceiug; } if (is_string($ewgwqamkygiqaawc)) { goto wcekgciqeggiiwgk; } if (!is_callable($ewgwqamkygiqaawc)) { goto iyceygqsmokgmams; } echo $ewgwqamkygiqaawc($this); iyceygqsmokgmams: goto gkwuewqmqeswqukg; wcekgciqeggiiwgk: echo $ewgwqamkygiqaawc; gkwuewqmqeswqukg: sagemooicmgceiug: } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\x66\165\x6c\154", true); } public function cooeyaumiimygakm(string $cmkqisoeyioisqaw) : self { return $this->igiywquyccyiaucw("\143\x6f\x6e\164\x61\x69\156\x65\162\x5f\143\154\x61\x73\163", $cmkqisoeyioisqaw); } public function qmgcisuuikgmqcsu(?string $suaemuyiacqyugsm = null) : string { if (!$suaemuyiacqyugsm) { goto uqcwyyiykmwygeau; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($suaemuyiacqyugsm, ["\x73\145\147\x6d\x65\156\x74" => $this->mwikyscisascoeea()]); goto yeiokcoikcysyimu; uqcwyyiykmwygeau: $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\x73\x65\x67\x6d\x65\156\164" => $this->mwikyscisascoeea()], $iwywmkygwewiamwm); yeiokcoikcysyimu: return $iwywmkygwewiamwm; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d585ed47eb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SidebarTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ButtonsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SectionsTrait; class Segment extends Component { use TabsTrait, FieldsTrait, ButtonsTrait, SidebarTrait, SectionsTrait; protected ?string $icon = null; protected $content = null; public function qiccuiwooiquycsg() { $this->template = "\163\145\x67\x6d\x65\156\x74"; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { return $this->content; } public function mukeiykoosqscuoo() { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); if ($ewgwqamkygiqaawc) { if (is_string($ewgwqamkygiqaawc)) { echo $ewgwqamkygiqaawc; } else { if (is_callable($ewgwqamkygiqaawc)) { echo $ewgwqamkygiqaawc($this); } } } } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw("\146\x75\x6c\154", true); } public function cooeyaumiimygakm(string $cmkqisoeyioisqaw) : self { return $this->igiywquyccyiaucw("\143\x6f\156\164\141\151\x6e\145\x72\137\x63\x6c\141\x73\x73", $cmkqisoeyioisqaw); } public function qmgcisuuikgmqcsu(?string $suaemuyiacqyugsm = null) : string { if (!$suaemuyiacqyugsm) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(["\163\x65\x67\155\145\x6e\164" => $this->mwikyscisascoeea()], $iwywmkygwewiamwm); } else { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($suaemuyiacqyugsm, ["\x73\145\147\155\145\156\x74" => $this->mwikyscisascoeea()]); } return $iwywmkygwewiamwm; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6f78e9d0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SidebarTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\TabsTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ButtonsTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SectionsTrait; class Segment extends Component { use TabsTrait, FieldsTrait, ButtonsTrait, SidebarTrait, SectionsTrait; protected ?string $icon = null; protected $content = null; public function qiccuiwooiquycsg() { $this->template = 'segment'; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { return $this->content; } public function mukeiykoosqscuoo() { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); if ($ewgwqamkygiqaawc) { if (is_string($ewgwqamkygiqaawc)) { echo $ewgwqamkygiqaawc; } else { if (is_callable($ewgwqamkygiqaawc)) { echo $ewgwqamkygiqaawc($this); } } } } public function uguqimqkesuguqau() : self { return $this->igiywquyccyiaucw('full', true); } public function cooeyaumiimygakm(string $cmkqisoeyioisqaw) : self { return $this->igiywquyccyiaucw('container_class', $cmkqisoeyioisqaw); } public function qmgcisuuikgmqcsu(?string $suaemuyiacqyugsm = null) : string { if (!$suaemuyiacqyugsm) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(['segment' => $this->mwikyscisascoeea()], $iwywmkygwewiamwm); } else { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->msewgimgmcgcomey($suaemuyiacqyugsm, ['segment' => $this->mwikyscisascoeea()]); } return $iwywmkygwewiamwm; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             688b67695dbe9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SectionsTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; class Tab extends Component { use FieldsTrait, SectionsTrait; protected ?string $icon = null; public function qiccuiwooiquycsg() { $this->template = 'tab'; $this->templateClass = self::class; parent::qiccuiwooiquycsg(); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($mgiqqesweuqmsymo = $this->suuogccckocgseyg()) { foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { $ikgwqyuyckaewsow += $awcmekyiwwkeyisq->uyaeumskacgcyskk(); } } return $ikgwqyuyckaewsow; } }

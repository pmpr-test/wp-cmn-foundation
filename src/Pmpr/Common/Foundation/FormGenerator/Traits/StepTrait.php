<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; trait StepTrait { protected int $number = 1; protected ?string $icon = null; protected ?string $label = null; protected ?string $content = null; protected $nextButton = null; protected $prevButton = null; protected ?string $stepTemplate = null; public function esmoocwowesymqma() { $this->template = "\x73\164\145\160"; $this->gwwmcykumqueaosa(__("\116\x65\x78\x74\40\x53\164\x65\x70", PR__CMN__FOUNDATION))->mskugockcmmyukus(__("\x50\162\x65\x76\151\157\x75\x73\x20\123\x74\x65\160", PR__CMN__FOUNDATION)); $this->qigsyyqgewgskemg("\163\x74\x65\160\55{$this->iyowqkwcwiuccgag()}\40\x73\x74\x65\x70\55{$this->mwikyscisascoeea()}"); } public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self { $this->label = $pkyyagewkiyckmwy; return $this; } public function uikgwcuascgeissw() : ?string { $meqocwsecsywiiqs = $this->label; if ($this->label) { goto gwgssaymsgykwaoe; } $meqocwsecsywiiqs = $this->title; gwgssaymsgykwaoe: return $meqocwsecsywiiqs; } public function sskkcscekwmyioou(?string $fgagmwcwcswgaiuk) : self { $this->stepTemplate = $fgagmwcwcswgaiuk; return $this; } public function uisywswywsisyuas() : ?string { return $this->stepTemplate; } public function iyowqkwcwiuccgag() : int { return $this->number; } public function pwuigqciiuyoaccc(int $eusockqasqqmoess) : self { $this->number = $eusockqasqqmoess; return $this; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function souwykwwmyygqyqi() : ?string { return $this->content; } public function oguessuismosauuu(?string $ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function mskugockcmmyukus($wuyuosykkccoageu) : self { if (!is_string($wuyuosykkccoageu)) { goto wwioiasoggswmeyy; } $wuyuosykkccoageu = $this->cyeuiyggkcqmoecc($wuyuosykkccoageu, "\x70\162\145\166"); wwioiasoggswmeyy: $this->prevButton = $wuyuosykkccoageu; return $this; } public function mekskkquqcumoioc() { return $this->prevButton; } public function gwwmcykumqueaosa($iiiuiaciwyguwwka) : self { if (!is_string($iiiuiaciwyguwwka)) { goto aacmqqkkmcyowsko; } $iiiuiaciwyguwwka = $this->cyeuiyggkcqmoecc($iiiuiaciwyguwwka, "\156\x65\x78\164"); aacmqqkkmcyowsko: $this->nextButton = $iiiuiaciwyguwwka; return $this; } public function oqamwksqqyskgwge() { return $this->nextButton; } public abstract function cyeuiyggkcqmoecc(?string $meqocwsecsywiiqs, ?string $uusmaiomayssaecw); }

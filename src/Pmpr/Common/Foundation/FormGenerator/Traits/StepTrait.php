<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c8328069630             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; trait StepTrait { protected int $number = 1; protected ?string $icon = null; protected ?string $label = null; protected ?string $content = null; protected $nextButton = null; protected $prevButton = null; protected ?string $stepTemplate = null; public function esmoocwowesymqma() { $this->template = 'step'; $this->gwwmcykumqueaosa(__('Next Step', PR__CMN__FOUNDATION))->mskugockcmmyukus(__('Previous Step', PR__CMN__FOUNDATION)); $this->qigsyyqgewgskemg("step-{$this->iyowqkwcwiuccgag()} step-{$this->mwikyscisascoeea()}"); } public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self { $this->label = $pkyyagewkiyckmwy; return $this; } public function uikgwcuascgeissw() : ?string { $meqocwsecsywiiqs = $this->label; if (!$this->label) { $meqocwsecsywiiqs = $this->title; } return $meqocwsecsywiiqs; } public function sskkcscekwmyioou(?string $fgagmwcwcswgaiuk) : self { $this->stepTemplate = $fgagmwcwcswgaiuk; return $this; } public function uisywswywsisyuas() : ?string { return $this->stepTemplate; } public function iyowqkwcwiuccgag() : int { return $this->number; } public function pwuigqciiuyoaccc(int $eusockqasqqmoess) : self { $this->number = $eusockqasqqmoess; return $this; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function souwykwwmyygqyqi() : ?string { return $this->content; } public function oguessuismosauuu(?string $ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function mskugockcmmyukus($wuyuosykkccoageu) : self { if (is_string($wuyuosykkccoageu)) { $wuyuosykkccoageu = $this->cyeuiyggkcqmoecc($wuyuosykkccoageu, 'prev'); } $this->prevButton = $wuyuosykkccoageu; return $this; } public function mekskkquqcumoioc() { return $this->prevButton; } public function gwwmcykumqueaosa($iiiuiaciwyguwwka) : self { if (is_string($iiiuiaciwyguwwka)) { $iiiuiaciwyguwwka = $this->cyeuiyggkcqmoecc($iiiuiaciwyguwwka, 'next'); } $this->nextButton = $iiiuiaciwyguwwka; return $this; } public function oqamwksqqyskgwge() { return $this->nextButton; } public abstract function cyeuiyggkcqmoecc(?string $meqocwsecsywiiqs, ?string $uusmaiomayssaecw); }

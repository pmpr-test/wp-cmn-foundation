<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705b088f1290             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; trait StepTrait { protected int $number = 1; protected ?string $icon = null; protected ?string $label = null; protected ?string $content = null; protected $nextButton = null; protected $prevButton = null; protected ?string $stepTemplate = null; public function esmoocwowesymqma() { $this->template = "\163\164\x65\160"; $this->gwwmcykumqueaosa(__("\x4e\145\x78\x74\x20\x53\164\145\x70", PR__CMN__FOUNDATION))->mskugockcmmyukus(__("\120\x72\145\x76\x69\x6f\165\x73\x20\123\x74\145\160", PR__CMN__FOUNDATION)); $this->qigsyyqgewgskemg("\163\x74\145\160\x2d{$this->iyowqkwcwiuccgag()}\40\x73\164\145\160\55{$this->mwikyscisascoeea()}"); } public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self { $this->label = $pkyyagewkiyckmwy; return $this; } public function uikgwcuascgeissw() : ?string { $meqocwsecsywiiqs = $this->label; if (!$this->label) { $meqocwsecsywiiqs = $this->title; } return $meqocwsecsywiiqs; } public function sskkcscekwmyioou(?string $fgagmwcwcswgaiuk) : self { $this->stepTemplate = $fgagmwcwcswgaiuk; return $this; } public function uisywswywsisyuas() : ?string { return $this->stepTemplate; } public function iyowqkwcwiuccgag() : int { return $this->number; } public function pwuigqciiuyoaccc(int $eusockqasqqmoess) : self { $this->number = $eusockqasqqmoess; return $this; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function souwykwwmyygqyqi() : ?string { return $this->content; } public function oguessuismosauuu(?string $ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function mskugockcmmyukus($wuyuosykkccoageu) : self { if (is_string($wuyuosykkccoageu)) { $wuyuosykkccoageu = $this->cyeuiyggkcqmoecc($wuyuosykkccoageu, "\x70\162\x65\166"); } $this->prevButton = $wuyuosykkccoageu; return $this; } public function mekskkquqcumoioc() { return $this->prevButton; } public function gwwmcykumqueaosa($iiiuiaciwyguwwka) : self { if (is_string($iiiuiaciwyguwwka)) { $iiiuiaciwyguwwka = $this->cyeuiyggkcqmoecc($iiiuiaciwyguwwka, "\156\145\170\164"); } $this->nextButton = $iiiuiaciwyguwwka; return $this; } public function oqamwksqqyskgwge() { return $this->nextButton; } public abstract function cyeuiyggkcqmoecc(?string $meqocwsecsywiiqs, ?string $uusmaiomayssaecw); }

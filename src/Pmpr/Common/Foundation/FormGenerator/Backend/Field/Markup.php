<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto mmcikqikqecaeswu; } $aokagokqyuysuksm = "\x6d\141\x72\x6b\x75\x70\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); mmcikqikqecaeswu: if ($sqeykgyoooqysmca) { goto ywsywoumuaykkeaa; } $sqeykgyoooqysmca = Constants::kicoscymgmgqeqgy; ywsywoumuaykkeaa: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\x2d\x66\x69\x65\x6c\x64\x2d\150\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto wsqiqkiucakewgou; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); wsqiqkiucakewgou: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\55\163\x70\x61\143\x65"); return $this; } }

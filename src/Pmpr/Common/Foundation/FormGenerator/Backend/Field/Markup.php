<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e176fddf2d5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto kywmiquiiwmwgooy; } $aokagokqyuysuksm = "\x6d\x61\x72\153\x75\x70\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); kywmiquiiwmwgooy: if ($sqeykgyoooqysmca) { goto syquiiogeymgicuy; } $sqeykgyoooqysmca = Constants::kicoscymgmgqeqgy; syquiiogeymgicuy: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\x2d\146\x69\145\154\x64\55\x68\164\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto yquysamwsoyyqcya; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); yquysamwsoyyqcya: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\x73\55\x73\160\141\x63\x65"); return $this; } }

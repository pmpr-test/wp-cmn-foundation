<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67052a91f300e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if (!$aokagokqyuysuksm) { $aokagokqyuysuksm = "\155\x61\162\x6b\165\x70\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); } if (!$sqeykgyoooqysmca) { $sqeykgyoooqysmca = Constants::kicoscymgmgqeqgy; } $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\146\x69\x65\154\x64\55\x68\x74\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (is_callable($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); } return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\x2d\x73\160\141\x63\145"); return $this; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6795745ee4997             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if (!$aokagokqyuysuksm) { $aokagokqyuysuksm = "\x6d\141\x72\153\x75\x70\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); } if (!$sqeykgyoooqysmca) { $sqeykgyoooqysmca = Constants::kicoscymgmgqeqgy; } $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\x2d\x66\x69\145\x6c\x64\55\150\x74\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (is_callable($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); } return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\163\55\x73\x70\141\x63\145"); return $this; } }

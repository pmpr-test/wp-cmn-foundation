<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d9fd229d29             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if (!$aokagokqyuysuksm) { $aokagokqyuysuksm = "\x6d\x61\x72\153\165\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); } if (!$sqeykgyoooqysmca) { $sqeykgyoooqysmca = Constants::kicoscymgmgqeqgy; } $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\x2d\146\151\x65\x6c\144\55\x68\x74\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (is_callable($ewgwqamkygiqaawc)) { $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); } return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\x73\x2d\x73\160\x61\x63\145"); return $this; } }

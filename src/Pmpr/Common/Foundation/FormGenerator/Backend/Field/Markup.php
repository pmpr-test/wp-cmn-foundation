<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf62d32095             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto aeoiiewygoiwuiii; } $aokagokqyuysuksm = "\155\141\x72\x6b\165\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); aeoiiewygoiwuiii: if ($sqeykgyoooqysmca) { goto cwoaockwkoukuwae; } $sqeykgyoooqysmca = Constants::kicoscymgmgqeqgy; cwoaockwkoukuwae: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\146\x69\145\154\144\55\x68\x74\155\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto ksyukmeagigokcgi; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); ksyukmeagigokcgi: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\55\x73\x70\x61\x63\x65"); return $this; } }

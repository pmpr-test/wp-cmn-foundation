<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d8187bb66             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto qgmgmkeiemcqkyim; } $aokagokqyuysuksm = "\x6d\141\162\153\x75\x70\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); qgmgmkeiemcqkyim: if ($sqeykgyoooqysmca) { goto oqoogougwwcqeimq; } $sqeykgyoooqysmca = Constants::kicoscymgmgqeqgy; oqoogougwwcqeimq: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\146\151\x65\154\144\55\150\x74\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto eqiiqamuyewoowwy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); eqiiqamuyewoowwy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\163\55\163\x70\141\x63\x65"); return $this; } }

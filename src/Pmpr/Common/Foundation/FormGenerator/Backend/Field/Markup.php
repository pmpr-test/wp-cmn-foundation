<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e2e8864db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto oikomikqcwikimkw; } $aokagokqyuysuksm = "\155\141\162\153\x75\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); oikomikqcwikimkw: if ($sqeykgyoooqysmca) { goto uwmgacqaowuguiow; } $sqeykgyoooqysmca = Constants::kicoscymgmgqeqgy; uwmgacqaowuguiow: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\146\151\x65\154\x64\55\x68\x74\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto cecamogauimuwoow; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); cecamogauimuwoow: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\x2d\163\x70\141\143\x65"); return $this; } }

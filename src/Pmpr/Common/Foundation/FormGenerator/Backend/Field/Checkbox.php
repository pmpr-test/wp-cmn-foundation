<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6de30612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Checkbox extends Input { public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x63\150\x65\x63\153\x62\x6f\170"); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\x2d\146\x69\145\x6c\x64\x2d\x63\x68\x65\x63\x6b\x62\157\x78\x2d\x65\x6c\145\155\x65\156\164"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $eqgoocgaqwqcimie = $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? Constants::ON : Constants::OFF; $this->gmywsauuqwcmakuc(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); if (!($eqgoocgaqwqcimie === Constants::ON)) { goto ewcyigsymwuuogci; } $this->qcgocuceocquqcuw("\x63\x68\145\143\153\145\144", "\143\x68\x65\143\153\145\144"); ewcyigsymwuuogci: return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyucewwiggkyeaso(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function sqasaeywwcswqqye($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyymoouyewokoeew(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function ecyiaeoqyuyuoyya($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyucewwiggkyeaso(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) : string { return $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? Constants::wiquocqckkqkmayo : Constants::ioyokcgwaowoqskk; } private function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($eqgoocgaqwqcimie); } private function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->eqieqemcascqscig($eqgoocgaqwqcimie); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705b088f1290             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Checkbox extends Input { public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\143\150\x65\143\153\x62\x6f\x78"); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\55\x66\x69\x65\x6c\x64\x2d\x63\150\x65\x63\153\142\x6f\170\x2d\x65\x6c\145\x6d\x65\156\164"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $eqgoocgaqwqcimie = $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? Constants::ON : Constants::OFF; $this->gmywsauuqwcmakuc(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); if ($eqgoocgaqwqcimie === Constants::ON) { $this->qcgocuceocquqcuw("\x63\x68\145\143\153\x65\144", "\143\150\145\x63\153\x65\x64"); } return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyucewwiggkyeaso(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function sqasaeywwcswqqye($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyymoouyewokoeew(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function ecyiaeoqyuyuoyya($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyucewwiggkyeaso(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) : string { return $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? Constants::wiquocqckkqkmayo : Constants::ioyokcgwaowoqskk; } private function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($eqgoocgaqwqcimie); } private function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->eqieqemcascqscig($eqgoocgaqwqcimie); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670da3200825a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Checkbox extends Input { public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\143\x68\x65\x63\x6b\142\157\x78"); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\146\x69\145\x6c\144\55\143\150\145\143\x6b\x62\x6f\x78\x2d\145\154\x65\155\x65\156\164"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $eqgoocgaqwqcimie = $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? Constants::ON : Constants::OFF; $this->gmywsauuqwcmakuc(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); if ($eqgoocgaqwqcimie === Constants::ON) { $this->qcgocuceocquqcuw("\143\150\x65\x63\153\145\144", "\143\x68\x65\143\x6b\145\144"); } return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyucewwiggkyeaso(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function sqasaeywwcswqqye($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyymoouyewokoeew(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function ecyiaeoqyuyuoyya($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyucewwiggkyeaso(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) : string { return $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? Constants::ON : Constants::OFF; } private function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($eqgoocgaqwqcimie); } private function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->eqieqemcascqscig($eqgoocgaqwqcimie); } }

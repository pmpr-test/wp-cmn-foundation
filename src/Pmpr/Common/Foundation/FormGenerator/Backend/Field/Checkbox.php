<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d08e0f3960             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Checkbox extends Input { public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\143\150\145\x63\x6b\x62\157\170"); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\x66\x69\145\x6c\144\x2d\x63\150\145\143\153\142\x6f\x78\x2d\x65\x6c\x65\155\145\x6e\x74"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $eqgoocgaqwqcimie = $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? Constants::ON : Constants::OFF; $this->gmywsauuqwcmakuc(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); if ($eqgoocgaqwqcimie === Constants::ON) { $this->qcgocuceocquqcuw("\x63\x68\145\x63\153\x65\144", "\143\150\x65\x63\x6b\x65\x64"); } return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyucewwiggkyeaso(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function sqasaeywwcswqqye($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyymoouyewokoeew(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function ecyiaeoqyuyuoyya($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyucewwiggkyeaso(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) : string { return $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? Constants::ON : Constants::OFF; } private function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($eqgoocgaqwqcimie); } private function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->eqieqemcascqscig($eqgoocgaqwqcimie); } }

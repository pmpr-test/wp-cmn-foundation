<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecaf054ce9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Checkbox extends Input { public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, 'checkbox'); $this->kakecegieeqyyayu()->qigsyyqgewgskemg('pr-field-checkbox-element'); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $eqgoocgaqwqcimie = $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? Constants::ON : Constants::OFF; $this->gmywsauuqwcmakuc(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); if ($eqgoocgaqwqcimie === Constants::ON) { $this->qcgocuceocquqcuw('checked', 'checked'); } return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyucewwiggkyeaso(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function sqasaeywwcswqqye($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyymoouyewokoeew(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function ecyiaeoqyuyuoyya($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { $this->qyucewwiggkyeaso(Constants::ON, $koegqoagisewcica)->qyucewwiggkyeaso(Constants::OFF, $yiygigeewmuiyceu); return $this; } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) : string { return $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? Constants::ON : Constants::OFF; } private function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($eqgoocgaqwqcimie); } private function eqieqemcascqscig($eqgoocgaqwqcimie) : bool { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->eqieqemcascqscig($eqgoocgaqwqcimie); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc33c6bdfdb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Button; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; class Form extends Component { use FieldsTrait, ObjectTrait; public function qiccuiwooiquycsg() { $this->template = Constants::ygeqsmugcaeeeuwu; $this->templateClass = self::class; $this->mcacmissyeeqkeak(Constants::iueeekcmggceyscu, __('Submit', PR__CMN__FOUNDATION))->mcacmissyeeqkeak(Constants::oomaageiyqkaiekk, true); parent::qiccuiwooiquycsg(); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($this->imkyoqyocosuqasu(Constants::oomaageiyqkaiekk)) { $ikgwqyuyckaewsow[] = $this->cwiuiiakukcsaakw($this->mwikyscisascoeea() . '_nonce')->mawcogsqogkauasq()->jyumyyugiwwiqomk(PHP_INT_MAX - 1); } $aeaqgysgaeowagug = $this->imkyoqyocosuqasu(Constants::iueeekcmggceyscu); if (is_string($aeaqgysgaeowagug)) { $aeaqgysgaeowagug = $this->qoeiescseggagsqs(Constants::iueeekcmggceyscu)->gswweykyogmsyawy($aeaqgysgaeowagug); } if ($aeaqgysgaeowagug instanceof Button) { $aeaqgysgaeowagug->jyumyyugiwwiqomk(PHP_INT_MAX)->ckccqugcgucieugo()->ooqqgmyocscgmyae()->gmscmskmuissgywk(); $ikgwqyuyckaewsow[] = $aeaqgysgaeowagug; } $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, 'getPriority'); $this->qigsyyqgewgskemg('pr-form-wrap')->qcgocuceocquqcuw(Constants::gouqcwikiiygyasc, $this->mwikyscisascoeea())->qcgocuceocquqcuw(Constants::kkeogqiyysoyuemk, $this->imkyoqyocosuqasu(Constants::kkeogqiyysoyuemk, Constants::mswoacegomcucaik)); if ($aiamqeawckcsuaou = $this->imkyoqyocosuqasu(Constants::uqgcmmosieyimiku)) { $this->qcgocuceocquqcuw(Constants::uqgcmmosieyimiku, $aiamqeawckcsuaou); } $this->acakyumkgoeiskqq($ikgwqyuyckaewsow); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c8341d2d030             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Component; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Button; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Field; use Pmpr\Common\Foundation\FormGenerator\Traits\FieldsTrait; use Pmpr\Common\Foundation\Interfaces\Constants; class Form extends Component { use FieldsTrait; public function qiccuiwooiquycsg() { $this->template = Constants::ygeqsmugcaeeeuwu; $this->templateClass = self::class; $this->mcacmissyeeqkeak(Constants::oomaageiyqkaiekk, true); parent::qiccuiwooiquycsg(); } public function mkeyausowysgcisc() : self { $this->igiywquyccyiaucw(Constants::oomaageiyqkaiekk, false); return $this; } public function cwqickkaaokiquuo(string $aiamqeawckcsuaou) : self { return $this->igiywquyccyiaucw(Constants::uqgcmmosieyimiku, $aiamqeawckcsuaou); } private function cukciuymuoaqgwic(string $qgciuiagkkguykgs) : self { return $this->igiywquyccyiaucw(Constants::kkeogqiyysoyuemk, $qgciuiagkkguykgs); } public function esekigccyyweemmw() : self { return $this->cukciuymuoaqgwic(Constants::isukcamoimieegam); } public function hiwqwcsaigyqwioe() : self { return $this->cukciuymuoaqgwic(Constants::mswoacegomcucaik); } public function wqwiougumgqousyg($aeaqgysgaeowagug = '', string $aokagokqyuysuksm = Constants::iueeekcmggceyscu) : self { if (!$aeaqgysgaeowagug) { $aeaqgysgaeowagug = __('Submit', PR__CMN__FOUNDATION); } if (is_string($aeaqgysgaeowagug)) { $aeaqgysgaeowagug = $this->qoeiescseggagsqs($aokagokqyuysuksm)->gswweykyogmsyawy($aeaqgysgaeowagug); } if ($aeaqgysgaeowagug instanceof Button) { $aeaqgysgaeowagug->jyumyyugiwwiqomk(PHP_INT_MAX)->ckccqugcgucieugo()->ooqqgmyocscgmyae(); } return $this->mkksewyosgeumwsa($aeaqgysgaeowagug); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $aokagokqyuysuksm = $this->mwikyscisascoeea(); $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou("frontend_form_fields", $this->ugmceccgwaaaigiy(), $this->mwikyscisascoeea(), $this); $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou("frontend_{$this->mwikyscisascoeea()}_form_fields", $ikgwqyuyckaewsow, $this); if ($this->imkyoqyocosuqasu(Constants::oomaageiyqkaiekk)) { $ikgwqyuyckaewsow[] = $this->cwiuiiakukcsaakw("{$aokagokqyuysuksm}_nonce")->mawcogsqogkauasq()->jyumyyugiwwiqomk(PHP_INT_MAX - 2); } $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, 'getPriority'); $this->qigsyyqgewgskemg("{$aokagokqyuysuksm}-form")->igmaewykumgwoaoy(Constants::kkeogqiyysoyuemk, $this->imkyoqyocosuqasu(Constants::kkeogqiyysoyuemk, Constants::mswoacegomcucaik))->igmaewykumgwoaoy(Constants::uqgcmmosieyimiku, $this->imkyoqyocosuqasu(Constants::uqgcmmosieyimiku, '/')); $this->acakyumkgoeiskqq($ikgwqyuyckaewsow); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7b4dde2139             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Button extends Field { public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::gqmuoaykeqeuoukm); } public function ckccqugcgucieugo(array $ywmkwiwkosakssii = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => 'border', Constants::waguuiqqgsysuukq => 'sm', Constants::igssuqwuicwawgam => 'white', 'class' => 'me-2 mr-2 my-auto']); return $this->igiywquyccyiaucw(Constants::aygyaiikmgsuccsg, $ywmkwiwkosakssii); } public function miwiwwcgekukawqs(string $sqeykgyoooqysmca) : self { return $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, $sqeykgyoooqysmca); } public function ooqqgmyocscgmyae() : self { return $this->miwiwwcgekukawqs(Constants::iueeekcmggceyscu); } public function qiqckusosoksgaua() : self { return $this->miwiwwcgekukawqs(Constants::gqmuoaykeqeuoukm); } public function ieoqemcqwqowuwie($eaoumsseceiowgsk) : self { $this->qcgocuceocquqcuw(Constants::ygeqsmugcaeeeuwu, $eaoumsseceiowgsk); return $this; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { if (!$this->title) { $this->gysckqgokmciyqcg($this->qcgakseyaikigqco()); } return parent::gswweykyogmsyawy($meqocwsecsywiiqs); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $omiygkiiauwgkegg = $this->imkyoqyocosuqasu(Constants::aygyaiikmgsuccsg); if (is_array($omiygkiiauwgkegg)) { $omiygkiiauwgkegg = $this->caokeucsksukesyo()->kugiyqykwaskawsc()->kqmkicmuscsgqeoi($omiygkiiauwgkegg); $this->gswweykyogmsyawy($omiygkiiauwgkegg . $this->qcgakseyaikigqco()); $this->qigsyyqgewgskemg('d-flex'); } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }

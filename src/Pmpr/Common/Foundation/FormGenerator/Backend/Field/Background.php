<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d172c3f1f6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Background extends Field { protected ?Text $color = null; protected ?Media $media = null; protected ?Textarea $gradient = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::akmgqeyqcecqukia); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\160\x72\x2d\x66\151\145\x6c\x64\55\x62\141\143\x6b\x67\162\x6f\165\156\144\55\x69\156\x70\165\164"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->button = $uuyucgkyusckoaeq->qoeiescseggagsqs("\x63\150\141\x6e\x67\x65\137\x69\x6e\x70\x75\164")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)->gswweykyogmsyawy(__("\123\145\x6c\145\143\x74\x20\x46\x72\157\155\x20\115\x65\x64\x69\141", PR__CMN__FOUNDATION)); $gasmmwuggcgcagum = clone $this->button; $this->media = $uuyucgkyusckoaeq->quaegkgkucwyeiqg($this->mwikyscisascoeea() . "\137\x6d\x65\144\151\141\137\x69\x6e\x70\x75\164")->ycueqsmmommygueu()->igmamuiesywmkgeu($gasmmwuggcgcagum->gswweykyogmsyawy(__("\x53\x65\x6c\x65\x63\x74\x20\x46\x72\x6f\155\x20\111\143\157\156\x20\x53\145\x74", PR__CMN__FOUNDATION))); $this->color = $uuyucgkyusckoaeq->ymuegqgyuagyucws($this->mwikyscisascoeea() . "\x5f\143\x6f\x6c\x6f\x72\137\151\156\x70\165\x74")->ikaowoaikyaicgge(); $this->gradient = $uuyucgkyusckoaeq->uouyygwcgsmygaee($this->mwikyscisascoeea() . "\137\147\162\x61\x64\151\x65\x6e\x74\137\151\x6e\x70\165\164")->qsecygiycssgacqs(2); $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); if (is_numeric($eqgoocgaqwqcimie)) { $this->media->iygyugseyaqwywyg($eqgoocgaqwqcimie); } else { if ($eqgoocgaqwqcimie) { $this->select->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\x62\x65\x66\x6f\x72\145\x5f\x62\x75\x74\x74\x6f\156\137\164\145\170\164"] = __("\x4f\x72", PR__CMN__FOUNDATION); return $kkeqqkkkqwkocsyu; } }

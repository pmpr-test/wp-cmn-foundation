<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670ed89d7ce97             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Background extends Field { protected ?Text $color = null; protected ?Media $media = null; protected ?Textarea $gradient = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::akmgqeyqcecqukia); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\x70\x72\55\x66\x69\x65\x6c\144\x2d\x62\141\143\153\147\x72\x6f\165\x6e\144\x2d\x69\156\160\x75\164"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->button = $uuyucgkyusckoaeq->qoeiescseggagsqs("\x63\x68\x61\x6e\x67\x65\137\151\156\x70\165\x74")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)->gswweykyogmsyawy(__("\x53\x65\x6c\x65\x63\x74\40\x46\x72\157\x6d\x20\x4d\145\x64\x69\x61", PR__CMN__FOUNDATION)); $gasmmwuggcgcagum = clone $this->button; $this->media = $uuyucgkyusckoaeq->quaegkgkucwyeiqg($this->mwikyscisascoeea() . "\137\155\145\144\x69\x61\137\151\x6e\x70\x75\164")->ycueqsmmommygueu()->igmamuiesywmkgeu($gasmmwuggcgcagum->gswweykyogmsyawy(__("\x53\145\x6c\145\x63\164\40\x46\162\x6f\155\x20\x49\143\x6f\x6e\40\x53\145\x74", PR__CMN__FOUNDATION))); $this->color = $uuyucgkyusckoaeq->ymuegqgyuagyucws($this->mwikyscisascoeea() . "\137\x63\157\154\x6f\162\137\151\156\x70\165\x74")->ikaowoaikyaicgge(); $this->gradient = $uuyucgkyusckoaeq->uouyygwcgsmygaee($this->mwikyscisascoeea() . "\137\x67\162\141\x64\151\x65\156\164\137\x69\156\x70\x75\164")->qsecygiycssgacqs(2); $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); if (is_numeric($eqgoocgaqwqcimie)) { $this->media->iygyugseyaqwywyg($eqgoocgaqwqcimie); } else { if ($eqgoocgaqwqcimie) { $this->select->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\142\145\x66\x6f\x72\x65\137\x62\165\x74\x74\x6f\156\137\x74\x65\x78\x74"] = __("\117\x72", PR__CMN__FOUNDATION); return $kkeqqkkkqwkocsyu; } }

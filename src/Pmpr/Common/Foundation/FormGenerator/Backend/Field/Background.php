<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d13e4bc148             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Background extends Field { protected ?Text $color = null; protected ?Media $media = null; protected ?Textarea $gradient = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::akmgqeyqcecqukia); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\x70\x72\55\x66\x69\x65\154\144\55\142\x61\x63\153\147\x72\157\x75\x6e\x64\x2d\151\x6e\x70\x75\164"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->button = $uuyucgkyusckoaeq->qoeiescseggagsqs("\143\150\x61\156\x67\145\137\x69\x6e\160\x75\164")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)->gswweykyogmsyawy(__("\123\145\x6c\145\143\x74\40\106\162\x6f\155\x20\x4d\x65\x64\151\141", PR__CMN__FOUNDATION)); $gasmmwuggcgcagum = clone $this->button; $this->media = $uuyucgkyusckoaeq->quaegkgkucwyeiqg($this->mwikyscisascoeea() . "\x5f\x6d\x65\144\151\141\137\x69\x6e\x70\x75\164")->ycueqsmmommygueu()->igmamuiesywmkgeu($gasmmwuggcgcagum->gswweykyogmsyawy(__("\123\145\154\x65\x63\164\x20\106\162\x6f\155\40\111\143\x6f\x6e\x20\x53\x65\164", PR__CMN__FOUNDATION))); $this->color = $uuyucgkyusckoaeq->ymuegqgyuagyucws($this->mwikyscisascoeea() . "\x5f\x63\157\154\157\162\x5f\151\x6e\x70\165\164")->ikaowoaikyaicgge(); $this->gradient = $uuyucgkyusckoaeq->uouyygwcgsmygaee($this->mwikyscisascoeea() . "\137\x67\x72\141\x64\151\145\156\164\137\151\x6e\x70\x75\164")->qsecygiycssgacqs(2); $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); if (is_numeric($eqgoocgaqwqcimie)) { $this->media->iygyugseyaqwywyg($eqgoocgaqwqcimie); } else { if ($eqgoocgaqwqcimie) { $this->select->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\142\145\x66\x6f\x72\x65\137\x62\x75\164\164\x6f\156\137\164\145\x78\x74"] = __("\117\162", PR__CMN__FOUNDATION); return $kkeqqkkkqwkocsyu; } }

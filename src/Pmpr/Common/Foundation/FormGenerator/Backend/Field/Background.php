<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec064496439             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Background extends Field { protected ?Text $color = null; protected ?Media $media = null; protected ?Textarea $gradient = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::akmgqeyqcecqukia); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\x70\162\x2d\146\151\145\x6c\144\55\x62\141\143\153\x67\162\157\165\x6e\144\x2d\x69\156\160\x75\x74"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->button = $uuyucgkyusckoaeq->qoeiescseggagsqs("\x63\x68\x61\x6e\x67\x65\x5f\x69\156\x70\x75\164")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)->gswweykyogmsyawy(__("\x53\x65\x6c\x65\x63\164\40\106\x72\x6f\155\x20\x4d\145\x64\151\x61", PR__CMN__FOUNDATION)); $gasmmwuggcgcagum = clone $this->button; $this->media = $uuyucgkyusckoaeq->quaegkgkucwyeiqg($this->mwikyscisascoeea() . "\137\155\145\x64\x69\x61\137\x69\x6e\160\165\164")->ycueqsmmommygueu()->igmamuiesywmkgeu($gasmmwuggcgcagum->gswweykyogmsyawy(__("\x53\145\154\x65\143\164\40\x46\x72\157\x6d\40\111\x63\157\x6e\x20\x53\x65\164", PR__CMN__FOUNDATION))); $this->color = $uuyucgkyusckoaeq->ymuegqgyuagyucws($this->mwikyscisascoeea() . "\x5f\x63\x6f\x6c\x6f\x72\137\x69\156\160\165\164")->ikaowoaikyaicgge(); $this->gradient = $uuyucgkyusckoaeq->uouyygwcgsmygaee($this->mwikyscisascoeea() . "\x5f\x67\162\141\x64\x69\x65\x6e\x74\x5f\x69\156\x70\x75\164")->qsecygiycssgacqs(2); $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); if (is_numeric($eqgoocgaqwqcimie)) { goto ceesgeawumeqkcic; } if (!$eqgoocgaqwqcimie) { goto iquykqikookaokgq; } $this->select->iygyugseyaqwywyg($eqgoocgaqwqcimie); iquykqikookaokgq: goto qiyiyuwmuoamwccs; ceesgeawumeqkcic: $this->media->iygyugseyaqwywyg($eqgoocgaqwqcimie); qiyiyuwmuoamwccs: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\142\x65\x66\x6f\162\145\x5f\x62\x75\164\164\157\156\x5f\x74\x65\170\x74"] = __("\117\162", PR__CMN__FOUNDATION); return $kkeqqkkkqwkocsyu; } }

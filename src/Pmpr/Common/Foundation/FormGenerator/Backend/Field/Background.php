<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d7a86a94f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Background extends Field { protected ?Text $color = null; protected ?Media $media = null; protected ?Textarea $gradient = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::akmgqeyqcecqukia); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\x70\162\x2d\146\151\145\154\x64\55\x62\x61\x63\153\x67\x72\157\165\x6e\144\x2d\151\x6e\x70\x75\164"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->button = $uuyucgkyusckoaeq->qoeiescseggagsqs("\x63\x68\141\x6e\x67\x65\137\151\156\x70\165\x74")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)->gswweykyogmsyawy(__("\x53\145\x6c\145\x63\x74\x20\106\162\157\x6d\40\x4d\145\x64\x69\x61", PR__CMN__FOUNDATION)); $gasmmwuggcgcagum = clone $this->button; $this->media = $uuyucgkyusckoaeq->quaegkgkucwyeiqg($this->mwikyscisascoeea() . "\x5f\155\x65\x64\x69\x61\137\x69\x6e\x70\165\164")->ycueqsmmommygueu()->igmamuiesywmkgeu($gasmmwuggcgcagum->gswweykyogmsyawy(__("\x53\x65\x6c\x65\x63\x74\40\x46\x72\x6f\x6d\x20\111\143\x6f\x6e\40\x53\145\164", PR__CMN__FOUNDATION))); $this->color = $uuyucgkyusckoaeq->ymuegqgyuagyucws($this->mwikyscisascoeea() . "\137\x63\x6f\x6c\x6f\162\x5f\x69\x6e\160\165\164")->ikaowoaikyaicgge(); $this->gradient = $uuyucgkyusckoaeq->uouyygwcgsmygaee($this->mwikyscisascoeea() . "\137\x67\x72\141\x64\151\145\x6e\x74\x5f\x69\156\x70\x75\x74")->qsecygiycssgacqs(2); $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); if (is_numeric($eqgoocgaqwqcimie)) { goto eguukwmoyaaieuww; } if (!$eqgoocgaqwqcimie) { goto cwomucmeuqqucyge; } $this->select->iygyugseyaqwywyg($eqgoocgaqwqcimie); cwomucmeuqqucyge: goto kqkeomoaociyuoye; eguukwmoyaaieuww: $this->media->iygyugseyaqwywyg($eqgoocgaqwqcimie); kqkeomoaociyuoye: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\x62\145\x66\157\162\145\137\142\165\164\x74\157\156\137\164\145\x78\164"] = __("\x4f\162", PR__CMN__FOUNDATION); return $kkeqqkkkqwkocsyu; } }

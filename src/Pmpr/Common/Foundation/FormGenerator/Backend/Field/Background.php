<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670dbd402ffa1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Background extends Field { protected ?Text $color = null; protected ?Media $media = null; protected ?Textarea $gradient = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::akmgqeyqcecqukia); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\x70\x72\55\x66\151\145\x6c\x64\x2d\x62\x61\x63\153\147\162\x6f\x75\x6e\144\x2d\x69\x6e\x70\165\164"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->button = $uuyucgkyusckoaeq->qoeiescseggagsqs("\x63\x68\141\156\x67\x65\137\151\x6e\160\x75\x74")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)->gswweykyogmsyawy(__("\x53\145\154\145\x63\164\x20\106\x72\x6f\155\x20\x4d\145\144\151\141", PR__CMN__FOUNDATION)); $gasmmwuggcgcagum = clone $this->button; $this->media = $uuyucgkyusckoaeq->quaegkgkucwyeiqg($this->mwikyscisascoeea() . "\137\x6d\x65\144\151\141\x5f\x69\x6e\x70\x75\x74")->ycueqsmmommygueu()->igmamuiesywmkgeu($gasmmwuggcgcagum->gswweykyogmsyawy(__("\123\x65\x6c\x65\143\164\40\x46\162\157\x6d\40\x49\x63\157\156\x20\123\145\x74", PR__CMN__FOUNDATION))); $this->color = $uuyucgkyusckoaeq->ymuegqgyuagyucws($this->mwikyscisascoeea() . "\x5f\143\x6f\x6c\x6f\x72\137\151\156\160\165\164")->ikaowoaikyaicgge(); $this->gradient = $uuyucgkyusckoaeq->uouyygwcgsmygaee($this->mwikyscisascoeea() . "\137\x67\x72\x61\x64\x69\x65\x6e\x74\x5f\151\x6e\x70\165\x74")->qsecygiycssgacqs(2); $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); if (is_numeric($eqgoocgaqwqcimie)) { $this->media->iygyugseyaqwywyg($eqgoocgaqwqcimie); } else { if ($eqgoocgaqwqcimie) { $this->select->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\142\x65\146\x6f\162\145\137\x62\x75\164\164\157\156\x5f\164\145\170\164"] = __("\117\162", PR__CMN__FOUNDATION); return $kkeqqkkkqwkocsyu; } }

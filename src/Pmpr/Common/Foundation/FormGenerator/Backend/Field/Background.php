<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6786e84f05bca             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Background extends Field { protected ?Text $color = null; protected ?Media $media = null; protected ?Textarea $gradient = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::akmgqeyqcecqukia); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\x70\x72\55\x66\x69\145\154\144\x2d\142\x61\143\x6b\147\162\x6f\165\x6e\144\55\x69\156\x70\x75\164"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->button = $uuyucgkyusckoaeq->qoeiescseggagsqs("\143\x68\141\156\x67\x65\x5f\151\156\x70\x75\164")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)->gswweykyogmsyawy(__("\x53\x65\x6c\145\143\164\40\x46\162\x6f\x6d\40\x4d\145\144\x69\x61", PR__CMN__FOUNDATION)); $gasmmwuggcgcagum = clone $this->button; $this->media = $uuyucgkyusckoaeq->quaegkgkucwyeiqg($this->mwikyscisascoeea() . "\137\x6d\145\x64\151\x61\x5f\x69\x6e\x70\165\164")->ycueqsmmommygueu()->igmamuiesywmkgeu($gasmmwuggcgcagum->gswweykyogmsyawy(__("\123\145\x6c\x65\x63\x74\x20\106\162\x6f\x6d\40\111\x63\x6f\156\x20\123\x65\164", PR__CMN__FOUNDATION))); $this->color = $uuyucgkyusckoaeq->ymuegqgyuagyucws($this->mwikyscisascoeea() . "\x5f\143\157\154\x6f\162\137\x69\x6e\x70\165\164")->ikaowoaikyaicgge(); $this->gradient = $uuyucgkyusckoaeq->uouyygwcgsmygaee($this->mwikyscisascoeea() . "\x5f\x67\162\x61\x64\151\145\156\164\137\151\156\160\165\164")->qsecygiycssgacqs(2); $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); if (is_numeric($eqgoocgaqwqcimie)) { $this->media->iygyugseyaqwywyg($eqgoocgaqwqcimie); } else { if ($eqgoocgaqwqcimie) { $this->select->iygyugseyaqwywyg($eqgoocgaqwqcimie); } } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\x62\x65\146\x6f\162\x65\137\x62\x75\x74\164\157\x6e\x5f\x74\145\x78\x74"] = __("\117\162", PR__CMN__FOUNDATION); return $kkeqqkkkqwkocsyu; } }

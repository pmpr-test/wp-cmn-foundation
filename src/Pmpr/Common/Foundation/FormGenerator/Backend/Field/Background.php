<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Background extends Field { protected ?Text $color = null; protected ?Media $media = null; protected ?Textarea $gradient = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::akmgqeyqcecqukia); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\x70\162\x2d\x66\151\x65\x6c\x64\x2d\142\x61\143\x6b\x67\x72\x6f\x75\156\x64\55\x69\156\x70\165\x74"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->button = $uuyucgkyusckoaeq->qoeiescseggagsqs("\x63\x68\141\x6e\x67\145\137\x69\156\160\x75\x74")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)->gswweykyogmsyawy(__("\x53\145\154\x65\x63\x74\x20\106\162\157\x6d\40\115\145\x64\x69\141", PR__CMN__FOUNDATION)); $gasmmwuggcgcagum = clone $this->button; $this->media = $uuyucgkyusckoaeq->quaegkgkucwyeiqg($this->mwikyscisascoeea() . "\137\155\x65\144\151\141\x5f\x69\156\x70\x75\x74")->ycueqsmmommygueu()->igmamuiesywmkgeu($gasmmwuggcgcagum->gswweykyogmsyawy(__("\x53\x65\154\145\x63\x74\x20\x46\x72\x6f\155\40\x49\x63\157\x6e\x20\123\x65\x74", PR__CMN__FOUNDATION))); $this->color = $uuyucgkyusckoaeq->ymuegqgyuagyucws($this->mwikyscisascoeea() . "\137\143\157\154\157\x72\137\151\x6e\x70\165\x74")->ikaowoaikyaicgge(); $this->gradient = $uuyucgkyusckoaeq->uouyygwcgsmygaee($this->mwikyscisascoeea() . "\137\147\162\x61\x64\x69\x65\156\x74\x5f\x69\x6e\x70\165\164")->qsecygiycssgacqs(2); $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); if (is_numeric($eqgoocgaqwqcimie)) { goto aegiwggkecgaiocs; } if (!$eqgoocgaqwqcimie) { goto ummsowuaoeyusgoq; } $this->select->iygyugseyaqwywyg($eqgoocgaqwqcimie); ummsowuaoeyusgoq: goto gamuuauwykwgaegc; aegiwggkecgaiocs: $this->media->iygyugseyaqwywyg($eqgoocgaqwqcimie); gamuuauwykwgaegc: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\x62\x65\146\157\x72\145\137\142\x75\164\164\157\x6e\x5f\x74\145\x78\164"] = __("\x4f\x72", PR__CMN__FOUNDATION); return $kkeqqkkkqwkocsyu; } }

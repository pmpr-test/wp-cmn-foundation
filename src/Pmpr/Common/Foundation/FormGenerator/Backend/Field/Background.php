<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf62d32095             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Background extends Field { protected ?Text $color = null; protected ?Media $media = null; protected ?Textarea $gradient = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::akmgqeyqcecqukia); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\x70\x72\x2d\x66\151\145\x6c\x64\x2d\142\x61\x63\153\147\x72\x6f\x75\x6e\144\x2d\x69\x6e\160\x75\x74"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->button = $uuyucgkyusckoaeq->qoeiescseggagsqs("\143\x68\141\156\147\145\x5f\x69\156\x70\165\x74")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)->gswweykyogmsyawy(__("\x53\145\x6c\145\x63\164\40\x46\x72\157\155\x20\x4d\145\144\x69\141", PR__CMN__FOUNDATION)); $gasmmwuggcgcagum = clone $this->button; $this->media = $uuyucgkyusckoaeq->quaegkgkucwyeiqg($this->mwikyscisascoeea() . "\x5f\155\145\x64\151\x61\x5f\x69\x6e\x70\165\164")->ycueqsmmommygueu()->igmamuiesywmkgeu($gasmmwuggcgcagum->gswweykyogmsyawy(__("\x53\x65\x6c\x65\x63\164\x20\106\162\157\x6d\40\x49\143\157\x6e\x20\x53\145\164", PR__CMN__FOUNDATION))); $this->color = $uuyucgkyusckoaeq->ymuegqgyuagyucws($this->mwikyscisascoeea() . "\x5f\x63\x6f\154\157\162\137\x69\x6e\160\165\164")->ikaowoaikyaicgge(); $this->gradient = $uuyucgkyusckoaeq->uouyygwcgsmygaee($this->mwikyscisascoeea() . "\x5f\147\x72\x61\144\x69\145\x6e\164\137\x69\x6e\160\165\x74")->qsecygiycssgacqs(2); $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); if (is_numeric($eqgoocgaqwqcimie)) { goto iquykqikookaokgq; } if (!$eqgoocgaqwqcimie) { goto eicuywagooikuusg; } $this->select->iygyugseyaqwywyg($eqgoocgaqwqcimie); eicuywagooikuusg: goto ceesgeawumeqkcic; iquykqikookaokgq: $this->media->iygyugseyaqwywyg($eqgoocgaqwqcimie); ceesgeawumeqkcic: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\142\145\146\157\x72\x65\137\x62\165\164\164\157\156\137\x74\145\170\164"] = __("\x4f\x72", PR__CMN__FOUNDATION); return $kkeqqkkkqwkocsyu; } }

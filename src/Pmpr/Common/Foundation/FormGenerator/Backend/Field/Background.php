<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ec0c0505             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Background extends Field { protected ?Text $color = null; protected ?Media $media = null; protected ?Textarea $gradient = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::akmgqeyqcecqukia); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\160\x72\55\x66\151\x65\x6c\144\x2d\x62\x61\143\x6b\x67\x72\x6f\165\156\x64\x2d\151\156\x70\165\164"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->button = $uuyucgkyusckoaeq->qoeiescseggagsqs("\143\150\141\156\x67\145\137\151\156\x70\165\164")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)->gswweykyogmsyawy(__("\x53\x65\x6c\145\143\164\x20\x46\x72\157\x6d\x20\x4d\x65\144\x69\141", PR__CMN__FOUNDATION)); $gasmmwuggcgcagum = clone $this->button; $this->media = $uuyucgkyusckoaeq->quaegkgkucwyeiqg($this->mwikyscisascoeea() . "\x5f\x6d\145\x64\x69\x61\x5f\x69\156\160\165\164")->ycueqsmmommygueu()->igmamuiesywmkgeu($gasmmwuggcgcagum->gswweykyogmsyawy(__("\123\145\154\145\x63\x74\x20\106\162\x6f\x6d\40\x49\x63\157\x6e\x20\x53\x65\x74", PR__CMN__FOUNDATION))); $this->color = $uuyucgkyusckoaeq->ymuegqgyuagyucws($this->mwikyscisascoeea() . "\x5f\143\x6f\x6c\157\x72\x5f\151\156\x70\165\164")->ikaowoaikyaicgge(); $this->gradient = $uuyucgkyusckoaeq->uouyygwcgsmygaee($this->mwikyscisascoeea() . "\137\147\162\141\144\x69\145\156\x74\x5f\151\x6e\x70\x75\164")->qsecygiycssgacqs(2); $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); if (is_numeric($eqgoocgaqwqcimie)) { goto oqoogougwwcqeimq; } if (!$eqgoocgaqwqcimie) { goto qgmgmkeiemcqkyim; } $this->select->iygyugseyaqwywyg($eqgoocgaqwqcimie); qgmgmkeiemcqkyim: goto eqiiqamuyewoowwy; oqoogougwwcqeimq: $this->media->iygyugseyaqwywyg($eqgoocgaqwqcimie); eqiiqamuyewoowwy: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\142\145\146\157\162\x65\137\x62\x75\x74\x74\x6f\x6e\x5f\x74\145\170\x74"] = __("\x4f\162", PR__CMN__FOUNDATION); return $kkeqqkkkqwkocsyu; } }

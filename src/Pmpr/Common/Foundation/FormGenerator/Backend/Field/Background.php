<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e17b763d23d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Background extends Field { protected ?Text $color = null; protected ?Media $media = null; protected ?Textarea $gradient = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::akmgqeyqcecqukia); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\x70\x72\55\146\151\x65\154\144\55\142\141\x63\153\147\x72\x6f\165\x6e\144\55\151\x6e\160\x75\x74"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->button = $uuyucgkyusckoaeq->qoeiescseggagsqs("\143\x68\x61\156\x67\145\137\x69\156\160\165\164")->mswqgegakmgmewwq()->gmscmskmuissgywk(true)->gswweykyogmsyawy(__("\x53\145\x6c\145\143\x74\40\106\x72\157\155\x20\x4d\145\x64\151\x61", PR__CMN__FOUNDATION)); $gasmmwuggcgcagum = clone $this->button; $this->media = $uuyucgkyusckoaeq->quaegkgkucwyeiqg($this->mwikyscisascoeea() . "\137\155\x65\144\151\141\x5f\x69\156\160\x75\164")->ycueqsmmommygueu()->igmamuiesywmkgeu($gasmmwuggcgcagum->gswweykyogmsyawy(__("\x53\x65\154\x65\x63\x74\40\106\x72\x6f\x6d\x20\111\x63\x6f\x6e\40\123\145\x74", PR__CMN__FOUNDATION))); $this->color = $uuyucgkyusckoaeq->ymuegqgyuagyucws($this->mwikyscisascoeea() . "\x5f\143\157\x6c\157\x72\137\x69\156\x70\165\164")->ikaowoaikyaicgge(); $this->gradient = $uuyucgkyusckoaeq->uouyygwcgsmygaee($this->mwikyscisascoeea() . "\137\147\162\141\x64\x69\145\156\164\137\x69\x6e\x70\x75\x74")->qsecygiycssgacqs(2); $eqgoocgaqwqcimie = $this->qooeaookuemoqecm(); if (is_numeric($eqgoocgaqwqcimie)) { goto cqwgmwqiakmgyuee; } if (!$eqgoocgaqwqcimie) { goto ckuagmyqkyoeeaeu; } $this->select->iygyugseyaqwywyg($eqgoocgaqwqcimie); ckuagmyqkyoeeaeu: goto ksgwgcguemcescqg; cqwgmwqiakmgyuee: $this->media->iygyugseyaqwywyg($eqgoocgaqwqcimie); ksgwgcguemcescqg: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\x62\145\x66\x6f\162\145\x5f\142\165\164\x74\x6f\x6e\137\x74\x65\170\x74"] = __("\117\162", PR__CMN__FOUNDATION); return $kkeqqkkkqwkocsyu; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b645383f9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Media extends Field { protected array $buttons = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\155\145\x64\151\x61"); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\141\x64\x6d\151\156\137\x65\156\x71\x75\145\x75\145\x5f\163\143\162\x69\x70\164\163", "\167\x70\137\145\156\161\x75\x65\165\x65\x5f\x6d\x65\x64\x69\141"); } public function imswwiyicyksouus() : array { return $this->buttons; } public function cyeuiyggkcqmoecc(string $aokagokqyuysuksm) : ?Button { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->imswwiyicyksouus(), $aokagokqyuysuksm); } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ecqkouyiioksggkw($eqgoocgaqwqcimie); } $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function eswksowyeqcsokew(string $oiegiwogmwmawkeo) : self { return $this->kcemgwysykceeecw(Constants::waguuiqqgsysuukq, $oiegiwogmwmawkeo); } public function eicsoaeqamqgqsis($yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ["\x6d\160\x34"]; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (!in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->eyiiyqiykcsusuwi("\x76\x69\x64\145\157\x2f{$sqeykgyoooqysmca}"); } } return $this; } public function wwsssmuaksogoekw() : self { return $this->eyiiyqiykcsusuwi("\x69\155\141\147\x65\57\163\166\147\x2b\170\x6d\x6c"); } public function ycueqsmmommygueu(array $yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ["\147\x69\x66", "\x70\156\147", "\152\160\145\147", "\x73\x76\147\53\x78\x6d\154", "\x77\x65\x62\x70", "\x61\166\x69\146"]; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (!in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->eyiiyqiykcsusuwi("\151\x6d\141\x67\x65\57{$sqeykgyoooqysmca}"); } } return $this; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca) : self { $qgeeqyucwycemwmo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->ycceuaowuugaemyi(), Constants::squoamkioomemiyi, []); if (!in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true)) { $qgeeqyucwycemwmo[] = $sqeykgyoooqysmca; $this->kcemgwysykceeecw(Constants::squoamkioomemiyi, $qgeeqyucwycemwmo); } return $this; } private function kcemgwysykceeecw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $qmmuaigaamusycak = $this->ycceuaowuugaemyi(); $qmmuaigaamusycak[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this->igiywquyccyiaucw("\155\x6f\x64\141\x6c\x5f\x71\x75\x65\x72\x79", $qmmuaigaamusycak); } private function ycceuaowuugaemyi() : array { return (array) $this->imkyoqyocosuqasu("\155\157\x64\141\x6c\x5f\x71\x75\x65\x72\x79", []); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->mcacmissyeeqkeak(Constants::kcyioiskeyiemoga, __("\x53\145\x6c\x65\x63\164\40\115\145\x64\x69\141", PR__CMN__FOUNDATION)); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\155\x65\x64\151\141\x5f\x63\150\141\x6e\147\x65")->mswqgegakmgmewwq()->goqoickiksqsaeyk()->gswweykyogmsyawy(__("\103\150\x61\156\x67\145", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\x70\x72\x2d\x66\151\145\154\144\55\155\x65\x64\x69\x61\x2d\x63\150\x61\x6e\x67\145"))->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\155\145\144\x69\x61\137\x72\145\x6d\x6f\166\145")->mswqgegakmgmewwq()->muywawimuacwmkgw()->gswweykyogmsyawy(__("\122\145\x6d\157\166\x65", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\160\162\55\146\x69\145\154\x64\55\155\145\144\151\x61\x2d\162\x65\x6d\x6f\x76\145")); $this->mcacmissyeeqkeak("\163\x69\x7a\x65\x6e\141\x6d\x65", Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak("\x73\x69\172\145\x70\x72\145\x69\x76\x65", Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak("\x69\156\146\x6f\x72\x6d\141\x74\151\x6f\156", [Constants::qescuiwgsyuikume => __("\x54\x69\164\x6c\145", PR__CMN__FOUNDATION), Constants::jwgqsuikqcsgemuu => __("\124\171\160\x65", PR__CMN__FOUNDATION)]); $this->mcacmissyeeqkeak(Constants::ismwycwsasweqomi, [Constants::qescuiwgsyuikume => $this->imkyoqyocosuqasu("\155\157\x64\x61\154\137\164\151\164\154\145", sprintf(__("\x53\x65\154\x65\x63\x74\40\x66\x6f\x72\40\45\163", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())), Constants::gqmuoaykeqeuoukm => [Constants::TEXT => $this->imkyoqyocosuqasu("\x6d\157\144\x61\154\137\142\x75\164\164\x6f\156\x5f\164\145\x78\x74", __("\125\163\145\x20\x54\x68\151\x73\40\106\x69\154\145", PR__CMN__FOUNDATION))], "\x6c\x69\x62\x72\x61\162\171" => $this->imkyoqyocosuqasu("\155\157\144\141\x6c\x5f\161\165\x65\x72\x79", []), "\155\x75\x6c\164\x69\160\154\145" => false]); $this->eskgwaywimqcwcyy("\x63\x6f\x6e\x66\151\x67", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($this->kooiucqkggeagccu())); $qcokcugqceckmigs = ''; if ($this->ysyswymameciiyce()) { $aiooqyausygaasqm = $this->qooeaookuemoqecm(); foreach ($this->imkyoqyocosuqasu("\151\156\x66\x6f\x72\x6d\141\x74\151\x6f\156", []) as $uusmaiomayssaecw => $meqocwsecsywiiqs) { $eqgoocgaqwqcimie = ''; switch ($uusmaiomayssaecw) { case Constants::qescuiwgsyuikume: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($aiooqyausygaasqm); break; case Constants::jwgqsuikqcsgemuu: $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($aiooqyausygaasqm); break; case Constants::eqkeooqcsscoggia: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->souwykwwmyygqyqi($aiooqyausygaasqm); break; } if ($eqgoocgaqwqcimie) { $qcokcugqceckmigs .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui("{$meqocwsecsywiiqs}\72\x20{$eqgoocgaqwqcimie}", ["\143\x6c\141\x73\x73" => "\160\x72\x2d\x74\151\164\x6c\x65\55\154\x65\x76\x65\154\x2d\63", "\x64\141\x74\141\x2d\x6c\x69\156\145" => 2]); } } } $this->igiywquyccyiaucw("\x69\156\146\157\x72\x6d\141\164\151\x6f\156", $qcokcugqceckmigs); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if ($this->ysyswymameciiyce()) { $kkeqqkkkqwkocsyu["\146\151\145\154\x64\x5f\143\157\156\x74\x61\151\x6e\x65\x72\137\143\154\x61\x73\x73"] = "\155\145\144\151\141\55\141\x64\x64\x65\144"; } return $kkeqqkkkqwkocsyu; } }

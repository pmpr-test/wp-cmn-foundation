<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670da3806785e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Media extends Field { protected array $buttons = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\155\145\x64\151\141"); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\x61\144\155\x69\x6e\137\x65\156\161\x75\x65\x75\145\x5f\x73\143\x72\151\160\x74\163", "\x77\160\137\145\156\x71\165\x65\165\x65\x5f\x6d\145\144\151\141"); } public function imswwiyicyksouus() : array { return $this->buttons; } public function cyeuiyggkcqmoecc(string $aokagokqyuysuksm) : ?Button { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->imswwiyicyksouus(), $aokagokqyuysuksm); } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ecqkouyiioksggkw($eqgoocgaqwqcimie); } $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function eswksowyeqcsokew(string $oiegiwogmwmawkeo) : self { return $this->kcemgwysykceeecw(Constants::waguuiqqgsysuukq, $oiegiwogmwmawkeo); } public function eicsoaeqamqgqsis($yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ["\x6d\160\64"]; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (!in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->eyiiyqiykcsusuwi("\166\x69\x64\x65\x6f\x2f{$sqeykgyoooqysmca}"); } } return $this; } public function wwsssmuaksogoekw() : self { return $this->eyiiyqiykcsusuwi("\151\x6d\x61\x67\145\x2f\x73\x76\147\53\x78\155\154"); } public function ycueqsmmommygueu(array $yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ["\x67\151\146", "\x70\x6e\x67", "\152\160\145\147", "\x73\166\x67\53\170\x6d\x6c", "\167\x65\x62\x70", "\x61\166\151\146"]; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (!in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->eyiiyqiykcsusuwi("\x69\155\141\x67\x65\57{$sqeykgyoooqysmca}"); } } return $this; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca) : self { $qgeeqyucwycemwmo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->ycceuaowuugaemyi(), Constants::squoamkioomemiyi, []); if (!in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true)) { $qgeeqyucwycemwmo[] = $sqeykgyoooqysmca; $this->kcemgwysykceeecw(Constants::squoamkioomemiyi, $qgeeqyucwycemwmo); } return $this; } private function kcemgwysykceeecw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $qmmuaigaamusycak = $this->ycceuaowuugaemyi(); $qmmuaigaamusycak[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this->igiywquyccyiaucw("\x6d\x6f\144\x61\x6c\137\161\x75\145\162\171", $qmmuaigaamusycak); } private function ycceuaowuugaemyi() : array { return (array) $this->imkyoqyocosuqasu("\x6d\x6f\x64\x61\154\137\x71\165\x65\162\x79", []); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->mcacmissyeeqkeak(Constants::kcyioiskeyiemoga, __("\123\145\154\145\x63\164\x20\115\145\x64\151\x61", PR__CMN__FOUNDATION)); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\x6d\145\144\x69\141\137\x63\x68\141\156\147\x65")->mswqgegakmgmewwq()->goqoickiksqsaeyk()->gswweykyogmsyawy(__("\103\150\x61\156\147\145", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\160\x72\x2d\x66\151\x65\x6c\144\55\x6d\x65\x64\151\141\x2d\x63\x68\141\156\x67\x65"))->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\155\x65\144\151\141\x5f\x72\x65\155\x6f\x76\145")->mswqgegakmgmewwq()->muywawimuacwmkgw()->gswweykyogmsyawy(__("\122\x65\155\x6f\166\145", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\x70\162\55\146\151\x65\154\x64\x2d\155\x65\x64\151\141\x2d\x72\145\x6d\157\x76\145")); $this->mcacmissyeeqkeak("\163\x69\172\x65\156\141\155\x65", Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak("\x73\x69\172\x65\x70\162\145\x69\x76\145", Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak("\x69\x6e\x66\x6f\162\155\x61\x74\x69\x6f\156", [Constants::qescuiwgsyuikume => __("\x54\x69\x74\x6c\145", PR__CMN__FOUNDATION), Constants::jwgqsuikqcsgemuu => __("\x54\x79\160\x65", PR__CMN__FOUNDATION)]); $this->mcacmissyeeqkeak(Constants::ismwycwsasweqomi, [Constants::qescuiwgsyuikume => $this->imkyoqyocosuqasu("\155\157\144\x61\x6c\137\x74\151\x74\154\145", sprintf(__("\123\x65\x6c\x65\x63\x74\x20\146\157\x72\40\45\x73", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())), Constants::gqmuoaykeqeuoukm => [Constants::TEXT => $this->imkyoqyocosuqasu("\155\x6f\144\x61\x6c\x5f\142\x75\164\x74\157\156\137\x74\145\x78\164", __("\125\163\145\x20\x54\150\151\163\x20\106\151\x6c\x65", PR__CMN__FOUNDATION))], "\x6c\151\x62\162\x61\162\x79" => $this->imkyoqyocosuqasu("\155\157\x64\x61\x6c\x5f\x71\165\x65\x72\x79", []), "\x6d\x75\154\164\x69\x70\154\x65" => false]); $this->eskgwaywimqcwcyy("\x63\x6f\156\146\x69\x67", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($this->kooiucqkggeagccu())); $qcokcugqceckmigs = ''; if ($this->ysyswymameciiyce()) { $aiooqyausygaasqm = $this->qooeaookuemoqecm(); foreach ($this->imkyoqyocosuqasu("\151\x6e\146\x6f\162\x6d\x61\x74\x69\x6f\156", []) as $uusmaiomayssaecw => $meqocwsecsywiiqs) { $eqgoocgaqwqcimie = ''; switch ($uusmaiomayssaecw) { case Constants::qescuiwgsyuikume: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($aiooqyausygaasqm); break; case Constants::jwgqsuikqcsgemuu: $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($aiooqyausygaasqm); break; case Constants::eqkeooqcsscoggia: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->souwykwwmyygqyqi($aiooqyausygaasqm); break; } if ($eqgoocgaqwqcimie) { $qcokcugqceckmigs .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui("{$meqocwsecsywiiqs}\x3a\40{$eqgoocgaqwqcimie}", ["\x63\154\141\163\x73" => "\x70\162\55\x74\151\164\154\145\55\154\x65\166\145\x6c\x2d\63", "\144\141\x74\141\x2d\x6c\151\x6e\145" => 2]); } } } $this->igiywquyccyiaucw("\151\x6e\x66\x6f\162\155\x61\x74\151\157\156", $qcokcugqceckmigs); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if ($this->ysyswymameciiyce()) { $kkeqqkkkqwkocsyu["\x66\151\x65\154\144\x5f\x63\x6f\x6e\164\141\151\x6e\145\162\137\x63\154\x61\x73\163"] = "\155\x65\x64\x69\x61\x2d\141\144\144\145\x64"; } return $kkeqqkkkqwkocsyu; } }

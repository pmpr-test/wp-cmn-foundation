<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720bb1389a49             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Media extends Field { protected array $buttons = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x6d\145\x64\151\x61"); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\141\x64\x6d\151\156\137\145\x6e\161\165\145\165\145\x5f\163\x63\162\x69\x70\x74\x73", "\167\160\x5f\x65\156\161\x75\145\x75\145\137\x6d\x65\144\151\141"); } public function imswwiyicyksouus() : array { return $this->buttons; } public function cyeuiyggkcqmoecc(string $aokagokqyuysuksm) : ?Button { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->imswwiyicyksouus(), $aokagokqyuysuksm); } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ecqkouyiioksggkw($eqgoocgaqwqcimie); } $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function eswksowyeqcsokew(string $oiegiwogmwmawkeo) : self { return $this->kcemgwysykceeecw(Constants::waguuiqqgsysuukq, $oiegiwogmwmawkeo); } public function eicsoaeqamqgqsis($yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ["\x6d\x70\x34"]; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (!in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->eyiiyqiykcsusuwi("\x76\x69\x64\x65\x6f\57{$sqeykgyoooqysmca}"); } } return $this; } public function wwsssmuaksogoekw() : self { return $this->eyiiyqiykcsusuwi("\x69\x6d\x61\x67\x65\57\163\166\147\x2b\x78\x6d\154"); } public function ycueqsmmommygueu(array $yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ["\x67\x69\146", "\x70\156\147", "\152\160\145\147", "\163\x76\x67\x2b\x78\x6d\154", "\x77\145\142\160", "\x61\166\x69\146"]; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (!in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->eyiiyqiykcsusuwi("\151\x6d\x61\147\145\x2f{$sqeykgyoooqysmca}"); } } return $this; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca) : self { $qgeeqyucwycemwmo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->ycceuaowuugaemyi(), Constants::squoamkioomemiyi, []); if (!in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true)) { $qgeeqyucwycemwmo[] = $sqeykgyoooqysmca; $this->kcemgwysykceeecw(Constants::squoamkioomemiyi, $qgeeqyucwycemwmo); } return $this; } private function kcemgwysykceeecw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $qmmuaigaamusycak = $this->ycceuaowuugaemyi(); $qmmuaigaamusycak[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this->igiywquyccyiaucw("\x6d\x6f\x64\x61\x6c\137\161\165\145\162\x79", $qmmuaigaamusycak); } private function ycceuaowuugaemyi() : array { return (array) $this->imkyoqyocosuqasu("\155\x6f\144\x61\x6c\137\x71\x75\x65\x72\x79", []); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->mcacmissyeeqkeak(Constants::kcyioiskeyiemoga, __("\123\145\154\145\x63\164\x20\x4d\145\144\151\x61", PR__CMN__FOUNDATION)); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\155\145\144\x69\x61\x5f\x63\150\x61\156\x67\x65")->mswqgegakmgmewwq()->goqoickiksqsaeyk()->gswweykyogmsyawy(__("\x43\x68\x61\x6e\x67\145", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\160\x72\x2d\x66\151\145\154\144\55\155\145\x64\151\x61\55\143\150\x61\156\x67\x65"))->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\155\145\144\x69\x61\x5f\x72\x65\x6d\157\x76\x65")->mswqgegakmgmewwq()->muywawimuacwmkgw()->gswweykyogmsyawy(__("\122\x65\x6d\157\166\x65", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\160\x72\55\x66\151\145\154\x64\55\155\x65\144\x69\x61\x2d\x72\x65\155\157\x76\145")); $this->mcacmissyeeqkeak("\163\x69\x7a\x65\156\141\x6d\x65", Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak("\163\151\172\x65\160\x72\x65\x69\166\x65", Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak("\151\156\146\x6f\162\x6d\141\164\151\x6f\x6e", [Constants::qescuiwgsyuikume => __("\124\x69\164\x6c\x65", PR__CMN__FOUNDATION), Constants::jwgqsuikqcsgemuu => __("\124\x79\x70\145", PR__CMN__FOUNDATION)]); $this->mcacmissyeeqkeak(Constants::ismwycwsasweqomi, [Constants::qescuiwgsyuikume => $this->imkyoqyocosuqasu("\x6d\157\x64\x61\154\137\164\x69\x74\154\145", sprintf(__("\x53\145\x6c\x65\x63\164\40\x66\x6f\x72\x20\45\x73", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())), Constants::gqmuoaykeqeuoukm => [Constants::TEXT => $this->imkyoqyocosuqasu("\155\157\144\141\154\137\142\165\164\164\x6f\x6e\x5f\x74\x65\x78\164", __("\125\163\x65\x20\124\x68\151\x73\x20\106\151\x6c\x65", PR__CMN__FOUNDATION))], "\154\x69\142\x72\x61\162\171" => $this->imkyoqyocosuqasu("\x6d\x6f\x64\x61\x6c\x5f\161\165\x65\x72\x79", []), "\155\x75\x6c\x74\151\160\154\x65" => false]); $this->eskgwaywimqcwcyy("\143\x6f\156\146\x69\147", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($this->kooiucqkggeagccu())); $qcokcugqceckmigs = ''; if ($this->ysyswymameciiyce()) { $aiooqyausygaasqm = $this->qooeaookuemoqecm(); foreach ($this->imkyoqyocosuqasu("\x69\156\146\x6f\x72\155\x61\x74\151\x6f\156", []) as $uusmaiomayssaecw => $meqocwsecsywiiqs) { $eqgoocgaqwqcimie = ''; switch ($uusmaiomayssaecw) { case Constants::qescuiwgsyuikume: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($aiooqyausygaasqm); break; case Constants::jwgqsuikqcsgemuu: $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($aiooqyausygaasqm); break; case Constants::eqkeooqcsscoggia: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->souwykwwmyygqyqi($aiooqyausygaasqm); break; } if ($eqgoocgaqwqcimie) { $qcokcugqceckmigs .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui("{$meqocwsecsywiiqs}\72\40{$eqgoocgaqwqcimie}", ["\x63\154\141\163\x73" => "\x70\x72\55\164\x69\164\154\145\55\154\145\x76\x65\x6c\55\63", "\x64\141\x74\141\x2d\154\151\156\x65" => 2]); } } } $this->igiywquyccyiaucw("\x69\156\x66\157\162\x6d\x61\164\x69\x6f\x6e", $qcokcugqceckmigs); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if ($this->ysyswymameciiyce()) { $kkeqqkkkqwkocsyu["\146\151\x65\x6c\x64\x5f\x63\157\156\x74\141\x69\156\x65\162\137\143\x6c\x61\163\x73"] = "\x6d\x65\x64\151\x61\55\x61\144\144\145\x64"; } return $kkeqqkkkqwkocsyu; } }

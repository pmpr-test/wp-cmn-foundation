<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a408a2b74             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Media extends Field { protected array $buttons = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x6d\145\x64\x69\141"); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\x61\144\155\151\156\x5f\x65\x6e\x71\165\145\x75\x65\x5f\x73\143\x72\x69\160\164\x73", "\167\x70\137\x65\156\x71\165\x65\x75\145\137\x6d\x65\x64\151\141"); } public function imswwiyicyksouus() : array { return $this->buttons; } public function cyeuiyggkcqmoecc(string $aokagokqyuysuksm) : ?Button { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->imswwiyicyksouus(), $aokagokqyuysuksm); } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto cwkouaeieiyiykim; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ecqkouyiioksggkw($eqgoocgaqwqcimie); cwkouaeieiyiykim: $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function eswksowyeqcsokew(string $oiegiwogmwmawkeo) : self { return $this->kcemgwysykceeecw(Constants::waguuiqqgsysuukq, $oiegiwogmwmawkeo); } public function eicsoaeqamqgqsis($yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ["\155\160\x34"]; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { goto smmgkqeacswimyas; } $this->eyiiyqiykcsusuwi("\166\x69\x64\145\x6f\x2f{$sqeykgyoooqysmca}"); smmgkqeacswimyas: qmmieiquoegeaqok: } uawcmuiummigeqea: return $this; } public function wwsssmuaksogoekw() : self { return $this->eyiiyqiykcsusuwi("\151\x6d\x61\147\145\57\x73\x76\x67\x2b\170\x6d\154"); } public function ycueqsmmommygueu(array $yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ["\147\x69\146", "\160\x6e\147", "\152\x70\x65\147", "\163\166\x67\x2b\x78\155\x6c", "\167\x65\x62\160", "\141\x76\x69\146"]; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { goto ewugkyumwuomukie; } $this->eyiiyqiykcsusuwi("\x69\x6d\x61\x67\x65\x2f{$sqeykgyoooqysmca}"); ewugkyumwuomukie: qquugwwesqswouyc: } kmwwamokwgagomye: return $this; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca) : self { $qgeeqyucwycemwmo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->ycceuaowuugaemyi(), Constants::squoamkioomemiyi, []); if (in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true)) { goto wwigiswokyqkamsu; } $qgeeqyucwycemwmo[] = $sqeykgyoooqysmca; $this->kcemgwysykceeecw(Constants::squoamkioomemiyi, $qgeeqyucwycemwmo); wwigiswokyqkamsu: return $this; } private function kcemgwysykceeecw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $qmmuaigaamusycak = $this->ycceuaowuugaemyi(); $qmmuaigaamusycak[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this->igiywquyccyiaucw("\x6d\157\x64\x61\x6c\137\161\165\x65\x72\171", $qmmuaigaamusycak); } private function ycceuaowuugaemyi() : array { return (array) $this->imkyoqyocosuqasu("\155\x6f\x64\141\154\x5f\x71\x75\145\162\x79", []); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->mcacmissyeeqkeak(Constants::kcyioiskeyiemoga, __("\x53\x65\x6c\x65\143\164\x20\x4d\145\x64\151\141", PR__CMN__FOUNDATION)); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\x6d\145\144\151\x61\137\x63\x68\141\156\147\145")->mswqgegakmgmewwq()->goqoickiksqsaeyk()->gswweykyogmsyawy(__("\103\150\x61\x6e\x67\x65", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\x70\162\x2d\146\151\145\154\x64\55\155\145\144\x69\x61\55\x63\150\141\x6e\147\145"))->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\155\x65\144\x69\141\137\162\145\x6d\x6f\x76\145")->mswqgegakmgmewwq()->muywawimuacwmkgw()->gswweykyogmsyawy(__("\x52\145\155\157\166\x65", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\160\x72\55\x66\151\x65\154\144\x2d\x6d\145\144\151\141\55\x72\145\155\157\166\145")); $this->mcacmissyeeqkeak("\163\x69\x7a\145\x6e\141\x6d\145", Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak("\x73\x69\x7a\x65\x70\x72\x65\x69\166\x65", Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak("\x69\156\x66\157\162\x6d\x61\164\x69\x6f\x6e", [Constants::qescuiwgsyuikume => __("\124\151\164\154\x65", PR__CMN__FOUNDATION), Constants::jwgqsuikqcsgemuu => __("\124\171\x70\x65", PR__CMN__FOUNDATION)]); $this->mcacmissyeeqkeak(Constants::ismwycwsasweqomi, [Constants::qescuiwgsyuikume => $this->imkyoqyocosuqasu("\x6d\x6f\144\x61\x6c\137\x74\151\x74\154\x65", sprintf(__("\123\145\x6c\x65\143\164\40\x66\157\x72\40\x25\163", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())), Constants::gqmuoaykeqeuoukm => [Constants::TEXT => $this->imkyoqyocosuqasu("\155\157\x64\x61\154\137\142\165\x74\x74\157\x6e\x5f\x74\145\170\164", __("\125\x73\145\40\124\x68\151\163\x20\106\x69\154\x65", PR__CMN__FOUNDATION))], "\154\151\x62\x72\141\162\171" => $this->imkyoqyocosuqasu("\155\x6f\144\141\x6c\x5f\x71\x75\145\162\x79", []), "\x6d\x75\154\164\151\x70\x6c\145" => false]); $this->eskgwaywimqcwcyy("\x63\x6f\x6e\x66\x69\x67", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($this->kooiucqkggeagccu())); $qcokcugqceckmigs = ''; if (!$this->ysyswymameciiyce()) { goto aqoyesawuayoeuag; } $aiooqyausygaasqm = $this->qooeaookuemoqecm(); foreach ($this->imkyoqyocosuqasu("\151\x6e\146\157\162\x6d\141\x74\151\157\x6e", []) as $uusmaiomayssaecw => $meqocwsecsywiiqs) { $eqgoocgaqwqcimie = ''; switch ($uusmaiomayssaecw) { case Constants::qescuiwgsyuikume: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($aiooqyausygaasqm); goto awwwoikmmaisyisy; case Constants::jwgqsuikqcsgemuu: $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($aiooqyausygaasqm); goto awwwoikmmaisyisy; case Constants::eqkeooqcsscoggia: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->souwykwwmyygqyqi($aiooqyausygaasqm); goto awwwoikmmaisyisy; } cuamsmyiamaicwou: awwwoikmmaisyisy: if (!$eqgoocgaqwqcimie) { goto essokuoguqegyeua; } $qcokcugqceckmigs .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui("{$meqocwsecsywiiqs}\x3a\x20{$eqgoocgaqwqcimie}", ["\x63\154\141\x73\x73" => "\x70\162\x2d\164\x69\164\154\x65\x2d\x6c\x65\166\x65\x6c\55\x33", "\x64\x61\x74\141\55\x6c\151\156\x65" => 2]); essokuoguqegyeua: yisooseceggsgyqw: } iqicwseckoykqowm: aqoyesawuayoeuag: $this->igiywquyccyiaucw("\151\156\146\x6f\x72\155\141\164\151\157\x6e", $qcokcugqceckmigs); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if (!$this->ysyswymameciiyce()) { goto agoikageaeouqaqi; } $kkeqqkkkqwkocsyu["\146\151\145\154\144\x5f\x63\157\x6e\x74\141\151\x6e\145\162\137\x63\x6c\x61\x73\163"] = "\x6d\x65\x64\151\x61\x2d\x61\144\x64\145\x64"; agoikageaeouqaqi: return $kkeqqkkkqwkocsyu; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f2a5b5520cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Media extends Field { protected array $buttons = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x6d\x65\144\151\x61"); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\x61\x64\155\x69\156\137\145\156\x71\165\x65\165\x65\137\x73\143\x72\x69\160\x74\163", "\x77\160\137\145\156\x71\x75\145\165\x65\137\x6d\x65\x64\x69\x61"); } public function imswwiyicyksouus() : array { return $this->buttons; } public function cyeuiyggkcqmoecc(string $aokagokqyuysuksm) : ?Button { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->imswwiyicyksouus(), $aokagokqyuysuksm); } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto cwkouaeieiyiykim; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ecqkouyiioksggkw($eqgoocgaqwqcimie); cwkouaeieiyiykim: $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function eswksowyeqcsokew(string $oiegiwogmwmawkeo) : self { return $this->kcemgwysykceeecw(Constants::waguuiqqgsysuukq, $oiegiwogmwmawkeo); } public function eicsoaeqamqgqsis($yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ["\155\160\64"]; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { goto smmgkqeacswimyas; } $this->eyiiyqiykcsusuwi("\x76\151\144\x65\x6f\x2f{$sqeykgyoooqysmca}"); smmgkqeacswimyas: qmmieiquoegeaqok: } uawcmuiummigeqea: return $this; } public function wwsssmuaksogoekw() : self { return $this->eyiiyqiykcsusuwi("\151\x6d\x61\x67\145\57\163\166\147\x2b\170\155\x6c"); } public function ycueqsmmommygueu(array $yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ["\x67\151\146", "\x70\156\x67", "\x6a\160\x65\x67", "\163\x76\x67\53\x78\155\x6c", "\167\145\142\x70", "\x61\166\151\x66"]; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { goto ewugkyumwuomukie; } $this->eyiiyqiykcsusuwi("\151\155\141\x67\145\x2f{$sqeykgyoooqysmca}"); ewugkyumwuomukie: qquugwwesqswouyc: } kmwwamokwgagomye: return $this; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca) : self { $qgeeqyucwycemwmo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->ycceuaowuugaemyi(), Constants::squoamkioomemiyi, []); if (in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true)) { goto wwigiswokyqkamsu; } $qgeeqyucwycemwmo[] = $sqeykgyoooqysmca; $this->kcemgwysykceeecw(Constants::squoamkioomemiyi, $qgeeqyucwycemwmo); wwigiswokyqkamsu: return $this; } private function kcemgwysykceeecw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $qmmuaigaamusycak = $this->ycceuaowuugaemyi(); $qmmuaigaamusycak[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this->igiywquyccyiaucw("\x6d\x6f\144\x61\x6c\137\161\x75\145\162\171", $qmmuaigaamusycak); } private function ycceuaowuugaemyi() : array { return (array) $this->imkyoqyocosuqasu("\155\x6f\144\141\154\x5f\161\x75\145\162\x79", []); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->mcacmissyeeqkeak(Constants::kcyioiskeyiemoga, __("\123\145\154\x65\143\x74\x20\x4d\145\x64\x69\141", PR__CMN__FOUNDATION)); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\x6d\x65\x64\x69\141\137\143\x68\141\156\147\x65")->mswqgegakmgmewwq()->goqoickiksqsaeyk()->gswweykyogmsyawy(__("\x43\x68\x61\156\147\x65", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\x70\162\x2d\146\151\x65\154\144\x2d\x6d\x65\x64\151\x61\x2d\x63\x68\x61\156\147\x65"))->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\x6d\x65\144\x69\141\x5f\x72\x65\155\157\166\x65")->mswqgegakmgmewwq()->muywawimuacwmkgw()->gswweykyogmsyawy(__("\122\x65\155\x6f\x76\145", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\160\x72\55\146\151\x65\x6c\x64\x2d\x6d\x65\144\151\141\x2d\162\145\155\157\166\145")); $this->mcacmissyeeqkeak("\x73\151\x7a\145\156\141\155\145", Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak("\163\151\172\x65\x70\162\145\x69\166\x65", Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak("\x69\156\x66\x6f\162\x6d\x61\164\x69\157\x6e", [Constants::qescuiwgsyuikume => __("\x54\151\x74\x6c\145", PR__CMN__FOUNDATION), Constants::jwgqsuikqcsgemuu => __("\124\x79\x70\x65", PR__CMN__FOUNDATION)]); $this->mcacmissyeeqkeak(Constants::ismwycwsasweqomi, [Constants::qescuiwgsyuikume => $this->imkyoqyocosuqasu("\155\157\x64\141\x6c\x5f\x74\x69\164\154\x65", sprintf(__("\x53\145\154\x65\x63\164\40\x66\x6f\x72\x20\x25\163", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())), Constants::gqmuoaykeqeuoukm => [Constants::TEXT => $this->imkyoqyocosuqasu("\155\x6f\144\x61\154\137\142\165\x74\x74\157\x6e\137\x74\145\x78\x74", __("\125\x73\145\x20\x54\150\151\x73\x20\x46\x69\x6c\145", PR__CMN__FOUNDATION))], "\154\x69\x62\x72\x61\162\171" => $this->imkyoqyocosuqasu("\x6d\157\144\x61\x6c\x5f\161\165\145\x72\171", []), "\x6d\165\x6c\x74\151\160\154\x65" => false]); $this->eskgwaywimqcwcyy("\x63\x6f\x6e\x66\x69\x67", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($this->kooiucqkggeagccu())); $qcokcugqceckmigs = ''; if (!$this->ysyswymameciiyce()) { goto aqoyesawuayoeuag; } $aiooqyausygaasqm = $this->qooeaookuemoqecm(); foreach ($this->imkyoqyocosuqasu("\151\156\x66\157\x72\155\141\164\x69\x6f\156", []) as $uusmaiomayssaecw => $meqocwsecsywiiqs) { $eqgoocgaqwqcimie = ''; switch ($uusmaiomayssaecw) { case Constants::qescuiwgsyuikume: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($aiooqyausygaasqm); goto awwwoikmmaisyisy; case Constants::jwgqsuikqcsgemuu: $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($aiooqyausygaasqm); goto awwwoikmmaisyisy; case Constants::eqkeooqcsscoggia: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->souwykwwmyygqyqi($aiooqyausygaasqm); goto awwwoikmmaisyisy; } cuamsmyiamaicwou: awwwoikmmaisyisy: if (!$eqgoocgaqwqcimie) { goto essokuoguqegyeua; } $qcokcugqceckmigs .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui("{$meqocwsecsywiiqs}\72\40{$eqgoocgaqwqcimie}", ["\x63\x6c\x61\x73\163" => "\160\x72\55\164\151\x74\x6c\x65\55\154\x65\x76\145\154\55\x33", "\144\x61\164\x61\x2d\x6c\x69\x6e\x65" => 2]); essokuoguqegyeua: yisooseceggsgyqw: } iqicwseckoykqowm: aqoyesawuayoeuag: $this->igiywquyccyiaucw("\151\156\x66\x6f\162\155\x61\x74\151\157\156", $qcokcugqceckmigs); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if (!$this->ysyswymameciiyce()) { goto agoikageaeouqaqi; } $kkeqqkkkqwkocsyu["\146\x69\145\x6c\144\x5f\x63\157\156\164\x61\151\156\145\x72\137\x63\x6c\x61\x73\163"] = "\155\145\x64\151\x61\55\141\144\x64\145\x64"; agoikageaeouqaqi: return $kkeqqkkkqwkocsyu; } }

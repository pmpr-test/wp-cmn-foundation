<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f16ae3d454f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Media extends Field { protected array $buttons = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x6d\145\144\151\141"); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\x5f\x65\x6e\161\x75\145\x75\145\x5f\163\143\162\151\160\164\163", "\x77\x70\x5f\145\156\161\165\145\x75\x65\x5f\155\x65\144\x69\x61"); } public function imswwiyicyksouus() : array { return $this->buttons; } public function cyeuiyggkcqmoecc(string $aokagokqyuysuksm) : ?Button { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->imswwiyicyksouus(), $aokagokqyuysuksm); } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto eemgoyuiauwuomcw; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ecqkouyiioksggkw($eqgoocgaqwqcimie); eemgoyuiauwuomcw: $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function eswksowyeqcsokew(string $oiegiwogmwmawkeo) : self { return $this->kcemgwysykceeecw(Constants::waguuiqqgsysuukq, $oiegiwogmwmawkeo); } public function eicsoaeqamqgqsis($yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ["\155\x70\64"]; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { goto csmmiwegweusuimi; } $this->eyiiyqiykcsusuwi("\x76\x69\x64\145\x6f\x2f{$sqeykgyoooqysmca}"); csmmiwegweusuimi: amcqceoiqgmwisce: } ikgwcgcgcaaaskig: return $this; } public function wwsssmuaksogoekw() : self { return $this->eyiiyqiykcsusuwi("\151\155\141\x67\x65\57\x73\x76\x67\53\170\155\x6c"); } public function ycueqsmmommygueu(array $yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ["\x67\x69\x66", "\160\156\x67", "\x6a\x70\x65\147", "\x73\x76\147\x2b\170\x6d\x6c", "\x77\145\142\160", "\141\x76\x69\x66"]; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { goto ckkecwwioeywccwa; } $this->eyiiyqiykcsusuwi("\151\x6d\x61\x67\145\57{$sqeykgyoooqysmca}"); ckkecwwioeywccwa: syaegaiuaioeaocq: } imsougccawciqsuw: return $this; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca) : self { $qgeeqyucwycemwmo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->ycceuaowuugaemyi(), Constants::squoamkioomemiyi, []); if (in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true)) { goto koceayskwssiisyi; } $qgeeqyucwycemwmo[] = $sqeykgyoooqysmca; $this->kcemgwysykceeecw(Constants::squoamkioomemiyi, $qgeeqyucwycemwmo); koceayskwssiisyi: return $this; } private function kcemgwysykceeecw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $qmmuaigaamusycak = $this->ycceuaowuugaemyi(); $qmmuaigaamusycak[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this->igiywquyccyiaucw("\x6d\157\144\x61\154\137\x71\165\x65\162\x79", $qmmuaigaamusycak); } private function ycceuaowuugaemyi() : array { return (array) $this->imkyoqyocosuqasu("\155\157\144\141\154\137\161\165\145\162\171", []); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->mcacmissyeeqkeak(Constants::kcyioiskeyiemoga, __("\x53\145\154\145\143\x74\x20\115\x65\144\x69\x61", PR__CMN__FOUNDATION)); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\155\x65\144\x69\x61\x5f\143\x68\x61\x6e\147\x65")->mswqgegakmgmewwq()->goqoickiksqsaeyk()->gswweykyogmsyawy(__("\x43\x68\141\156\147\x65", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\160\162\55\146\x69\145\154\144\55\x6d\x65\144\x69\141\x2d\143\150\x61\156\147\x65"))->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\x6d\x65\x64\x69\x61\137\162\x65\x6d\x6f\x76\x65")->mswqgegakmgmewwq()->muywawimuacwmkgw()->gswweykyogmsyawy(__("\x52\x65\155\x6f\x76\145", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\x70\x72\x2d\x66\151\x65\154\144\x2d\155\145\144\151\x61\x2d\x72\145\155\x6f\166\x65")); $this->mcacmissyeeqkeak("\163\151\x7a\145\156\x61\155\145", Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak("\x73\151\x7a\x65\160\162\x65\151\x76\x65", Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak("\x69\156\146\x6f\162\x6d\141\x74\151\x6f\x6e", [Constants::qescuiwgsyuikume => __("\x54\x69\x74\x6c\x65", PR__CMN__FOUNDATION), Constants::jwgqsuikqcsgemuu => __("\124\x79\160\145", PR__CMN__FOUNDATION)]); $this->mcacmissyeeqkeak(Constants::ismwycwsasweqomi, [Constants::qescuiwgsyuikume => $this->imkyoqyocosuqasu("\155\157\x64\x61\154\x5f\164\x69\164\x6c\145", sprintf(__("\123\x65\x6c\145\x63\x74\40\x66\157\162\x20\45\x73", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())), Constants::gqmuoaykeqeuoukm => [Constants::TEXT => $this->imkyoqyocosuqasu("\155\157\144\x61\x6c\137\142\x75\164\x74\x6f\x6e\137\164\x65\170\164", __("\x55\163\x65\x20\x54\150\x69\x73\x20\x46\151\154\145", PR__CMN__FOUNDATION))], "\x6c\x69\142\x72\x61\x72\171" => $this->imkyoqyocosuqasu("\155\x6f\144\141\154\x5f\x71\165\145\x72\171", []), "\155\x75\x6c\164\151\160\x6c\145" => false]); $this->eskgwaywimqcwcyy("\x63\157\156\146\151\147", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($this->kooiucqkggeagccu())); $qcokcugqceckmigs = ''; if (!$this->ysyswymameciiyce()) { goto uawcmuiummigeqea; } $aiooqyausygaasqm = $this->qooeaookuemoqecm(); foreach ($this->imkyoqyocosuqasu("\x69\156\x66\157\x72\155\141\x74\151\x6f\156", []) as $uusmaiomayssaecw => $meqocwsecsywiiqs) { $eqgoocgaqwqcimie = ''; switch ($uusmaiomayssaecw) { case Constants::qescuiwgsyuikume: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($aiooqyausygaasqm); goto uqsoseuiwgukywas; case Constants::jwgqsuikqcsgemuu: $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($aiooqyausygaasqm); goto uqsoseuiwgukywas; case Constants::eqkeooqcsscoggia: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->souwykwwmyygqyqi($aiooqyausygaasqm); goto uqsoseuiwgukywas; } wgaggmmmgeumiouk: uqsoseuiwgukywas: if (!$eqgoocgaqwqcimie) { goto cwkouaeieiyiykim; } $qcokcugqceckmigs .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui("{$meqocwsecsywiiqs}\72\x20{$eqgoocgaqwqcimie}", ["\143\154\x61\163\x73" => "\160\x72\x2d\x74\x69\164\154\x65\x2d\x6c\x65\x76\x65\154\55\x33", "\x64\x61\x74\x61\x2d\154\x69\156\145" => 2]); cwkouaeieiyiykim: iiwcuqeosmwgogus: } auqmeqswuuioemge: uawcmuiummigeqea: $this->igiywquyccyiaucw("\x69\156\x66\x6f\x72\155\141\164\151\x6f\x6e", $qcokcugqceckmigs); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if (!$this->ysyswymameciiyce()) { goto qmmieiquoegeaqok; } $kkeqqkkkqwkocsyu["\x66\151\x65\x6c\x64\x5f\143\x6f\x6e\164\x61\151\x6e\145\x72\137\143\154\141\x73\x73"] = "\x6d\x65\x64\151\141\x2d\x61\x64\x64\x65\x64"; qmmieiquoegeaqok: return $kkeqqkkkqwkocsyu; } }

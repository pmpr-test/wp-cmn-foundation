<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d8187bb66             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Frontend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Traits\ArgsTrait; use WP_Post; use WP_Query; abstract class Page extends Common { use ArgsTrait; const egukegmcemkeegqq = "\160\141\147\x65\x5f\151\144"; const awgeksgyykycasie = "\x74\x61\x6b\x65\137\160\x61\147\x65\137\151\156\137\x73\x65\x74\x74\x69\x6e\147\x73"; public function ikcgmcycisiccyuc() { $this->qiccuiwooiquycsg(); if ($this->giiuwsmyumqwwiyq()) { goto iqgqagswgiwgksco; } $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\x5f\x70\x61\x67\145"); iqgqagswgiwgksco: } public function qiccuiwooiquycsg() { } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70", [$this, "\147\157\163\155\x71\x63\155\155\157\155\x6b\x71\x77\x6d\x69\163"])->qcsmikeggeemccuu("\x69\156\x69\164", [$this, "\151\x6e\x69\x74"])->qcsmikeggeemccuu("\x77\160\x5f\x68\145\141\x64", [$this, "\167\161\171\147\x73\161\x75\x69\151\x79\x6d\161\163\x61\141\141"])->qcsmikeggeemccuu("\x61\144\x6d\151\x6e\x5f\x69\x6e\151\x74", [$this, "\171\x65\x79\151\147\x75\x79\x65\147\x6d\155\171\x75\x73\x65\x61"])->qcsmikeggeemccuu("\144\145\x6c\x65\x74\x65\137\160\x6f\x73\x74", [$this, "\165\x6b\x71\151\145\x65\145\x6d\x79\153\x67\151\x73\151\151\143"]); if (!$this->ukguiegqykkoqcuq()) { goto swcmoacumikkuwma; } $this->qcsmikeggeemccuu("\141\x64\155\151\x6e\x5f\150\x65\x61\x64", [$this, "\161\167\145\147\x6b\157\x75\151\171\x6f\x63\171\x73\x79\x77\x65"])->qcsmikeggeemccuu("\160\141\x72\x73\x65\x5f\x71\x75\x65\x72\171", [$this, "\161\171\171\165\x65\147\x69\x65\x61\x65\143\163\151\x61\x77\x6b"]); swcmoacumikkuwma: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\144\x69\163\160\x6c\141\x79\x5f\160\157\x73\x74\x5f\x73\164\x61\164\145\x73", [$this, "\x73\153\167\x77\x79\x73\x67\x67\x71\x65\145\145\x73\157\x63\147"], 10, 2); $this->aqaqisyssqeomwom("\x67\145\164\x5f{$this->cisyiemkeykgkomc()}\x5f\160\141\x67\145\x5f\x70\145\x72\x6d\141\154\x69\x6e\x6b", [$this, "\x79\x63\x71\161\x75\157\151\171\x79\165\x65\x73\x65\147\x73\x79"])->aqaqisyssqeomwom("\x67\x65\x74\x5f{$this->aakmagwggmkoiiyu()}\137\160\141\x67\145\x5f\x70\145\162\155\141\154\x69\156\x6b", [$this, "\x79\x63\161\x71\x75\157\x69\x79\x79\x75\145\163\x65\147\163\x79"]); } public function init() { $this->gogaagekwoisaqgu(); if (!$this->agwomuykuuimiqyk()) { goto agugmwweyecagkue; } $aokagokqyuysuksm = "{$this->akuociswqmoigkas()}\x5f{$this->aqcogscycyycgkuq()}"; $umqqgsiscygmeiem = Setting::ocmycskcuiawkecq($aokagokqyuysuksm, $aokagokqyuysuksm, sprintf(__("\123\145\164\164\x69\x6e\147\x20\x6f\x66\x20\45\x73", PR__MDL__OPTIMIZATION_MANAGER), $this->qcgakseyaikigqco())); $this->aosyekoskegecumg($umqqgsiscygmeiem); $this->settingObj = $umqqgsiscygmeiem; agugmwweyecagkue: } public function gogaagekwoisaqgu() { } public function sqemekeuykmooums() : self { $this->igiywquyccyiaucw(Constants::wksqmcukwwqwyuuc, true); return $this; } public function agwomuykuuimiqyk() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::wksqmcukwwqwyuuc, false); } public function yeyiguyegmmyusea() { if (!($this->ayseokmqycoqaigc() && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq())) { goto eeaeuuuiukckywcg; } $gqumacwamusueoqa = 0; $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if (!($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia())) { goto ccaecemqggkcesym; } if ($omwmuycmeqcqokom instanceof self) { goto eyyqgqyikeoiuusw; } $gqumacwamusueoqa = $omwmuycmeqcqokom; goto sqmwqsayaqygocqo; eyyqgqyikeoiuusw: $gqumacwamusueoqa = $omwmuycmeqcqokom->iooowgsqoyqseyuu(); sqmwqsayaqygocqo: if (!($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent))) { goto queqqoyiueiikgus; } $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); queqqoyiueiikgus: ccaecemqggkcesym: $ykquycoiqesuckco = $this->kmuweyayaqoeqiyw(); if (!($ykquycoiqesuckco && $suaemuyiacqyugsm && $this->agwomuykuuimiqyk() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oguuceugyqgsqewy($suaemuyiacqyugsm))) { goto icguisyymukwkoac; } $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $ykquycoiqesuckco->cisyiemkeykgkomc() . "\137\154\x69\x6e\153\137\155\145\164\x61\x5f\x62\157\x78", Constants::qgqyauaqwqmqseim => IconInterface::kyayumiaimokygsm, Constants::qescuiwgsyuikume => __("\x50\141\x67\145\x20\x53\x65\x74\x74\151\156\147\x73", PR__CMN__FOUNDATION), Constants::cacismqswgaewkuu => Constants::imywcsggckkcywgk, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => function () use($ykquycoiqesuckco) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("\147\157\137\x74\x6f\137\160\141\147\145\x5f\163\145\x74\x74\151\x6e\147")->gmscmskmuissgywk(true)->ygagwkucacyassau()->comqsuwokcsmkcau("\141")->qigsyyqgewgskemg("\155\164\55\x31\x20\167\x2d\61\60\60")->igmaewykumgwoaoy("\150\x72\x65\146", $ykquycoiqesuckco->oiucukewkckkwiqc())->igmaewykumgwoaoy("\x74\x61\x72\147\x65\164", "\x5f\x62\x6c\x61\156\x6b")->gswweykyogmsyawy(__("\x47\157\x20\164\x6f\40\123\x65\164\x74\x69\156\147\x73", PR__CMN__FOUNDATION))->render([Constants::qaacaqioeyiuakeu => true]); }, Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); icguisyymukwkoac: if ($this->cummisgiueqymmum()) { goto ioqaysioauoiookm; } if (!($gqumacwamusueoqa || !$this->ygqycmmkoiuocoia())) { goto wwcyucesakwqmigu; } $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); wwcyucesakwqmigu: ioqaysioauoiookm: $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if (!($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) == $this->iooowgsqoyqseyuu())) { goto caeywemyokumoaki; } $this->yiggueaiwiygoiyi(__("\123\x6f\x72\x72\x79\x2c\x20\x79\x6f\165\40\x68\141\x76\x65\x6e\x27\x74\x20\141\143\x63\145\163\163\x20\x74\x6f\40\145\x64\151\164\x20\x74\x68\151\163\40\160\x61\147\145\56", PR__CMN__FOUNDATION), "\160\162\x69\166\141\x74\x65\55\160\141\147\x65"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; caeywemyokumoaki: eeaeuuuiukckywcg: } public function gosmqcmmomkqwmis() { if (!$this->sgeaogakoscmysgc()) { goto tguuykuocgscwigs; } if ($this->imkyoqyocosuqasu(Constants::dsmcseykksieoyuc, false)) { goto ocqcqsmmqaiiayis; } $this->caokeucsksukesyo()->eiwcuqigayigimak()->wwckmeoskuagomki("\x50\x52\137\x4f\120\x54\137\104\117\x4e\124\x5f\x4f\120\x54\x49\x4d\111\x5a\105\137\x50\x41\x47\x45", 1); ocqcqsmmqaiiayis: if (!$this->ayseokmqycoqaigc()) { goto saugoksiwmswowqy; } $this->cecaguuoecmccuse("\x74\150\x65\137\143\x6f\156\164\145\x6e\164", [$this, "\141\x69\x6d\x79\143\155\x6b\x77\157\x73\163\147\141\163\x67\163"], 999); $this->aqaqisyssqeomwom("\164\x65\x6d\x70\x6c\x61\x74\x65\137\x68\x69\x65\x72\141\x72\x63\x68\171\x5f\x74\145\155\160\154\141\x74\x65\163", [$this, "\165\x6b\x67\151\153\151\163\x6b\165\x6f\x73\165\155\x71\x63\x71"], 10, 2)->aqaqisyssqeomwom("\x74\x65\x6d\x70\154\141\x74\145\137\x68\x69\145\x72\x61\162\x63\x68\171\137\160\141\x72\x61\x6d\145\x74\145\x72\163", [$this, "\141\155\153\x61\x67\x71\157\151\147\171\x77\x73\x6f\155\157\147"], 10, 2); $this->aqaqisyssqeomwom("\x62\x72\x65\141\x64\x63\162\165\x6d\142\137\141\x6c\x6c\157\167\x5f\162\x65\x6e\144\145\162", [$this, "\141\157\x69\x75\151\167\157\x79\x6f\x65\167\x79\x63\x69\x73\x67"]); $this->waqewsckuayqguos("\x62\x65\146\157\162\x65\137\x65\156\161\165\145\165\x65\x5f\x66\162\157\156\164\145\156\x64\137\x61\163\x73\145\x74\163", [$this, "\x65\156\x71\x75\145\x75\145"]); saugoksiwmswowqy: tguuykuocgscwigs: } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if (!($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo())) { goto weiwkwaagqqcwkoq; } $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); weiwkwaagqqcwkoq: return $yciaosuiyeieceug; } public function enqueue() { } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { goto yckakqcyqksckiwg; } $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if (!($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->iooowgsqoyqseyuu())) { goto yimaquocemaqgkew; } $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); yimaquocemaqgkew: yckakqcyqksckiwg: return $ewgwqamkygiqaawc; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if (!$this->sgeaogakoscmysgc()) { goto egkyuaemcsesciio; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto makewcmuowqeuqqo; } $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; makewcmuowqeuqqo: egkyuaemcsesciio: return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if (!($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk()))) { goto owawwqcgcwwygkcy; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); owawwqcgcwwygkcy: return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function qyyuegieaecsiawk($gqgemcmoicmgaqie) { if (!($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc())) { goto kaeuoeawkcwsycoe; } $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if (!($eisykmiomukgakao && !is_array($eisykmiomukgakao))) { goto iyseosekyuousmcs; } $eisykmiomukgakao = [$eisykmiomukgakao]; iyseosekyuousmcs: $aokagokqyuysuksm = $this->iooowgsqoyqseyuu(); if (in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { goto kmqyoeosqckuaqsi; } $eisykmiomukgakao[] = $aokagokqyuysuksm; kmqyoeosqckuaqsi: $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; kaeuoeawkcwsycoe: return $gqgemcmoicmgaqie; } public function qwegkouiyocysywe() { if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy(Constants::imywcsggckkcywgk)) { goto quumaygcyqkgwyaq; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\163\x74\x79\x6c\x65", [], "\x74\162\43\160\x6f\163\x74\55{$this->iooowgsqoyqseyuu()}\173\x64\151\163\x70\154\141\x79\x3a\x6e\157\156\x65\73\175"); quumaygcyqkgwyaq: } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if (!$this->sgeaogakoscmysgc($post)) { goto mmukumekuuysequy; } if ($this->kwowqyyougwekomi()) { goto wassuqquwikiawos; } $this->kowqseeiwuesqsok(sprintf(__("\45\x73\40\x50\x61\x67\145", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); wassuqquwikiawos: $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); mmukumekuuysequy: return $ekcqweaieimsgqoq; } public function ukqieeemykgisiic($gcqseksiskwueksc) { if (!((int) $gcqseksiskwueksc === $this->iooowgsqoyqseyuu())) { goto cecwiqciigmgyoem; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); cecwiqciigmgyoem: } public function wqygsquiiymqsaaa() { if (!($this->sgeaogakoscmysgc() && ($mgcyouymksesekki = $this->imkyoqyocosuqasu(Constants::oiukgckoauquscaw)))) { goto oiiiwwmwokesyqwo; } if (!is_bool($mgcyouymksesekki)) { goto uwqqmumicaygiukc; } $mgcyouymksesekki = "\x6e\x6f\151\x6e\144\x65\x78\x2c\x20\x6e\157\146\157\154\x6c\x6f\167"; uwqqmumicaygiukc: echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu(Constants::oiukgckoauquscaw, $mgcyouymksesekki); oiiiwwmwokesyqwo: } public function ayseokmqycoqaigc() : bool { return $this->sscegwueamckwmcy("\x69\x73\x5f{$this->aakmagwggmkoiiyu()}\x5f\160\x61\147\x65\137\145\x6e\141\x62\x6c\x65", true) && $this->sscegwueamckwmcy("\151\163\137{$this->cisyiemkeykgkomc()}\x5f\x70\141\x67\x65\137\x65\156\141\142\x6c\x65", true); } public function oyaugcgekomyiiik() : self { return $this->igiywquyccyiaucw(self::awgeksgyykycasie, false); } private function cummisgiueqymmum() : bool { $ksaameoqigiaoigg = true; if (!$this->wuyimwscukmqqsqk(self::awgeksgyykycasie)) { goto wcoywkwsguoyysay; } $ksaameoqigiaoigg = (bool) $this->imkyoqyocosuqasu(self::awgeksgyykycasie); wcoywkwsguoyysay: return $ksaameoqigiaoigg; } public function wmsaakuicamguoam($qkcoyiyeuoyyoocy) : self { return $this->igiywquyccyiaucw(Constants::egukegmcemkeegqq, $qkcoyiyeuoyyoocy); } public function iooowgsqoyqseyuu() : int { $qkcoyiyeuoyyoocy = 0; if (!$this->cummisgiueqymmum()) { goto yweawggqmecqgaqe; } $qkcoyiyeuoyyoocy = $this->imkyoqyocosuqasu(Constants::egukegmcemkeegqq, $qkcoyiyeuoyyoocy); goto mwomsussaikumyme; yweawggqmecqgaqe: $qkcoyiyeuoyyoocy = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); mwomsussaikumyme: return (int) $qkcoyiyeuoyyoocy; } public function sgeaogakoscmysgc($post = null) : bool { $qkcoyiyeuoyyoocy = $this->iooowgsqoyqseyuu(); return $qkcoyiyeuoyyoocy && $qkcoyiyeuoyyoocy === (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post); } public function kyqakacqeumicgag() { $suaemuyiacqyugsm = null; $qkcoyiyeuoyyoocy = $this->iooowgsqoyqseyuu(); if (!$qkcoyiyeuoyyoocy) { goto myskascmmkymmmgm; } $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($qkcoyiyeuoyyoocy, Constants::ckmqoekmugkggeym, true); myskascmmkymmmgm: return $suaemuyiacqyugsm; } public function ycqquoiyyuesegsy(?string $migiiksoiymissge = '') : string { if (!($suaemuyiacqyugsm = $this->iooowgsqoyqseyuu())) { goto mgcieuiwescwqymy; } $migiiksoiymissge = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); mgcieuiwescwqymy: return $migiiksoiymissge; } public function aakmagwggmkoiiyu() : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); return $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); } public function cisyiemkeykgkomc() : string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if (!($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia())) { goto ekswgqyowkoaksqi; } if (!$omwmuycmeqcqokom instanceof self) { goto uyyomesiccsqemog; } $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); uyyomesiccsqemog: $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; ekswgqyowkoaksqi: return $uusmaiomayssaecw; } public function mmuyuqussqkgkega($omwmuycmeqcqokom) : self { return $this->igiywquyccyiaucw(Constants::qioguuqkouiccqig, $omwmuycmeqcqokom); } public function ygqycmmkoiuocoia() { return $this->imkyoqyocosuqasu(Constants::qioguuqkouiccqig, ''); } public function ukguiegqykkoqcuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::aqugcqsyeisayuog, false); } public function qmgkuqsqweecckyo() : bool { return !$this->wuyimwscukmqqsqk(Constants::esqqqyeecaiamqoc) || $this->imkyoqyocosuqasu(Constants::esqqqyeecaiamqoc); } public function ekgmmugauoasqwyc() : self { $this->igiywquyccyiaucw(Constants::esqqqyeecaiamqoc, false); return $this; } public function oakemcgacwakmawm() : self { $this->igiywquyccyiaucw(Constants::dsmcseykksieoyuc, false); return $this; } public function myysgyqcumekoueo() : self { return $this->igiywquyccyiaucw(Constants::aqugcqsyeisayuog, true); } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { return $this->igiywquyccyiaucw(Constants::qescuiwgsyuikume, $meqocwsecsywiiqs); } public function qcgakseyaikigqco() : string { return (string) $this->imkyoqyocosuqasu(Constants::qescuiwgsyuikume, ''); } public function wegcaymyqqoyewmw(string $aaokuekaimigoyue) : self { return $this->igiywquyccyiaucw(Constants::ouywiegeiyuaaawo, $aaokuekaimigoyue); } public function aqcogscycyycgkuq() : string { return (string) $this->imkyoqyocosuqasu(Constants::ouywiegeiyuaaawo, ''); } public function kowqseeiwuesqsok(string $iwskiosiswyoiesg) : self { return $this->igiywquyccyiaucw(Constants::eikgweiqgomeisyo, $iwskiosiswyoiesg); } public function kwowqyyougwekomi() : string { return (string) $this->imkyoqyocosuqasu(Constants::eikgweiqgomeisyo, ''); } public function siosgoymgqsyaisu(string $omkysikckkcieckq) : self { return $this->igiywquyccyiaucw(Constants::ugqacsomqcgmoqug, $omkysikckkcieckq); } public function giiuwsmyumqwwiyq() : string { return (string) $this->imkyoqyocosuqasu(Constants::ugqacsomqcgmoqug, ''); } public function igaiesmckcaekcmy(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if (!($this->agwomuykuuimiqyk() && ($oeomqqoymoecyuuu = $this->kmuweyayaqoeqiyw()))) { goto gguiykqamegqmqki; } $eqgoocgaqwqcimie = $oeomqqoymoecyuuu->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $gmcgeogogyqsgawk); gguiykqamegqmqki: return $eqgoocgaqwqcimie; } public function aosyekoskegecumg($amakmumgguksgmum) { } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d87febf6a7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Frontend; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Traits\ArgsTrait; use WP_Post; use WP_Query; abstract class Page extends Container { use ArgsTrait; const egukegmcemkeegqq = "\x70\x61\x67\145\x5f\x69\144"; const awgeksgyykycasie = "\164\x61\153\x65\137\160\x61\147\145\x5f\x69\156\137\163\145\x74\x74\x69\x6e\147\x73"; public function ikcgmcycisiccyuc() { $this->qiccuiwooiquycsg(); if (!$this->giiuwsmyumqwwiyq()) { $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\137\x70\141\147\x65"); } } public function qiccuiwooiquycsg() { } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160", [$this, "\x67\x6f\163\155\x71\143\x6d\x6d\x6f\155\x6b\161\x77\x6d\x69\163"])->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\151\156\x69\x74"])->qcsmikeggeemccuu("\167\x70\x5f\x68\x65\x61\144", [$this, "\x77\161\x79\147\x73\x71\x75\151\151\171\x6d\x71\x73\x61\141\x61"])->qcsmikeggeemccuu("\141\x64\x6d\151\156\x5f\151\156\151\x74", [$this, "\171\145\x79\x69\x67\165\x79\x65\147\x6d\155\x79\x75\163\x65\x61"])->qcsmikeggeemccuu("\x64\x65\x6c\x65\x74\145\137\x70\157\x73\x74", [$this, "\165\x6b\161\151\145\145\x65\x6d\x79\x6b\x67\x69\x73\151\151\143"]); if ($this->ukguiegqykkoqcuq()) { $this->qcsmikeggeemccuu("\x61\144\x6d\151\156\x5f\x68\145\x61\144", [$this, "\161\167\x65\x67\153\x6f\x75\151\x79\157\x63\x79\163\x79\167\x65"])->qcsmikeggeemccuu("\160\x61\162\163\x65\x5f\161\165\145\x72\x79", [$this, "\x71\171\x79\165\x65\147\x69\145\141\145\x63\x73\x69\x61\167\x6b"]); } } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\144\151\x73\x70\154\141\171\x5f\160\157\x73\164\x5f\x73\x74\x61\164\145\163", [$this, "\163\153\167\167\171\163\x67\x67\x71\x65\145\x65\x73\x6f\143\147"], 10, 2); $this->aqaqisyssqeomwom("\x67\x65\164\137{$this->cisyiemkeykgkomc()}\137\x70\141\x67\x65\x5f\x70\145\162\x6d\141\x6c\x69\x6e\153", [$this, "\171\x63\x71\161\x75\x6f\151\x79\171\165\145\163\145\x67\x73\x79"])->aqaqisyssqeomwom("\147\145\164\137{$this->aakmagwggmkoiiyu()}\137\x70\141\x67\x65\137\x70\x65\162\155\x61\154\x69\156\x6b", [$this, "\171\x63\161\161\165\157\x69\x79\171\165\x65\x73\145\x67\x73\x79"]); } public function init() { $this->gogaagekwoisaqgu(); $this->yswsogicggygksoi(); } public function gogaagekwoisaqgu() { } public function yswsogicggygksoi() : ?Setting { $umqqgsiscygmeiem = null; if ($this->agwomuykuuimiqyk()) { $aokagokqyuysuksm = "{$this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this)}\x5f{$this->aqcogscycyycgkuq()}"; $umqqgsiscygmeiem = Setting::ocmycskcuiawkecq($aokagokqyuysuksm, $aokagokqyuysuksm, sprintf(__("\123\x65\164\x74\x69\156\147\x20\157\146\40\x25\163", PR__MDL__OPTIMIZATION_MANAGER), $this->qcgakseyaikigqco())); $this->aosyekoskegecumg($umqqgsiscygmeiem); } return $umqqgsiscygmeiem; } public function sqemekeuykmooums() : self { $this->igiywquyccyiaucw(Constants::wksqmcukwwqwyuuc, true); return $this; } public function agwomuykuuimiqyk() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::wksqmcukwwqwyuuc, false); } public function yeyiguyegmmyusea() { if ($this->ayseokmqycoqaigc() && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $gqumacwamusueoqa = 0; if (!$this->cummisgiueqymmum()) { $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $gqumacwamusueoqa = $omwmuycmeqcqokom->iooowgsqoyqseyuu(); } else { $gqumacwamusueoqa = $omwmuycmeqcqokom; } if ($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent)) { $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); } } if ($gqumacwamusueoqa || !$this->ygqycmmkoiuocoia()) { $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); } } if ($this->agwomuykuuimiqyk() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk)) { $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); $ykquycoiqesuckco = $this->yswsogicggygksoi(); if ($ykquycoiqesuckco && $suaemuyiacqyugsm && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oguuceugyqgsqewy($suaemuyiacqyugsm)) { } $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $ykquycoiqesuckco->cisyiemkeykgkomc() . "\137\154\151\x6e\153\x5f\155\145\164\141\x5f\x62\x6f\x78", Constants::qgqyauaqwqmqseim => IconInterface::kyayumiaimokygsm, Constants::qescuiwgsyuikume => __("\120\x61\147\145\40\x53\145\164\x74\x69\x6e\x67\163", PR__CMN__FOUNDATION), Constants::cacismqswgaewkuu => Constants::imywcsggckkcywgk, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => function () use($ykquycoiqesuckco) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("\147\x6f\137\164\157\137\160\x61\x67\x65\137\x73\x65\164\164\151\x6e\147")->gmscmskmuissgywk(true)->ygagwkucacyassau()->comqsuwokcsmkcau("\141")->qigsyyqgewgskemg("\155\164\x2d\61\x20\x77\55\61\60\60")->igmaewykumgwoaoy("\x68\x72\x65\146", $ykquycoiqesuckco->oiucukewkckkwiqc())->igmaewykumgwoaoy("\x74\x61\x72\x67\145\x74", "\137\x62\x6c\x61\156\153")->gswweykyogmsyawy(__("\x47\x6f\x20\164\157\40\x53\x65\x74\x74\x69\156\147\x73", PR__CMN__FOUNDATION))->render([Constants::qaacaqioeyiuakeu => true]); }, Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::mswoacegomcucaik) == $this->iooowgsqoyqseyuu()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\123\157\162\x72\x79\x2c\x20\x79\x6f\165\40\x68\141\x76\145\x6e\x27\164\40\141\x63\143\x65\163\163\x20\x74\x6f\40\x65\x64\151\x74\x20\x74\150\x69\x73\x20\x70\141\x67\145\x2e", PR__CMN__FOUNDATION), "\160\162\151\166\141\x74\145\55\160\141\147\x65"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; } } } public function gosmqcmmomkqwmis() { if ($this->sgeaogakoscmysgc()) { if (!$this->imkyoqyocosuqasu(Constants::dsmcseykksieoyuc, false)) { $this->caokeucsksukesyo()->eiwcuqigayigimak()->wwckmeoskuagomki("\120\122\x5f\x4f\x50\x54\x5f\x44\117\116\x54\137\117\x50\x54\x49\x4d\111\132\105\137\120\x41\x47\105", 1); } if ($this->ayseokmqycoqaigc()) { $this->cecaguuoecmccuse("\164\x68\x65\x5f\143\157\156\164\x65\x6e\x74", [$this, "\141\x69\x6d\x79\143\155\x6b\167\x6f\x73\163\x67\141\163\x67\163"], 999); $this->aqaqisyssqeomwom("\164\x65\x6d\160\154\141\164\145\137\x68\x69\x65\x72\x61\x72\x63\150\171\137\x74\145\155\160\154\141\164\x65\x73", [$this, "\x75\x6b\147\151\x6b\x69\x73\x6b\165\x6f\163\x75\155\x71\x63\161"], 10, 2)->aqaqisyssqeomwom("\164\145\155\160\154\141\164\x65\x5f\x68\x69\x65\x72\x61\162\143\x68\171\137\x70\x61\162\141\x6d\x65\x74\x65\162\163", [$this, "\x61\155\153\x61\x67\161\x6f\x69\147\x79\167\x73\x6f\x6d\x6f\x67"], 10, 2); $this->aqaqisyssqeomwom("\x62\162\145\141\x64\x63\162\165\x6d\142\x5f\141\x6c\x6c\157\167\137\x72\145\x6e\x64\x65\162", [$this, "\141\x6f\x69\x75\x69\x77\157\171\157\145\x77\x79\143\x69\x73\x67"]); $this->waqewsckuayqguos("\x62\x65\x66\x6f\x72\x65\137\x65\x6e\161\165\145\x75\145\x5f\146\x72\157\x6e\164\145\156\144\x5f\x61\163\x73\x65\x74\x73", [$this, "\145\x6e\161\x75\x65\x75\145"]); } } } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if ($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo()) { $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); } return $yciaosuiyeieceug; } public function enqueue() { } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if ($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->iooowgsqoyqseyuu()) { $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); } } return $ewgwqamkygiqaawc; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if ($this->sgeaogakoscmysgc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; } } return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if ($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk())) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); } return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function qyyuegieaecsiawk($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc()) { $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if ($eisykmiomukgakao && !is_array($eisykmiomukgakao)) { $eisykmiomukgakao = [$eisykmiomukgakao]; } $aokagokqyuysuksm = $this->iooowgsqoyqseyuu(); if (!in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { $eisykmiomukgakao[] = $aokagokqyuysuksm; } $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; } return $gqgemcmoicmgaqie; } public function qwegkouiyocysywe() { if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy(Constants::imywcsggckkcywgk)) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\x73\x74\171\x6c\x65", [], "\x74\162\x23\x70\x6f\163\x74\55{$this->iooowgsqoyqseyuu()}\x7b\x64\x69\163\160\x6c\141\x79\x3a\x6e\157\156\145\x3b\x7d"); } } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if ($this->sgeaogakoscmysgc($post)) { if (!$this->kwowqyyougwekomi()) { $this->kowqseeiwuesqsok(sprintf(__("\45\x73\40\x50\x61\147\145", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); } $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); } return $ekcqweaieimsgqoq; } public function ukqieeemykgisiic($gcqseksiskwueksc) { if ((int) $gcqseksiskwueksc === $this->iooowgsqoyqseyuu()) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); } } public function wqygsquiiymqsaaa() { if ($this->sgeaogakoscmysgc() && ($mgcyouymksesekki = $this->imkyoqyocosuqasu(Constants::oiukgckoauquscaw))) { if (is_bool($mgcyouymksesekki)) { $mgcyouymksesekki = "\156\157\151\x6e\x64\x65\x78\x2c\40\x6e\157\x66\157\x6c\154\157\x77"; } echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu(Constants::oiukgckoauquscaw, $mgcyouymksesekki); } } public function ayseokmqycoqaigc() : bool { return $this->sscegwueamckwmcy("\151\x73\137{$this->aakmagwggmkoiiyu()}\137\x70\x61\147\145\137\x65\x6e\141\x62\x6c\x65", true) && $this->sscegwueamckwmcy("\x69\x73\x5f{$this->cisyiemkeykgkomc()}\x5f\160\x61\x67\145\137\x65\x6e\x61\x62\x6c\145", true); } public function oyaugcgekomyiiik() : self { return $this->igiywquyccyiaucw(self::awgeksgyykycasie, false); } private function cummisgiueqymmum() : bool { $ksaameoqigiaoigg = true; if ($this->wuyimwscukmqqsqk(self::awgeksgyykycasie)) { $ksaameoqigiaoigg = (bool) $this->imkyoqyocosuqasu(self::awgeksgyykycasie); } return $ksaameoqigiaoigg; } public function wmsaakuicamguoam($qkcoyiyeuoyyoocy) : self { return $this->igiywquyccyiaucw(Constants::egukegmcemkeegqq, $qkcoyiyeuoyyoocy); } public function iooowgsqoyqseyuu() : int { $qkcoyiyeuoyyoocy = 0; if (!$this->cummisgiueqymmum()) { $qkcoyiyeuoyyoocy = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } else { $qkcoyiyeuoyyoocy = $this->imkyoqyocosuqasu(Constants::egukegmcemkeegqq, $qkcoyiyeuoyyoocy); } return (int) $qkcoyiyeuoyyoocy; } public function sgeaogakoscmysgc($post = null) : bool { return $this->caokeucsksukesyo()->owicscwgeuqcqaig()->syukqeyowauuucwi() && $this->iooowgsqoyqseyuu() === (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post); } public function kyqakacqeumicgag() { $suaemuyiacqyugsm = null; $qkcoyiyeuoyyoocy = $this->iooowgsqoyqseyuu(); if ($qkcoyiyeuoyyoocy) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($qkcoyiyeuoyyoocy, Constants::ckmqoekmugkggeym, true); } return $suaemuyiacqyugsm; } public function ycqquoiyyuesegsy(?string $migiiksoiymissge = '') : string { if ($suaemuyiacqyugsm = $this->iooowgsqoyqseyuu()) { $migiiksoiymissge = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } return $migiiksoiymissge; } public function aakmagwggmkoiiyu() : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); return $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); } public function cisyiemkeykgkomc() : string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); } $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; } return $uusmaiomayssaecw; } public function mmuyuqussqkgkega($omwmuycmeqcqokom) : self { return $this->igiywquyccyiaucw(Constants::qioguuqkouiccqig, $omwmuycmeqcqokom); } public function ygqycmmkoiuocoia() { return $this->imkyoqyocosuqasu(Constants::qioguuqkouiccqig, ''); } public function ukguiegqykkoqcuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::aqugcqsyeisayuog, false); } public function qmgkuqsqweecckyo() : bool { return !$this->wuyimwscukmqqsqk(Constants::esqqqyeecaiamqoc) || $this->imkyoqyocosuqasu(Constants::esqqqyeecaiamqoc); } public function ekgmmugauoasqwyc() : self { $this->igiywquyccyiaucw(Constants::esqqqyeecaiamqoc, false); return $this; } public function oakemcgacwakmawm() : self { $this->igiywquyccyiaucw(Constants::dsmcseykksieoyuc, false); return $this; } public function myysgyqcumekoueo() : self { return $this->igiywquyccyiaucw(Constants::aqugcqsyeisayuog, true); } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { return $this->igiywquyccyiaucw(Constants::qescuiwgsyuikume, $meqocwsecsywiiqs); } public function qcgakseyaikigqco() : string { return (string) $this->imkyoqyocosuqasu(Constants::qescuiwgsyuikume, ''); } public function wegcaymyqqoyewmw(string $aaokuekaimigoyue) : self { return $this->igiywquyccyiaucw(Constants::ouywiegeiyuaaawo, $aaokuekaimigoyue); } public function aqcogscycyycgkuq() : string { return (string) $this->imkyoqyocosuqasu(Constants::ouywiegeiyuaaawo, ''); } public function kowqseeiwuesqsok(string $iwskiosiswyoiesg) : self { return $this->igiywquyccyiaucw(Constants::eikgweiqgomeisyo, $iwskiosiswyoiesg); } public function kwowqyyougwekomi() : string { return (string) $this->imkyoqyocosuqasu(Constants::eikgweiqgomeisyo, ''); } public function siosgoymgqsyaisu(string $omkysikckkcieckq) : self { return $this->igiywquyccyiaucw(Constants::ugqacsomqcgmoqug, $omkysikckkcieckq); } public function giiuwsmyumqwwiyq() : string { return (string) $this->imkyoqyocosuqasu(Constants::ugqacsomqcgmoqug, ''); } public function gcoaskqqsewsoses(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if ($this->agwomuykuuimiqyk() && ($oeomqqoymoecyuuu = $this->yswsogicggygksoi())) { $eqgoocgaqwqcimie = $oeomqqoymoecyuuu->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $gmcgeogogyqsgawk); } return $eqgoocgaqwqcimie; } public function aosyekoskegecumg($amakmumgguksgmum) { } }

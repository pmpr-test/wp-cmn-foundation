<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6723ec7e2db2b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Frontend; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Traits\ArgsTrait; use WP_Post; use WP_Query; abstract class Page extends Container { use ArgsTrait; const egukegmcemkeegqq = "\160\x61\147\145\137\x69\x64"; const awgeksgyykycasie = "\x74\141\x6b\145\x5f\x70\x61\x67\145\137\151\156\x5f\x73\x65\x74\x74\x69\156\x67\163"; public function ikcgmcycisiccyuc() { $this->qiccuiwooiquycsg(); if (!$this->giiuwsmyumqwwiyq()) { $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\x5f\x70\x61\147\x65"); } } public function qiccuiwooiquycsg() { } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160", [$this, "\147\157\163\x6d\161\143\x6d\x6d\157\x6d\x6b\x71\x77\155\x69\163"])->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\x69\x6e\151\x74"])->qcsmikeggeemccuu("\x77\160\x5f\x68\145\141\144", [$this, "\x77\161\171\147\x73\x71\x75\151\151\x79\x6d\x71\163\x61\141\x61"])->qcsmikeggeemccuu("\141\x64\155\x69\x6e\x5f\151\156\x69\164", [$this, "\x79\145\171\x69\147\x75\171\x65\147\155\155\171\x75\163\x65\x61"])->qcsmikeggeemccuu("\x64\x65\154\145\164\x65\x5f\160\x6f\x73\164", [$this, "\165\153\x71\x69\145\x65\x65\155\x79\153\147\x69\x73\x69\151\143"]); if ($this->ukguiegqykkoqcuq()) { $this->qcsmikeggeemccuu("\x61\144\155\151\x6e\x5f\150\145\141\144", [$this, "\161\167\145\x67\153\x6f\x75\x69\171\157\x63\171\163\x79\167\x65"])->qcsmikeggeemccuu("\160\x61\162\x73\x65\x5f\x71\165\x65\x72\171", [$this, "\x71\x79\171\165\145\x67\x69\x65\141\145\143\x73\x69\x61\x77\153"]); } } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\144\x69\163\160\x6c\141\171\137\160\x6f\x73\x74\x5f\163\x74\x61\x74\145\x73", [$this, "\163\x6b\x77\x77\171\x73\x67\147\x71\x65\145\x65\163\x6f\143\x67"], 10, 2); $this->aqaqisyssqeomwom("\147\145\x74\137{$this->cisyiemkeykgkomc()}\x5f\x70\141\x67\x65\137\160\x65\162\155\x61\154\x69\156\153", [$this, "\171\143\161\x71\165\157\x69\171\x79\165\x65\163\x65\147\x73\x79"])->aqaqisyssqeomwom("\x67\145\164\137{$this->aakmagwggmkoiiyu()}\x5f\160\x61\x67\x65\137\160\145\162\x6d\141\154\x69\x6e\x6b", [$this, "\171\143\161\161\165\x6f\151\171\171\x75\x65\163\x65\147\163\171"]); } public function init() { $this->gogaagekwoisaqgu(); $this->yswsogicggygksoi(); } public function gogaagekwoisaqgu() { } public function yswsogicggygksoi() : ?Setting { $umqqgsiscygmeiem = null; if ($this->agwomuykuuimiqyk()) { $aokagokqyuysuksm = "{$this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this)}\x5f{$this->aqcogscycyycgkuq()}"; $umqqgsiscygmeiem = Setting::ocmycskcuiawkecq($aokagokqyuysuksm, $aokagokqyuysuksm, sprintf(__("\123\145\x74\164\151\x6e\x67\x20\x6f\x66\40\45\x73", PR__MDL__OPTIMIZATION_MANAGER), $this->qcgakseyaikigqco())); $this->aosyekoskegecumg($umqqgsiscygmeiem); } return $umqqgsiscygmeiem; } public function sqemekeuykmooums() : self { $this->igiywquyccyiaucw(Constants::wksqmcukwwqwyuuc, true); return $this; } public function agwomuykuuimiqyk() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::wksqmcukwwqwyuuc, false); } public function yeyiguyegmmyusea() { if ($this->ayseokmqycoqaigc() && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $gqumacwamusueoqa = 0; if (!$this->cummisgiueqymmum()) { $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $gqumacwamusueoqa = $omwmuycmeqcqokom->iooowgsqoyqseyuu(); } else { $gqumacwamusueoqa = $omwmuycmeqcqokom; } if ($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent)) { $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); } } if ($gqumacwamusueoqa || !$this->ygqycmmkoiuocoia()) { $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); } } if ($this->agwomuykuuimiqyk() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk)) { $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); $ykquycoiqesuckco = $this->yswsogicggygksoi(); if ($ykquycoiqesuckco && $suaemuyiacqyugsm && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oguuceugyqgsqewy($suaemuyiacqyugsm)) { } $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $ykquycoiqesuckco->cisyiemkeykgkomc() . "\137\154\151\156\153\137\x6d\x65\x74\141\137\142\157\x78", Constants::qgqyauaqwqmqseim => IconInterface::kyayumiaimokygsm, Constants::qescuiwgsyuikume => __("\120\x61\147\145\40\x53\145\x74\164\151\156\147\163", PR__CMN__FOUNDATION), Constants::cacismqswgaewkuu => Constants::imywcsggckkcywgk, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => function () use($ykquycoiqesuckco) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("\x67\x6f\137\x74\157\x5f\x70\141\147\145\x5f\x73\145\x74\x74\x69\156\x67")->gmscmskmuissgywk(true)->ygagwkucacyassau()->comqsuwokcsmkcau("\x61")->qigsyyqgewgskemg("\x6d\164\x2d\61\x20\x77\55\61\60\60")->igmaewykumgwoaoy("\150\x72\x65\x66", $ykquycoiqesuckco->oiucukewkckkwiqc())->igmaewykumgwoaoy("\164\x61\x72\147\145\x74", "\x5f\142\x6c\x61\156\x6b")->gswweykyogmsyawy(__("\x47\x6f\x20\x74\157\x20\123\x65\164\x74\151\156\147\163", PR__CMN__FOUNDATION))->render([Constants::qaacaqioeyiuakeu => true]); }, Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::mswoacegomcucaik) == $this->iooowgsqoyqseyuu()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\x53\x6f\162\162\171\54\40\x79\157\x75\x20\150\141\166\145\156\47\x74\40\141\x63\x63\x65\x73\163\x20\x74\x6f\40\x65\x64\x69\164\40\x74\150\151\x73\40\x70\141\x67\145\x2e", PR__CMN__FOUNDATION), "\x70\x72\151\166\141\x74\x65\55\160\141\x67\145"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; } } } public function gosmqcmmomkqwmis() { if ($this->sgeaogakoscmysgc()) { if (!$this->imkyoqyocosuqasu(Constants::dsmcseykksieoyuc, false)) { $this->caokeucsksukesyo()->eiwcuqigayigimak()->wwckmeoskuagomki("\x50\x52\x5f\117\x50\x54\x5f\x44\117\x4e\x54\137\x4f\120\124\x49\115\x49\x5a\x45\x5f\x50\101\107\105", 1); } if ($this->ayseokmqycoqaigc()) { $this->cecaguuoecmccuse("\164\150\145\x5f\x63\157\x6e\x74\x65\x6e\x74", [$this, "\x61\x69\155\x79\x63\155\153\x77\157\163\163\x67\x61\x73\x67\x73"], 999); $this->aqaqisyssqeomwom("\x74\x65\x6d\x70\x6c\x61\164\145\137\x68\x69\145\162\141\x72\143\x68\x79\x5f\164\x65\x6d\x70\154\x61\164\x65\163", [$this, "\165\x6b\147\151\x6b\x69\163\x6b\165\x6f\x73\x75\155\x71\x63\x71"], 10, 2)->aqaqisyssqeomwom("\164\145\155\x70\x6c\141\x74\x65\x5f\150\x69\x65\x72\141\162\143\x68\x79\137\x70\x61\x72\141\x6d\145\x74\145\x72\x73", [$this, "\141\155\153\x61\147\x71\x6f\151\x67\x79\x77\x73\157\x6d\x6f\x67"], 10, 2); $this->aqaqisyssqeomwom("\x62\x72\x65\141\x64\143\162\x75\155\x62\x5f\141\154\x6c\157\167\137\x72\145\x6e\144\x65\162", [$this, "\x61\157\x69\165\x69\x77\x6f\x79\x6f\x65\167\x79\x63\x69\x73\147"]); $this->waqewsckuayqguos("\142\145\146\x6f\162\145\137\x65\x6e\161\x75\145\x75\x65\137\x66\x72\x6f\156\164\x65\x6e\x64\137\141\163\163\145\x74\x73", [$this, "\x65\x6e\x71\165\x65\x75\145"]); } } } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if ($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo()) { $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); } return $yciaosuiyeieceug; } public function enqueue() { } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if ($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->iooowgsqoyqseyuu()) { $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); } } return $ewgwqamkygiqaawc; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if ($this->sgeaogakoscmysgc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; } } return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if ($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk())) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); } return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function qyyuegieaecsiawk($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc()) { $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if ($eisykmiomukgakao && !is_array($eisykmiomukgakao)) { $eisykmiomukgakao = [$eisykmiomukgakao]; } $aokagokqyuysuksm = $this->iooowgsqoyqseyuu(); if (!in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { $eisykmiomukgakao[] = $aokagokqyuysuksm; } $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; } return $gqgemcmoicmgaqie; } public function qwegkouiyocysywe() { if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy(Constants::imywcsggckkcywgk)) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\163\164\x79\x6c\145", [], "\164\162\43\x70\x6f\x73\164\55{$this->iooowgsqoyqseyuu()}\173\x64\151\x73\160\x6c\x61\x79\72\156\x6f\156\145\73\x7d"); } } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if ($this->sgeaogakoscmysgc($post)) { if (!$this->kwowqyyougwekomi()) { $this->kowqseeiwuesqsok(sprintf(__("\x25\x73\x20\x50\141\147\x65", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); } $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); } return $ekcqweaieimsgqoq; } public function ukqieeemykgisiic($gcqseksiskwueksc) { if ((int) $gcqseksiskwueksc === $this->iooowgsqoyqseyuu()) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); } } public function wqygsquiiymqsaaa() { if ($this->sgeaogakoscmysgc() && ($mgcyouymksesekki = $this->imkyoqyocosuqasu(Constants::oiukgckoauquscaw))) { if (is_bool($mgcyouymksesekki)) { $mgcyouymksesekki = "\x6e\x6f\x69\156\x64\x65\x78\54\40\x6e\157\x66\157\x6c\154\x6f\x77"; } echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu(Constants::oiukgckoauquscaw, $mgcyouymksesekki); } } public function ayseokmqycoqaigc() : bool { return $this->sscegwueamckwmcy("\x69\163\137{$this->aakmagwggmkoiiyu()}\137\160\x61\147\145\x5f\145\156\x61\142\154\145", true) && $this->sscegwueamckwmcy("\x69\x73\x5f{$this->cisyiemkeykgkomc()}\x5f\160\141\147\145\137\145\156\141\x62\x6c\145", true); } public function oyaugcgekomyiiik() : self { return $this->igiywquyccyiaucw(self::awgeksgyykycasie, false); } private function cummisgiueqymmum() : bool { $ksaameoqigiaoigg = true; if ($this->wuyimwscukmqqsqk(self::awgeksgyykycasie)) { $ksaameoqigiaoigg = (bool) $this->imkyoqyocosuqasu(self::awgeksgyykycasie); } return $ksaameoqigiaoigg; } public function wmsaakuicamguoam($qkcoyiyeuoyyoocy) : self { return $this->igiywquyccyiaucw(Constants::egukegmcemkeegqq, $qkcoyiyeuoyyoocy); } public function iooowgsqoyqseyuu() : int { $qkcoyiyeuoyyoocy = 0; if (!$this->cummisgiueqymmum()) { $qkcoyiyeuoyyoocy = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } else { $qkcoyiyeuoyyoocy = $this->imkyoqyocosuqasu(Constants::egukegmcemkeegqq, $qkcoyiyeuoyyoocy); } return (int) $qkcoyiyeuoyyoocy; } public function sgeaogakoscmysgc($post = null) : bool { return $this->iooowgsqoyqseyuu() === (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post); } public function kyqakacqeumicgag() { $suaemuyiacqyugsm = null; $qkcoyiyeuoyyoocy = $this->iooowgsqoyqseyuu(); if ($qkcoyiyeuoyyoocy) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($qkcoyiyeuoyyoocy, Constants::ckmqoekmugkggeym, true); } return $suaemuyiacqyugsm; } public function ycqquoiyyuesegsy(?string $migiiksoiymissge = '') : string { if ($suaemuyiacqyugsm = $this->iooowgsqoyqseyuu()) { $migiiksoiymissge = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } return $migiiksoiymissge; } public function aakmagwggmkoiiyu() : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); return $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); } public function cisyiemkeykgkomc() : string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); } $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; } return $uusmaiomayssaecw; } public function mmuyuqussqkgkega($omwmuycmeqcqokom) : self { return $this->igiywquyccyiaucw(Constants::qioguuqkouiccqig, $omwmuycmeqcqokom); } public function ygqycmmkoiuocoia() { return $this->imkyoqyocosuqasu(Constants::qioguuqkouiccqig, ''); } public function ukguiegqykkoqcuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::aqugcqsyeisayuog, false); } public function qmgkuqsqweecckyo() : bool { return !$this->wuyimwscukmqqsqk(Constants::esqqqyeecaiamqoc) || $this->imkyoqyocosuqasu(Constants::esqqqyeecaiamqoc); } public function ekgmmugauoasqwyc() : self { $this->igiywquyccyiaucw(Constants::esqqqyeecaiamqoc, false); return $this; } public function oakemcgacwakmawm() : self { $this->igiywquyccyiaucw(Constants::dsmcseykksieoyuc, false); return $this; } public function myysgyqcumekoueo() : self { return $this->igiywquyccyiaucw(Constants::aqugcqsyeisayuog, true); } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { return $this->igiywquyccyiaucw(Constants::qescuiwgsyuikume, $meqocwsecsywiiqs); } public function qcgakseyaikigqco() : string { return (string) $this->imkyoqyocosuqasu(Constants::qescuiwgsyuikume, ''); } public function wegcaymyqqoyewmw(string $aaokuekaimigoyue) : self { return $this->igiywquyccyiaucw(Constants::ouywiegeiyuaaawo, $aaokuekaimigoyue); } public function aqcogscycyycgkuq() : string { return (string) $this->imkyoqyocosuqasu(Constants::ouywiegeiyuaaawo, ''); } public function kowqseeiwuesqsok(string $iwskiosiswyoiesg) : self { return $this->igiywquyccyiaucw(Constants::eikgweiqgomeisyo, $iwskiosiswyoiesg); } public function kwowqyyougwekomi() : string { return (string) $this->imkyoqyocosuqasu(Constants::eikgweiqgomeisyo, ''); } public function siosgoymgqsyaisu(string $omkysikckkcieckq) : self { return $this->igiywquyccyiaucw(Constants::ugqacsomqcgmoqug, $omkysikckkcieckq); } public function giiuwsmyumqwwiyq() : string { return (string) $this->imkyoqyocosuqasu(Constants::ugqacsomqcgmoqug, ''); } public function gcoaskqqsewsoses(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if ($this->agwomuykuuimiqyk() && ($oeomqqoymoecyuuu = $this->yswsogicggygksoi())) { $eqgoocgaqwqcimie = $oeomqqoymoecyuuu->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $gmcgeogogyqsgawk); } return $eqgoocgaqwqcimie; } public function aosyekoskegecumg($amakmumgguksgmum) { } }

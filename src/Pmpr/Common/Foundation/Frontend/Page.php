<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd8540fef             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Frontend; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Traits\ArgsTrait; use WP_Post; use WP_Query; abstract class Page extends Container { use ArgsTrait; const egukegmcemkeegqq = "\160\x61\x67\x65\137\x69\x64"; const awgeksgyykycasie = "\164\x61\x6b\145\137\160\141\147\145\137\x69\156\x5f\x73\x65\164\164\151\156\147\163"; public function ikcgmcycisiccyuc() { $this->qiccuiwooiquycsg(); if (!$this->giiuwsmyumqwwiyq()) { $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\137\x70\x61\x67\145"); } } public function qiccuiwooiquycsg() { } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160", [$this, "\x67\x6f\163\x6d\161\143\x6d\155\157\155\x6b\161\167\x6d\x69\x73"])->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\151\156\x69\164"])->qcsmikeggeemccuu("\167\160\x5f\150\x65\x61\144", [$this, "\167\161\x79\x67\163\x71\165\151\151\171\x6d\161\163\141\x61\141"])->qcsmikeggeemccuu("\141\x64\x6d\x69\156\x5f\x69\x6e\x69\164", [$this, "\x79\145\171\x69\x67\165\x79\x65\147\155\x6d\171\x75\x73\x65\141"])->qcsmikeggeemccuu("\144\145\154\x65\164\x65\137\x70\x6f\163\164", [$this, "\x75\x6b\x71\151\145\145\145\155\x79\153\x67\x69\163\x69\x69\143"]); if ($this->ukguiegqykkoqcuq()) { $this->qcsmikeggeemccuu("\141\x64\155\151\156\137\x68\x65\141\x64", [$this, "\161\167\x65\x67\x6b\157\165\x69\171\x6f\x63\171\163\x79\167\145"])->qcsmikeggeemccuu("\160\x61\x72\163\145\137\161\x75\145\x72\x79", [$this, "\x71\x79\x79\x75\x65\147\x69\x65\141\145\x63\163\151\141\x77\153"]); } } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\144\151\x73\x70\x6c\141\x79\x5f\160\x6f\x73\164\x5f\163\x74\x61\x74\x65\x73", [$this, "\x73\x6b\x77\167\171\x73\x67\x67\161\145\x65\145\x73\157\143\147"], 10, 2); $this->aqaqisyssqeomwom("\147\x65\x74\x5f{$this->cisyiemkeykgkomc()}\137\160\x61\x67\145\137\x70\x65\162\155\x61\154\x69\x6e\153", [$this, "\171\143\161\161\165\x6f\151\x79\x79\165\x65\163\x65\147\163\x79"])->aqaqisyssqeomwom("\x67\145\x74\137{$this->aakmagwggmkoiiyu()}\137\160\x61\147\x65\137\160\145\162\x6d\x61\154\151\156\153", [$this, "\x79\x63\x71\161\x75\157\151\171\x79\165\145\x73\145\x67\163\x79"]); } public function init() { $this->gogaagekwoisaqgu(); $this->yswsogicggygksoi(); } public function gogaagekwoisaqgu() { } public function yswsogicggygksoi() : ?Setting { $umqqgsiscygmeiem = null; if ($this->agwomuykuuimiqyk()) { $aokagokqyuysuksm = "{$this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this)}\137{$this->aqcogscycyycgkuq()}"; $umqqgsiscygmeiem = Setting::ocmycskcuiawkecq($aokagokqyuysuksm, $aokagokqyuysuksm, sprintf(__("\x53\145\x74\164\151\156\147\x20\157\146\40\45\x73", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); $this->aosyekoskegecumg($umqqgsiscygmeiem); } return $umqqgsiscygmeiem; } public function sqemekeuykmooums() : self { $this->igiywquyccyiaucw(Constants::wksqmcukwwqwyuuc, true); return $this; } public function agwomuykuuimiqyk() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::wksqmcukwwqwyuuc, false); } public function yeyiguyegmmyusea() { if ($this->ayseokmqycoqaigc() && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $gqumacwamusueoqa = 0; if (!$this->cummisgiueqymmum()) { $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $gqumacwamusueoqa = $omwmuycmeqcqokom->iooowgsqoyqseyuu(); } else { $gqumacwamusueoqa = $omwmuycmeqcqokom; } if ($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent)) { $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); } } if ($gqumacwamusueoqa || !$this->ygqycmmkoiuocoia()) { $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); } } if ($this->agwomuykuuimiqyk() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk)) { $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); $ykquycoiqesuckco = $this->yswsogicggygksoi(); if ($ykquycoiqesuckco && $suaemuyiacqyugsm && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oguuceugyqgsqewy($suaemuyiacqyugsm)) { } $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $ykquycoiqesuckco->cisyiemkeykgkomc() . "\137\154\151\156\153\137\155\145\x74\141\137\142\157\x78", Constants::qgqyauaqwqmqseim => IconInterface::kyayumiaimokygsm, Constants::qescuiwgsyuikume => __("\120\141\x67\145\40\123\x65\x74\164\151\x6e\x67\x73", PR__CMN__FOUNDATION), Constants::cacismqswgaewkuu => Constants::imywcsggckkcywgk, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => function () use($ykquycoiqesuckco) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("\147\x6f\137\164\157\x5f\x70\x61\147\x65\x5f\163\145\164\x74\x69\156\147")->gmscmskmuissgywk(true)->ygagwkucacyassau()->comqsuwokcsmkcau("\x61")->qigsyyqgewgskemg("\x6d\x74\55\61\40\x77\55\61\x30\x30")->igmaewykumgwoaoy("\150\162\x65\146", $ykquycoiqesuckco->oiucukewkckkwiqc())->igmaewykumgwoaoy("\x74\x61\162\x67\145\x74", "\x5f\142\x6c\x61\156\x6b")->gswweykyogmsyawy(__("\x47\157\40\x74\157\40\x53\x65\164\164\151\156\147\163", PR__CMN__FOUNDATION))->render([Constants::qaacaqioeyiuakeu => true]); }, Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::mswoacegomcucaik) == $this->iooowgsqoyqseyuu()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\123\x6f\x72\162\171\54\40\x79\157\165\x20\150\x61\x76\145\156\47\164\x20\141\143\143\x65\163\163\40\x74\x6f\x20\145\x64\x69\164\40\x74\x68\x69\163\40\x70\x61\147\145\56", PR__CMN__FOUNDATION), "\160\162\151\166\141\164\145\x2d\x70\x61\147\145"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; } } } public function gosmqcmmomkqwmis() { if ($this->sgeaogakoscmysgc()) { if (!$this->imkyoqyocosuqasu(Constants::dsmcseykksieoyuc, false)) { $this->caokeucsksukesyo()->eiwcuqigayigimak()->wwckmeoskuagomki("\120\122\137\x4f\x50\124\x5f\x44\117\x4e\x54\x5f\x4f\120\x54\x49\x4d\111\132\105\x5f\120\x41\107\x45", 1); } if ($this->ayseokmqycoqaigc()) { $this->cecaguuoecmccuse("\x74\x68\145\x5f\143\x6f\156\164\x65\156\x74", [$this, "\x61\x69\x6d\x79\x63\x6d\153\x77\157\163\163\147\141\x73\147\x73"], 999); $this->aqaqisyssqeomwom("\164\145\x6d\160\x6c\x61\x74\x65\137\x68\x69\x65\x72\x61\162\143\x68\x79\137\164\145\x6d\160\x6c\141\164\145\163", [$this, "\x75\153\x67\x69\153\x69\163\x6b\165\x6f\163\x75\155\x71\x63\161"], 10, 2)->aqaqisyssqeomwom("\x74\x65\x6d\160\154\x61\164\x65\x5f\x68\151\x65\162\141\162\143\x68\171\x5f\160\141\x72\141\155\x65\164\x65\x72\x73", [$this, "\141\x6d\153\x61\x67\x71\x6f\151\147\171\167\163\x6f\155\157\147"], 10, 2); $this->aqaqisyssqeomwom("\142\x72\x65\141\x64\x63\162\165\155\142\137\141\x6c\154\157\x77\x5f\162\145\x6e\144\145\162", [$this, "\141\x6f\x69\x75\151\x77\x6f\171\157\145\167\x79\143\151\x73\147"]); $this->waqewsckuayqguos("\142\145\x66\157\162\145\x5f\145\156\161\165\145\165\x65\137\x66\x72\x6f\x6e\x74\145\156\x64\137\x61\163\163\145\x74\x73", [$this, "\145\156\161\165\x65\165\145"]); } } } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if ($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo()) { $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); } return $yciaosuiyeieceug; } public function enqueue() { } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if ($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->iooowgsqoyqseyuu()) { $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); } } return $ewgwqamkygiqaawc; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if ($this->sgeaogakoscmysgc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; } } return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if ($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk())) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); } return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function qyyuegieaecsiawk($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc()) { $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if ($eisykmiomukgakao && !is_array($eisykmiomukgakao)) { $eisykmiomukgakao = [$eisykmiomukgakao]; } $aokagokqyuysuksm = $this->iooowgsqoyqseyuu(); if (!in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { $eisykmiomukgakao[] = $aokagokqyuysuksm; } $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; } return $gqgemcmoicmgaqie; } public function qwegkouiyocysywe() { if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy(Constants::imywcsggckkcywgk)) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\163\x74\171\x6c\145", [], "\x74\x72\x23\x70\x6f\163\x74\55{$this->iooowgsqoyqseyuu()}\173\x64\x69\163\x70\154\x61\171\x3a\156\x6f\x6e\x65\73\x7d"); } } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if ($this->sgeaogakoscmysgc($post)) { if (!$this->kwowqyyougwekomi()) { $this->kowqseeiwuesqsok(sprintf(__("\45\x73\40\x50\141\147\145", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); } $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); } return $ekcqweaieimsgqoq; } public function ukqieeemykgisiic($gcqseksiskwueksc) { if ((int) $gcqseksiskwueksc === $this->iooowgsqoyqseyuu()) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); } } public function wqygsquiiymqsaaa() { if ($this->sgeaogakoscmysgc() && ($mgcyouymksesekki = $this->imkyoqyocosuqasu(Constants::oiukgckoauquscaw))) { if (is_bool($mgcyouymksesekki)) { $mgcyouymksesekki = "\156\x6f\151\156\144\145\x78\54\x20\x6e\157\146\157\x6c\154\157\x77"; } echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu(Constants::oiukgckoauquscaw, $mgcyouymksesekki); } } public function ayseokmqycoqaigc() : bool { return $this->sscegwueamckwmcy("\151\163\137{$this->aakmagwggmkoiiyu()}\x5f\x70\x61\x67\x65\137\145\156\141\x62\154\x65", true) && $this->sscegwueamckwmcy("\151\x73\137{$this->cisyiemkeykgkomc()}\x5f\x70\x61\x67\x65\137\145\156\141\x62\154\145", true); } public function oyaugcgekomyiiik() : self { return $this->igiywquyccyiaucw(self::awgeksgyykycasie, false); } private function cummisgiueqymmum() : bool { $ksaameoqigiaoigg = true; if ($this->wuyimwscukmqqsqk(self::awgeksgyykycasie)) { $ksaameoqigiaoigg = (bool) $this->imkyoqyocosuqasu(self::awgeksgyykycasie); } return $ksaameoqigiaoigg; } public function wmsaakuicamguoam($qkcoyiyeuoyyoocy) : self { return $this->igiywquyccyiaucw(Constants::egukegmcemkeegqq, $qkcoyiyeuoyyoocy); } public function iooowgsqoyqseyuu() : int { $qkcoyiyeuoyyoocy = 0; if (!$this->cummisgiueqymmum()) { $qkcoyiyeuoyyoocy = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } else { $qkcoyiyeuoyyoocy = $this->imkyoqyocosuqasu(Constants::egukegmcemkeegqq, $qkcoyiyeuoyyoocy); } return (int) $qkcoyiyeuoyyoocy; } public function sgeaogakoscmysgc($post = null) : bool { return $this->iooowgsqoyqseyuu() === (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post); } public function kyqakacqeumicgag() { $suaemuyiacqyugsm = null; $qkcoyiyeuoyyoocy = $this->iooowgsqoyqseyuu(); if ($qkcoyiyeuoyyoocy) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($qkcoyiyeuoyyoocy, Constants::ckmqoekmugkggeym, true); } return $suaemuyiacqyugsm; } public function ycqquoiyyuesegsy(?string $migiiksoiymissge = '') : string { if ($suaemuyiacqyugsm = $this->iooowgsqoyqseyuu()) { $migiiksoiymissge = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } return $migiiksoiymissge; } public function aakmagwggmkoiiyu() : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); return $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); } public function cisyiemkeykgkomc() : string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); } $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; } return $uusmaiomayssaecw; } public function mmuyuqussqkgkega($omwmuycmeqcqokom) : self { return $this->igiywquyccyiaucw(Constants::qioguuqkouiccqig, $omwmuycmeqcqokom); } public function ygqycmmkoiuocoia() { return $this->imkyoqyocosuqasu(Constants::qioguuqkouiccqig, ''); } public function ukguiegqykkoqcuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::aqugcqsyeisayuog, false); } public function qmgkuqsqweecckyo() : bool { return !$this->wuyimwscukmqqsqk(Constants::esqqqyeecaiamqoc) || $this->imkyoqyocosuqasu(Constants::esqqqyeecaiamqoc); } public function ekgmmugauoasqwyc() : self { $this->igiywquyccyiaucw(Constants::esqqqyeecaiamqoc, false); return $this; } public function oakemcgacwakmawm() : self { $this->igiywquyccyiaucw(Constants::dsmcseykksieoyuc, false); return $this; } public function myysgyqcumekoueo() : self { return $this->igiywquyccyiaucw(Constants::aqugcqsyeisayuog, true); } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { return $this->igiywquyccyiaucw(Constants::qescuiwgsyuikume, $meqocwsecsywiiqs); } public function qcgakseyaikigqco() : string { return (string) $this->imkyoqyocosuqasu(Constants::qescuiwgsyuikume, ''); } public function wegcaymyqqoyewmw(string $aaokuekaimigoyue) : self { return $this->igiywquyccyiaucw(Constants::ouywiegeiyuaaawo, $aaokuekaimigoyue); } public function aqcogscycyycgkuq() : string { return (string) $this->imkyoqyocosuqasu(Constants::ouywiegeiyuaaawo, ''); } public function kowqseeiwuesqsok(string $iwskiosiswyoiesg) : self { return $this->igiywquyccyiaucw(Constants::eikgweiqgomeisyo, $iwskiosiswyoiesg); } public function kwowqyyougwekomi() : string { return (string) $this->imkyoqyocosuqasu(Constants::eikgweiqgomeisyo, ''); } public function siosgoymgqsyaisu(string $omkysikckkcieckq) : self { return $this->igiywquyccyiaucw(Constants::ugqacsomqcgmoqug, $omkysikckkcieckq); } public function giiuwsmyumqwwiyq() : string { return (string) $this->imkyoqyocosuqasu(Constants::ugqacsomqcgmoqug, ''); } public function gcoaskqqsewsoses(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if ($this->agwomuykuuimiqyk() && ($oeomqqoymoecyuuu = $this->yswsogicggygksoi())) { $eqgoocgaqwqcimie = $oeomqqoymoecyuuu->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $gmcgeogogyqsgawk); } return $eqgoocgaqwqcimie; } public function aosyekoskegecumg($amakmumgguksgmum) { } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6780382025b61             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Frontend; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Traits\ArgsTrait; use WP_Post; use WP_Query; abstract class Page extends Container { use ArgsTrait; const egukegmcemkeegqq = "\160\x61\x67\145\x5f\x69\x64"; const awgeksgyykycasie = "\164\141\x6b\145\x5f\160\x61\x67\x65\137\x69\x6e\137\163\145\164\x74\151\156\147\x73"; public function ikcgmcycisiccyuc() { $this->qiccuiwooiquycsg(); if (!$this->giiuwsmyumqwwiyq()) { $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\137\160\141\147\145"); } } public function qiccuiwooiquycsg() { } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70", [$this, "\x67\x6f\163\x6d\161\143\155\155\x6f\x6d\153\x71\167\155\151\163"])->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x69\156\151\164"])->qcsmikeggeemccuu("\x77\160\137\150\x65\141\x64", [$this, "\x77\x71\171\x67\x73\161\x75\151\151\x79\155\161\x73\x61\x61\x61"])->qcsmikeggeemccuu("\x61\x64\x6d\151\156\x5f\151\x6e\x69\x74", [$this, "\171\145\171\151\x67\x75\x79\145\x67\155\155\x79\165\x73\x65\141"])->qcsmikeggeemccuu("\x64\145\x6c\145\164\x65\137\x70\157\163\164", [$this, "\x75\x6b\x71\x69\145\x65\145\x6d\x79\x6b\147\x69\163\151\151\x63"]); if ($this->ukguiegqykkoqcuq()) { $this->qcsmikeggeemccuu("\x61\144\155\151\x6e\x5f\150\145\x61\x64", [$this, "\x71\167\145\147\x6b\x6f\165\151\x79\157\x63\171\x73\x79\x77\145"])->qcsmikeggeemccuu("\160\141\x72\x73\145\137\x71\x75\145\162\x79", [$this, "\161\x79\x79\x75\145\147\x69\x65\141\x65\143\x73\151\141\167\x6b"]); } } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x64\151\x73\160\x6c\x61\171\x5f\160\157\163\x74\x5f\x73\164\x61\x74\x65\x73", [$this, "\x73\x6b\167\x77\x79\x73\x67\147\x71\x65\x65\x65\x73\x6f\143\147"], 10, 2); $this->aqaqisyssqeomwom("\x67\145\x74\x5f{$this->cisyiemkeykgkomc()}\x5f\160\141\147\x65\137\160\145\162\x6d\141\x6c\x69\x6e\153", [$this, "\x79\143\161\x71\x75\157\151\171\x79\x75\145\x73\145\x67\163\171"])->aqaqisyssqeomwom("\147\x65\164\137{$this->aakmagwggmkoiiyu()}\x5f\x70\x61\147\145\137\x70\x65\x72\155\x61\x6c\x69\156\x6b", [$this, "\171\x63\x71\x71\x75\157\x69\171\x79\x75\x65\163\145\147\x73\171"]); } public function init() { $this->gogaagekwoisaqgu(); $this->yswsogicggygksoi(); } public function gogaagekwoisaqgu() { } public function yswsogicggygksoi() : ?Setting { $umqqgsiscygmeiem = null; if ($this->agwomuykuuimiqyk()) { $aokagokqyuysuksm = "{$this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this)}\137{$this->aqcogscycyycgkuq()}"; $umqqgsiscygmeiem = Setting::ocmycskcuiawkecq($aokagokqyuysuksm, $aokagokqyuysuksm, sprintf(__("\x53\145\x74\x74\151\x6e\x67\40\x6f\x66\x20\x25\163", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); $this->aosyekoskegecumg($umqqgsiscygmeiem); } return $umqqgsiscygmeiem; } public function sqemekeuykmooums() : self { $this->igiywquyccyiaucw(Constants::wksqmcukwwqwyuuc, true); return $this; } public function agwomuykuuimiqyk() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::wksqmcukwwqwyuuc, false); } public function yeyiguyegmmyusea() { if ($this->ayseokmqycoqaigc() && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $gqumacwamusueoqa = 0; if (!$this->cummisgiueqymmum()) { $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $gqumacwamusueoqa = $omwmuycmeqcqokom->iooowgsqoyqseyuu(); } else { $gqumacwamusueoqa = $omwmuycmeqcqokom; } if ($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent)) { $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); } } if ($gqumacwamusueoqa || !$this->ygqycmmkoiuocoia()) { $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); } } if ($this->agwomuykuuimiqyk() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk)) { $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); $ykquycoiqesuckco = $this->yswsogicggygksoi(); if ($ykquycoiqesuckco && $suaemuyiacqyugsm && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oguuceugyqgsqewy($suaemuyiacqyugsm)) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $ykquycoiqesuckco->cisyiemkeykgkomc() . "\x5f\x6c\151\x6e\x6b\137\x6d\x65\164\141\x5f\142\157\x78", Constants::qgqyauaqwqmqseim => IconInterface::kyayumiaimokygsm, Constants::qescuiwgsyuikume => __("\x50\x61\147\145\40\x53\x65\x74\x74\151\x6e\x67\163", PR__CMN__FOUNDATION), Constants::cacismqswgaewkuu => Constants::imywcsggckkcywgk, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => function () use($ykquycoiqesuckco) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("\147\x6f\x5f\x74\157\137\x70\x61\147\145\137\163\145\x74\x74\x69\156\x67")->gmscmskmuissgywk(true)->ygagwkucacyassau()->comqsuwokcsmkcau("\x61")->qigsyyqgewgskemg("\155\164\x2d\61\x20\x77\x2d\x31\60\60")->igmaewykumgwoaoy("\150\x72\145\x66", $ykquycoiqesuckco->oiucukewkckkwiqc())->igmaewykumgwoaoy("\x74\141\x72\x67\x65\164", "\x5f\142\x6c\x61\156\x6b")->gswweykyogmsyawy(__("\x47\157\x20\164\x6f\40\123\145\164\164\x69\x6e\x67\163", PR__CMN__FOUNDATION))->render([Constants::qaacaqioeyiuakeu => true]); }, Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); } } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::mswoacegomcucaik) == $this->iooowgsqoyqseyuu()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\123\x6f\x72\162\x79\54\40\x79\x6f\x75\40\150\x61\166\x65\x6e\47\x74\40\141\x63\x63\145\163\163\x20\x74\x6f\x20\145\x64\x69\164\x20\164\x68\151\x73\x20\160\x61\x67\x65\56", PR__CMN__FOUNDATION), "\x70\x72\151\x76\x61\164\x65\x2d\160\141\147\x65"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; } } } public function gosmqcmmomkqwmis() { if ($this->sgeaogakoscmysgc()) { if (!$this->imkyoqyocosuqasu(Constants::dsmcseykksieoyuc, false)) { $this->caokeucsksukesyo()->eiwcuqigayigimak()->wwckmeoskuagomki("\x50\x52\x5f\117\120\x54\x49\x4d\111\132\101\124\111\117\x4e\137\104\117\116\124\x5f\117\x50\x54\111\115\x49\x5a\x45", sprintf("\x70\x61\x67\x65\x20\x25\x73\40\143\x61\156\x20\156\157\164\x20\x62\145\x20\x63\x61\x63\150\145\56", $this->qcgakseyaikigqco())); } if ($this->ayseokmqycoqaigc()) { $this->cecaguuoecmccuse("\164\150\145\137\x63\157\156\164\x65\x6e\164", [$this, "\141\x69\155\171\x63\155\153\167\157\x73\163\x67\141\163\147\163"], 999); $this->aqaqisyssqeomwom("\164\145\x6d\160\154\x61\x74\145\137\150\x69\x65\x72\141\x72\143\x68\x79\137\x74\x65\x6d\160\154\x61\x74\x65\163", [$this, "\165\x6b\x67\151\x6b\151\163\153\x75\x6f\x73\165\x6d\161\x63\161"], 10, 2)->aqaqisyssqeomwom("\164\145\155\160\x6c\x61\x74\145\x5f\150\151\x65\x72\x61\162\x63\150\171\137\x70\x61\x72\x61\x6d\145\164\145\x72\x73", [$this, "\x61\x6d\153\x61\x67\x71\157\x69\147\171\x77\x73\x6f\x6d\157\147"], 10, 2); $this->aqaqisyssqeomwom("\x62\162\145\x61\144\143\x72\165\x6d\x62\x5f\141\154\154\157\x77\x5f\x72\x65\x6e\144\x65\x72", [$this, "\141\157\x69\x75\x69\x77\157\x79\157\x65\x77\171\143\x69\x73\147"]); $this->waqewsckuayqguos("\x62\x65\x66\x6f\x72\145\x5f\145\156\161\165\x65\x75\145\x5f\x66\x72\x6f\156\164\x65\x6e\x64\137\x61\163\163\x65\x74\x73", [$this, "\145\x6e\x71\x75\x65\x75\x65"]); } } } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if ($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo()) { $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); } return $yciaosuiyeieceug; } public function enqueue() { } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if ($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->iooowgsqoyqseyuu()) { $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); } } return $ewgwqamkygiqaawc; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if ($this->sgeaogakoscmysgc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; } } return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if ($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk())) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); } return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function qyyuegieaecsiawk($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc()) { $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if ($eisykmiomukgakao && !is_array($eisykmiomukgakao)) { $eisykmiomukgakao = [$eisykmiomukgakao]; } $aokagokqyuysuksm = $this->iooowgsqoyqseyuu(); if (!in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { $eisykmiomukgakao[] = $aokagokqyuysuksm; } $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; } return $gqgemcmoicmgaqie; } public function qwegkouiyocysywe() { if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy(Constants::imywcsggckkcywgk)) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\x73\164\x79\154\x65", [], "\164\x72\x23\x70\157\x73\164\55{$this->iooowgsqoyqseyuu()}\173\x64\151\163\160\154\141\x79\x3a\156\x6f\156\145\73\x7d"); } } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if ($this->sgeaogakoscmysgc($post)) { if (!$this->kwowqyyougwekomi()) { $this->kowqseeiwuesqsok(sprintf(__("\x25\163\40\120\x61\147\x65", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); } $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); } return $ekcqweaieimsgqoq; } public function ukqieeemykgisiic($gcqseksiskwueksc) { if ((int) $gcqseksiskwueksc === $this->iooowgsqoyqseyuu()) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); } } public function wqygsquiiymqsaaa() { if ($this->sgeaogakoscmysgc() && ($mgcyouymksesekki = $this->imkyoqyocosuqasu(Constants::oiukgckoauquscaw))) { if (is_bool($mgcyouymksesekki)) { $mgcyouymksesekki = "\156\157\151\x6e\x64\x65\170\54\40\156\x6f\146\x6f\x6c\154\157\167"; } echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu(Constants::oiukgckoauquscaw, $mgcyouymksesekki); } } public function ayseokmqycoqaigc() : bool { return $this->sscegwueamckwmcy("\151\163\x5f{$this->aakmagwggmkoiiyu()}\137\160\141\x67\x65\x5f\x65\156\x61\142\x6c\x65", true) && $this->sscegwueamckwmcy("\x69\x73\x5f{$this->cisyiemkeykgkomc()}\137\160\x61\x67\145\137\145\x6e\141\142\154\x65", true); } public function oyaugcgekomyiiik() : self { return $this->igiywquyccyiaucw(self::awgeksgyykycasie, false); } private function cummisgiueqymmum() : bool { $ksaameoqigiaoigg = true; if ($this->wuyimwscukmqqsqk(self::awgeksgyykycasie)) { $ksaameoqigiaoigg = (bool) $this->imkyoqyocosuqasu(self::awgeksgyykycasie); } return $ksaameoqigiaoigg; } public function wmsaakuicamguoam($qkcoyiyeuoyyoocy) : self { return $this->igiywquyccyiaucw(Constants::egukegmcemkeegqq, $qkcoyiyeuoyyoocy); } public function iooowgsqoyqseyuu() : int { $qkcoyiyeuoyyoocy = 0; if (!$this->cummisgiueqymmum()) { $qkcoyiyeuoyyoocy = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } else { $qkcoyiyeuoyyoocy = $this->imkyoqyocosuqasu(Constants::egukegmcemkeegqq, $qkcoyiyeuoyyoocy); } return (int) $qkcoyiyeuoyyoocy; } public function sgeaogakoscmysgc($post = null) : bool { return $this->iooowgsqoyqseyuu() === (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post); } public function kyqakacqeumicgag() { $suaemuyiacqyugsm = null; $qkcoyiyeuoyyoocy = $this->iooowgsqoyqseyuu(); if ($qkcoyiyeuoyyoocy) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($qkcoyiyeuoyyoocy, Constants::ckmqoekmugkggeym, true); } return $suaemuyiacqyugsm; } public function ycqquoiyyuesegsy(?string $migiiksoiymissge = '') : string { if ($suaemuyiacqyugsm = $this->iooowgsqoyqseyuu()) { $migiiksoiymissge = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } return $migiiksoiymissge; } public function aakmagwggmkoiiyu() : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); return $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); } public function cisyiemkeykgkomc() : string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); } $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; } return $uusmaiomayssaecw; } public function mmuyuqussqkgkega($omwmuycmeqcqokom) : self { return $this->igiywquyccyiaucw(Constants::qioguuqkouiccqig, $omwmuycmeqcqokom); } public function ygqycmmkoiuocoia() { return $this->imkyoqyocosuqasu(Constants::qioguuqkouiccqig, ''); } public function ukguiegqykkoqcuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::aqugcqsyeisayuog, false); } public function qmgkuqsqweecckyo() : bool { return !$this->wuyimwscukmqqsqk(Constants::esqqqyeecaiamqoc) || $this->imkyoqyocosuqasu(Constants::esqqqyeecaiamqoc); } public function ekgmmugauoasqwyc() : self { $this->igiywquyccyiaucw(Constants::esqqqyeecaiamqoc, false); return $this; } public function oakemcgacwakmawm() : self { $this->igiywquyccyiaucw(Constants::dsmcseykksieoyuc, false); return $this; } public function myysgyqcumekoueo() : self { return $this->igiywquyccyiaucw(Constants::aqugcqsyeisayuog, true); } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { return $this->igiywquyccyiaucw(Constants::qescuiwgsyuikume, $meqocwsecsywiiqs); } public function qcgakseyaikigqco() : string { return (string) $this->imkyoqyocosuqasu(Constants::qescuiwgsyuikume, ''); } public function wegcaymyqqoyewmw(string $aaokuekaimigoyue) : self { return $this->igiywquyccyiaucw(Constants::ouywiegeiyuaaawo, $aaokuekaimigoyue); } public function aqcogscycyycgkuq() : string { return (string) $this->imkyoqyocosuqasu(Constants::ouywiegeiyuaaawo, ''); } public function kowqseeiwuesqsok(string $iwskiosiswyoiesg) : self { return $this->igiywquyccyiaucw(Constants::eikgweiqgomeisyo, $iwskiosiswyoiesg); } public function kwowqyyougwekomi() : string { return (string) $this->imkyoqyocosuqasu(Constants::eikgweiqgomeisyo, ''); } public function siosgoymgqsyaisu(string $omkysikckkcieckq) : self { return $this->igiywquyccyiaucw(Constants::ugqacsomqcgmoqug, $omkysikckkcieckq); } public function giiuwsmyumqwwiyq() : string { return (string) $this->imkyoqyocosuqasu(Constants::ugqacsomqcgmoqug, ''); } public function gcoaskqqsewsoses(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if ($this->agwomuykuuimiqyk() && ($oeomqqoymoecyuuu = $this->yswsogicggygksoi())) { $eqgoocgaqwqcimie = $oeomqqoymoecyuuu->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $gmcgeogogyqsgawk); } return $eqgoocgaqwqcimie; } public function aosyekoskegecumg($amakmumgguksgmum) { } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675fac6ea7f40             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Frontend; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Traits\ArgsTrait; use WP_Post; use WP_Query; abstract class Page extends Container { use ArgsTrait; const egukegmcemkeegqq = "\x70\x61\147\x65\137\151\x64"; const awgeksgyykycasie = "\164\141\x6b\145\x5f\x70\141\x67\145\137\x69\x6e\137\163\145\x74\x74\151\x6e\147\x73"; public function ikcgmcycisiccyuc() { $this->qiccuiwooiquycsg(); if (!$this->giiuwsmyumqwwiyq()) { $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\x5f\160\x61\x67\x65"); } } public function qiccuiwooiquycsg() { } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70", [$this, "\147\157\163\x6d\x71\x63\x6d\155\x6f\x6d\x6b\x71\x77\155\151\x73"])->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x69\156\x69\164"])->qcsmikeggeemccuu("\x77\x70\x5f\150\x65\141\x64", [$this, "\167\161\x79\x67\x73\161\165\151\151\171\x6d\161\x73\141\x61\x61"])->qcsmikeggeemccuu("\141\x64\155\151\x6e\x5f\x69\156\x69\x74", [$this, "\171\145\171\x69\x67\x75\x79\145\147\155\155\171\x75\x73\x65\141"])->qcsmikeggeemccuu("\144\145\154\x65\x74\x65\137\x70\157\x73\164", [$this, "\x75\x6b\161\x69\145\x65\x65\x6d\171\x6b\147\x69\x73\x69\x69\x63"]); if ($this->ukguiegqykkoqcuq()) { $this->qcsmikeggeemccuu("\x61\x64\155\x69\156\x5f\x68\145\141\144", [$this, "\x71\x77\145\147\153\157\165\x69\x79\x6f\143\171\163\x79\167\x65"])->qcsmikeggeemccuu("\x70\x61\162\x73\145\x5f\161\165\x65\x72\171", [$this, "\161\171\x79\165\x65\x67\151\145\x61\145\x63\x73\151\x61\167\153"]); } } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\144\151\x73\160\x6c\x61\171\137\x70\157\163\x74\x5f\163\x74\x61\164\x65\x73", [$this, "\x73\153\x77\x77\171\163\x67\147\x71\x65\145\145\x73\157\143\x67"], 10, 2); $this->aqaqisyssqeomwom("\147\x65\164\x5f{$this->cisyiemkeykgkomc()}\137\x70\x61\147\145\137\x70\x65\162\155\x61\154\151\156\x6b", [$this, "\171\x63\161\161\165\x6f\151\171\x79\165\x65\163\145\147\x73\171"])->aqaqisyssqeomwom("\x67\x65\x74\x5f{$this->aakmagwggmkoiiyu()}\x5f\160\x61\147\145\137\160\x65\162\x6d\x61\154\x69\x6e\153", [$this, "\171\x63\161\161\x75\x6f\151\x79\x79\165\x65\x73\145\147\x73\171"]); } public function init() { $this->gogaagekwoisaqgu(); $this->yswsogicggygksoi(); } public function gogaagekwoisaqgu() { } public function yswsogicggygksoi() : ?Setting { $umqqgsiscygmeiem = null; if ($this->agwomuykuuimiqyk()) { $aokagokqyuysuksm = "{$this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this)}\x5f{$this->aqcogscycyycgkuq()}"; $umqqgsiscygmeiem = Setting::ocmycskcuiawkecq($aokagokqyuysuksm, $aokagokqyuysuksm, sprintf(__("\123\145\x74\x74\x69\156\147\40\x6f\146\40\45\x73", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); $this->aosyekoskegecumg($umqqgsiscygmeiem); } return $umqqgsiscygmeiem; } public function sqemekeuykmooums() : self { $this->igiywquyccyiaucw(Constants::wksqmcukwwqwyuuc, true); return $this; } public function agwomuykuuimiqyk() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::wksqmcukwwqwyuuc, false); } public function yeyiguyegmmyusea() { if ($this->ayseokmqycoqaigc() && !$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $gqumacwamusueoqa = 0; if (!$this->cummisgiueqymmum()) { $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $gqumacwamusueoqa = $omwmuycmeqcqokom->iooowgsqoyqseyuu(); } else { $gqumacwamusueoqa = $omwmuycmeqcqokom; } if ($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent)) { $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); } } if ($gqumacwamusueoqa || !$this->ygqycmmkoiuocoia()) { $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); } } if ($this->agwomuykuuimiqyk() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk)) { $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); $ykquycoiqesuckco = $this->yswsogicggygksoi(); if ($ykquycoiqesuckco && $suaemuyiacqyugsm && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oguuceugyqgsqewy($suaemuyiacqyugsm)) { } $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $ykquycoiqesuckco->cisyiemkeykgkomc() . "\137\x6c\151\156\153\137\155\x65\164\141\x5f\x62\157\170", Constants::qgqyauaqwqmqseim => IconInterface::kyayumiaimokygsm, Constants::qescuiwgsyuikume => __("\120\141\x67\x65\x20\x53\145\x74\164\x69\156\x67\x73", PR__CMN__FOUNDATION), Constants::cacismqswgaewkuu => Constants::imywcsggckkcywgk, Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => function () use($ykquycoiqesuckco) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("\x67\x6f\x5f\x74\157\x5f\x70\x61\147\145\137\163\145\164\164\151\156\147")->gmscmskmuissgywk(true)->ygagwkucacyassau()->comqsuwokcsmkcau("\x61")->qigsyyqgewgskemg("\155\164\55\61\x20\x77\x2d\x31\60\x30")->igmaewykumgwoaoy("\x68\162\x65\146", $ykquycoiqesuckco->oiucukewkckkwiqc())->igmaewykumgwoaoy("\x74\x61\x72\147\x65\x74", "\137\x62\x6c\141\156\x6b")->gswweykyogmsyawy(__("\x47\157\x20\x74\x6f\40\x53\x65\x74\x74\x69\x6e\147\x73", PR__CMN__FOUNDATION))->render([Constants::qaacaqioeyiuakeu => true]); }, Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::mswoacegomcucaik) == $this->iooowgsqoyqseyuu()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\x53\157\x72\162\171\x2c\40\171\x6f\x75\40\150\x61\166\145\x6e\x27\x74\x20\x61\143\x63\x65\163\x73\40\164\157\x20\x65\x64\x69\x74\40\x74\150\151\x73\40\x70\x61\147\145\56", PR__CMN__FOUNDATION), "\x70\x72\151\166\x61\x74\x65\x2d\x70\141\x67\x65"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; } } } public function gosmqcmmomkqwmis() { if ($this->sgeaogakoscmysgc()) { if (!$this->imkyoqyocosuqasu(Constants::dsmcseykksieoyuc, false)) { $this->caokeucsksukesyo()->eiwcuqigayigimak()->wwckmeoskuagomki("\x50\x52\137\117\x50\124\111\115\111\x5a\x41\124\111\117\116\137\104\x4f\116\x54\137\117\120\124\x49\115\x49\x5a\105", sprintf("\x70\141\x67\145\40\x25\x73\x20\143\141\x6e\40\156\157\x74\x20\x62\145\x20\x63\x61\143\x68\145\56", $this->qcgakseyaikigqco())); } if ($this->ayseokmqycoqaigc()) { $this->cecaguuoecmccuse("\164\150\x65\137\x63\x6f\x6e\x74\x65\156\x74", [$this, "\141\x69\155\171\143\155\153\167\x6f\x73\x73\147\141\163\x67\163"], 999); $this->aqaqisyssqeomwom("\164\145\155\x70\x6c\x61\164\145\x5f\x68\151\145\162\x61\162\x63\150\x79\137\x74\145\x6d\x70\154\141\164\145\163", [$this, "\165\x6b\x67\151\153\151\163\x6b\x75\x6f\163\x75\x6d\x71\x63\x71"], 10, 2)->aqaqisyssqeomwom("\x74\x65\155\160\154\x61\164\x65\137\x68\x69\x65\x72\141\x72\x63\150\171\x5f\160\141\x72\141\x6d\x65\x74\x65\x72\163", [$this, "\x61\x6d\153\x61\x67\161\x6f\151\x67\171\167\x73\157\155\x6f\147"], 10, 2); $this->aqaqisyssqeomwom("\142\x72\x65\141\144\x63\x72\x75\x6d\x62\x5f\141\154\154\157\x77\x5f\162\145\x6e\144\x65\x72", [$this, "\x61\157\151\165\151\x77\x6f\x79\157\145\x77\171\x63\151\x73\x67"]); $this->waqewsckuayqguos("\x62\x65\146\157\x72\x65\x5f\x65\156\161\165\145\x75\x65\x5f\x66\162\157\x6e\164\x65\156\x64\137\141\163\x73\x65\164\x73", [$this, "\x65\156\161\x75\x65\x75\145"]); } } } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if ($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo()) { $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); } return $yciaosuiyeieceug; } public function enqueue() { } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if ($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->iooowgsqoyqseyuu()) { $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); } } return $ewgwqamkygiqaawc; } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if ($this->sgeaogakoscmysgc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; } } return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if ($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk())) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); } return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function qyyuegieaecsiawk($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc()) { $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if ($eisykmiomukgakao && !is_array($eisykmiomukgakao)) { $eisykmiomukgakao = [$eisykmiomukgakao]; } $aokagokqyuysuksm = $this->iooowgsqoyqseyuu(); if (!in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { $eisykmiomukgakao[] = $aokagokqyuysuksm; } $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; } return $gqgemcmoicmgaqie; } public function qwegkouiyocysywe() { if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy(Constants::imywcsggckkcywgk)) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\x73\x74\171\x6c\x65", [], "\164\x72\43\160\x6f\163\164\x2d{$this->iooowgsqoyqseyuu()}\173\144\x69\x73\x70\x6c\x61\x79\72\x6e\157\156\145\73\x7d"); } } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if ($this->sgeaogakoscmysgc($post)) { if (!$this->kwowqyyougwekomi()) { $this->kowqseeiwuesqsok(sprintf(__("\x25\163\x20\120\141\x67\145", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); } $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); } return $ekcqweaieimsgqoq; } public function ukqieeemykgisiic($gcqseksiskwueksc) { if ((int) $gcqseksiskwueksc === $this->iooowgsqoyqseyuu()) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); } } public function wqygsquiiymqsaaa() { if ($this->sgeaogakoscmysgc() && ($mgcyouymksesekki = $this->imkyoqyocosuqasu(Constants::oiukgckoauquscaw))) { if (is_bool($mgcyouymksesekki)) { $mgcyouymksesekki = "\x6e\157\x69\156\x64\x65\170\54\40\156\x6f\x66\157\x6c\x6c\x6f\x77"; } echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->geegawyigkyiuyqu(Constants::oiukgckoauquscaw, $mgcyouymksesekki); } } public function ayseokmqycoqaigc() : bool { return $this->sscegwueamckwmcy("\151\163\x5f{$this->aakmagwggmkoiiyu()}\137\x70\141\147\145\137\145\x6e\141\142\154\x65", true) && $this->sscegwueamckwmcy("\151\163\137{$this->cisyiemkeykgkomc()}\x5f\160\141\x67\x65\137\x65\x6e\x61\142\x6c\x65", true); } public function oyaugcgekomyiiik() : self { return $this->igiywquyccyiaucw(self::awgeksgyykycasie, false); } private function cummisgiueqymmum() : bool { $ksaameoqigiaoigg = true; if ($this->wuyimwscukmqqsqk(self::awgeksgyykycasie)) { $ksaameoqigiaoigg = (bool) $this->imkyoqyocosuqasu(self::awgeksgyykycasie); } return $ksaameoqigiaoigg; } public function wmsaakuicamguoam($qkcoyiyeuoyyoocy) : self { return $this->igiywquyccyiaucw(Constants::egukegmcemkeegqq, $qkcoyiyeuoyyoocy); } public function iooowgsqoyqseyuu() : int { $qkcoyiyeuoyyoocy = 0; if (!$this->cummisgiueqymmum()) { $qkcoyiyeuoyyoocy = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } else { $qkcoyiyeuoyyoocy = $this->imkyoqyocosuqasu(Constants::egukegmcemkeegqq, $qkcoyiyeuoyyoocy); } return (int) $qkcoyiyeuoyyoocy; } public function sgeaogakoscmysgc($post = null) : bool { return $this->iooowgsqoyqseyuu() === (int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post); } public function kyqakacqeumicgag() { $suaemuyiacqyugsm = null; $qkcoyiyeuoyyoocy = $this->iooowgsqoyqseyuu(); if ($qkcoyiyeuoyyoocy) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($qkcoyiyeuoyyoocy, Constants::ckmqoekmugkggeym, true); } return $suaemuyiacqyugsm; } public function ycqquoiyyuesegsy(?string $migiiksoiymissge = '') : string { if ($suaemuyiacqyugsm = $this->iooowgsqoyqseyuu()) { $migiiksoiymissge = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } return $migiiksoiymissge; } public function aakmagwggmkoiiyu() : string { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); return $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); } public function cisyiemkeykgkomc() : string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); } $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; } return $uusmaiomayssaecw; } public function mmuyuqussqkgkega($omwmuycmeqcqokom) : self { return $this->igiywquyccyiaucw(Constants::qioguuqkouiccqig, $omwmuycmeqcqokom); } public function ygqycmmkoiuocoia() { return $this->imkyoqyocosuqasu(Constants::qioguuqkouiccqig, ''); } public function ukguiegqykkoqcuq() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::aqugcqsyeisayuog, false); } public function qmgkuqsqweecckyo() : bool { return !$this->wuyimwscukmqqsqk(Constants::esqqqyeecaiamqoc) || $this->imkyoqyocosuqasu(Constants::esqqqyeecaiamqoc); } public function ekgmmugauoasqwyc() : self { $this->igiywquyccyiaucw(Constants::esqqqyeecaiamqoc, false); return $this; } public function oakemcgacwakmawm() : self { $this->igiywquyccyiaucw(Constants::dsmcseykksieoyuc, false); return $this; } public function myysgyqcumekoueo() : self { return $this->igiywquyccyiaucw(Constants::aqugcqsyeisayuog, true); } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { return $this->igiywquyccyiaucw(Constants::qescuiwgsyuikume, $meqocwsecsywiiqs); } public function qcgakseyaikigqco() : string { return (string) $this->imkyoqyocosuqasu(Constants::qescuiwgsyuikume, ''); } public function wegcaymyqqoyewmw(string $aaokuekaimigoyue) : self { return $this->igiywquyccyiaucw(Constants::ouywiegeiyuaaawo, $aaokuekaimigoyue); } public function aqcogscycyycgkuq() : string { return (string) $this->imkyoqyocosuqasu(Constants::ouywiegeiyuaaawo, ''); } public function kowqseeiwuesqsok(string $iwskiosiswyoiesg) : self { return $this->igiywquyccyiaucw(Constants::eikgweiqgomeisyo, $iwskiosiswyoiesg); } public function kwowqyyougwekomi() : string { return (string) $this->imkyoqyocosuqasu(Constants::eikgweiqgomeisyo, ''); } public function siosgoymgqsyaisu(string $omkysikckkcieckq) : self { return $this->igiywquyccyiaucw(Constants::ugqacsomqcgmoqug, $omkysikckkcieckq); } public function giiuwsmyumqwwiyq() : string { return (string) $this->imkyoqyocosuqasu(Constants::ugqacsomqcgmoqug, ''); } public function gcoaskqqsewsoses(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if ($this->agwomuykuuimiqyk() && ($oeomqqoymoecyuuu = $this->yswsogicggygksoi())) { $eqgoocgaqwqcimie = $oeomqqoymoecyuuu->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $gmcgeogogyqsgawk); } return $eqgoocgaqwqcimie; } public function aosyekoskegecumg($amakmumgguksgmum) { } }

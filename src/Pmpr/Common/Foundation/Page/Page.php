<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720bb1389a49             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Page extends Container { protected $parent; protected ?string $slug = null; protected ?string $state = null; protected ?string $title = null; protected bool $crawlable = true; protected ?string $option = null; protected bool $isPrivate = true; protected bool $hasBreadcrumb = false; protected bool $contentUpdated = false; protected bool $disableCache = false; public function __construct() { if (!$this->giiuwsmyumqwwiyq()) { $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\x5f\x70\141\x67\x65"); } parent::__construct(); } public function cisyiemkeykgkomc() : ?string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); } $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; } return $uusmaiomayssaecw; } public function fsacumgosqsmukas() : bool { return !$this->disableCache; } public function muyiiuouyequiwim() : bool { return $this->contentUpdated; } public function ssiqguyskkgmukqa() : bool { return $this->crawlable; } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function kwowqyyougwekomi() : ?string { return $this->state; } public function kowqseeiwuesqsok(?string $iwskiosiswyoiesg) : self { $this->state = $iwskiosiswyoiesg; return $this; } public function wegcaymyqqoyewmw(?string $aaokuekaimigoyue) : self { $this->slug = $aaokuekaimigoyue; return $this; } public function giiuwsmyumqwwiyq() : ?string { return $this->option; } public function siosgoymgqsyaisu(?string $omkysikckkcieckq) : self { $this->option = $omkysikckkcieckq; return $this; } public function ukguiegqykkoqcuq() : bool { return $this->isPrivate; } public function qmgkuqsqweecckyo() : bool { return $this->hasBreadcrumb; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160", [$this, "\x67\x6f\x73\155\161\143\155\155\x6f\155\x6b\x71\x77\155\x69\163"])->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\x69\x6e\151\164"])->qcsmikeggeemccuu("\167\160\137\x68\145\x61\144", [$this, "\143\143\x6d\x73\151\x61\x75\x67\x71\165\167\x75\151\x77\x67\145"])->qcsmikeggeemccuu("\x61\144\x6d\151\156\x5f\151\156\x69\164", [$this, "\171\x65\x79\x69\x67\x75\x79\145\147\x6d\x6d\171\165\x73\145\141"])->qcsmikeggeemccuu("\144\x65\x6c\x65\164\x65\137\x70\x6f\x73\164", [$this, "\165\x6b\161\151\x65\145\x65\155\171\x6b\x67\151\x73\x69\151\143"]); if ($this->ukguiegqykkoqcuq()) { $this->qcsmikeggeemccuu("\x61\144\155\151\156\137\150\x65\141\144", [$this, "\x61\143\143\151\x6d\147\151\141\167\151\x6b\143\147\x69\x71\x6f"])->qcsmikeggeemccuu("\x70\x61\x72\163\x65\137\x71\x75\x65\162\171", [$this, "\163\145\x6f\151\161\x75\x6d\x61\x77\153\x6d\141\x69\167\171\x6b"]); } parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\147\x65\x74\x5f{$this->cisyiemkeykgkomc()}\x5f\x70\141\147\x65\x5f\x70\145\x72\x6d\x61\154\151\156\153", [$this, "\x79\143\161\161\x75\x6f\x69\x79\x79\x75\145\163\x65\147\163\x79"])->cecaguuoecmccuse("\144\151\163\160\154\141\171\x5f\160\157\163\x74\x5f\163\164\141\164\145\x73", [$this, "\x73\153\167\167\x79\163\x67\x67\161\x65\x65\x65\163\x6f\143\x67"], 10, 2); if (!$this->qmgkuqsqweecckyo()) { $this->aqaqisyssqeomwom("\x62\162\145\141\144\143\x72\165\x6d\x62\137\x61\154\x6c\157\167\137\162\145\x6e\144\145\162", [$this, "\141\157\151\165\151\167\x6f\171\x6f\145\167\x79\143\151\163\x67"]); } parent::kgquecmsgcouyaya(); } public function init() { $this->gogaagekwoisaqgu(); } public function ukqieeemykgisiic($gcqseksiskwueksc) { if ($gcqseksiskwueksc == $this->mwikyscisascoeea()) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); } } public function ccmsiaugquwuiwge() { if ($this->sgeaogakoscmysgc() && !$this->ssiqguyskkgmukqa()) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x6d\145\x74\141", [Constants::NAME => "\162\157\x62\x6f\x74\163", Constants::ssmskyqgcmeiayco => "\x6e\x6f\x69\x6e\144\145\x78\54\40\x6e\x6f\146\x6f\154\x6c\x6f\x77"]); } } public function gogaagekwoisaqgu() { } public function gosmqcmmomkqwmis() { if ($this->sgeaogakoscmysgc()) { if (!$this->fsacumgosqsmukas()) { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\x44\x4f\116\x54\x5f\x4f\x50\x54\111\115\111\x5a\105", 1); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\120\x52\x5f\117\120\x54\137\x44\x4f\x4e\124\x5f\x4f\x50\x54\x49\x4d\111\x5a\105\x5f\x50\x41\107\105", 1); } if ($this->ayseokmqycoqaigc()) { $this->cecaguuoecmccuse("\164\x68\x65\x5f\x63\x6f\x6e\164\x65\x6e\x74", [$this, "\141\x69\x6d\x79\143\155\153\x77\x6f\163\x73\x67\x61\163\147\x73"], 999); $this->aqaqisyssqeomwom("\x74\x65\155\x70\x6c\x61\164\145\x5f\x68\x69\x65\x72\141\x72\143\x68\x79\x5f\x74\x65\x6d\x70\x6c\141\x74\145\x73", [$this, "\165\x6b\x67\151\153\151\163\153\165\x6f\x73\x75\155\161\x63\161"], 10, 2)->aqaqisyssqeomwom("\x74\145\155\x70\x6c\x61\164\145\137\x68\151\x65\162\x61\162\x63\x68\171\x5f\160\x61\x72\x61\x6d\145\x74\145\162\x73", [$this, "\x61\155\153\141\147\161\157\x69\147\171\167\x73\x6f\155\x6f\147"], 10, 2); $this->enqueue(); } } } public function enqueue() { } public function accimgiawikcgiqo() { if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy()) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\163\x74\x79\154\145", [], "\164\x72\x23\160\x6f\163\164\x2d{$this->mwikyscisascoeea()}\x7b\144\x69\163\x70\x6c\141\x79\x3a\156\x6f\x6e\145\x3b\x7d"); } } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc() && $this->sgeaogakoscmysgc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; } } return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if ($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk())) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); } return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function seoiqumawkmaiwyk($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc()) { $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if ($eisykmiomukgakao && !is_array($eisykmiomukgakao)) { $eisykmiomukgakao = [$eisykmiomukgakao]; } $aokagokqyuysuksm = $this->mwikyscisascoeea(); if (!in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { $eisykmiomukgakao[] = $aokagokqyuysuksm; } $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; } return $gqgemcmoicmgaqie; } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if ($this->mwikyscisascoeea() == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)) { if (!$this->kwowqyyougwekomi()) { $this->kowqseeiwuesqsok(sprintf(__("\45\163\40\x50\141\147\145", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); } $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); } return $ekcqweaieimsgqoq; } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc()) { $gqumacwamusueoqa = 0; $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $gqumacwamusueoqa = $omwmuycmeqcqokom->mwikyscisascoeea(); } else { $gqumacwamusueoqa = $omwmuycmeqcqokom; } if ($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent)) { $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); } } if (!$this->ygqycmmkoiuocoia() || $gqumacwamusueoqa) { $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) == $this->mwikyscisascoeea()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\x53\x6f\162\162\x79\54\x20\171\157\165\x20\x68\x61\166\x65\x6e\47\164\40\141\x63\x63\145\163\x73\x20\x74\157\40\x65\144\x69\x74\x20\x74\150\151\163\x20\160\141\147\x65\56", PR__CMN__FOUNDATION), "\x70\162\151\166\141\x74\x65\x2d\x70\141\x67\x65"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; } } } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if ($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->mwikyscisascoeea()) { $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); } } return $ewgwqamkygiqaawc; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if ($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo()) { $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); } return $yciaosuiyeieceug; } public function uecosaimgwickkaa($couiucmsqaieciue) { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if ($suaemuyiacqyugsm) { $couiucmsqaieciue[] = $suaemuyiacqyugsm; } return $couiucmsqaieciue; } public function mwikyscisascoeea() : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } public function kyqakacqeumicgag() { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($this->mwikyscisascoeea()); } public function ycqquoiyyuesegsy($migiiksoiymissge = '') : string { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if ($suaemuyiacqyugsm) { $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } return $migiiksoiymissge; } public function sgeaogakoscmysgc() : bool { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); $yeacayasgueouoqc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc; } public function yeyowkakmkwikyis() : bool { return !$this->sgeaogakoscmysgc(); } public function ayseokmqycoqaigc() : bool { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); return (bool) $this->sscegwueamckwmcy("\x69\x73\137{$ymqmyyeuycgmigyo}\x5f\x70\x61\147\145\137\145\x6e\141\142\x6c\x65", true); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6794e7648968d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Page extends Container { protected $parent; protected ?string $slug = null; protected ?string $state = null; protected ?string $title = null; protected bool $crawlable = true; protected ?string $option = null; protected bool $isPrivate = true; protected bool $hasBreadcrumb = false; protected bool $contentUpdated = false; protected bool $disableCache = false; public function __construct() { if (!$this->giiuwsmyumqwwiyq()) { $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\x5f\x70\x61\147\145"); } parent::__construct(); } public function cisyiemkeykgkomc() : ?string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); } $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; } return $uusmaiomayssaecw; } public function fsacumgosqsmukas() : bool { return !$this->disableCache; } public function muyiiuouyequiwim() : bool { return $this->contentUpdated; } public function ssiqguyskkgmukqa() : bool { return $this->crawlable; } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function kwowqyyougwekomi() : ?string { return $this->state; } public function kowqseeiwuesqsok(?string $iwskiosiswyoiesg) : self { $this->state = $iwskiosiswyoiesg; return $this; } public function wegcaymyqqoyewmw(?string $aaokuekaimigoyue) : self { $this->slug = $aaokuekaimigoyue; return $this; } public function giiuwsmyumqwwiyq() : ?string { return $this->option; } public function siosgoymgqsyaisu(?string $omkysikckkcieckq) : self { $this->option = $omkysikckkcieckq; return $this; } public function ukguiegqykkoqcuq() : bool { return $this->isPrivate; } public function qmgkuqsqweecckyo() : bool { return $this->hasBreadcrumb; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70", [$this, "\147\x6f\163\155\x71\x63\155\155\x6f\155\153\161\x77\155\151\163"])->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\x69\156\x69\164"])->qcsmikeggeemccuu("\167\160\137\x68\x65\141\144", [$this, "\x63\x63\x6d\x73\x69\141\x75\x67\161\165\167\165\151\x77\147\145"])->qcsmikeggeemccuu("\141\x64\x6d\151\156\x5f\x69\x6e\x69\164", [$this, "\x79\x65\x79\151\x67\165\x79\145\x67\155\155\171\165\x73\x65\x61"])->qcsmikeggeemccuu("\144\x65\154\x65\x74\145\x5f\x70\157\163\164", [$this, "\x75\153\161\151\145\145\x65\x6d\171\x6b\147\x69\x73\x69\151\143"]); if ($this->ukguiegqykkoqcuq()) { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\137\x68\145\141\144", [$this, "\x61\x63\x63\151\155\147\x69\x61\x77\x69\x6b\x63\x67\x69\161\x6f"])->qcsmikeggeemccuu("\160\141\162\163\x65\x5f\161\x75\145\162\x79", [$this, "\x73\x65\157\x69\x71\165\x6d\x61\x77\153\155\x61\x69\167\x79\x6b"]); } parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\x65\x74\137{$this->cisyiemkeykgkomc()}\137\x70\141\147\145\x5f\x70\x65\162\x6d\x61\154\151\x6e\x6b", [$this, "\171\x63\x71\161\165\157\151\171\x79\x75\145\x73\145\147\163\x79"])->cecaguuoecmccuse("\144\x69\x73\x70\x6c\x61\171\137\160\157\x73\164\137\x73\x74\141\164\145\163", [$this, "\163\153\x77\x77\171\x73\147\x67\x71\x65\x65\145\163\x6f\x63\147"], 10, 2); if (!$this->qmgkuqsqweecckyo()) { $this->aqaqisyssqeomwom("\x62\x72\145\x61\x64\x63\x72\x75\155\142\137\x61\x6c\154\x6f\x77\137\162\145\156\x64\x65\x72", [$this, "\141\157\151\165\x69\167\x6f\171\x6f\x65\x77\171\143\151\163\147"]); } parent::kgquecmsgcouyaya(); } public function init() { $this->gogaagekwoisaqgu(); } public function ukqieeemykgisiic($gcqseksiskwueksc) { if ($gcqseksiskwueksc == $this->mwikyscisascoeea()) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); } } public function ccmsiaugquwuiwge() { if ($this->sgeaogakoscmysgc() && !$this->ssiqguyskkgmukqa()) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x6d\145\164\141", [Constants::NAME => "\162\157\142\x6f\164\x73", Constants::ssmskyqgcmeiayco => "\x6e\157\x69\x6e\x64\x65\170\54\40\x6e\157\x66\x6f\154\154\x6f\x77"]); } } public function gogaagekwoisaqgu() { } public function gosmqcmmomkqwmis() { if ($this->sgeaogakoscmysgc()) { if (!$this->fsacumgosqsmukas()) { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\120\122\137\x4f\x50\124\x49\x4d\x49\132\x41\124\x49\117\x4e\x5f\104\x4f\116\124\137\117\120\x54\x49\115\111\132\105", sprintf("\160\x61\x67\x65\40\45\x73\x20\143\x61\156\x20\x6e\x6f\x74\40\x62\x65\40\143\x61\143\x68\145\x2e", $this->qcgakseyaikigqco())); } if ($this->ayseokmqycoqaigc()) { $this->cecaguuoecmccuse("\x74\150\145\137\143\157\156\164\145\x6e\x74", [$this, "\x61\151\155\x79\x63\155\x6b\167\x6f\x73\x73\147\141\163\x67\x73"], 999); $this->aqaqisyssqeomwom("\x74\145\155\x70\x6c\x61\164\x65\137\x68\x69\x65\162\x61\162\143\x68\171\x5f\164\145\x6d\160\x6c\141\164\145\163", [$this, "\x75\x6b\147\151\x6b\151\x73\x6b\165\x6f\x73\165\155\x71\143\161"], 10, 2)->aqaqisyssqeomwom("\x74\x65\x6d\160\154\141\164\x65\x5f\150\151\145\x72\141\162\143\150\x79\137\x70\141\162\141\155\145\x74\145\x72\x73", [$this, "\141\155\x6b\x61\x67\161\157\151\x67\171\167\163\157\x6d\x6f\147"], 10, 2); $this->enqueue(); } } } public function enqueue() { } public function accimgiawikcgiqo() { if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy()) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\x73\x74\x79\x6c\145", [], "\x74\162\x23\x70\x6f\x73\x74\55{$this->mwikyscisascoeea()}\173\144\x69\163\160\154\x61\171\72\156\157\156\145\73\x7d"); } } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc() && $this->sgeaogakoscmysgc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; } } return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if ($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk())) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); } return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function seoiqumawkmaiwyk($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc()) { $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if ($eisykmiomukgakao && !is_array($eisykmiomukgakao)) { $eisykmiomukgakao = [$eisykmiomukgakao]; } $aokagokqyuysuksm = $this->mwikyscisascoeea(); if (!in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { $eisykmiomukgakao[] = $aokagokqyuysuksm; } $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; } return $gqgemcmoicmgaqie; } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if ($this->mwikyscisascoeea() == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)) { if (!$this->kwowqyyougwekomi()) { $this->kowqseeiwuesqsok(sprintf(__("\45\x73\x20\x50\x61\x67\x65", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); } $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); } return $ekcqweaieimsgqoq; } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc()) { $gqumacwamusueoqa = 0; $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $gqumacwamusueoqa = $omwmuycmeqcqokom->mwikyscisascoeea(); } else { $gqumacwamusueoqa = $omwmuycmeqcqokom; } if ($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent)) { $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); } } if (!$this->ygqycmmkoiuocoia() || $gqumacwamusueoqa) { $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) == $this->mwikyscisascoeea()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\x53\x6f\x72\162\x79\x2c\40\x79\x6f\x75\x20\150\141\166\x65\x6e\x27\164\x20\141\143\143\x65\x73\x73\40\164\157\40\x65\x64\x69\x74\40\x74\150\x69\163\x20\x70\141\x67\145\56", PR__CMN__FOUNDATION), "\160\162\x69\166\141\164\145\x2d\160\x61\147\x65"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; } } } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if ($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->mwikyscisascoeea()) { $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); } } return $ewgwqamkygiqaawc; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if ($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo()) { $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); } return $yciaosuiyeieceug; } public function uecosaimgwickkaa($couiucmsqaieciue) { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if ($suaemuyiacqyugsm) { $couiucmsqaieciue[] = $suaemuyiacqyugsm; } return $couiucmsqaieciue; } public function mwikyscisascoeea() : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } public function kyqakacqeumicgag() { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($this->mwikyscisascoeea()); } public function ycqquoiyyuesegsy($migiiksoiymissge = '') : string { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if ($suaemuyiacqyugsm) { $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } return $migiiksoiymissge; } public function sgeaogakoscmysgc() : bool { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); $yeacayasgueouoqc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc; } public function yeyowkakmkwikyis() : bool { return !$this->sgeaogakoscmysgc(); } public function ayseokmqycoqaigc() : bool { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); return (bool) $this->sscegwueamckwmcy("\x69\163\x5f{$ymqmyyeuycgmigyo}\137\160\x61\147\x65\137\145\156\141\142\x6c\x65", true); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6791545e8b23b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Page extends Container { protected $parent; protected ?string $slug = null; protected ?string $state = null; protected ?string $title = null; protected bool $crawlable = true; protected ?string $option = null; protected bool $isPrivate = true; protected bool $hasBreadcrumb = false; protected bool $contentUpdated = false; protected bool $disableCache = false; public function __construct() { if (!$this->giiuwsmyumqwwiyq()) { $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\137\x70\x61\x67\x65"); } parent::__construct(); } public function cisyiemkeykgkomc() : ?string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); } $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; } return $uusmaiomayssaecw; } public function fsacumgosqsmukas() : bool { return !$this->disableCache; } public function muyiiuouyequiwim() : bool { return $this->contentUpdated; } public function ssiqguyskkgmukqa() : bool { return $this->crawlable; } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function kwowqyyougwekomi() : ?string { return $this->state; } public function kowqseeiwuesqsok(?string $iwskiosiswyoiesg) : self { $this->state = $iwskiosiswyoiesg; return $this; } public function wegcaymyqqoyewmw(?string $aaokuekaimigoyue) : self { $this->slug = $aaokuekaimigoyue; return $this; } public function giiuwsmyumqwwiyq() : ?string { return $this->option; } public function siosgoymgqsyaisu(?string $omkysikckkcieckq) : self { $this->option = $omkysikckkcieckq; return $this; } public function ukguiegqykkoqcuq() : bool { return $this->isPrivate; } public function qmgkuqsqweecckyo() : bool { return $this->hasBreadcrumb; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160", [$this, "\x67\x6f\163\x6d\x71\143\155\155\x6f\x6d\x6b\x71\167\x6d\x69\163"])->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\151\156\151\164"])->qcsmikeggeemccuu("\x77\x70\137\x68\145\x61\x64", [$this, "\x63\143\x6d\x73\151\141\x75\147\161\x75\167\165\x69\167\147\x65"])->qcsmikeggeemccuu("\141\x64\155\151\156\x5f\151\156\x69\164", [$this, "\x79\145\171\151\147\165\171\x65\x67\155\155\x79\x75\163\x65\141"])->qcsmikeggeemccuu("\144\145\x6c\145\x74\145\137\160\x6f\163\x74", [$this, "\x75\x6b\161\151\x65\x65\145\155\171\153\147\x69\x73\151\151\143"]); if ($this->ukguiegqykkoqcuq()) { $this->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\x5f\x68\x65\141\144", [$this, "\x61\143\x63\x69\x6d\x67\151\141\167\x69\153\x63\x67\151\161\x6f"])->qcsmikeggeemccuu("\160\x61\162\163\x65\137\161\x75\145\162\x79", [$this, "\x73\x65\x6f\151\161\x75\x6d\x61\167\x6b\155\x61\151\167\171\153"]); } parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\147\x65\x74\x5f{$this->cisyiemkeykgkomc()}\x5f\x70\x61\x67\145\x5f\x70\145\162\155\141\x6c\151\x6e\153", [$this, "\171\143\x71\x71\165\157\x69\171\171\x75\x65\x73\x65\x67\x73\x79"])->cecaguuoecmccuse("\144\x69\x73\160\154\x61\x79\137\160\x6f\163\164\137\163\164\x61\x74\x65\x73", [$this, "\163\x6b\167\x77\x79\163\x67\x67\x71\145\145\x65\x73\x6f\x63\147"], 10, 2); if (!$this->qmgkuqsqweecckyo()) { $this->aqaqisyssqeomwom("\142\162\x65\141\144\143\162\x75\x6d\142\137\x61\x6c\154\157\x77\x5f\162\145\x6e\144\x65\162", [$this, "\x61\157\151\165\x69\x77\157\x79\157\145\x77\171\143\151\163\x67"]); } parent::kgquecmsgcouyaya(); } public function init() { $this->gogaagekwoisaqgu(); } public function ukqieeemykgisiic($gcqseksiskwueksc) { if ($gcqseksiskwueksc == $this->mwikyscisascoeea()) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); } } public function ccmsiaugquwuiwge() { if ($this->sgeaogakoscmysgc() && !$this->ssiqguyskkgmukqa()) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\155\145\x74\x61", [Constants::NAME => "\162\x6f\x62\x6f\164\163", Constants::ssmskyqgcmeiayco => "\156\x6f\x69\x6e\144\x65\170\x2c\40\x6e\157\146\x6f\154\x6c\157\x77"]); } } public function gogaagekwoisaqgu() { } public function gosmqcmmomkqwmis() { if ($this->sgeaogakoscmysgc()) { if (!$this->fsacumgosqsmukas()) { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\120\x52\137\117\x50\124\x49\115\x49\x5a\101\x54\x49\117\x4e\x5f\104\117\x4e\x54\x5f\117\120\124\x49\115\111\132\105", sprintf("\x70\x61\147\145\x20\45\x73\40\143\x61\x6e\x20\156\157\164\x20\x62\x65\x20\143\141\143\x68\145\x2e", $this->qcgakseyaikigqco())); } if ($this->ayseokmqycoqaigc()) { $this->cecaguuoecmccuse("\x74\x68\x65\x5f\143\157\156\164\x65\x6e\164", [$this, "\x61\x69\x6d\171\143\155\153\x77\x6f\x73\x73\x67\141\163\147\163"], 999); $this->aqaqisyssqeomwom("\x74\x65\155\x70\x6c\141\x74\145\137\x68\x69\x65\162\x61\x72\143\150\x79\137\164\x65\x6d\160\154\x61\x74\145\163", [$this, "\165\153\147\151\153\x69\x73\153\165\157\x73\165\155\x71\143\x71"], 10, 2)->aqaqisyssqeomwom("\x74\x65\155\160\154\141\164\145\x5f\x68\151\x65\162\141\x72\x63\x68\171\x5f\x70\141\162\x61\155\145\164\145\x72\x73", [$this, "\141\x6d\153\x61\x67\x71\x6f\x69\147\x79\167\163\157\155\157\x67"], 10, 2); $this->enqueue(); } } } public function enqueue() { } public function accimgiawikcgiqo() { if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy()) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\x73\164\x79\154\x65", [], "\x74\162\x23\160\157\x73\164\x2d{$this->mwikyscisascoeea()}\x7b\x64\151\163\x70\154\141\171\x3a\156\157\x6e\x65\73\x7d"); } } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc() && $this->sgeaogakoscmysgc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; } } return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if ($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk())) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); } return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function seoiqumawkmaiwyk($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc()) { $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if ($eisykmiomukgakao && !is_array($eisykmiomukgakao)) { $eisykmiomukgakao = [$eisykmiomukgakao]; } $aokagokqyuysuksm = $this->mwikyscisascoeea(); if (!in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { $eisykmiomukgakao[] = $aokagokqyuysuksm; } $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; } return $gqgemcmoicmgaqie; } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if ($this->mwikyscisascoeea() == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)) { if (!$this->kwowqyyougwekomi()) { $this->kowqseeiwuesqsok(sprintf(__("\45\163\x20\120\x61\x67\145", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); } $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); } return $ekcqweaieimsgqoq; } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc()) { $gqumacwamusueoqa = 0; $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $gqumacwamusueoqa = $omwmuycmeqcqokom->mwikyscisascoeea(); } else { $gqumacwamusueoqa = $omwmuycmeqcqokom; } if ($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent)) { $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); } } if (!$this->ygqycmmkoiuocoia() || $gqumacwamusueoqa) { $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) == $this->mwikyscisascoeea()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\123\157\162\x72\171\x2c\40\171\157\x75\40\150\141\166\x65\156\x27\x74\40\141\x63\143\145\x73\x73\x20\x74\157\x20\x65\144\151\164\40\164\x68\151\x73\x20\x70\x61\x67\x65\56", PR__CMN__FOUNDATION), "\160\162\151\x76\x61\164\145\55\x70\x61\147\x65"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; } } } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if ($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->mwikyscisascoeea()) { $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); } } return $ewgwqamkygiqaawc; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if ($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo()) { $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); } return $yciaosuiyeieceug; } public function uecosaimgwickkaa($couiucmsqaieciue) { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if ($suaemuyiacqyugsm) { $couiucmsqaieciue[] = $suaemuyiacqyugsm; } return $couiucmsqaieciue; } public function mwikyscisascoeea() : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } public function kyqakacqeumicgag() { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($this->mwikyscisascoeea()); } public function ycqquoiyyuesegsy($migiiksoiymissge = '') : string { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if ($suaemuyiacqyugsm) { $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } return $migiiksoiymissge; } public function sgeaogakoscmysgc() : bool { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); $yeacayasgueouoqc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc; } public function yeyowkakmkwikyis() : bool { return !$this->sgeaogakoscmysgc(); } public function ayseokmqycoqaigc() : bool { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); return (bool) $this->sscegwueamckwmcy("\151\163\137{$ymqmyyeuycgmigyo}\x5f\x70\x61\147\145\137\x65\x6e\x61\142\154\x65", true); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d585ed47eb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Page extends Container { protected $parent; protected ?string $slug = null; protected ?string $state = null; protected ?string $title = null; protected bool $crawlable = true; protected ?string $option = null; protected bool $isPrivate = true; protected bool $hasBreadcrumb = false; protected bool $contentUpdated = false; protected bool $disableCache = false; public function __construct() { if (!$this->giiuwsmyumqwwiyq()) { $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\137\160\x61\147\x65"); } parent::__construct(); } public function cisyiemkeykgkomc() : ?string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); } $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; } return $uusmaiomayssaecw; } public function fsacumgosqsmukas() : bool { return !$this->disableCache; } public function muyiiuouyequiwim() : bool { return $this->contentUpdated; } public function ssiqguyskkgmukqa() : bool { return $this->crawlable; } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function kwowqyyougwekomi() : ?string { return $this->state; } public function kowqseeiwuesqsok(?string $iwskiosiswyoiesg) : self { $this->state = $iwskiosiswyoiesg; return $this; } public function wegcaymyqqoyewmw(?string $aaokuekaimigoyue) : self { $this->slug = $aaokuekaimigoyue; return $this; } public function giiuwsmyumqwwiyq() : ?string { return $this->option; } public function siosgoymgqsyaisu(?string $omkysikckkcieckq) : self { $this->option = $omkysikckkcieckq; return $this; } public function ukguiegqykkoqcuq() : bool { return $this->isPrivate; } public function qmgkuqsqweecckyo() : bool { return $this->hasBreadcrumb; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\160", [$this, "\x67\x6f\163\x6d\x71\143\x6d\x6d\x6f\x6d\x6b\x71\167\155\151\x73"])->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\x69\x6e\x69\x74"])->qcsmikeggeemccuu("\x77\x70\137\150\145\x61\144", [$this, "\x63\143\x6d\163\x69\x61\165\x67\x71\x75\167\165\151\x77\147\145"])->qcsmikeggeemccuu("\x61\x64\155\x69\156\x5f\x69\x6e\x69\164", [$this, "\x79\x65\x79\151\147\165\171\145\147\x6d\x6d\171\165\x73\145\141"])->qcsmikeggeemccuu("\x64\x65\154\x65\164\x65\137\160\157\x73\x74", [$this, "\x75\x6b\161\x69\145\x65\x65\155\x79\x6b\x67\151\163\x69\x69\143"]); if ($this->ukguiegqykkoqcuq()) { $this->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\x5f\150\x65\x61\144", [$this, "\141\143\143\151\155\147\x69\141\167\151\153\x63\147\x69\x71\x6f"])->qcsmikeggeemccuu("\160\x61\162\x73\x65\x5f\161\165\145\162\x79", [$this, "\163\145\x6f\x69\161\165\155\x61\167\x6b\x6d\141\x69\167\x79\153"]); } parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\x65\x74\x5f{$this->cisyiemkeykgkomc()}\x5f\160\141\147\145\137\160\145\162\155\x61\154\x69\156\153", [$this, "\x79\143\161\x71\165\157\151\171\171\x75\x65\163\145\x67\x73\x79"])->cecaguuoecmccuse("\144\151\x73\x70\x6c\x61\171\137\x70\x6f\x73\x74\x5f\163\164\141\x74\145\x73", [$this, "\163\x6b\x77\167\x79\x73\147\147\x71\145\145\145\x73\157\x63\x67"], 10, 2); if (!$this->qmgkuqsqweecckyo()) { $this->aqaqisyssqeomwom("\142\162\x65\x61\144\143\162\165\x6d\x62\x5f\x61\x6c\154\x6f\167\x5f\x72\x65\156\144\145\x72", [$this, "\141\x6f\x69\x75\x69\x77\157\x79\157\x65\167\171\143\x69\x73\x67"]); } parent::kgquecmsgcouyaya(); } public function init() { $this->gogaagekwoisaqgu(); } public function ukqieeemykgisiic($gcqseksiskwueksc) { if ($gcqseksiskwueksc == $this->mwikyscisascoeea()) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); } } public function ccmsiaugquwuiwge() { if ($this->sgeaogakoscmysgc() && !$this->ssiqguyskkgmukqa()) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\155\145\x74\x61", [Constants::NAME => "\x72\157\142\157\x74\163", Constants::ssmskyqgcmeiayco => "\x6e\x6f\151\x6e\x64\145\170\54\x20\x6e\157\x66\x6f\154\x6c\157\167"]); } } public function gogaagekwoisaqgu() { } public function gosmqcmmomkqwmis() { if ($this->sgeaogakoscmysgc()) { if (!$this->fsacumgosqsmukas()) { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\104\x4f\116\124\x5f\117\x50\124\x49\x4d\111\132\105", 1); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\120\x52\137\117\120\124\x5f\104\x4f\116\x54\x5f\x4f\120\x54\x49\115\111\x5a\105\137\x50\101\107\x45", 1); } if ($this->ayseokmqycoqaigc()) { $this->cecaguuoecmccuse("\x74\x68\145\137\143\x6f\x6e\x74\x65\x6e\x74", [$this, "\x61\151\155\x79\x63\155\x6b\x77\x6f\x73\x73\x67\141\163\x67\x73"], 999); $this->aqaqisyssqeomwom("\164\x65\155\x70\154\141\x74\x65\137\x68\x69\145\x72\x61\162\143\x68\171\x5f\164\145\155\160\154\141\x74\x65\x73", [$this, "\x75\153\147\151\153\x69\x73\x6b\165\157\163\x75\155\161\x63\161"], 10, 2)->aqaqisyssqeomwom("\x74\145\x6d\160\154\x61\x74\x65\137\x68\x69\145\x72\x61\162\x63\150\171\x5f\x70\141\162\x61\x6d\145\164\x65\162\x73", [$this, "\x61\x6d\x6b\x61\x67\x71\157\x69\x67\x79\167\x73\x6f\155\157\x67"], 10, 2); $this->enqueue(); } } } public function enqueue() { } public function accimgiawikcgiqo() { if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy()) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\x73\x74\171\x6c\x65", [], "\164\x72\43\160\x6f\163\x74\55{$this->mwikyscisascoeea()}\173\144\151\x73\x70\154\x61\171\x3a\x6e\x6f\156\x65\x3b\175"); } } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc() && $this->sgeaogakoscmysgc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; } } return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if ($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk())) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); } return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function seoiqumawkmaiwyk($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc()) { $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if ($eisykmiomukgakao && !is_array($eisykmiomukgakao)) { $eisykmiomukgakao = [$eisykmiomukgakao]; } $aokagokqyuysuksm = $this->mwikyscisascoeea(); if (!in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { $eisykmiomukgakao[] = $aokagokqyuysuksm; } $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; } return $gqgemcmoicmgaqie; } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if ($this->mwikyscisascoeea() == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)) { if (!$this->kwowqyyougwekomi()) { $this->kowqseeiwuesqsok(sprintf(__("\x25\163\40\120\141\147\x65", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); } $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); } return $ekcqweaieimsgqoq; } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc()) { $gqumacwamusueoqa = 0; $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $gqumacwamusueoqa = $omwmuycmeqcqokom->mwikyscisascoeea(); } else { $gqumacwamusueoqa = $omwmuycmeqcqokom; } if ($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent)) { $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); } } if (!$this->ygqycmmkoiuocoia() || $gqumacwamusueoqa) { $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) == $this->mwikyscisascoeea()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\x53\157\162\162\171\54\40\171\x6f\165\40\150\x61\166\145\x6e\47\164\40\x61\143\143\145\163\x73\x20\164\157\40\145\144\x69\x74\x20\x74\150\x69\x73\x20\160\141\147\x65\56", PR__CMN__FOUNDATION), "\160\162\x69\166\141\164\x65\x2d\x70\x61\x67\x65"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; } } } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if ($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->mwikyscisascoeea()) { $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); } } return $ewgwqamkygiqaawc; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if ($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo()) { $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); } return $yciaosuiyeieceug; } public function uecosaimgwickkaa($couiucmsqaieciue) { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if ($suaemuyiacqyugsm) { $couiucmsqaieciue[] = $suaemuyiacqyugsm; } return $couiucmsqaieciue; } public function mwikyscisascoeea() : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } public function kyqakacqeumicgag() { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($this->mwikyscisascoeea()); } public function ycqquoiyyuesegsy($migiiksoiymissge = '') : string { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if ($suaemuyiacqyugsm) { $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } return $migiiksoiymissge; } public function sgeaogakoscmysgc() : bool { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); $yeacayasgueouoqc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc; } public function yeyowkakmkwikyis() : bool { return !$this->sgeaogakoscmysgc(); } public function ayseokmqycoqaigc() : bool { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); return (bool) $this->sscegwueamckwmcy("\x69\x73\137{$ymqmyyeuycgmigyo}\137\160\x61\147\x65\x5f\145\x6e\141\x62\154\x65", true); } }

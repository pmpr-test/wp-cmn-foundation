<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc0611cd07             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Page extends Container { protected $parent; protected ?string $slug = null; protected ?string $state = null; protected ?string $title = null; protected bool $crawlable = true; protected ?string $option = null; protected bool $isPrivate = true; protected bool $hasBreadcrumb = false; protected bool $contentUpdated = false; protected bool $disableCache = false; public function __construct() { if (!$this->giiuwsmyumqwwiyq()) { $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\137\160\141\x67\145"); } parent::__construct(); } public function cisyiemkeykgkomc() : ?string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); } $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; } return $uusmaiomayssaecw; } public function fsacumgosqsmukas() : bool { return !$this->disableCache; } public function muyiiuouyequiwim() : bool { return $this->contentUpdated; } public function ssiqguyskkgmukqa() : bool { return $this->crawlable; } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function kwowqyyougwekomi() : ?string { return $this->state; } public function kowqseeiwuesqsok(?string $iwskiosiswyoiesg) : self { $this->state = $iwskiosiswyoiesg; return $this; } public function wegcaymyqqoyewmw(?string $aaokuekaimigoyue) : self { $this->slug = $aaokuekaimigoyue; return $this; } public function giiuwsmyumqwwiyq() : ?string { return $this->option; } public function siosgoymgqsyaisu(?string $omkysikckkcieckq) : self { $this->option = $omkysikckkcieckq; return $this; } public function ukguiegqykkoqcuq() : bool { return $this->isPrivate; } public function qmgkuqsqweecckyo() : bool { return $this->hasBreadcrumb; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160", [$this, "\147\x6f\x73\155\x71\143\155\x6d\157\155\153\x71\167\x6d\151\163"])->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\151\156\x69\x74"])->qcsmikeggeemccuu("\167\160\137\x68\145\x61\144", [$this, "\143\x63\155\163\151\x61\165\x67\161\165\x77\x75\151\167\x67\x65"])->qcsmikeggeemccuu("\141\144\155\151\156\137\151\156\x69\164", [$this, "\x79\x65\171\151\x67\165\x79\x65\147\x6d\155\171\165\x73\x65\141"])->qcsmikeggeemccuu("\144\x65\154\145\x74\145\x5f\160\x6f\x73\x74", [$this, "\x75\153\x71\x69\145\145\x65\155\171\153\147\x69\x73\x69\151\x63"]); if ($this->ukguiegqykkoqcuq()) { $this->qcsmikeggeemccuu("\141\x64\x6d\151\156\137\x68\x65\x61\144", [$this, "\141\x63\x63\151\155\x67\151\x61\167\x69\153\143\x67\x69\161\x6f"])->qcsmikeggeemccuu("\160\x61\162\x73\145\x5f\x71\x75\145\162\x79", [$this, "\163\145\x6f\151\161\165\x6d\x61\167\x6b\x6d\141\151\167\x79\153"]); } parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\147\145\x74\x5f{$this->cisyiemkeykgkomc()}\137\x70\141\x67\145\x5f\x70\145\x72\x6d\141\154\x69\156\x6b", [$this, "\171\x63\x71\x71\165\157\151\171\x79\x75\145\163\x65\147\163\171"])->cecaguuoecmccuse("\144\x69\x73\160\154\x61\171\137\x70\157\x73\164\x5f\163\x74\x61\x74\x65\x73", [$this, "\x73\153\167\x77\171\x73\x67\x67\161\x65\x65\x65\x73\157\143\x67"], 10, 2); if (!$this->qmgkuqsqweecckyo()) { $this->aqaqisyssqeomwom("\142\x72\x65\141\144\x63\x72\x75\x6d\142\137\141\154\154\x6f\167\137\x72\145\x6e\x64\145\x72", [$this, "\141\157\x69\165\x69\167\157\171\157\145\167\171\143\x69\x73\x67"]); } parent::kgquecmsgcouyaya(); } public function init() { $this->gogaagekwoisaqgu(); } public function ukqieeemykgisiic($gcqseksiskwueksc) { if ($gcqseksiskwueksc == $this->mwikyscisascoeea()) { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); } } public function ccmsiaugquwuiwge() { if ($this->sgeaogakoscmysgc() && !$this->ssiqguyskkgmukqa()) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\155\x65\x74\x61", [Constants::NAME => "\x72\157\142\157\x74\x73", Constants::ssmskyqgcmeiayco => "\156\157\x69\x6e\x64\x65\x78\x2c\x20\x6e\x6f\x66\157\154\x6c\x6f\167"]); } } public function gogaagekwoisaqgu() { } public function gosmqcmmomkqwmis() { if ($this->sgeaogakoscmysgc()) { if (!$this->fsacumgosqsmukas()) { $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\x44\117\116\124\137\x4f\120\124\x49\115\111\x5a\105", 1); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\120\x52\x5f\x4f\120\x54\x5f\x44\x4f\116\x54\x5f\x4f\120\x54\111\x4d\111\x5a\105\x5f\x50\x41\107\105", 1); } if ($this->ayseokmqycoqaigc()) { $this->cecaguuoecmccuse("\x74\x68\x65\x5f\143\157\156\164\145\x6e\x74", [$this, "\x61\x69\155\x79\143\x6d\x6b\167\x6f\163\163\147\x61\163\147\x73"], 999); $this->aqaqisyssqeomwom("\164\x65\155\160\154\141\164\x65\137\x68\151\x65\162\x61\162\143\x68\171\137\164\x65\x6d\160\154\141\x74\x65\x73", [$this, "\x75\153\x67\x69\x6b\x69\163\153\165\157\163\165\x6d\161\143\x71"], 10, 2)->aqaqisyssqeomwom("\164\145\x6d\x70\154\x61\164\145\137\150\x69\x65\x72\141\x72\x63\x68\x79\x5f\160\x61\x72\x61\155\x65\x74\145\162\x73", [$this, "\141\x6d\153\141\x67\x71\x6f\151\x67\171\167\x73\x6f\155\x6f\x67"], 10, 2); $this->enqueue(); } } } public function enqueue() { } public function accimgiawikcgiqo() { if ($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy()) { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\163\164\171\154\145", [], "\164\x72\43\160\x6f\x73\x74\x2d{$this->mwikyscisascoeea()}\x7b\x64\151\x73\x70\x6c\x61\171\x3a\156\x6f\156\x65\73\x7d"); } } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc() && $this->sgeaogakoscmysgc()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; } } return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if ($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk())) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); } return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function seoiqumawkmaiwyk($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc()) { $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if ($eisykmiomukgakao && !is_array($eisykmiomukgakao)) { $eisykmiomukgakao = [$eisykmiomukgakao]; } $aokagokqyuysuksm = $this->mwikyscisascoeea(); if (!in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { $eisykmiomukgakao[] = $aokagokqyuysuksm; } $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; } return $gqgemcmoicmgaqie; } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if ($this->mwikyscisascoeea() == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)) { if (!$this->kwowqyyougwekomi()) { $this->kowqseeiwuesqsok(sprintf(__("\45\163\40\x50\141\147\x65", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); } $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); } return $ekcqweaieimsgqoq; } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc()) { $gqumacwamusueoqa = 0; $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if ($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia()) { if ($omwmuycmeqcqokom instanceof self) { $gqumacwamusueoqa = $omwmuycmeqcqokom->mwikyscisascoeea(); } else { $gqumacwamusueoqa = $omwmuycmeqcqokom; } if ($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent)) { $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); } } if (!$this->ygqycmmkoiuocoia() || $gqumacwamusueoqa) { $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if ($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) == $this->mwikyscisascoeea()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __("\x53\x6f\x72\x72\171\x2c\40\x79\157\165\x20\x68\141\166\145\156\x27\164\x20\x61\143\143\145\163\163\x20\164\157\x20\x65\x64\x69\x74\40\164\x68\151\163\x20\x70\x61\147\145\56", PR__CMN__FOUNDATION), "\160\162\x69\x76\141\x74\x65\55\160\141\147\x65"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; } } } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if ($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->mwikyscisascoeea()) { $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); } } return $ewgwqamkygiqaawc; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if ($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo()) { $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); } return $yciaosuiyeieceug; } public function uecosaimgwickkaa($couiucmsqaieciue) { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if ($suaemuyiacqyugsm) { $couiucmsqaieciue[] = $suaemuyiacqyugsm; } return $couiucmsqaieciue; } public function mwikyscisascoeea() : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } public function kyqakacqeumicgag() { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($this->mwikyscisascoeea()); } public function ycqquoiyyuesegsy($migiiksoiymissge = '') : string { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if ($suaemuyiacqyugsm) { $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); } return $migiiksoiymissge; } public function sgeaogakoscmysgc() : bool { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); $yeacayasgueouoqc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc; } public function yeyowkakmkwikyis() : bool { return !$this->sgeaogakoscmysgc(); } public function ayseokmqycoqaigc() : bool { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); return (bool) $this->sscegwueamckwmcy("\151\163\x5f{$ymqmyyeuycgmigyo}\x5f\x70\141\147\x65\137\x65\156\141\x62\x6c\x65", true); } }

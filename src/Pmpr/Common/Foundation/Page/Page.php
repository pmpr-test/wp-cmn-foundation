<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae192c055a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Page extends Common { protected $parent; protected ?string $slug = null; protected ?string $state = null; protected ?string $title = null; protected bool $crawlable = true; protected ?string $option = null; protected bool $isPrivate = true; protected bool $hasBreadcrumb = false; protected bool $contentUpdated = false; protected bool $disableCache = false; public function __construct() { if ($this->giiuwsmyumqwwiyq()) { goto eogwckcymuugikuy; } $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\137\x70\x61\x67\x65"); eogwckcymuugikuy: parent::__construct(); } public function cisyiemkeykgkomc() : ?string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if (!($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia())) { goto wagqgeqymeqoeuyi; } if (!$omwmuycmeqcqokom instanceof self) { goto msemumccgceyugmg; } $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); msemumccgceyugmg: $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; wagqgeqymeqoeuyi: return $uusmaiomayssaecw; } public function fsacumgosqsmukas() : bool { return !$this->disableCache; } public function muyiiuouyequiwim() : bool { return $this->contentUpdated; } public function ssiqguyskkgmukqa() : bool { return $this->crawlable; } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function kwowqyyougwekomi() : ?string { return $this->state; } public function kowqseeiwuesqsok(?string $iwskiosiswyoiesg) : self { $this->state = $iwskiosiswyoiesg; return $this; } public function wegcaymyqqoyewmw(?string $aaokuekaimigoyue) : self { $this->slug = $aaokuekaimigoyue; return $this; } public function giiuwsmyumqwwiyq() : ?string { return $this->option; } public function siosgoymgqsyaisu(?string $omkysikckkcieckq) : self { $this->option = $omkysikckkcieckq; return $this; } public function ukguiegqykkoqcuq() : bool { return $this->isPrivate; } public function qmgkuqsqweecckyo() : bool { return $this->hasBreadcrumb; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160", [$this, "\147\x6f\x73\155\161\x63\155\155\x6f\155\153\x71\167\x6d\x69\163"])->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\x69\x6e\151\164"])->qcsmikeggeemccuu("\x77\160\x5f\x68\x65\x61\144", [$this, "\143\143\155\x73\x69\x61\165\x67\161\x75\x77\x75\x69\167\147\x65"])->qcsmikeggeemccuu("\141\144\155\151\x6e\137\151\x6e\x69\164", [$this, "\x79\145\x79\151\147\x75\x79\145\147\155\155\171\x75\163\145\141"])->qcsmikeggeemccuu("\144\145\x6c\145\164\145\137\x70\157\163\164", [$this, "\165\153\x71\x69\x65\x65\145\x6d\x79\153\147\151\x73\x69\x69\143"]); if (!$this->ukguiegqykkoqcuq()) { goto qoqskyuuwueqkquk; } $this->qcsmikeggeemccuu("\141\x64\x6d\151\156\137\x68\x65\141\x64", [$this, "\x61\x63\143\151\155\x67\151\x61\167\x69\153\143\x67\x69\x71\157"])->qcsmikeggeemccuu("\x70\141\x72\x73\x65\x5f\161\165\x65\162\171", [$this, "\x73\x65\x6f\x69\x71\165\155\141\167\153\155\x61\x69\x77\171\153"]); qoqskyuuwueqkquk: parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\147\145\x74\137{$this->cisyiemkeykgkomc()}\x5f\x70\141\147\x65\137\160\x65\162\155\x61\x6c\x69\x6e\x6b", [$this, "\x79\143\161\x71\x75\x6f\x69\171\171\x75\145\163\x65\147\163\x79"])->cecaguuoecmccuse("\x64\x69\163\160\x6c\x61\x79\137\x70\157\x73\x74\x5f\x73\x74\141\164\145\x73", [$this, "\163\153\167\x77\x79\163\x67\x67\161\145\145\x65\x73\157\143\x67"], 10, 2); if ($this->qmgkuqsqweecckyo()) { goto iwsuawwqomaowuii; } $this->aqaqisyssqeomwom("\x62\162\145\x61\144\143\162\x75\x6d\x62\137\141\x6c\x6c\x6f\x77\x5f\162\145\156\x64\x65\x72", [$this, "\x61\157\151\165\x69\167\157\x79\x6f\x65\x77\x79\143\151\163\147"]); iwsuawwqomaowuii: parent::kgquecmsgcouyaya(); } public function init() { $this->gogaagekwoisaqgu(); } public function ukqieeemykgisiic($gcqseksiskwueksc) { if (!($gcqseksiskwueksc == $this->mwikyscisascoeea())) { goto wcugqegqsuuuwqao; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); wcugqegqsuuuwqao: } public function ccmsiaugquwuiwge() { if (!($this->sgeaogakoscmysgc() && !$this->ssiqguyskkgmukqa())) { goto asiqwuoswmigcaki; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x6d\145\x74\141", [Constants::NAME => "\162\157\x62\157\164\163", Constants::ssmskyqgcmeiayco => "\156\157\151\156\144\x65\170\x2c\x20\156\x6f\146\x6f\x6c\x6c\x6f\x77"]); asiqwuoswmigcaki: } public function gogaagekwoisaqgu() { } public function gosmqcmmomkqwmis() { if (!$this->sgeaogakoscmysgc()) { goto qgeugwymkkiacwoc; } if ($this->fsacumgosqsmukas()) { goto ciykoyeioqgyaeqo; } $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\x44\x4f\116\x54\137\117\x50\124\111\x4d\x49\x5a\x45", 1); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\x50\x52\137\x4f\x50\x54\137\x44\x4f\x4e\x54\137\x4f\120\124\111\x4d\x49\132\105\137\x50\x41\x47\105", 1); ciykoyeioqgyaeqo: if (!$this->ayseokmqycoqaigc()) { goto mqicocmqegwukkwg; } $this->cecaguuoecmccuse("\164\x68\x65\137\x63\157\x6e\164\145\156\164", [$this, "\141\151\155\x79\x63\x6d\x6b\x77\157\x73\x73\x67\141\x73\x67\163"], 999); $this->aqaqisyssqeomwom("\x74\x65\x6d\x70\154\141\164\145\137\150\151\x65\x72\x61\x72\143\x68\171\137\164\145\x6d\x70\x6c\x61\164\x65\163", [$this, "\x75\153\147\x69\x6b\151\x73\x6b\x75\157\163\x75\155\161\x63\161"], 10, 2)->aqaqisyssqeomwom("\164\145\155\160\x6c\141\164\145\x5f\150\151\145\x72\141\x72\143\150\x79\x5f\x70\x61\162\x61\x6d\145\164\x65\x72\x73", [$this, "\141\155\x6b\141\147\x71\x6f\151\147\171\x77\163\157\x6d\157\x67"], 10, 2); $this->enqueue(); mqicocmqegwukkwg: qgeugwymkkiacwoc: } public function enqueue() { } public function accimgiawikcgiqo() { if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy()) { goto emmsycooskoqmgeg; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\163\x74\x79\x6c\x65", [], "\164\x72\x23\160\x6f\163\164\x2d{$this->mwikyscisascoeea()}\173\144\x69\x73\160\x6c\141\x79\72\156\157\x6e\x65\73\175"); emmsycooskoqmgeg: } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if (!($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc() && $this->sgeaogakoscmysgc())) { goto mugqyyeayeyggqqk; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto ouamogymawucwswu; } $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; ouamogymawucwswu: mugqyyeayeyggqqk: return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if (!($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk()))) { goto acsqgiuageaasiyy; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); acsqgiuageaasiyy: return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function seoiqumawkmaiwyk($gqgemcmoicmgaqie) { if (!($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc())) { goto wyuemgggaqogsmsq; } $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if (!($eisykmiomukgakao && !is_array($eisykmiomukgakao))) { goto oomguqikqokqwgku; } $eisykmiomukgakao = [$eisykmiomukgakao]; oomguqikqokqwgku: $aokagokqyuysuksm = $this->mwikyscisascoeea(); if (in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { goto samwkqgwouggsguc; } $eisykmiomukgakao[] = $aokagokqyuysuksm; samwkqgwouggsguc: $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; wyuemgggaqogsmsq: return $gqgemcmoicmgaqie; } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if (!($this->mwikyscisascoeea() == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto kkumywowcoycymeo; } if ($this->kwowqyyougwekomi()) { goto guykyqecgswcsmws; } $this->kowqseeiwuesqsok(sprintf(__("\45\163\x20\120\x61\147\x65", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); guykyqecgswcsmws: $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); kkumywowcoycymeo: return $ekcqweaieimsgqoq; } public function yeyiguyegmmyusea() { if (!(!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc())) { goto aomysykcgikegiau; } $gqumacwamusueoqa = 0; $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if (!($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia())) { goto ogsaaqsaogcqiouy; } if ($omwmuycmeqcqokom instanceof self) { goto miweggwqeiaeweia; } $gqumacwamusueoqa = $omwmuycmeqcqokom; goto kqqiegkuqagcqsya; miweggwqeiaeweia: $gqumacwamusueoqa = $omwmuycmeqcqokom->mwikyscisascoeea(); kqqiegkuqagcqsya: if (!($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent))) { goto ousiuuwgwkiyikyq; } $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); ousiuuwgwkiyikyq: ogsaaqsaogcqiouy: if (!(!$this->ygqycmmkoiuocoia() || $gqumacwamusueoqa)) { goto iwekmyyccgiyuecc; } $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); iwekmyyccgiyuecc: $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if (!($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) == $this->mwikyscisascoeea())) { goto ikqqskkqqwmwssoo; } $this->yiggueaiwiygoiyi(__("\123\x6f\x72\162\171\54\x20\x79\157\x75\x20\150\x61\x76\145\x6e\47\164\40\141\143\143\145\x73\163\40\x74\157\x20\x65\x64\x69\x74\x20\164\150\151\x73\40\160\141\147\x65\56", PR__CMN__FOUNDATION), "\160\x72\151\x76\x61\x74\145\x2d\x70\x61\x67\x65"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; ikqqskkqqwmwssoo: aomysykcgikegiau: } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { goto awoaooyoeoyeeqee; } $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if (!($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->mwikyscisascoeea())) { goto cwwmimggaaecmucw; } $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); cwwmimggaaecmucw: awoaooyoeoyeeqee: return $ewgwqamkygiqaawc; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if (!($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo())) { goto ogqmesokykywseys; } $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); ogqmesokykywseys: return $yciaosuiyeieceug; } public function uecosaimgwickkaa($couiucmsqaieciue) { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if (!$suaemuyiacqyugsm) { goto ykomgumacooyomsk; } $couiucmsqaieciue[] = $suaemuyiacqyugsm; ykomgumacooyomsk: return $couiucmsqaieciue; } public function mwikyscisascoeea() : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } public function kyqakacqeumicgag() { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($this->mwikyscisascoeea()); } public function ycqquoiyyuesegsy($migiiksoiymissge = '') : string { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if (!$suaemuyiacqyugsm) { goto mqkmcysgoiaouiwm; } $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); mqkmcysgoiaouiwm: return $migiiksoiymissge; } public function sgeaogakoscmysgc() : bool { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); $yeacayasgueouoqc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc; } public function yeyowkakmkwikyis() : bool { return !$this->sgeaogakoscmysgc(); } public function ayseokmqycoqaigc() : bool { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); return (bool) $this->sscegwueamckwmcy("\151\163\x5f{$ymqmyyeuycgmigyo}\137\x70\141\x67\x65\x5f\145\x6e\x61\142\x6c\x65", true); } }

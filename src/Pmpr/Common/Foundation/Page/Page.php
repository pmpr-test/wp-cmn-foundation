<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f0d2ce2062a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Page extends Common { protected $parent; protected ?string $slug = null; protected ?string $state = null; protected ?string $title = null; protected bool $crawlable = true; protected ?string $option = null; protected bool $isPrivate = true; protected bool $hasBreadcrumb = false; protected bool $contentUpdated = false; protected bool $disableCache = false; public function __construct() { if ($this->giiuwsmyumqwwiyq()) { goto eogwckcymuugikuy; } $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\137\160\x61\x67\x65"); eogwckcymuugikuy: parent::__construct(); } public function cisyiemkeykgkomc() : ?string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if (!($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia())) { goto wagqgeqymeqoeuyi; } if (!$omwmuycmeqcqokom instanceof self) { goto msemumccgceyugmg; } $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); msemumccgceyugmg: $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; wagqgeqymeqoeuyi: return $uusmaiomayssaecw; } public function fsacumgosqsmukas() : bool { return !$this->disableCache; } public function muyiiuouyequiwim() : bool { return $this->contentUpdated; } public function ssiqguyskkgmukqa() : bool { return $this->crawlable; } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function kwowqyyougwekomi() : ?string { return $this->state; } public function kowqseeiwuesqsok(?string $iwskiosiswyoiesg) : self { $this->state = $iwskiosiswyoiesg; return $this; } public function wegcaymyqqoyewmw(?string $aaokuekaimigoyue) : self { $this->slug = $aaokuekaimigoyue; return $this; } public function giiuwsmyumqwwiyq() : ?string { return $this->option; } public function siosgoymgqsyaisu(?string $omkysikckkcieckq) : self { $this->option = $omkysikckkcieckq; return $this; } public function ukguiegqykkoqcuq() : bool { return $this->isPrivate; } public function qmgkuqsqweecckyo() : bool { return $this->hasBreadcrumb; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\x70", [$this, "\x67\157\x73\x6d\x71\143\155\155\x6f\155\x6b\161\167\155\x69\163"])->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\151\156\151\x74"])->qcsmikeggeemccuu("\167\x70\x5f\150\145\x61\x64", [$this, "\143\143\x6d\x73\x69\x61\x75\147\161\165\x77\x75\x69\x77\x67\145"])->qcsmikeggeemccuu("\x61\144\155\x69\156\137\151\x6e\151\164", [$this, "\171\145\171\151\147\x75\x79\x65\147\155\x6d\171\x75\x73\x65\x61"])->qcsmikeggeemccuu("\144\145\154\x65\x74\145\137\160\157\163\x74", [$this, "\x75\x6b\x71\x69\x65\145\x65\x6d\171\x6b\147\x69\x73\x69\151\143"]); if (!$this->ukguiegqykkoqcuq()) { goto qoqskyuuwueqkquk; } $this->qcsmikeggeemccuu("\141\x64\x6d\151\156\x5f\150\x65\x61\x64", [$this, "\141\x63\x63\151\x6d\x67\151\141\167\x69\x6b\143\x67\x69\161\x6f"])->qcsmikeggeemccuu("\x70\141\162\163\x65\x5f\x71\x75\145\162\x79", [$this, "\x73\145\157\151\x71\165\x6d\141\x77\x6b\x6d\141\151\167\171\x6b"]); qoqskyuuwueqkquk: parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\147\145\x74\x5f{$this->cisyiemkeykgkomc()}\137\160\x61\147\x65\x5f\160\145\162\x6d\141\154\x69\156\153", [$this, "\x79\x63\161\161\x75\x6f\x69\171\x79\165\145\x73\x65\x67\163\171"])->cecaguuoecmccuse("\x64\151\x73\x70\154\141\171\x5f\x70\x6f\x73\x74\137\163\x74\141\164\145\163", [$this, "\163\x6b\167\167\171\163\147\x67\161\x65\x65\145\163\x6f\x63\147"], 10, 2); if ($this->qmgkuqsqweecckyo()) { goto iwsuawwqomaowuii; } $this->aqaqisyssqeomwom("\142\x72\145\x61\144\143\162\165\155\142\137\x61\x6c\154\x6f\x77\x5f\162\x65\x6e\x64\x65\162", [$this, "\x61\157\151\165\151\167\x6f\171\x6f\x65\x77\x79\143\x69\163\147"]); iwsuawwqomaowuii: parent::kgquecmsgcouyaya(); } public function init() { $this->gogaagekwoisaqgu(); } public function ukqieeemykgisiic($gcqseksiskwueksc) { if (!($gcqseksiskwueksc == $this->mwikyscisascoeea())) { goto wcugqegqsuuuwqao; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); wcugqegqsuuuwqao: } public function ccmsiaugquwuiwge() { if (!($this->sgeaogakoscmysgc() && !$this->ssiqguyskkgmukqa())) { goto asiqwuoswmigcaki; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\155\145\x74\x61", [Constants::NAME => "\162\157\x62\157\x74\163", Constants::ssmskyqgcmeiayco => "\x6e\157\x69\156\144\x65\170\54\40\156\157\x66\157\154\x6c\157\x77"]); asiqwuoswmigcaki: } public function gogaagekwoisaqgu() { } public function gosmqcmmomkqwmis() { if (!$this->sgeaogakoscmysgc()) { goto qgeugwymkkiacwoc; } if ($this->fsacumgosqsmukas()) { goto ciykoyeioqgyaeqo; } $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\104\x4f\116\x54\137\x4f\120\124\x49\115\111\132\105", 1); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\120\x52\137\117\120\124\137\104\117\x4e\x54\137\117\x50\124\x49\x4d\x49\132\105\137\x50\x41\x47\x45", 1); ciykoyeioqgyaeqo: if (!$this->ayseokmqycoqaigc()) { goto mqicocmqegwukkwg; } $this->cecaguuoecmccuse("\164\x68\145\x5f\143\157\x6e\164\145\156\x74", [$this, "\x61\x69\x6d\x79\143\155\153\167\157\163\x73\x67\141\163\x67\163"], 999); $this->aqaqisyssqeomwom("\164\145\155\x70\x6c\x61\x74\x65\x5f\x68\151\x65\x72\x61\162\x63\x68\171\x5f\x74\x65\x6d\160\x6c\x61\x74\x65\163", [$this, "\x75\153\147\x69\153\151\x73\x6b\165\157\163\x75\155\161\x63\x71"], 10, 2)->aqaqisyssqeomwom("\x74\145\155\x70\154\141\x74\x65\137\150\x69\145\x72\141\x72\x63\150\171\x5f\160\x61\162\141\x6d\145\x74\x65\x72\163", [$this, "\x61\155\x6b\x61\x67\161\157\x69\x67\x79\x77\x73\x6f\155\157\147"], 10, 2); $this->enqueue(); mqicocmqegwukkwg: qgeugwymkkiacwoc: } public function enqueue() { } public function accimgiawikcgiqo() { if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy()) { goto emmsycooskoqmgeg; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\163\x74\x79\154\x65", [], "\164\162\x23\x70\157\163\x74\55{$this->mwikyscisascoeea()}\173\144\x69\x73\160\x6c\x61\171\72\x6e\x6f\x6e\x65\x3b\175"); emmsycooskoqmgeg: } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if (!($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc() && $this->sgeaogakoscmysgc())) { goto mugqyyeayeyggqqk; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto ouamogymawucwswu; } $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; ouamogymawucwswu: mugqyyeayeyggqqk: return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if (!($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk()))) { goto acsqgiuageaasiyy; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); acsqgiuageaasiyy: return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function seoiqumawkmaiwyk($gqgemcmoicmgaqie) { if (!($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc())) { goto wyuemgggaqogsmsq; } $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if (!($eisykmiomukgakao && !is_array($eisykmiomukgakao))) { goto oomguqikqokqwgku; } $eisykmiomukgakao = [$eisykmiomukgakao]; oomguqikqokqwgku: $aokagokqyuysuksm = $this->mwikyscisascoeea(); if (in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { goto samwkqgwouggsguc; } $eisykmiomukgakao[] = $aokagokqyuysuksm; samwkqgwouggsguc: $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; wyuemgggaqogsmsq: return $gqgemcmoicmgaqie; } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if (!($this->mwikyscisascoeea() == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto kkumywowcoycymeo; } if ($this->kwowqyyougwekomi()) { goto guykyqecgswcsmws; } $this->kowqseeiwuesqsok(sprintf(__("\x25\x73\x20\120\x61\147\x65", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); guykyqecgswcsmws: $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); kkumywowcoycymeo: return $ekcqweaieimsgqoq; } public function yeyiguyegmmyusea() { if (!(!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc())) { goto aomysykcgikegiau; } $gqumacwamusueoqa = 0; $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if (!($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia())) { goto ogsaaqsaogcqiouy; } if ($omwmuycmeqcqokom instanceof self) { goto miweggwqeiaeweia; } $gqumacwamusueoqa = $omwmuycmeqcqokom; goto kqqiegkuqagcqsya; miweggwqeiaeweia: $gqumacwamusueoqa = $omwmuycmeqcqokom->mwikyscisascoeea(); kqqiegkuqagcqsya: if (!($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent))) { goto ousiuuwgwkiyikyq; } $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); ousiuuwgwkiyikyq: ogsaaqsaogcqiouy: if (!(!$this->ygqycmmkoiuocoia() || $gqumacwamusueoqa)) { goto iwekmyyccgiyuecc; } $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); iwekmyyccgiyuecc: $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if (!($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) == $this->mwikyscisascoeea())) { goto ikqqskkqqwmwssoo; } $this->yiggueaiwiygoiyi(__("\x53\157\162\162\x79\x2c\40\171\157\x75\40\x68\141\x76\x65\x6e\x27\x74\40\141\x63\x63\x65\x73\163\40\164\x6f\x20\145\144\x69\164\x20\x74\150\151\x73\x20\160\x61\x67\x65\56", PR__CMN__FOUNDATION), "\160\x72\x69\x76\x61\164\145\55\x70\141\x67\x65"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; ikqqskkqqwmwssoo: aomysykcgikegiau: } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { goto awoaooyoeoyeeqee; } $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if (!($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->mwikyscisascoeea())) { goto cwwmimggaaecmucw; } $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); cwwmimggaaecmucw: awoaooyoeoyeeqee: return $ewgwqamkygiqaawc; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if (!($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo())) { goto ogqmesokykywseys; } $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); ogqmesokykywseys: return $yciaosuiyeieceug; } public function uecosaimgwickkaa($couiucmsqaieciue) { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if (!$suaemuyiacqyugsm) { goto ykomgumacooyomsk; } $couiucmsqaieciue[] = $suaemuyiacqyugsm; ykomgumacooyomsk: return $couiucmsqaieciue; } public function mwikyscisascoeea() : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } public function kyqakacqeumicgag() { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($this->mwikyscisascoeea()); } public function ycqquoiyyuesegsy($migiiksoiymissge = '') : string { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if (!$suaemuyiacqyugsm) { goto mqkmcysgoiaouiwm; } $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); mqkmcysgoiaouiwm: return $migiiksoiymissge; } public function sgeaogakoscmysgc() : bool { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); $yeacayasgueouoqc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc; } public function yeyowkakmkwikyis() : bool { return !$this->sgeaogakoscmysgc(); } public function ayseokmqycoqaigc() : bool { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); return (bool) $this->sscegwueamckwmcy("\x69\x73\x5f{$ymqmyyeuycgmigyo}\137\160\x61\147\145\x5f\x65\x6e\141\142\x6c\145", true); } }

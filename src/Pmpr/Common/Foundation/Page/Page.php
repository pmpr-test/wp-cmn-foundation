<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76ba63557             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Page extends Common { protected $parent; protected ?string $slug = null; protected ?string $state = null; protected ?string $title = null; protected bool $crawlable = true; protected ?string $option = null; protected bool $isPrivate = true; protected bool $hasBreadcrumb = false; protected bool $contentUpdated = false; protected bool $disableCache = false; public function __construct() { if ($this->giiuwsmyumqwwiyq()) { goto eogwckcymuugikuy; } $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\137\x70\x61\x67\x65"); eogwckcymuugikuy: parent::__construct(); } public function cisyiemkeykgkomc() : ?string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if (!($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia())) { goto wagqgeqymeqoeuyi; } if (!$omwmuycmeqcqokom instanceof self) { goto msemumccgceyugmg; } $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); msemumccgceyugmg: $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; wagqgeqymeqoeuyi: return $uusmaiomayssaecw; } public function fsacumgosqsmukas() : bool { return !$this->disableCache; } public function muyiiuouyequiwim() : bool { return $this->contentUpdated; } public function ssiqguyskkgmukqa() : bool { return $this->crawlable; } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function kwowqyyougwekomi() : ?string { return $this->state; } public function kowqseeiwuesqsok(?string $iwskiosiswyoiesg) : self { $this->state = $iwskiosiswyoiesg; return $this; } public function wegcaymyqqoyewmw(?string $aaokuekaimigoyue) : self { $this->slug = $aaokuekaimigoyue; return $this; } public function giiuwsmyumqwwiyq() : ?string { return $this->option; } public function siosgoymgqsyaisu(?string $omkysikckkcieckq) : self { $this->option = $omkysikckkcieckq; return $this; } public function ukguiegqykkoqcuq() : bool { return $this->isPrivate; } public function qmgkuqsqweecckyo() : bool { return $this->hasBreadcrumb; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70", [$this, "\147\x6f\163\155\x71\143\x6d\x6d\157\x6d\x6b\x71\x77\155\151\163"])->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\x69\156\151\164"])->qcsmikeggeemccuu("\167\x70\137\x68\145\141\x64", [$this, "\x63\x63\155\163\x69\141\x75\x67\x71\x75\167\165\x69\167\147\145"])->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\x5f\x69\x6e\151\x74", [$this, "\171\145\171\151\x67\x75\x79\x65\147\x6d\155\x79\x75\x73\145\141"])->qcsmikeggeemccuu("\x64\145\x6c\145\164\145\x5f\x70\x6f\163\164", [$this, "\x75\153\161\x69\x65\145\x65\x6d\x79\153\147\151\x73\x69\151\143"]); if (!$this->ukguiegqykkoqcuq()) { goto qoqskyuuwueqkquk; } $this->qcsmikeggeemccuu("\141\x64\155\x69\x6e\137\150\145\x61\144", [$this, "\x61\x63\143\151\155\x67\151\141\x77\151\153\x63\147\x69\161\157"])->qcsmikeggeemccuu("\x70\141\x72\163\145\x5f\x71\165\145\162\171", [$this, "\x73\x65\x6f\151\x71\165\x6d\x61\167\153\155\x61\x69\167\x79\153"]); qoqskyuuwueqkquk: parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\x65\x74\137{$this->cisyiemkeykgkomc()}\137\x70\x61\147\145\137\x70\x65\162\155\141\x6c\x69\x6e\x6b", [$this, "\x79\143\x71\161\165\157\151\x79\171\x75\x65\163\145\147\x73\x79"])->cecaguuoecmccuse("\x64\x69\163\x70\154\x61\x79\137\x70\157\x73\x74\x5f\x73\x74\x61\x74\x65\163", [$this, "\163\153\x77\167\x79\163\x67\x67\161\x65\145\145\163\x6f\x63\x67"], 10, 2); if ($this->qmgkuqsqweecckyo()) { goto iwsuawwqomaowuii; } $this->aqaqisyssqeomwom("\142\x72\x65\141\x64\x63\162\x75\155\x62\x5f\141\x6c\154\157\167\137\162\145\156\x64\145\162", [$this, "\141\157\x69\165\151\167\157\171\157\x65\x77\171\x63\x69\x73\x67"]); iwsuawwqomaowuii: parent::kgquecmsgcouyaya(); } public function init() { $this->gogaagekwoisaqgu(); } public function ukqieeemykgisiic($gcqseksiskwueksc) { if (!($gcqseksiskwueksc == $this->mwikyscisascoeea())) { goto wcugqegqsuuuwqao; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); wcugqegqsuuuwqao: } public function ccmsiaugquwuiwge() { if (!($this->sgeaogakoscmysgc() && !$this->ssiqguyskkgmukqa())) { goto asiqwuoswmigcaki; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x6d\145\164\141", [Constants::NAME => "\x72\x6f\x62\157\x74\x73", Constants::ssmskyqgcmeiayco => "\x6e\x6f\x69\156\x64\145\170\x2c\40\156\x6f\146\x6f\154\x6c\157\x77"]); asiqwuoswmigcaki: } public function gogaagekwoisaqgu() { } public function gosmqcmmomkqwmis() { if (!$this->sgeaogakoscmysgc()) { goto qgeugwymkkiacwoc; } if ($this->fsacumgosqsmukas()) { goto ciykoyeioqgyaeqo; } $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\104\x4f\116\124\x5f\x4f\x50\x54\111\115\111\132\105", 1); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\x50\x52\137\x4f\x50\x54\137\104\117\x4e\124\137\117\120\x54\x49\115\x49\x5a\105\137\x50\101\x47\105", 1); ciykoyeioqgyaeqo: if (!$this->ayseokmqycoqaigc()) { goto mqicocmqegwukkwg; } $this->cecaguuoecmccuse("\x74\x68\x65\x5f\x63\x6f\156\x74\x65\156\164", [$this, "\141\x69\x6d\x79\143\x6d\x6b\x77\x6f\163\x73\x67\x61\x73\147\163"], 999); $this->aqaqisyssqeomwom("\x74\145\155\160\x6c\141\164\x65\x5f\150\151\x65\162\141\x72\143\150\x79\x5f\x74\x65\155\160\x6c\x61\x74\x65\x73", [$this, "\165\153\147\x69\153\x69\x73\x6b\x75\157\x73\165\x6d\x71\x63\161"], 10, 2)->aqaqisyssqeomwom("\x74\x65\155\160\x6c\141\x74\x65\137\150\x69\x65\x72\x61\162\x63\x68\x79\137\x70\141\162\x61\x6d\145\x74\x65\162\163", [$this, "\x61\155\153\x61\147\x71\157\151\147\x79\167\163\157\155\x6f\x67"], 10, 2); $this->enqueue(); mqicocmqegwukkwg: qgeugwymkkiacwoc: } public function enqueue() { } public function accimgiawikcgiqo() { if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy()) { goto emmsycooskoqmgeg; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\163\x74\x79\x6c\145", [], "\x74\x72\x23\x70\x6f\163\164\x2d{$this->mwikyscisascoeea()}\x7b\144\x69\x73\160\154\x61\x79\x3a\x6e\157\x6e\x65\x3b\x7d"); emmsycooskoqmgeg: } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if (!($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc() && $this->sgeaogakoscmysgc())) { goto mugqyyeayeyggqqk; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto ouamogymawucwswu; } $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; ouamogymawucwswu: mugqyyeayeyggqqk: return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if (!($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk()))) { goto acsqgiuageaasiyy; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); acsqgiuageaasiyy: return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function seoiqumawkmaiwyk($gqgemcmoicmgaqie) { if (!($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc())) { goto wyuemgggaqogsmsq; } $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if (!($eisykmiomukgakao && !is_array($eisykmiomukgakao))) { goto oomguqikqokqwgku; } $eisykmiomukgakao = [$eisykmiomukgakao]; oomguqikqokqwgku: $aokagokqyuysuksm = $this->mwikyscisascoeea(); if (in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { goto samwkqgwouggsguc; } $eisykmiomukgakao[] = $aokagokqyuysuksm; samwkqgwouggsguc: $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; wyuemgggaqogsmsq: return $gqgemcmoicmgaqie; } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if (!($this->mwikyscisascoeea() == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto kkumywowcoycymeo; } if ($this->kwowqyyougwekomi()) { goto guykyqecgswcsmws; } $this->kowqseeiwuesqsok(sprintf(__("\x25\x73\40\x50\x61\147\145", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); guykyqecgswcsmws: $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); kkumywowcoycymeo: return $ekcqweaieimsgqoq; } public function yeyiguyegmmyusea() { if (!(!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc())) { goto aomysykcgikegiau; } $gqumacwamusueoqa = 0; $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if (!($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia())) { goto ogsaaqsaogcqiouy; } if ($omwmuycmeqcqokom instanceof self) { goto miweggwqeiaeweia; } $gqumacwamusueoqa = $omwmuycmeqcqokom; goto kqqiegkuqagcqsya; miweggwqeiaeweia: $gqumacwamusueoqa = $omwmuycmeqcqokom->mwikyscisascoeea(); kqqiegkuqagcqsya: if (!($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent))) { goto ousiuuwgwkiyikyq; } $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); ousiuuwgwkiyikyq: ogsaaqsaogcqiouy: if (!(!$this->ygqycmmkoiuocoia() || $gqumacwamusueoqa)) { goto iwekmyyccgiyuecc; } $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); iwekmyyccgiyuecc: $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if (!($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) == $this->mwikyscisascoeea())) { goto ikqqskkqqwmwssoo; } $this->yiggueaiwiygoiyi(__("\123\157\162\162\x79\54\40\171\157\165\x20\x68\x61\166\x65\156\x27\164\x20\x61\143\143\x65\x73\163\40\x74\157\x20\145\x64\151\164\40\164\x68\x69\x73\x20\x70\x61\147\x65\x2e", PR__CMN__FOUNDATION), "\160\x72\151\x76\141\x74\145\55\160\x61\147\145"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; ikqqskkqqwmwssoo: aomysykcgikegiau: } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { goto awoaooyoeoyeeqee; } $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if (!($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->mwikyscisascoeea())) { goto cwwmimggaaecmucw; } $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); cwwmimggaaecmucw: awoaooyoeoyeeqee: return $ewgwqamkygiqaawc; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if (!($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo())) { goto ogqmesokykywseys; } $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); ogqmesokykywseys: return $yciaosuiyeieceug; } public function uecosaimgwickkaa($couiucmsqaieciue) { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if (!$suaemuyiacqyugsm) { goto ykomgumacooyomsk; } $couiucmsqaieciue[] = $suaemuyiacqyugsm; ykomgumacooyomsk: return $couiucmsqaieciue; } public function mwikyscisascoeea() : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } public function kyqakacqeumicgag() { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($this->mwikyscisascoeea()); } public function ycqquoiyyuesegsy($migiiksoiymissge = '') : string { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if (!$suaemuyiacqyugsm) { goto mqkmcysgoiaouiwm; } $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); mqkmcysgoiaouiwm: return $migiiksoiymissge; } public function sgeaogakoscmysgc() : bool { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); $yeacayasgueouoqc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc; } public function yeyowkakmkwikyis() : bool { return !$this->sgeaogakoscmysgc(); } public function ayseokmqycoqaigc() : bool { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); return (bool) $this->sscegwueamckwmcy("\151\x73\x5f{$ymqmyyeuycgmigyo}\137\x70\x61\x67\x65\137\x65\x6e\x61\142\x6c\145", true); } }

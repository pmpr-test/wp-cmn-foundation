<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c1476eb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post; use WP_Query; class Page extends Common { protected $parent; protected ?string $slug = null; protected ?string $state = null; protected ?string $title = null; protected bool $crawlable = true; protected ?string $option = null; protected bool $isPrivate = true; protected bool $hasBreadcrumb = false; protected bool $contentUpdated = false; protected bool $disableCache = false; public function __construct() { if ($this->giiuwsmyumqwwiyq()) { goto eogwckcymuugikuy; } $this->siosgoymgqsyaisu("{$this->cisyiemkeykgkomc()}\137\x70\141\x67\145"); eogwckcymuugikuy: parent::__construct(); } public function cisyiemkeykgkomc() : ?string { $uusmaiomayssaecw = $this->aqcogscycyycgkuq(); if (!($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia())) { goto wagqgeqymeqoeuyi; } if (!$omwmuycmeqcqokom instanceof self) { goto msemumccgceyugmg; } $omwmuycmeqcqokom = $omwmuycmeqcqokom->cisyiemkeykgkomc(); msemumccgceyugmg: $uusmaiomayssaecw .= Constants::wassgkgmoyygyaya . $omwmuycmeqcqokom; wagqgeqymeqoeuyi: return $uusmaiomayssaecw; } public function fsacumgosqsmukas() : bool { return !$this->disableCache; } public function muyiiuouyequiwim() : bool { return $this->contentUpdated; } public function ssiqguyskkgmukqa() : bool { return $this->crawlable; } public function aqcogscycyycgkuq() : ?string { return $this->slug; } public function kwowqyyougwekomi() : ?string { return $this->state; } public function kowqseeiwuesqsok(?string $iwskiosiswyoiesg) : self { $this->state = $iwskiosiswyoiesg; return $this; } public function wegcaymyqqoyewmw(?string $aaokuekaimigoyue) : self { $this->slug = $aaokuekaimigoyue; return $this; } public function giiuwsmyumqwwiyq() : ?string { return $this->option; } public function siosgoymgqsyaisu(?string $omkysikckkcieckq) : self { $this->option = $omkysikckkcieckq; return $this; } public function ukguiegqykkoqcuq() : bool { return $this->isPrivate; } public function qmgkuqsqweecckyo() : bool { return $this->hasBreadcrumb; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160", [$this, "\x67\x6f\163\155\x71\x63\155\155\x6f\155\153\161\167\155\x69\x73"])->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\x69\156\x69\x74"])->qcsmikeggeemccuu("\x77\x70\x5f\x68\x65\141\144", [$this, "\x63\143\x6d\163\151\141\165\147\x71\x75\167\x75\151\167\x67\145"])->qcsmikeggeemccuu("\141\144\x6d\151\x6e\137\x69\x6e\x69\164", [$this, "\x79\x65\171\x69\x67\x75\171\x65\x67\155\155\171\x75\163\145\141"])->qcsmikeggeemccuu("\x64\145\154\x65\164\x65\137\160\157\x73\164", [$this, "\x75\x6b\161\151\145\145\145\x6d\171\x6b\x67\x69\x73\151\151\143"]); if (!$this->ukguiegqykkoqcuq()) { goto qoqskyuuwueqkquk; } $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\137\150\145\x61\144", [$this, "\x61\x63\143\151\x6d\x67\151\x61\167\151\x6b\143\x67\151\x71\x6f"])->qcsmikeggeemccuu("\x70\141\162\163\145\x5f\161\165\145\x72\171", [$this, "\x73\x65\x6f\151\x71\165\155\x61\x77\153\155\141\151\x77\x79\x6b"]); qoqskyuuwueqkquk: parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\147\145\164\x5f{$this->cisyiemkeykgkomc()}\x5f\160\141\x67\x65\x5f\160\x65\x72\x6d\x61\154\x69\156\x6b", [$this, "\x79\x63\x71\x71\x75\157\151\171\x79\x75\145\x73\145\x67\163\x79"])->cecaguuoecmccuse("\144\151\x73\x70\154\141\x79\x5f\x70\157\x73\164\137\x73\x74\141\x74\x65\163", [$this, "\163\153\167\167\171\163\x67\x67\x71\145\145\145\163\157\x63\147"], 10, 2); if ($this->qmgkuqsqweecckyo()) { goto iwsuawwqomaowuii; } $this->aqaqisyssqeomwom("\142\x72\145\141\144\x63\162\x75\x6d\142\x5f\141\154\154\157\x77\x5f\x72\145\156\144\x65\x72", [$this, "\141\157\151\165\151\x77\x6f\x79\157\145\x77\x79\x63\151\x73\x67"]); iwsuawwqomaowuii: parent::kgquecmsgcouyaya(); } public function init() { $this->gogaagekwoisaqgu(); } public function ukqieeemykgisiic($gcqseksiskwueksc) { if (!($gcqseksiskwueksc == $this->mwikyscisascoeea())) { goto wcugqegqsuuuwqao; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->giiuwsmyumqwwiyq()); wcugqegqsuuuwqao: } public function ccmsiaugquwuiwge() { if (!($this->sgeaogakoscmysgc() && !$this->ssiqguyskkgmukqa())) { goto asiqwuoswmigcaki; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\155\145\164\141", [Constants::NAME => "\x72\157\x62\157\164\163", Constants::ssmskyqgcmeiayco => "\156\157\x69\156\144\x65\x78\x2c\40\156\157\x66\x6f\x6c\154\157\167"]); asiqwuoswmigcaki: } public function gogaagekwoisaqgu() { } public function gosmqcmmomkqwmis() { if (!$this->sgeaogakoscmysgc()) { goto qgeugwymkkiacwoc; } if ($this->fsacumgosqsmukas()) { goto ciykoyeioqgyaeqo; } $uuwwyaeymswgsgsi = $this->caokeucsksukesyo()->eiwcuqigayigimak(); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\104\117\x4e\124\137\x4f\120\124\x49\x4d\111\132\x45", 1); $uuwwyaeymswgsgsi->wwckmeoskuagomki("\x50\x52\137\117\x50\124\137\x44\117\x4e\x54\137\x4f\x50\x54\x49\115\x49\x5a\105\x5f\x50\x41\107\105", 1); ciykoyeioqgyaeqo: if (!$this->ayseokmqycoqaigc()) { goto mqicocmqegwukkwg; } $this->cecaguuoecmccuse("\164\x68\x65\137\x63\x6f\x6e\164\x65\x6e\164", [$this, "\141\x69\155\x79\x63\155\153\x77\157\163\x73\x67\141\163\147\x73"], 999); $this->aqaqisyssqeomwom("\x74\145\155\x70\x6c\x61\164\145\137\x68\151\x65\x72\x61\162\x63\150\171\137\164\x65\155\x70\x6c\141\x74\145\163", [$this, "\x75\x6b\147\151\x6b\x69\x73\x6b\165\157\163\x75\x6d\161\x63\161"], 10, 2)->aqaqisyssqeomwom("\164\x65\155\160\154\141\164\x65\x5f\x68\151\x65\x72\141\x72\143\150\171\137\x70\x61\x72\141\x6d\x65\x74\145\x72\163", [$this, "\141\155\153\x61\x67\161\x6f\x69\x67\171\x77\163\157\155\157\x67"], 10, 2); $this->enqueue(); mqicocmqegwukkwg: qgeugwymkkiacwoc: } public function enqueue() { } public function accimgiawikcgiqo() { if (!$this->caokeucsksukesyo()->ayueggmoqeeukqmq()->cagmcswsqkwuasiy()) { goto emmsycooskoqmgeg; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\x73\x74\x79\x6c\145", [], "\164\162\43\x70\157\163\164\55{$this->mwikyscisascoeea()}\173\144\151\x73\160\x6c\x61\x79\72\156\157\156\145\73\175"); emmsycooskoqmgeg: } public function ukgikiskuosumqcq($aquuecykqwyukece, $mksyucucyswaukig) : array { if (!($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc() && $this->sgeaogakoscmysgc())) { goto mugqyyeayeyggqqk; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($this->caokeucsksukesyo()->owgcciayoweymuws()->ogimogiceeekegoi($this->aqcogscycyycgkuq())); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto ouamogymawucwswu; } $aquuecykqwyukece[Constants::imywcsggckkcywgk][] = $qqscaoyqikuyeoaw; ouamogymawucwswu: mugqyyeayeyggqqk: return $aquuecykqwyukece; } public final function amkagqoigywsomog($qookweymeqawmcwo, $mksyucucyswaukig) { if (!($this->sgeaogakoscmysgc() && ($eyagkkkqkwcuygso = $this->rsysgcucogueguuk()))) { goto acsqgiuageaasiyy; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $eyagkkkqkwcuygso); acsqgiuageaasiyy: return $qookweymeqawmcwo; } public function rsysgcucogueguuk() : array { return []; } public function seoiqumawkmaiwyk($gqgemcmoicmgaqie) { if (!($gqgemcmoicmgaqie instanceof WP_Query && $this->sgeaogakoscmysgc())) { goto wyuemgggaqogsmsq; } $eisykmiomukgakao = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($gqgemcmoicmgaqie->query_vars, Constants::kcaoouwiygwwmiok, []); if (!($eisykmiomukgakao && !is_array($eisykmiomukgakao))) { goto oomguqikqokqwgku; } $eisykmiomukgakao = [$eisykmiomukgakao]; oomguqikqokqwgku: $aokagokqyuysuksm = $this->mwikyscisascoeea(); if (in_array($aokagokqyuysuksm, $eisykmiomukgakao, true)) { goto samwkqgwouggsguc; } $eisykmiomukgakao[] = $aokagokqyuysuksm; samwkqgwouggsguc: $gqgemcmoicmgaqie->query_vars[Constants::kcaoouwiygwwmiok] = $eisykmiomukgakao; wyuemgggaqogsmsq: return $gqgemcmoicmgaqie; } public function skwwysggqeeesocg($ekcqweaieimsgqoq, $post) { if (!($this->mwikyscisascoeea() == $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto kkumywowcoycymeo; } if ($this->kwowqyyougwekomi()) { goto guykyqecgswcsmws; } $this->kowqseeiwuesqsok(sprintf(__("\x25\163\x20\120\x61\x67\x65", PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())); guykyqecgswcsmws: $ekcqweaieimsgqoq[$this->aqcogscycyycgkuq()] = $this->kwowqyyougwekomi(); kkumywowcoycymeo: return $ekcqweaieimsgqoq; } public function yeyiguyegmmyusea() { if (!(!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq() && $this->ayseokmqycoqaigc())) { goto aomysykcgikegiau; } $gqumacwamusueoqa = 0; $suaemuyiacqyugsm = $this->kyqakacqeumicgag(); if (!($omwmuycmeqcqokom = $this->ygqycmmkoiuocoia())) { goto ogsaaqsaogcqiouy; } if ($omwmuycmeqcqokom instanceof self) { goto miweggwqeiaeweia; } $gqumacwamusueoqa = $omwmuycmeqcqokom; goto kqqiegkuqagcqsya; miweggwqeiaeweia: $gqumacwamusueoqa = $omwmuycmeqcqokom->mwikyscisascoeea(); kqqiegkuqagcqsya: if (!($gqumacwamusueoqa && ($suaemuyiacqyugsm instanceof WP_Post && 0 === $suaemuyiacqyugsm->post_parent))) { goto ousiuuwgwkiyikyq; } $suaemuyiacqyugsm->post_parent = $gqumacwamusueoqa; $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->update((array) $suaemuyiacqyugsm); ousiuuwgwkiyikyq: ogsaaqsaogcqiouy: if (!(!$this->ygqycmmkoiuocoia() || $gqumacwamusueoqa)) { goto iwekmyyccgiyuecc; } $this->caokeucsksukesyo()->kyqakacqeumicgag()->agegeeiiacceomke($this->aqcogscycyycgkuq(), $this->qcgakseyaikigqco(), $this->giiuwsmyumqwwiyq(), [Constants::isukysauqkiecswi => $gqumacwamusueoqa]); iwekmyyccgiyuecc: $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); if (!($this->ukguiegqykkoqcuq() && $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->uqwgsuysegkweago(Constants::imywcsggckkcywgk) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::mswoacegomcucaik) == $this->mwikyscisascoeea())) { goto ikqqskkqqwmwssoo; } $this->yiggueaiwiygoiyi(__("\x53\x6f\x72\162\171\54\x20\x79\157\165\x20\150\x61\166\145\x6e\x27\x74\x20\141\x63\x63\x65\163\x73\40\x74\x6f\40\x65\x64\x69\x74\x20\164\x68\151\163\40\x70\x61\147\145\x2e", PR__CMN__FOUNDATION), "\160\162\151\x76\x61\164\x65\x2d\x70\x61\x67\x65"); $gqusacuooiagkuom->cquikcuwossiessu($gqusacuooiagkuom->keguiwkaiweywekc()); die; ikqqskkqqwmwssoo: aomysykcgikegiau: } public function aimycmkwossgasgs($ewgwqamkygiqaawc) { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->sgeaogakoscmysgc()) { goto awoaooyoeoyeeqee; } $suaemuyiacqyugsm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); if (!($suaemuyiacqyugsm && $suaemuyiacqyugsm === $this->mwikyscisascoeea())) { goto cwwmimggaaecmucw; } $ewgwqamkygiqaawc = $this->qakiyayqiysiqqeo($ewgwqamkygiqaawc, $suaemuyiacqyugsm); cwwmimggaaecmucw: awoaooyoeoyeeqee: return $ewgwqamkygiqaawc; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return $ewgwqamkygiqaawc; } public function aoiuiwoyoewycisg($yciaosuiyeieceug) : bool { if (!($yciaosuiyeieceug && !$this->qmgkuqsqweecckyo())) { goto ogqmesokykywseys; } $yciaosuiyeieceug = !$this->sgeaogakoscmysgc(); ogqmesokykywseys: return $yciaosuiyeieceug; } public function uecosaimgwickkaa($couiucmsqaieciue) { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if (!$suaemuyiacqyugsm) { goto ykomgumacooyomsk; } $couiucmsqaieciue[] = $suaemuyiacqyugsm; ykomgumacooyomsk: return $couiucmsqaieciue; } public function mwikyscisascoeea() : int { return (int) $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($this->giiuwsmyumqwwiyq()); } public function kyqakacqeumicgag() { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($this->mwikyscisascoeea()); } public function ycqquoiyyuesegsy($migiiksoiymissge = '') : string { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); if (!$suaemuyiacqyugsm) { goto mqkmcysgoiaouiwm; } $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($suaemuyiacqyugsm); mqkmcysgoiaouiwm: return $migiiksoiymissge; } public function sgeaogakoscmysgc() : bool { $suaemuyiacqyugsm = $this->mwikyscisascoeea(); $yeacayasgueouoqc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); return $suaemuyiacqyugsm && $suaemuyiacqyugsm == $yeacayasgueouoqc; } public function yeyowkakmkwikyis() : bool { return !$this->sgeaogakoscmysgc(); } public function ayseokmqycoqaigc() : bool { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); return (bool) $this->sscegwueamckwmcy("\151\163\x5f{$ymqmyyeuycgmigyo}\x5f\x70\x61\147\145\137\145\x6e\141\x62\154\x65", true); } }

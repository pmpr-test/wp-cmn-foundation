<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Page; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Checkbox; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\Interfaces\Constants; class Edit extends ObjectAware { use ObjectTrait; const ymyqskcmicuoqeuo = "\157\x72\155\x2d\146\x69\145\x6c\x64\x73\x2d\163\x74\x6f\162\x65"; const coyaigiwumwkscuc = "\157\162\155\x2d\146\151\145\154\x64\x73\55\x65\162\x72\157\x72\163"; protected $message = false; protected bool $editing = false; protected array $store = []; protected array $errors = []; public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $this->amsuqecgqokqqaue(); if (!$this->mwikyscisascoeea()) { goto iwsuawwqomaowuii; } $this->editing = true; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\x65\144\x69\x74\x5f\151\x74\x65\x6d", $this->mwikyscisascoeea())) { goto qoqskyuuwueqkquk; } wp_die(__("\123\x6f\x72\162\171\54\x20\171\157\165\40\x61\162\x65\40\156\x6f\x74\40\x61\154\x6c\157\167\145\x64\40\x74\x6f\40\145\144\x69\164\x20\164\150\x69\x73\x20\151\x74\145\x6d\56", PR__CMN__FOUNDATION)); qoqskyuuwueqkquk: iwsuawwqomaowuii: } public function oguuceugyqgsqewy() : ?bool { return $this->editing; } public function render() { parent::render(); if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto kkumywowcoycymeo; } $qksucogmsqmawmwi = null; if ($this->oguuceugyqgsqewy()) { goto emmsycooskoqmgeg; } $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x61\x64\144\x5f\156\145\167\x5f\151\164\145\155"); goto ouamogymawucwswu; emmsycooskoqmgeg: $meqocwsecsywiiqs = $this->mmqossqsksemasay("\145\x64\x69\x74\x5f\151\164\145\155"); $qksucogmsqmawmwi = $meywaqqsugaoeyys->acsiseaeysswwqkw(); if (!($ucgcaisaegucqsym = $meywaqqsugaoeyys->oyeskqayoscwciem()->egeywisiumiokmcm())) { goto qgeugwymkkiacwoc; } foreach ($ucgcaisaegucqsym as $sqeykgyoooqysmca) { if ($sqeykgyoooqysmca === Constants::miceosguuseyyuqe) { goto ciykoyeioqgyaeqo; } $meywaqqsugaoeyys->iqieagiumucuwmyq(0, false, $sqeykgyoooqysmca, $this->mwikyscisascoeea()); goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $meywaqqsugaoeyys->iqieagiumucuwmyq($this->mwikyscisascoeea()); mqicocmqegwukkwg: asiqwuoswmigcaki: } wcugqegqsuuuwqao: qgeugwymkkiacwoc: ouamogymawucwswu: $ikgwqyuyckaewsow = $this->ywoasuyoaicwqqsu(); $qookweymeqawmcwo = [Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::NAME => $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::ckmqoekmugkggeym => $this->imgymusqgccqsqqq(), Constants::soquiwyuimckgiow => $this->yoqiwysegascakim(), Constants::eoskkkieowogacws => $this->sagusgigmkeysock(), Constants::myikkigscysoykgy => $this->woqqsmayegamygec(), "\141\x64\x64\x5f\165\x72\x6c" => $qksucogmsqmawmwi, "\141\144\144\x5f\165\x72\x6c\137\164\x69\x74\154\145" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\141\x64\144\137\156\x65\x77\x5f\151\x74\145\x6d")]; if (is_string($ikgwqyuyckaewsow)) { goto wyuemgggaqogsmsq; } if (!$ikgwqyuyckaewsow instanceof Page) { goto samwkqgwouggsguc; } $ikgwqyuyckaewsow = $meywaqqsugaoeyys->iewooiycygmskige($ikgwqyuyckaewsow); $eaoumsseceiowgsk = $ikgwqyuyckaewsow->gswweykyogmsyawy($meqocwsecsywiiqs)->render(false); $cmoicaakukmggosk = $this->oguuceugyqgsqewy() ? Constants::awysmmukegasimmq : Constants::ukwaycqmyyuekwqg; $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy($cmoicaakukmggosk); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto acsqgiuageaasiyy; } echo $eaoumsseceiowgsk; goto oomguqikqokqwgku; acsqgiuageaasiyy: $qookweymeqawmcwo[Constants::ygeqsmugcaeeeuwu] = $eaoumsseceiowgsk; $qookweymeqawmcwo = $meywaqqsugaoeyys->skaogisismgmieqo($cmoicaakukmggosk, $qookweymeqawmcwo); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); oomguqikqokqwgku: samwkqgwouggsguc: goto guykyqecgswcsmws; wyuemgggaqogsmsq: $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy(Constants::awysmmukegasimmq); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto mugqyyeayeyggqqk; } $qqscaoyqikuyeoaw = Constants::awysmmukegasimmq; mugqyyeayeyggqqk: $qookweymeqawmcwo = $meywaqqsugaoeyys->skaogisismgmieqo(Constants::awysmmukegasimmq, $qookweymeqawmcwo); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); guykyqecgswcsmws: kkumywowcoycymeo: } public function amsuqecgqokqqaue() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $this->store = $eiicaiwgqkgsekce->aukgyiaewiccooqw(self::ymyqskcmicuoqeuo, [], true); $this->errors = $eiicaiwgqkgsekce->aukgyiaewiccooqw(self::coyaigiwumwkscuc, [], true); if (!isset($_POST["\x6f\x72\x6d\x2d\x73\x61\x76\x65"])) { goto gcckqucukawcasgk; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymwisceuuaiccayq("\x6f\x72\x6d\55\x6e\157\156\x63\145"); if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) { goto cuumeogeomowqisc; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $icwicymcioeyeyek = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(); $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, "\157\x72\155\55\x73\x61\166\145"); $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $icwicymcioeyeyek = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($meywaqqsugaoeyys->ugmceccgwaaaigiy(), $icwicymcioeyeyek)[1]; if (!($aokagokqyuysuksm = (int) $eiicaiwgqkgsekce->gkwaaeusmsaywikg($ceiwsaacewygcsqg))) { goto miweggwqeiaeweia; } $icwicymcioeyeyek[$ceiwsaacewygcsqg] = $aokagokqyuysuksm; miweggwqeiaeweia: $sogksuscggsicmac = $meywaqqsugaoeyys->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto ogqmesokykywseys; } $kigowwqauiumummw = false; if ($aokagokqyuysuksm) { goto ogsaaqsaogcqiouy; } $wamcomkuwysqgwgk = __("\x25\163\x20\x63\x6f\x75\154\x64\40\x6e\157\164\x20\142\145\40\x61\144\144\x65\x64\x2e", PR__CMN__FOUNDATION); goto iwekmyyccgiyuecc; ogsaaqsaogcqiouy: $wamcomkuwysqgwgk = __("\x25\163\40\x63\157\x75\154\x64\x20\x6e\x6f\x74\40\x62\x65\x20\165\x70\144\141\x74\145\x64\56", PR__CMN__FOUNDATION); iwekmyyccgiyuecc: $this->yiggueaiwiygoiyi(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\157\x72\155\55\x6e\157\164\151\x63\x65"); $eiicaiwgqkgsekce->ycasmmgsmaaumweg(self::ymyqskcmicuoqeuo, $yyauwyaeewsickwk->wegeuqkaeuusoike(array_filter($icwicymcioeyeyek))); if (!($ueeagokqmgisgauy = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::iwyueouqaqegmcas, []))) { goto awoaooyoeoyeeqee; } foreach ($ueeagokqmgisgauy as $aiowsaccomcoikus => $iswcokucwmiosiaq) { if (!(is_numeric($aiowsaccomcoikus) || !$meywaqqsugaoeyys->uqeoyqiwywwmsiew($aiowsaccomcoikus))) { goto cwwmimggaaecmucw; } $this->yiggueaiwiygoiyi($iswcokucwmiosiaq, "\157\x72\x6d\x2d\156\157\164\x69\143\145"); unset($ueeagokqmgisgauy[$aiowsaccomcoikus]); cwwmimggaaecmucw: aomysykcgikegiau: } ikqqskkqqwmwssoo: $eiicaiwgqkgsekce->ycasmmgsmaaumweg(self::coyaigiwumwkscuc, $yyauwyaeewsickwk->wegeuqkaeuusoike($ueeagokqmgisgauy)); awoaooyoeoyeeqee: goto ykomgumacooyomsk; ogqmesokykywseys: $kigowwqauiumummw = true; if ($aokagokqyuysuksm) { goto kqqiegkuqagcqsya; } $wamcomkuwysqgwgk = __("\x25\163\40\x61\x64\144\145\x64\x20\x73\x75\x63\x63\145\163\x73\146\165\x6c\154\171\56", PR__CMN__FOUNDATION); goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: $wamcomkuwysqgwgk = __("\x25\163\40\165\160\x64\141\x74\145\144\x20\163\x75\x63\143\x65\163\x73\x66\165\x6c\x6c\x79\56", PR__CMN__FOUNDATION); ousiuuwgwkiyikyq: $meywaqqsugaoeyys->yiggueaiwiygoiyi(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\157\162\155\x2d\156\x6f\x74\x69\x63\145", Constants::ckcawaoawwioqecq); ykomgumacooyomsk: if ($kigowwqauiumummw) { goto gicyayswqyuoekcq; } if ($aokagokqyuysuksm) { goto mqkmcysgoiaouiwm; } $igscmsiuisqaqwkk = $meywaqqsugaoeyys->acsiseaeysswwqkw(); goto kosaqwikueyksqmw; mqkmcysgoiaouiwm: $igscmsiuisqaqwkk = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm); kosaqwikueyksqmw: goto iikiiioqiyegyaak; gicyayswqyuoekcq: $igscmsiuisqaqwkk = $meywaqqsugaoeyys->comogmawyoiquwis(); iikiiioqiyegyaak: if ($igscmsiuisqaqwkk) { goto uiosisocuwokwkie; } $igscmsiuisqaqwkk = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewcokmoyomeywmkg(); uiosisocuwokwkie: $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($igscmsiuisqaqwkk); exit; cuumeogeomowqisc: wp_die(__("\123\x6f\162\162\171\x2c\40\171\x6f\x75\40\141\162\x65\40\x6e\157\x74\40\141\154\154\157\x77\145\x64\x20\x74\157\40\145\144\x69\164\x20\x69\x74\145\155\163\x20\x6f\146\40\x74\150\x69\x73\x20\x74\x79\160\145\x2e", PR__CMN__FOUNDATION)); gcckqucukawcasgk: } public function ywoasuyoaicwqqsu() { $nsmgceoqaqogqmuw = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto uaukmuiwskcemcsw; } $ikgwqyuyckaewsow = $meywaqqsugaoeyys->ugmceccgwaaaigiy(); $mksyucucyswaukig = $this->imgymusqgccqsqqq(); foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$momcykaoccoymeig] = $this->iowogwyuueusqsig($aiowsaccomcoikus); csammceowmqwaamq: } qmkaeeomgkwggoyo: if (!$ikgwqyuyckaewsow) { goto ugqwuugsweqgmywk; } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); if (!($iuekmkswcsacoawq = Page::symcgieuakksimmu($meywaqqsugaoeyys->cokoiaeeomgssqgy()))) { goto gmwykkouysyaqwqm; } $iuekmkswcsacoawq->ewweaossowcqywaw($ikgwqyuyckaewsow); $iuekmkswcsacoawq->mkksewyosgeumwsa($uuyucgkyusckoaeq->cwiuiiakukcsaakw(Constants::icwieiwoqeocywss)->mawcogsqogkauasq("\157\x72\x6d\55\156\x6f\156\143\145", $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->keguiwkaiweywekc())); $myyqiummwqiokocc = __("\101\x64\144", PR__CMN__FOUNDATION); if (!$this->oguuceugyqgsqewy()) { goto ocaguquugeamqckq; } $myyqiummwqiokocc = __("\x55\160\x64\x61\x74\x65", PR__CMN__FOUNDATION); ocaguquugeamqckq: $iuekmkswcsacoawq->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\x6f\x72\155\55\163\x61\166\145")->gswweykyogmsyawy($myyqiummwqiokocc)->ooqqgmyocscgmyae()->gmscmskmuissgywk()); if (!$this->oguuceugyqgsqewy()) { goto cogywoqcqummsyus; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($meywaqqsugaoeyys->keeuqgyooycqoygw($mksyucucyswaukig)); if (!$iwywmkygwewiamwm) { goto eekcoeikaeaaeyii; } $iuekmkswcsacoawq->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\157\x72\x6d\55\x64\145\x6c\145\164\145")->muywawimuacwmkgw()->gswweykyogmsyawy(__("\104\145\x6c\x65\164\x65", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\x73\165\x62\155\151\x74\144\x65\x6c\x65\164\145\40\x70\x72\x2d\143\157\x6e\x66\151\x72\155\141\x62\154\145\x2d\141\x63\164\x69\157\x6e")->eskgwaywimqcwcyy("\x63\157\x6e\x66\x69\x67", $meywaqqsugaoeyys->ymaommgoigkakyes($iwywmkygwewiamwm))); eekcoeikaeaaeyii: cogywoqcqummsyus: $nsmgceoqaqogqmuw = $iuekmkswcsacoawq; gmwykkouysyaqwqm: ugqwuugsweqgmywk: uaukmuiwskcemcsw: return $nsmgceoqaqogqmuw; } public function iowogwyuueusqsig($aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Container) { goto kocqqoyymosmuksu; } if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto iuuuususuuuaieem; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($this->oguuceugyqgsqewy()) { goto uaqackioaiqwcocy; } $wkkcmkuiigsukyik = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\137\155\141\x6e\141\147\x65\137\x61\x64\x64\137\x66\151\145\x6c\x64\137\x73\150\x6f\x77", true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus); goto cscusseysqygsoiy; uaqackioaiqwcocy: $wkkcmkuiigsukyik = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\x5f\155\x61\156\141\x67\x65\137\x65\144\151\x74\137\146\x69\145\154\x64\137\163\150\157\167", true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $this->imgymusqgccqsqqq()); cscusseysqygsoiy: if (!$wkkcmkuiigsukyik) { goto uykousayyomcaeaa; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($this->oguuceugyqgsqewy()) { goto uougwgeyiokewkkm; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($this->store, $aiowsaccomcoikus->mwikyscisascoeea()); goto gommacygsykyussk; uougwgeyiokewkkm: $cuaeskmgicgemmqs = $aiowsaccomcoikus->imkyoqyocosuqasu(Constants::cecmeqwgqawkeieq, $aokagokqyuysuksm); $mksyucucyswaukig = $this->imgymusqgccqsqqq(); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($cuaeskmgicgemmqs); $eqgoocgaqwqcimie = $meywaqqsugaoeyys->qogaqkcsogcqiaic($mksyucucyswaukig, $cuaeskmgicgemmqs); if (!($ekiuyucoiagmscgy = $aiowsaccomcoikus->ekkwaykokcgqkmoi(Constants::cecmeqwgqawkeieq))) { goto isgwkwacoyimiauk; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie); isgwkwacoyimiauk: if ($aiowsaccomcoikus instanceof Checkbox) { goto amgsueumgaguceaa; } if ($aaqqkgyougeiueyq instanceof Foreign) { goto ukkcmocamwgiqayu; } if (!$aaqqkgyougeiueyq instanceof Enum) { goto iiiccouaaqsyikae; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->qksikkwyuwmciusw($eqgoocgaqwqcimie); iiiccouaaqsyikae: goto mwysseaekcsiesmm; ukkcmocamwgiqayu: if ($aiowsaccomcoikus instanceof Collection) { goto kqswcsysqawkcgye; } $kooyscwkscsogysg = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$kooyscwkscsogysg) { goto ewscugeuicukkycc; } $icwicymcioeyeyek = $meywaqqsugaoeyys->iscemaoqqckmkago($cuaeskmgicgemmqs, $mksyucucyswaukig); if ($aaqqkgyougeiueyq->ygswmewosceowmya() || $aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto cgyakcqgugqgkqiw; } $eqgoocgaqwqcimie = $kooyscwkscsogysg->keeuqgyooycqoygw($icwicymcioeyeyek); goto eeyyskqsmquyquqw; cgyakcqgugqgkqiw: $eqgoocgaqwqcimie = []; foreach ($icwicymcioeyeyek as $igqsaukqcqscimok) { $eqgoocgaqwqcimie[] = $kooyscwkscsogysg->keeuqgyooycqoygw($igqsaukqcqscimok); uegouoiuyoqkcscg: } mggeqkcksyaymcsa: eeyyskqsmquyquqw: ewscugeuicukkycc: goto wusciwkkckmqigms; kqswcsysqawkcgye: $eqgoocgaqwqcimie = $meywaqqsugaoeyys->iscemaoqqckmkago($cuaeskmgicgemmqs, $mksyucucyswaukig); $aiowsaccomcoikus->mkksewyosgeumwsa($this->cwiuiiakukcsaakw($meywaqqsugaoeyys->kumuygiiqswoyasy())); wusciwkkckmqigms: mwysseaekcsiesmm: goto gygwewcqsmwqismo; amgsueumgaguceaa: $eqgoocgaqwqcimie = in_array($eqgoocgaqwqcimie, ["\x31", Constants::ON], true); gygwewcqsmwqismo: $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\155\x61\156\141\147\145\x5f\145\x64\x69\x74\137\x66\151\x65\x6c\144\x5f\x76\x61\x6c\x75\145", $eqgoocgaqwqcimie, $aokagokqyuysuksm, $aiowsaccomcoikus, $mksyucucyswaukig); $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\155\x61\156\x61\147\x65\137\x65\x64\151\164\137\x66\x69\x65\154\144\137{$aokagokqyuysuksm}\x5f\166\x61\x6c\x75\145", $eqgoocgaqwqcimie, $aiowsaccomcoikus, $mksyucucyswaukig); gommacygsykyussk: if (!$this->errors) { goto ucqmumuygcywwqma; } $iswcokucwmiosiaq = $gkyciwoiiisgywcs->unset($this->errors, $aokagokqyuysuksm); if (!$iswcokucwmiosiaq) { goto ukqocwewouckikso; } $aiowsaccomcoikus->msqsseeaasqysese($iswcokucwmiosiaq); ukqocwewouckikso: ucqmumuygcywwqma: $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); goto uimeeckqksqeekqq; uykousayyomcaeaa: $aiowsaccomcoikus->wywmmeyauqkeskeq(false); uimeeckqksqeekqq: iuuuususuuuaieem: goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $okcscwesammossuq = $aiowsaccomcoikus->ugmceccgwaaaigiy(); foreach ($okcscwesammossuq as $uusmaiomayssaecw => $wcgsoqmmciswkmiq) { $okcscwesammossuq[$uusmaiomayssaecw] = $this->iowogwyuueusqsig($wcgsoqmmciswkmiq); mkwkkmkgiqiamacc: } sockeswygwcskeuq: $aiowsaccomcoikus->acakyumkgoeiskqq($okcscwesammossuq); uqokiksoqcwwqgio: return $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\x5f\155\141\156\141\x67\x65\137\x66\157\162\155\137\x66\151\145\154\144", $aiowsaccomcoikus, $this->imgymusqgccqsqqq()); } public function woqqsmayegamygec() : string { $nsmgceoqaqogqmuw = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto ieqesiiageaauiuw; } $myyqiummwqiokocc = __("\101\x64\x64", PR__CMN__FOUNDATION); if (!$this->oguuceugyqgsqewy()) { goto qukocuwgakemmyga; } $myyqiummwqiokocc = __("\125\160\144\141\x74\145", PR__CMN__FOUNDATION); qukocuwgakemmyga: $kqokimuosyuyyucg = 0; $cwoayyawiauoeokk = ''; $mksyucucyswaukig = $this->imgymusqgccqsqqq(); if (!is_object($mksyucucyswaukig)) { goto sioekkmekwygemyc; } $kqokimuosyuyyucg = $meywaqqsugaoeyys->keeuqgyooycqoygw($mksyucucyswaukig); sioekkmekwygemyc: if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($kqokimuosyuyyucg))) { goto yiowgigkkwsoqcci; } $cwoayyawiauoeokk = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm); yiowgigkkwsoqcci: $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x61\143\164\151\157\156\x73", ["\x64\x65\x6c\x65\164\151\x6f\x6e" => $cwoayyawiauoeokk, "\163\x75\x62\155\x69\x74\x5f\154\x61\142\x65\x6c" => $this->ocksiywmkyaqseou("{$ymqmyyeuycgmigyo}\x5f\163\143\x72\x65\x65\156\x5f\x73\165\142\155\151\x74\137\154\x61\x62\145\154", $myyqiummwqiokocc, $mksyucucyswaukig, $meywaqqsugaoeyys, $this->oguuceugyqgsqewy()), "\150\x6f\157\x6b\137\x70\162\x65\146\151\170" => $this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\137\163\x63\x72\145\145\x6e\x5f\x73\165\x62\x6d\x69\x74\137\x6d\145\x74\x61\137\142\x6f\170")]); ieqesiiageaauiuw: return $nsmgceoqaqogqmuw; } public function sagusgigmkeysock() { return $this->message; } }

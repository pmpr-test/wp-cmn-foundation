<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e295acabc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Page; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Container; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Checkbox; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\ORM\DB\Schema\Enum; use Pmpr\Common\Foundation\ORM\DB\Schema\Foreign; use Pmpr\Common\Foundation\Interfaces\Constants; class Edit extends ObjectAware { use ObjectTrait; const ymyqskcmicuoqeuo = "\x6f\162\155\x2d\146\x69\x65\x6c\144\163\x2d\163\164\157\x72\145"; const coyaigiwumwkscuc = "\157\x72\x6d\55\x66\x69\145\x6c\x64\163\55\x65\x72\x72\157\x72\x73"; protected $message = false; protected bool $editing = false; protected array $store = []; protected array $errors = []; public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $this->amsuqecgqokqqaue(); if (!$this->mwikyscisascoeea()) { goto ykcmomsiayaymysm; } $this->editing = true; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie("\145\x64\x69\164\137\x69\x74\x65\155", $this->mwikyscisascoeea())) { goto uugiuqkesegaamqw; } wp_die(__("\123\157\162\162\x79\54\x20\x79\x6f\x75\x20\x61\162\x65\40\x6e\157\164\x20\141\x6c\154\x6f\x77\145\144\40\x74\x6f\x20\145\x64\151\164\40\164\150\x69\163\x20\151\164\145\x6d\56", PR__CMN__FOUNDATION)); uugiuqkesegaamqw: ykcmomsiayaymysm: } public function oguuceugyqgsqewy() : ?bool { return $this->editing; } public function render() { parent::render(); if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto ikukqooiowqywyqo; } $qksucogmsqmawmwi = null; if ($this->oguuceugyqgsqewy()) { goto ceosmkqgqgwsowwg; } $meqocwsecsywiiqs = $this->mmqossqsksemasay("\141\x64\x64\137\156\145\167\137\x69\164\145\x6d"); goto kcwgiwimgqesukqu; ceosmkqgqgwsowwg: $meqocwsecsywiiqs = $this->mmqossqsksemasay("\x65\x64\151\164\137\151\x74\x65\155"); $qksucogmsqmawmwi = $meywaqqsugaoeyys->acsiseaeysswwqkw(); if (!($ucgcaisaegucqsym = $meywaqqsugaoeyys->oyeskqayoscwciem()->egeywisiumiokmcm())) { goto ggsugekocmsukuci; } foreach ($ucgcaisaegucqsym as $sqeykgyoooqysmca) { if ($sqeykgyoooqysmca === Constants::miceosguuseyyuqe) { goto cwmuqmoeauqcewoy; } $meywaqqsugaoeyys->iqieagiumucuwmyq(0, false, $sqeykgyoooqysmca, $this->mwikyscisascoeea()); goto eiecgqokmuekaesc; cwmuqmoeauqcewoy: $meywaqqsugaoeyys->iqieagiumucuwmyq($this->mwikyscisascoeea()); eiecgqokmuekaesc: uwyeycaywowwiquu: } qoaawmmcqyacokws: ggsugekocmsukuci: kcwgiwimgqesukqu: $ikgwqyuyckaewsow = $this->ywoasuyoaicwqqsu(); $qookweymeqawmcwo = [Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::NAME => $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::ckmqoekmugkggeym => $this->imgymusqgccqsqqq(), Constants::soquiwyuimckgiow => $this->yoqiwysegascakim(), Constants::eoskkkieowogacws => $this->sagusgigmkeysock(), Constants::myikkigscysoykgy => $this->woqqsmayegamygec(), "\x61\x64\x64\x5f\x75\162\x6c" => $qksucogmsqmawmwi, "\141\x64\144\137\165\162\x6c\x5f\x74\x69\x74\x6c\145" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\x61\x64\144\137\x6e\x65\x77\x5f\151\164\145\155")]; if (is_string($ikgwqyuyckaewsow)) { goto gqeoaceyoiicoaec; } if (!$ikgwqyuyckaewsow instanceof Page) { goto oksqsucimimsswcg; } $ikgwqyuyckaewsow = $meywaqqsugaoeyys->iewooiycygmskige($ikgwqyuyckaewsow); $eaoumsseceiowgsk = $ikgwqyuyckaewsow->gswweykyogmsyawy($meqocwsecsywiiqs)->render(false); $cmoicaakukmggosk = $this->oguuceugyqgsqewy() ? Constants::awysmmukegasimmq : Constants::ukwaycqmyyuekwqg; $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy($cmoicaakukmggosk); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto gcecieuocqawmgci; } echo $eaoumsseceiowgsk; goto msmmiaumiasmsiog; gcecieuocqawmgci: $qookweymeqawmcwo[Constants::ygeqsmugcaeeeuwu] = $eaoumsseceiowgsk; $qookweymeqawmcwo = $meywaqqsugaoeyys->skaogisismgmieqo($cmoicaakukmggosk, $qookweymeqawmcwo); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); msmmiaumiasmsiog: oksqsucimimsswcg: goto kkckyqmcyussauma; gqeoaceyoiicoaec: $qqscaoyqikuyeoaw = $meywaqqsugaoeyys->eskggqsasgsiommy(Constants::awysmmukegasimmq); if ($this->uuiwwqyikiwauwgq($qqscaoyqikuyeoaw)) { goto wicuauokauykwoeu; } $qqscaoyqikuyeoaw = Constants::awysmmukegasimmq; wicuauokauykwoeu: $qookweymeqawmcwo = $meywaqqsugaoeyys->skaogisismgmieqo(Constants::awysmmukegasimmq, $qookweymeqawmcwo); $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); kkckyqmcyussauma: ikukqooiowqywyqo: } public function amsuqecgqokqqaue() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $this->store = $eiicaiwgqkgsekce->aukgyiaewiccooqw(self::ymyqskcmicuoqeuo, [], true); $this->errors = $eiicaiwgqkgsekce->aukgyiaewiccooqw(self::coyaigiwumwkscuc, [], true); if (!isset($_POST["\157\x72\155\55\163\x61\166\145"])) { goto gqaqamewqeaqwcia; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ymwisceuuaiccayq("\x6f\x72\x6d\55\x6e\x6f\156\x63\x65"); if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) { goto gaskcgoeywuyukke; } $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $icwicymcioeyeyek = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(); $gkyciwoiiisgywcs->unset($icwicymcioeyeyek, "\157\x72\155\55\163\141\x76\x65"); $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy(); $icwicymcioeyeyek = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($meywaqqsugaoeyys->ugmceccgwaaaigiy(), $icwicymcioeyeyek)[1]; if (!($aokagokqyuysuksm = (int) $eiicaiwgqkgsekce->gkwaaeusmsaywikg($ceiwsaacewygcsqg))) { goto cciakcwuweqmcose; } $icwicymcioeyeyek[$ceiwsaacewygcsqg] = $aokagokqyuysuksm; cciakcwuweqmcose: $sogksuscggsicmac = $meywaqqsugaoeyys->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto gcqssckowmywoesw; } $kigowwqauiumummw = false; if ($aokagokqyuysuksm) { goto mieoguuqiwqioeqa; } $wamcomkuwysqgwgk = __("\45\163\40\143\157\x75\154\x64\x20\156\x6f\x74\x20\142\x65\40\x61\144\144\x65\x64\56", PR__CMN__FOUNDATION); goto qosswumywsaeyqus; mieoguuqiwqioeqa: $wamcomkuwysqgwgk = __("\45\163\40\143\x6f\x75\x6c\x64\x20\156\x6f\164\x20\142\x65\40\165\160\144\141\164\145\x64\x2e", PR__CMN__FOUNDATION); qosswumywsaeyqus: $this->yiggueaiwiygoiyi(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\x6f\x72\155\x2d\156\157\164\x69\x63\145"); $eiicaiwgqkgsekce->ycasmmgsmaaumweg(self::ymyqskcmicuoqeuo, $yyauwyaeewsickwk->wegeuqkaeuusoike(array_filter($icwicymcioeyeyek))); if (!($ueeagokqmgisgauy = $gkyciwoiiisgywcs->get($sogksuscggsicmac, Constants::iwyueouqaqegmcas, []))) { goto kocaieyauyiqmyiy; } foreach ($ueeagokqmgisgauy as $aiowsaccomcoikus => $iswcokucwmiosiaq) { if (!(is_numeric($aiowsaccomcoikus) || !$meywaqqsugaoeyys->uqeoyqiwywwmsiew($aiowsaccomcoikus))) { goto icoiqskygugkgmkm; } $this->yiggueaiwiygoiyi($iswcokucwmiosiaq, "\157\x72\155\55\156\157\164\x69\143\x65"); unset($ueeagokqmgisgauy[$aiowsaccomcoikus]); icoiqskygugkgmkm: maguoggkqamaiuag: } swicauyqusmgeccu: $eiicaiwgqkgsekce->ycasmmgsmaaumweg(self::coyaigiwumwkscuc, $yyauwyaeewsickwk->wegeuqkaeuusoike($ueeagokqmgisgauy)); kocaieyauyiqmyiy: goto eekkcooqswqouoei; gcqssckowmywoesw: $kigowwqauiumummw = true; if ($aokagokqyuysuksm) { goto uckusgwkoycmkeam; } $wamcomkuwysqgwgk = __("\x25\163\40\x61\144\144\x65\144\40\x73\x75\143\x63\x65\x73\x73\146\x75\x6c\x6c\x79\x2e", PR__CMN__FOUNDATION); goto gscyiqmmegqmqcoe; uckusgwkoycmkeam: $wamcomkuwysqgwgk = __("\45\x73\x20\x75\160\144\141\x74\145\144\40\163\165\143\143\x65\163\x73\146\x75\154\154\171\x2e", PR__CMN__FOUNDATION); gscyiqmmegqmqcoe: $meywaqqsugaoeyys->yiggueaiwiygoiyi(sprintf($wamcomkuwysqgwgk, $this->oyeskqayoscwciem()->giiayuqckuiecosm()), "\157\162\x6d\55\x6e\x6f\164\x69\x63\x65", Constants::ckcawaoawwioqecq); eekkcooqswqouoei: if ($kigowwqauiumummw) { goto iomwkkieqcswkkaw; } if ($aokagokqyuysuksm) { goto cuayqmasemsqsume; } $igscmsiuisqaqwkk = $meywaqqsugaoeyys->acsiseaeysswwqkw(); goto igmawmwssyskqqag; cuayqmasemsqsume: $igscmsiuisqaqwkk = $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm); igmawmwssyskqqag: goto eussqkkimciywios; iomwkkieqcswkkaw: $igscmsiuisqaqwkk = $meywaqqsugaoeyys->comogmawyoiquwis(); eussqkkimciywios: if ($igscmsiuisqaqwkk) { goto ewsigoeswimiueqe; } $igscmsiuisqaqwkk = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewcokmoyomeywmkg(); ewsigoeswimiueqe: $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($igscmsiuisqaqwkk); exit; gaskcgoeywuyukke: wp_die(__("\123\x6f\x72\162\171\x2c\40\x79\157\165\40\x61\162\145\x20\x6e\x6f\164\40\141\x6c\154\157\167\x65\x64\40\164\x6f\40\145\x64\x69\x74\x20\x69\x74\145\155\x73\x20\x6f\x66\40\x74\150\x69\163\40\x74\171\160\145\x2e", PR__CMN__FOUNDATION)); gqaqamewqeaqwcia: } public function ywoasuyoaicwqqsu() { $nsmgceoqaqogqmuw = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto ccgsycueagwegqeu; } $ikgwqyuyckaewsow = $meywaqqsugaoeyys->ugmceccgwaaaigiy(); $mksyucucyswaukig = $this->imgymusqgccqsqqq(); foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$momcykaoccoymeig] = $this->iowogwyuueusqsig($aiowsaccomcoikus); ksiwgckusukisueg: } okuqsqaiwwiigmyu: if (!$ikgwqyuyckaewsow) { goto qmqmskywcgiqgygm; } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); if (!($iuekmkswcsacoawq = Page::symcgieuakksimmu($meywaqqsugaoeyys->cokoiaeeomgssqgy()))) { goto cmsiuimsiycomyay; } $iuekmkswcsacoawq->ewweaossowcqywaw($ikgwqyuyckaewsow); $iuekmkswcsacoawq->mkksewyosgeumwsa($uuyucgkyusckoaeq->cwiuiiakukcsaakw(Constants::icwieiwoqeocywss)->mawcogsqogkauasq("\x6f\x72\155\x2d\x6e\x6f\156\143\x65", $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->keguiwkaiweywekc())); $myyqiummwqiokocc = __("\x41\144\144", PR__CMN__FOUNDATION); if (!$this->oguuceugyqgsqewy()) { goto sgkqgucguyccaaki; } $myyqiummwqiokocc = __("\125\160\x64\141\x74\145", PR__CMN__FOUNDATION); sgkqgucguyccaaki: $iuekmkswcsacoawq->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\x6f\x72\x6d\55\163\141\166\145")->gswweykyogmsyawy($myyqiummwqiokocc)->ooqqgmyocscgmyae()->gmscmskmuissgywk()); if (!$this->oguuceugyqgsqewy()) { goto geyiosucqswaeasw; } $iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($meywaqqsugaoeyys->keeuqgyooycqoygw($mksyucucyswaukig)); if (!$iwywmkygwewiamwm) { goto omuemegmkesqgwys; } $iuekmkswcsacoawq->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs("\157\x72\x6d\x2d\144\x65\x6c\145\x74\145")->muywawimuacwmkgw()->gswweykyogmsyawy(__("\104\x65\154\145\164\145", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\163\x75\142\x6d\151\164\x64\145\154\x65\164\x65\x20\x70\x72\x2d\x63\157\x6e\146\151\162\x6d\x61\142\154\145\x2d\x61\x63\164\151\157\156")->eskgwaywimqcwcyy("\x63\x6f\156\146\151\x67", $meywaqqsugaoeyys->ymaommgoigkakyes($iwywmkygwewiamwm))); omuemegmkesqgwys: geyiosucqswaeasw: $nsmgceoqaqogqmuw = $iuekmkswcsacoawq; cmsiuimsiycomyay: qmqmskywcgiqgygm: ccgsycueagwegqeu: return $nsmgceoqaqogqmuw; } public function iowogwyuueusqsig($aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Container) { goto oaqeoqsksuyyggmg; } if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto kiskwawumeiiieuk; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if ($this->oguuceugyqgsqewy()) { goto qmguoqeawegcoeoa; } $wkkcmkuiigsukyik = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\x5f\155\141\x6e\141\147\x65\x5f\x61\144\144\137\146\151\145\x6c\144\137\x73\150\x6f\x77", true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus); goto ycecaauekkiqacuu; qmguoqeawegcoeoa: $wkkcmkuiigsukyik = $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\137\x6d\141\x6e\141\147\x65\137\x65\x64\x69\164\137\146\151\x65\154\144\137\x73\x68\157\x77", true, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus, $this->imgymusqgccqsqqq()); ycecaauekkiqacuu: if (!$wkkcmkuiigsukyik) { goto asoecuscmsyusmkg; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($this->oguuceugyqgsqewy()) { goto uoewiggumomegksg; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($this->store, $aiowsaccomcoikus->mwikyscisascoeea()); goto sockocsycmkaeosg; uoewiggumomegksg: $cuaeskmgicgemmqs = $aiowsaccomcoikus->imkyoqyocosuqasu(Constants::cecmeqwgqawkeieq, $aokagokqyuysuksm); $mksyucucyswaukig = $this->imgymusqgccqsqqq(); $aaqqkgyougeiueyq = $meywaqqsugaoeyys->uqeoyqiwywwmsiew($cuaeskmgicgemmqs); $eqgoocgaqwqcimie = $meywaqqsugaoeyys->qogaqkcsogcqiaic($mksyucucyswaukig, $cuaeskmgicgemmqs); if (!($ekiuyucoiagmscgy = $aiowsaccomcoikus->ekkwaykokcgqkmoi(Constants::cecmeqwgqawkeieq))) { goto ceaamccscgcmqgka; } $eqgoocgaqwqcimie = $ekiuyucoiagmscgy($eqgoocgaqwqcimie); ceaamccscgcmqgka: if ($aiowsaccomcoikus instanceof Checkbox) { goto yqqseqskcqeqkacm; } if ($aaqqkgyougeiueyq instanceof Foreign) { goto oqgymyiwckkwueuw; } if (!$aaqqkgyougeiueyq instanceof Enum) { goto wqwmuuicoqigqwyc; } $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->qksikkwyuwmciusw($eqgoocgaqwqcimie); wqwmuuicoqigqwyc: goto qywkykqkeeuccoui; oqgymyiwckkwueuw: if ($aiowsaccomcoikus instanceof Collection) { goto qiikwossequwiuom; } $kooyscwkscsogysg = $aaqqkgyougeiueyq->ggmimykuacwcogaq(); if (!$kooyscwkscsogysg) { goto ymucaguacemwsgsi; } $icwicymcioeyeyek = $meywaqqsugaoeyys->iscemaoqqckmkago($cuaeskmgicgemmqs, $mksyucucyswaukig); if ($aaqqkgyougeiueyq->ygswmewosceowmya() || $aaqqkgyougeiueyq->gumeeckcowwoyoci()) { goto wiaymoucakyaikii; } $eqgoocgaqwqcimie = $kooyscwkscsogysg->keeuqgyooycqoygw($icwicymcioeyeyek); goto ociesuicgmkekcue; wiaymoucakyaikii: $eqgoocgaqwqcimie = []; foreach ($icwicymcioeyeyek as $igqsaukqcqscimok) { $eqgoocgaqwqcimie[] = $kooyscwkscsogysg->keeuqgyooycqoygw($igqsaukqcqscimok); igyesgemqesackws: } omumkeywqqogwwue: ociesuicgmkekcue: ymucaguacemwsgsi: goto gaouaiemokqqgssw; qiikwossequwiuom: $eqgoocgaqwqcimie = $meywaqqsugaoeyys->iscemaoqqckmkago($cuaeskmgicgemmqs, $mksyucucyswaukig); $aiowsaccomcoikus->mkksewyosgeumwsa($this->cwiuiiakukcsaakw($meywaqqsugaoeyys->kumuygiiqswoyasy())); gaouaiemokqqgssw: qywkykqkeeuccoui: goto ywokggauuiosegog; yqqseqskcqeqkacm: $eqgoocgaqwqcimie = in_array($eqgoocgaqwqcimie, ["\61", Constants::ON], true); ywokggauuiosegog: $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\x6d\x61\156\141\x67\145\137\x65\144\151\x74\x5f\x66\x69\145\x6c\144\x5f\166\141\154\165\x65", $eqgoocgaqwqcimie, $aokagokqyuysuksm, $aiowsaccomcoikus, $mksyucucyswaukig); $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\x6d\141\x6e\x61\x67\145\137\x65\x64\x69\x74\x5f\x66\x69\145\154\x64\137{$aokagokqyuysuksm}\137\x76\x61\x6c\x75\x65", $eqgoocgaqwqcimie, $aiowsaccomcoikus, $mksyucucyswaukig); sockocsycmkaeosg: if (!$this->errors) { goto syisomgawcsqeemk; } $iswcokucwmiosiaq = $gkyciwoiiisgywcs->unset($this->errors, $aokagokqyuysuksm); if (!$iswcokucwmiosiaq) { goto ugkwqaywmwqucoeo; } $aiowsaccomcoikus->msqsseeaasqysese($iswcokucwmiosiaq); ugkwqaywmwqucoeo: syisomgawcsqeemk: $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); goto kwasqmcyiswoaiuu; asoecuscmsyusmkg: $aiowsaccomcoikus->wywmmeyauqkeskeq(false); kwasqmcyiswoaiuu: kiskwawumeiiieuk: goto kkmuuoscccmokkiw; oaqeoqsksuyyggmg: $okcscwesammossuq = $aiowsaccomcoikus->ugmceccgwaaaigiy(); foreach ($okcscwesammossuq as $uusmaiomayssaecw => $wcgsoqmmciswkmiq) { $okcscwesammossuq[$uusmaiomayssaecw] = $this->iowogwyuueusqsig($wcgsoqmmciswkmiq); sayqggaieocmskko: } gmeiuoeewucukque: $aiowsaccomcoikus->acakyumkgoeiskqq($okcscwesammossuq); kkmuuoscccmokkiw: return $this->ocksiywmkyaqseou("{$this->aakmagwggmkoiiyu()}\x5f\x6d\141\156\141\x67\145\137\146\x6f\162\x6d\137\146\151\145\x6c\144", $aiowsaccomcoikus, $this->imgymusqgccqsqqq()); } public function woqqsmayegamygec() : string { $nsmgceoqaqogqmuw = ''; if (!($meywaqqsugaoeyys = $this->mgogaykgkoogasim())) { goto mcqwuawosciucemq; } $myyqiummwqiokocc = __("\101\144\144", PR__CMN__FOUNDATION); if (!$this->oguuceugyqgsqewy()) { goto awuwuuuagqysukku; } $myyqiummwqiokocc = __("\125\x70\x64\141\x74\145", PR__CMN__FOUNDATION); awuwuuuagqysukku: $kqokimuosyuyyucg = 0; $cwoayyawiauoeokk = ''; $mksyucucyswaukig = $this->imgymusqgccqsqqq(); if (!is_object($mksyucucyswaukig)) { goto miugmimciywcgswm; } $kqokimuosyuyyucg = $meywaqqsugaoeyys->keeuqgyooycqoygw($mksyucucyswaukig); miugmimciywcgswm: if (!($iwywmkygwewiamwm = $meywaqqsugaoeyys->cgccmsewskigcuig($kqokimuosyuyyucg))) { goto aqekkeqmmewoyawu; } $cwoayyawiauoeokk = $meywaqqsugaoeyys->rkmkouiquumiecqy($iwywmkygwewiamwm); aqekkeqmmewoyawu: $ymqmyyeuycgmigyo = $this->oyeskqayoscwciem()->aakmagwggmkoiiyu(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\141\x63\164\151\x6f\156\163", ["\x64\x65\154\145\x74\x69\157\x6e" => $cwoayyawiauoeokk, "\163\x75\x62\155\151\x74\x5f\x6c\141\x62\145\154" => $this->ocksiywmkyaqseou("{$ymqmyyeuycgmigyo}\x5f\x73\x63\162\x65\x65\156\137\x73\165\142\x6d\x69\164\x5f\154\x61\x62\x65\154", $myyqiummwqiokocc, $mksyucucyswaukig, $meywaqqsugaoeyys, $this->oguuceugyqgsqewy()), "\150\x6f\x6f\x6b\137\160\162\145\x66\151\170" => $this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x73\143\162\x65\x65\156\x5f\x73\165\142\x6d\151\x74\x5f\x6d\x65\164\x61\x5f\142\x6f\170")]); mcqwuawosciucemq: return $nsmgceoqaqogqmuw; } public function sagusgigmkeysock() { return $this->message; } }
